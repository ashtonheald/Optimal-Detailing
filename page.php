<?php 
/*
Template Name: Page Template
Template Post Type: page
*/
get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		the_content();
		//
	} // end while
} // end if



if ( is_page('contact') ) {
	get_footer( 'contact' );
  } else {
	get_footer();
  }
?>