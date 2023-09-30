---
published: true
title: "Example Post"
categories:
  - example
image: img/posts/default.png
tags:
    - confined_space_robotics
    - simultaneous_localization_and_mapping
permalink: "example_post"
---

## Table of contents
{% assign toc = "
                 Make multiple columns,
                 Add a youtube video, 
                 Add a vimeo video,
                 Add a Google drive video,
                 Link to a part of a page,
                 Link to a post,
                 Other useful links" | split: "," %}
{% for label in toc %}
  * [{{label}}]({{page.url | relative_url}}#{{ label | slugify }})
{% endfor %}

### Make multiple columns

The normal setup is out of 12 columns, so 3 would be a quarter of the page width

``` html
{% raw %}
<div class="columns">
  <div class="column is-3">
   <img src="img/posts/default.png"/>
  </div>
  <div class="column is-3">
   <img src="img/posts/default.png"/>
  </div>
</div>
{% endraw %}
```

<div class="columns">
  <div class="column is-3">
   <img src="img/posts/default.png"/>
  </div>
  <div class="column is-3">
   <img src="img/posts/default.png"/>
  </div>
</div>

### Add a youtube video

``` liquid
{% raw %}
{% include youtube.html video="VTlV0Y5yAww" text="HELLO" %}
{% endraw %}
```
<div class="column is-6">
{% include youtube.html video="VTlV0Y5yAww" %}
</div>

### Add a vimeo video

``` liquid
{% raw %}
{% include vimeo.html video="31158841" text="HELLO" %}
{% endraw %}
```
<div class="column is-6">
{% include vimeo.html video="31158841" text="HELLO" %}
</div>

### Add a Google drive video

Try to avoid doing this because of permission problems and ugly thumbnails

``` liquid
{% raw %}
{% include google-drive.html video="0B2LF_3WEQeImX0oxalpjTnBVTEE/preview?resourceKey=0-CgPlZ4jTVf1vthLvboofTA" %}
{% endraw %}
```

<div class="column is-6">
{% include google-drive.html video="0B2LF_3WEQeImX0oxalpjTnBVTEE/preview?resourceKey=0-CgPlZ4jTVf1vthLvboofTA" %}
</div>

### Make a table

``` liquid
| Table | Column 1 | Column 2 |
| :---  |  :----:  |     ---: |
| Here  | is a     | table    |
| with  | aligned  | columns  |
```

| Table | Column 1 | Column 2 |
| :---  |  :----:  |     ---: |
| Here  | is a     | table    |
| with  | aligned  | columns  |

### Link to a part of a page

``` liquid
{% raw %}
#### Test link
[Jump to test link]({{page.url | relative_url}}#test-link)
{% endraw %}
```
> #### Test link
> [Jump to test link]({{page.url | relative_url}}#test-link)

### Link to another post

``` liquid
{% raw %}
[One way]({% link _posts/0325-05-23-example_post.md %})
[Another way]({% post_url 0325-05-23-example_post %})
{% endraw %}
```
* [One way]({% link _posts/0325-05-23-example_post.md %})
* [Another way]({% post_url 0325-05-23-example_post %})

### Other useful links

* [The source for this page](https://github.com/biorobotics/lab_website/tree/gh-pages/_posts/0325-05-23-example_post.md)
* [Jekyll includes](https://jekyllrb.com/docs/includes/)
* [Jekyll variables](https://jekyllrb.com/docs/variables/)
* [Jekyll liquid filters](https://jekyllrb.com/docs/liquid/filters/)
* [Liquid loops](https://shopify.github.io/liquid/tags/iteration/)
* [Markdown extended syntax](https://www.markdownguide.org/extended-syntax/)


