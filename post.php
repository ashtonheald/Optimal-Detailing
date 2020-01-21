<?php 
/*
Template Name: Template-Test
Template Post Type: page
*/
get_header();
 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if

get_footer();
?>