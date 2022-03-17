<?php
/* Template Name: Test_Mail */
get_header();
// $headers = 'From: My Name <marina.iva.noffa@gmail.com>' . "\r\n\\";
wp_mail('marina_iw@yahoo.com', 'The subject', 'The message from wp_mail',  $headers); 
mail('marina_iw@yahoo.com', 'The subject', 'The message from wp_mail',  $headers);
get_footer(); ?>