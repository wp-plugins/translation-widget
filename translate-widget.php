<?php
/*
Plugin Name: Translate Widget
Plugin URI: http://www.macaronicode.se/
Description: A Widget for choosing language in the Translate plugin
Author: MacaroniCode Software
Version: 1.0
Author URI: http://www.macaronicode.se/
*/

function widget_translateWidget($args)
{
	extract($args);
	print $before_widget;
	print $before_title.'Language'.$after_title;
	list_translations();
	print $after_widget;
}

function translateWidget_init()
{
	register_sidebar_widget(__('Language'), 'widget_translateWidget');
	register_widget_control('Language', 'translateWidget_control');
}

function translateWidget_control()
{
	print "No options here, all configuration is done using the Translate panel, this widget ";
	print "only lists the installed languages with activation links.";
}

add_action("plugins_loaded", "translateWidget_init");
?>