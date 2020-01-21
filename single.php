<?php
/*
Template Name: Blog
Template Post Type: page
*/
get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
      

    <title><?php wp_title(); ?></title>
      <div class="entry-content">
        <?php the_content(); ?>
      </div><!-- .entry-content -->
      <?php
  $args = array(
    'post_type' => 'post', // enter custom post type
    'orderby' => 'date',
    'order' => 'DESC',
  );

  $loop = new WP_Query( $args );
  if( $loop->have_posts() ):
  while( $loop->have_posts() ): $loop->the_post(); global $post;
    echo '<div class="post">';
    echo '<h3 class="post-title">' . get_the_title() . '</h3>';
    echo '<div class="row">';
    echo '<div class="post-image col-sm-4">'. get_the_post_thumbnail( $id ).'</div>';
    echo '<div class="post-work col-sm-8">'. get_the_content().'</div>';
    echo '</div>';
    echo '</div>';
  endwhile;
  endif;
?>

    <?php endwhile; // end of the loop. ?>

  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>