# JustBlog.md
Nothing but blog inspired by [Telegra.ph](https://telegra.ph).
Intended for hackers who notes in markdown. 💻

Check my personal [blog](https://blog.rensite.ru) for [demo](https://blog.rensite.ru). 👀

# How to install?
Follow 3 easy steps! 

### 1. Clone || Download
`git clone https://github.com/gafuri/justblog.git .` in `/var/www/html/` (or any webserver root) or [download here](https://github.com/gafuri/justblog/archive/master.zip) the archive and extract into you webserver root.


### 2. Configure
Config file is here `./include/Config.php`, edit it according comments inside.
Replace favicon `./assets/img/meta/favicon.png`
Replace cover `./assets/img/static/bg.jpg`


### 3. Write
Create a new markdown file in ```/articles/``` folder, like `hacker.md`.
Put any of your files (i.e. images) to ```/assets/``` folder.

Example:
```
title: My first hacker note!
desc: Here is the description of the article, where you can write some informations.
author: RenSite
cover: assets/img/articles/hacker_cover.png //(Optional) It can be either a file or an url.
tags: justblog, hacknotes //(Optional)
---
_Here is the content of _your article_
```

**You are finished! 😉**


# ✊ Contribute
I created this for personal use.
Feel free to contribute (fork and pull request).


# 🏳️ Translation
Currently English, Russian and French are availabe.
You can translate blog into your language by simply editing `./includes/Languages.php`. Please send me pull request after ;)


# ⚙️ ToDo
- [x] Demo
- [ ] css -> scss
- [ ] Images uploader
- [ ] Git Publishing
- [ ] Built in editor
- [ ] Search
- [ ] Tags

# ❓FAQ

### Yet another markdown blog engine?
Yeap, I was looking for a perfect not overcomplicated blog engine that just works out of a box and I did it!
Thare is better solution? Then show me and I will use it! ;)

### What is the difference from others?
Upload to any PHP hosting and start your blog!
There are no admin panels, no databases, no settings. There are you, your thoughts and markdown editor ;)

# 📄 References
[parsedown.org](http://parsedown.org) - PHP lib for markdown to html conversion.
