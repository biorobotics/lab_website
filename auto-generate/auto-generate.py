import xml
import argparse
import glob
import os
import shutil

def clean_url(original):
    return ''.join(filter(str.isalpha, original))

def replace_template(text, key, replacement):
    idx = text.find(key)
    assert idx > 0, f"Could not find key {key}"
    retval = text[:idx].strip()
    retval += replacement
    retval += text[idx + len(key):].strip()
    return retval

def fix_title(text):
    retval = "<h3 " + text
    retval = replace_template(retval, '<span ', "<b><span ")
    retval = replace_template(retval, '</h2>', "</h3>")
    retval = replace_template(retval, ':', "</b> - ")
    return retval
    
def find_images(text):
    idx = 0
    image_idx = []
    while True:
        found_idx = text[idx:].find('src="images/')
        if found_idx < 0 or idx >= len(text):
            break
        idx += found_idx + len('src="images/')
        first_idx = idx
        idx += text[idx:].find('"')
        image_idx.append((first_idx,idx))
    return [text[a:b] for a,b in image_idx]

def make_image_square(img):
    height, width, _ = img.shape
    min_dim = min(height, width)



if __name__ == "__main__":

    import argparse
    
    # Initialize parser
    parser = argparse.ArgumentParser()
    
    # Adding optional argument
    parser.add_argument("-r", "--research", default="Biorobotics Lab Active Project 2022", help = "Path to downloaded research google doc (as HTML)")
    
    # Read arguments from command line
    args = parser.parse_args()

    folder = args.research

    with open("research_index_template.php", 'r') as f:
        template = f.read()
    files = glob.glob(os.path.join(folder, "*.html"))
    with open(files[0], 'r') as f:
        source = f.read()

    try:
        os.mkdir( "generated" )
    except FileExistsError:
        shutil.rmtree("generated", ignore_errors=False, onerror=None)
        os.mkdir( "generated" )
    os.chdir("generated")
    folder = os.path.join("..", folder)

    articles = source.split("<h2 ")[1:]

    categories = []
    titles = []
    urls = []
    thumb_urls = []

    os.mkdir( "images" )

    for article in articles:

        whole_title = article[article.find("span"):]
        whole_title = whole_title[whole_title.find(">") + 1:whole_title.find("</span>")]
        whole_title = whole_title.strip()
        if not whole_title:
            continue
        split = whole_title.find(":")
        category = whole_title[:split].strip()
        title = whole_title[split+1:].strip()
        if not title:
            print(f"No title: {whole_title}, {article[article.find('span'):]}")
            quit()

        article = fix_title(article)

        images = find_images(article)

        os.mkdir( os.path.join("images",clean_url(title)) )


        # Find first image for thumbnail
        if not images:
            print(title, "NO IMAGE")
            continue
        thumb_url = os.path.join(folder, "images", images[0])
        new_thumb_url = clean_url(title) + "." + thumb_url.split('.')[-1]
        print("====================")
        print(title)
        print(whole_title)
        print(thumb_url)
        print(new_thumb_url)

        shutil.copy(thumb_url, f"images/{new_thumb_url}")

        thumb_urls.append(new_thumb_url)


        titles.append(title)
        url = clean_url(title) + ".php"
        urls.append(url)
        categories.append(category)
        

        with open("../research_article_template.php", 'r') as f:
            article_content = f.read()

        article_header = f'''
	<title>{title} - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, {category}">
	<meta name="description" content ="{title} - Carnegie Mellon Biorobotics" />'''

        article_content = replace_template(article_content, "[TEMPLATE_CONTENT]", article)
        article_content = replace_template(article_content, "[TEMPLATE_HEADER]", article_header)
        
        for image in images:
            print(image, "+++++++++++++++++++")
            shutil.copy(os.path.join(folder, 'images', image), f"images/{clean_url(title)}/{image}")
            article_content = replace_template(article_content, image, f"{clean_url(title)}/{image}")

        with open(url, 'w') as f:
            f.write(article_content)

    category_index =  dict(zip(categories, range(len(categories)))).keys()
    
    category_html = ""
    for category in category_index:
        category_ = clean_url(category)
        category_html += f'''
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="{category_}") echo " class=\\"active\\""; ?>
            href="?sort={category_}"><h4>{category}</h4></li></a>'''

    grid_html = ""
    for title, url, image_url, category in zip(titles, urls, thumb_urls, categories):
        category_ = clean_url(category)
        grid_html += f'''
            <li class = "{category_}">
				<a href="{url}">
					<img src="images/{image_url}" alt="{title}"/>
					<div><span>{title}</span></div>
				</a>
			</li>'''
    
    index_page = replace_template(template, "[TEMPLATE_CATEGORIES]", category_html)
    index_page = replace_template(index_page, "[TEMPLATE_GRID]", grid_html)
            
    index_page += template[template.find("[TEMPLATE_GRID]") + len("[TEMPLATE_GRID]"):]
    with open("index.php", 'w') as f:
        f.write(index_page)
