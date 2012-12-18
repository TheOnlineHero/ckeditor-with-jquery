<?php
/*
Plugin Name: CKEditor With JQuery
Plugin URI: http://wordpress.org/extend/plugins/ckeditor-with-jquery/
Description: CKeditor With JQuery is a plugin that allows you to add ckeditor to your plugin with ease. It even has the JQuery adapter so you can apply the ckeditor to a textarea using JQuery. It is currently using Ckeditor version 3.6.5.

Don't worry about the "headers already sent" message, the plugin is fine. 

To include ckeditor within your plugin, run this method after including jquery:

include_ckeditor_with_jquery_js();

Installation:

1) Install WordPress 3.4.2 or higher

2) Download the following file:

http://downloads.wordpress.org/plugin/ckeditor-with-jquery.1.0.zip

3) Login to WordPress admin, click on Plugins / Add New / Upload, then upload the zip file you just downloaded.

4) Activate the plugin.

Version: 1.0
Author: Frederico Knabben, modified by TheOnlineHero - Tom Skroza
License: GPL2
*/
function ckeditor_with_jquery_activate() {
    add_option( "ckeditor_with_jquery_version", "1.0", "", "yes" );
}
register_activation_hook( __FILE__, 'wp_content_source_activate' );

function update_ckeditor_with_jquery_version() {
  if (get_option("ckeditor_with_jquery_version") != "1.0") {
    update_option("ckeditor_with_jquery_version", "1.0"); 
  }
}
update_ckeditor_with_jquery_version();


function include_ckeditor_with_jquery_js() {
  echo("<script type='text/javascript' src='".get_option("siteurl")."/wp-content/plugins/ckeditor-with-jquery/ckeditor.js'></script>");
  echo("<script type='text/javascript' src='".get_option("siteurl")."/wp-content/plugins/ckeditor-with-jquery/adapters/jquery.js'></script>");
}
?>