<?php
/**
 * Template Name: Slider
 *
 * A for the slider on jetstar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
  </article><!-- #post-## -->
<?php endwhile; ?>
<?php get_footer(); ?>
