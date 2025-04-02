# [web-readme](https://github.com/lafefspietz/web-readme/)

A web-based README editor with $\LaTeX$ converted to HTML with mathjax.js Markdown conveted to HTML with showdown.js.  Code is formatted in the browser with the Ace.js editor.  A pair of PHP scripts save(save.php) and load(save.php) files. All operation is from the client side.

The JavaScript object [XMLHttpRequest](https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest) is used to pass information to and from the local file system.

To run this, install the [xampp](https://www.apachefriends.org/) local web server, and then make the project directory for the repository you are working on into a sub directory of the main web directory.

## Files

 - [index.html](index.html)
 - [save.php](save.php)
 - [load.php](load.php)
 - [README.md](README.md)
 - [edit-index.html](edit-index.html)

## JavaScript Libraries

 - [showdown.js](https://showdownjs.com/)
 - [ace.js](https://ace.c9.io/)
 - [mathjax.js](https://www.mathjax.org/)
