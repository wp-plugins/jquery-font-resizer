=== jQuery Font Resizer ===
Contributors: Devolux
Donate link: http://devolux.org/
Tags: font resizing, jQuery
Requires at least: 2.0.2
Tested up to: 2.7
Stable tag: 1.0

The plugin is a jQuery supported font resizer script that offers three links to change the font-size of your WordPress weblog.

== Description ==

The plugin offers three links to change the font-size of your blog. They can be inserted anywhere on your website by including a simple php-function (s. "Installation"). These links change the font-size value of the most outward html element of the page: the body element. All values of the elements inside the html body must therefore have relative font-size values. Only text that you want not to change its font-size at all must have an absolute value. 
Here is an example for better understanding: The default font-size-value of the body element must be set to "10px" (s. "Installation"). By clicking the "A+"-link this value will be set to "11px". All elements with RELATIVE font-size values (like "p {font-size: 100%;}") will then be automatically adjusted to the new top-level font-size. In this case the font-size of a "p"-element will switch from 10px (100% of 10px = 10px) to 11px (100% of 11px = 11px). Font-size values of other elements will change likewise (a value of 120% will result in a new font-size of 13.2px).
IMPORTANT: Relative font-size values are calculated from the DIRECT parent element. This means: An element B which has a 100% font-size and which lays inside an element A that has a 120% font-size will have the font-size values of the element A (12px/13.2px), not the values calculated in proportion to the body element (10px/11px).

== Installation ==

1. Upload the plugin to the "/wp-content/plugins/" directory.

2. Activate the plugin through the "Plugins" menu in WordPress.

3. Place "<?php resize_links(); ?>" in one of your templates to provide the resizing links on your website.

4. Go to your style.css file and assign a font-size of 10px to the body element of your website: "body {font-size: 10px;}".

5. This is the most IMPORTANT step: All other font-size values in your stylesheets must be RELATIVE values (like "p {font-size: 100%;}"). Only elements with text that you want not to change its font-size at all must have an absolute value.

== Frequently Asked Questions ==

Not yet available.

== Changelog == 

Version 1.0

== Screenshots ==

[fontResizer screenshots](http://devolux.org/fontResizer "fontResizer Screenshots")

== A brief Markdown Example ==

<p id="font-resize">
<a id="default" href="#">A </a><a id="larger" href="#">A+ </a><a id="largest" href="#">A++</a>
</p>

