# Lab webiste

## For small changes:
1. ### Setup
	<img src="/img/docs/create_fork.png"/> Make a fork of this repository
		
	<img src="/img/docs/sync_fork.png"/> if you already have your own fork, press "sync fork" and discard any changes

	Go to https://github.com/YOUR_USER_NAME/lab_website/

 	Website content is found in the `_posts` folder.

	Either click one of the existing posts and press <img src="/img/docs/edit.png"/>
	to edit its content or press <img src="/img/docs/add_file.png"/> to make a new one.

3. ### Editing markdown (Pencil icon)
	
	This is where you will add the content of the site. 

	At the top of the post, you should see a section marked with `---` such as this:
	```
	---
	title:  "Deformation Modeling"
	categories:
	    - research
	description: "Deformation Modeling"
	published: true
	image: img/posts/image46.png
	tags: medical_robotics
	---
 	```
 	These are very important. `image` is the path to the thumbnail image that will show up in the gallery.
    A good thumbnail image is at least 300x300 pixels, has no text and is square.
	Make sure to set the title. This will appear at the top of the page.

	Adding `tags` for posts is necessary for them to show up when sorted. You can add multiple tags to each post.
    Tags are what will help sort your project in the 'Research' section.
	The current possible tags are:

	- confined_space_robotics
 	- full_stack_autonomy
  	- locomoting_systems
    - medical_robotics
    - modular_robotics
    - multi-agent_planning
    - multi_agent_reinforcement_learning
    - recycling_robotics
    - simultaneous_localization_and_mapping
    - skill_learning
    - space_robotics
  
    If you have an idea for a new tag, remember that it really should cover multiple projects.

	The `category` will decide what page your post will appear under. Robots, Applications, and Research.
	There is almost no situation in which you would want your post to appear in multiple categories.

	Set `published: true` if you are ready for the post to show up on the site.

	Images can be uploaded separetely using the using the 'Add File' dropdown and should be saved in the `/img/posts` directory.
	Please give these images good names and make sure to add alt-text. We perefer jpegs where possible since they take up less space.
	Take a look at the [example post](http://biorobotics.org/example_post) which shows what can be done, including embedding videos and linking to other posts.

5. ### Preview
    You can switch between editing and previewing using this toggle <img src="img/docs/edit_preview.png"/>

    Make sure to preview your work before publishing it.
    Videos and other embeds will not show up but it will give you an idea of whether the formatting is correct.
    Columns don't show up in the preview either.
    Images that are from this repository should show up and give you a relative sense of their size on the page and whether you made the link right.

7. ### Commit changes
    <img src="/img/docs/commit_changes.png"/>
    This is where you will save the file. Make sure to edit your commit message to be very clear.

9. ### Open a pull request from your branch.
    Your changes so far have only been done on YOUR repository.
    You need to open a pull request so that the changes you made can be passed to the main lab repository and the website can be updated.

	Once you are done editing or adding files, press this button <img src="/img/docs/contribute.png"/> to open a pull request. 


## If you are making large changes:

1. Make a fork of this repository
2. Make a new branch with a descriptive name
3. Follow [these steps](https://docs.github.com/en/pages/setting-up-a-github-pages-site-with-jekyll/testing-your-github-pages-site-locally-with-jekyll) to preview your changes live
4. Make the changes you need using GIT
5. Push changes to your repository's new branch
6. Make a pull request with your changes to the gh-pages branch


## Adding publications to the website

If you are here to add your publications to the website, please use [this link](https://biorobotics.ri.cmu.edu/papers/PHP/index.php). You might have to reach out to one of the site admins for login credentials of this page. 

