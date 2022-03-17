<?php
/*
Plugin Name: Insert spacer tag
Plugin URI: http://nuph/edu.ua
Description: Simple plugin for inserting spacer tag
Version: 1.0
Author: alex_lvovich
Author URI: http://nuph/edu.ua
*/
function add_spacer($atts) {
    extract($atts);
 
    $i = 0;
    $output = '<div class="su-spacer"> </div>'; 
    return $output;
}
add_shortcode('links', 'add_spacer');
