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

  <article <?php post_class(); ?>>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
      <?php edit_post_link( __( 'Edit', 'boilerplate' ), '', '' ); ?>
    </div><!-- .entry-content -->
  </article><!-- #post-## -->

<?php endwhile; ?>

<?php get_footer(); ?>
