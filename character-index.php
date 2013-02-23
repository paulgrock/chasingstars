<?php
/**
 * The main template file.
 * Template Name: Character Loop
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<div class="page-container clearfix with-sidebar">
  <?php get_sidebar(); ?>
  <div class="quarters-3 blog-roll extra-padding styled-bg">
  	<?php
  	/* Run the loop to output the posts.
  	 * If you want to overload this in a child theme then include a file
  	 * called loop-index.php and that will be used instead.
  	 */
  	 get_template_part( 'loop-copy', 'character' );
  	?>
  </div>
</div>
<?php get_footer(); ?>
