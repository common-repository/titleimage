<?php
/*
Plugin Name: Titleimage
Plugin URI: https://wordpress.org/plugins/titleimage/
Description: This plugin provides the function <code style="background-color: #FFFDC0">showTitleimage()</code> to be used within your templates. It displays a manually or randomly selected image of a chosen gallery from the great plugin NextGEN Gallery, which is not a part of this plugin, by the way.
Version: 0.7.2
Author: Marc Schmidt
*/

define('TITLEIMAGEFOLDER', dirname(plugin_basename(__FILE__)));
define('TITLEIMAGE_URLPATH', get_option('siteurl').'/wp-content/plugins/' . TITLEIMAGEFOLDER.'/');

$titleimage = get_option('titleimage');

if (is_admin()) {
	include_once (dirname (__FILE__)."/admin.php");
} else {
	include_once (dirname (__FILE__)."/display.php");
}

	
?>