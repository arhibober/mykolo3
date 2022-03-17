<?php
/*
Plugin Name: iprint
Plugin URI: http://nuph.edu.com
Description: Plugin adds Print button on your site.
Author: Alex Lvovich
Author URI: http://arhibober@gmail.com
version: 1.01
*/

add_action('wp_enqueue_scripts','iprintfjs');

function iprintfjs() {
    wp_enqueue_script( 'iprint', plugins_url( 'js/iprint.js', __FILE__ ));
}

function iprintf($data){
	$url=get_site_url()."/$data->post_name";
	$date=$data->post_date;
	$date_modified=$data->post_modified;
	$title=$data->post_title;
	$content=$data->post_content;
	$content=preg_replace('#\[(.*)?\]#s', '', $content);
	$content=preg_replace("#\[(')?\]#s", "\'", $content);
	//$content=htmlspecialchars($content,ENT_QUOTES);
	//$content=htmlentities($content,ENT_QUOTES);
	echo $content;
	/*remove_all_filters( 'the_content' );
	$content=str_replace("'", "&#39;", $content);
	$content=str_replace("`", "&#39;", $content);
	$content=str_replace("‘", "&#8216;", $content);
	$content=str_replace("’", "&#8217;", $content);
	$content=str_replace("‚", "&#8218;", $content);*/
	//$content=sanitize_text_field($content);
	//$content=addslashes($text);

			
		echo $content ;
	echo '<input type="button" value="Print" onclick="PrintElem('."'$url', '$date', '$title', '$content' ".')" />';
}
/*function iprintf($data){
	$text="<div>".get_site_url()."/$data->post_name</div>";
	$text.="<div>$data->post_date</div>";
	$text.="<div>$data->post_modified</div>";
	$text.="<h1>$data->post_title</h1>";
	$text.="<div>$data->post_content</div>";
	$text=preg_replace('#\[(.*)?\]#s', '', $text);
	$text=htmlspecialchars($text,ENT_QUOTES);
	$text=str_replace("'", "&#39;", $text);
	$text=str_replace("`", "&#39;", $text);
	$text=str_replace("‘", "&#8216;", $text);
	$text=str_replace("’", "&#8217;", $text);
	$text=str_replace("‚", "&#8218;", $text);
	$text=sanitize_text_field($text);
	$text=addslashes($text);
	/*$text=trim($text);
	$text=trim($text, '&nbsp;');*/
			/*add_filter( '$text', 'capital_P_dangit', 11 );
			add_filter( '$text', 'wptexturize' );
			add_filter( '$text', 'convert_smilies' );
			add_filter( '$text', 'convert_chars' );
			add_filter( '$text', 'wpautop' );
	//$text="'".$text."'";

		echo $text;
	echo '<input type="button" value="Print" onclick="PrintElem('."'$text'".')" />';
}*/