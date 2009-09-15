<?php
/*
Plugin Name: jQuery Font Resizer
Plugin URI: http://devolux.org/fontResizer
Description: This is a jQuery supported font resizer plugin.
Author: Devolux
Version: 1.0
Author URI: http://devolux.org/
*/

function jQuery_files() {
echo "<script type=\"text/javascript\" src=\"".get_bloginfo ('url')."/wp-content/plugins/fontResizer/jquery.js\"></script> \n";
echo "<script type=\"text/javascript\" src=\"".get_bloginfo ('url')."/wp-content/plugins/fontResizer/cookies.js\"></script> \n";
echo "<script type=\"text/javascript\" src=\"".get_bloginfo ('url')."/wp-content/plugins/fontResizer/fontResizer.js\"></script> \n";
}

function resize_links() {
echo "<p id=\"font-resize\"><a id=\"default\" href=\"#\">A </a><a id=\"larger\" href=\"#\">A+ </a><a id=\"largest\" href=\"#\">A++</a></p>";
}

add_action('wp_head', 'jQuery_files');
?>
