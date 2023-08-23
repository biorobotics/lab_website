# Lab webiste

## First steps

1. Make a fork of this repository
2. Make a new branch with a descriptive name

## If you are making large changes:

1. Make a fork of this repository
2. Make a new branch with a descriptive name
3. Follow these steps to preview your changes live https://docs.github.com/en/pages/setting-up-a-github-pages-site-with-jekyll/testing-your-github-pages-site-locally-with-jekyll
4. Make the changes you need using GIT
5. Push changes to your repository's new branch
6. Make a pull request with your changes to the gh-pages branch

## Steps for beginners:

Go to https://prose.io/#YOUR_USER_NAME/lab_website/tree/YOUR_BRANCH_NAME

On the top right there should be a drop down that lets you switch to the branch you made

Either click one of the existing posts or press "New File" to make a new one

On the right hand side are several buttons. The topmost lets you edit markdown, the second gives a simple preview, the third one shows you metadata, the fourth lets you see your filepath, and the last one lets you commit your changes

1. ### Editing markdown (Pencil icon)
	This is where you will add the content of your site.

	Make sure to set the title. This will appear at the top of the page.

	If you need to embed a youtube video, do the following

	`<figure class="image is-16by9"><iframe class="has-ratio" src="https://www.youtube.com/embed/YOUTUBE_VIDEO_ID" frameborder="0" allowfullscreen></iframe></figure>`

	making sure to replace YOUTUBE_VIDEO_ID with the 11 character video ID. It will not show up in the preview but it will show up on the site

	Images can be uploaded and will be saved in the /img/posts directory. Please give these images good names and make sure to add alt-text. We perefer jpegs where possible since they take up less space

3. ### Set metadata (Square made of horizontal lines icon)
   
 	Required categories are marked (REQUIRED)

 	The image is in the format `img/posts/nuclear.gif` and must be one of the ones you uploaded during editing. If you want to use an image that isn't in the content of your post, add it anyway. You can delete the image from the markdown later if you so wish. We prefer these images to be animated GIF's under 1mb if possible.

	The category will decide what page your post will appear under. Robots, Applications, and Research. There is almost no situation in which you would want your post to appear in multiple categories.

	Adding tags for posts is necessary for them to show up when sorted. You can add multiple tags to each post.

under "Raw Metadata" you can add 'published: true' if you are ready to publish.

5. ### Preview (Eye icon)
   Make sure to preview your work before publishing it

6. ### Publish (Floppy disk icon)
   This is where you will save the file. Make sure to edit your commit message to be very clear.

7. Open a pull request from your branch.
