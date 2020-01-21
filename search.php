<?php
/**
 * Template Name: Search Page
 */

?>
<?php get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php get_search_form(); ?>
        </main><!-- #main -->
        
        <h1 class="search-title">
<?php echo the_search_query(); ?>"
    </h1>
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
if ( is_page('contact') ) {
	get_footer( 'contact' );
  } else {
	get_footer();
  }
?>