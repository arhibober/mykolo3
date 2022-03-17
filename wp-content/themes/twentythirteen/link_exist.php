<?php
/*
Template Name: Несуществующие ссылки
*/

global $wpdb;
$sqlstr = "select id, post_title, post_content, post_name from wp_posts where post_status='publish'";
echo " s ".$sqlstr;
$posts = $wpdb->get_results($sqlstr, ARRAY_A);
$i = 0;
$not_exist = array();
foreach ($posts as $post)
{
	echo "iii";
	//echo " ppppp ".$post;
//echo " text <br/><br/><br/>".$attrs [2]."<br/><br/><br/> title<br/><br/><br/>".$attrs [3];
	//echo " p ".$post1 ["post_title"]." p1 ".$attrs [3];
	$links = array();
//echo "<br/><br/>images";
//print_r($images);
preg_match_all('/(<a.+?>)/', $post ["post_content"], $links);
//echo "<br/><br/>images1";
//print_r($images1);
//print_r($data1);
foreach ($links [0] as $link)
{
	preg_match_all('/(a|href)=("|\')[^"\'>]+/i', $link, $media);
//echo "<br/><br/>media";
//print_r($media);
$data = preg_replace('/(a|href)("|\'|="|=\')(.*)/i', "$3", $media[0]);
//echo "<br/><br/>data";
//print_r($data);
if ((!strstr ($data [0], "http")))
{
echo " d ".$data [0];
echo "<br/><br/>str: ".strrchr ($data [0], "/")."<br/>";
if ((!file_exists ($data [0])) && (!file_exists (substr ($data [0], 1, strlen ($data [0]) - 1)))
	&& (!file_exists (urldecode ($data [0]))) && (!file_exists (urldecode (substr ($data [0], 1, strlen ($data [0]) - 1)))) && (strlen ($data [0]) != 0) && ($data [0] != "#") && (!strstr ($data [0], "nuph.edu.ua")) && (strstr (strrchr ($data [0], "/"), ".")))
{
	$not_exist [$i]["id"] = $post ["id"];
	$not_exist [$i]["title"] = $post ["post_title"];
	$not_exist [$i]["name"] = $post ["post_name"];
	$not_exist [$i]["link"] = $data [0];
	$i++;
}
}
}
}
$file = fopen ("link_exist.txt", "w+");
fwrite ($file, "");
fclose ($file);
$file = fopen ("link_exist.txt", "a+");
foreach ($not_exist as $ne)
	fwrite ($file, $ne["id"]." ".$ne ["title"]." ".$ne ["name"]." ".$ne ["link"]."\n");
fclose ($file);
?>