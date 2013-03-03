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
  <ul class="xoxo quarters-1">
    <li>
      <h2 class="cast">Cast</h2>
    </li>
    <?php query_posts( array('category_name' => 'character') ); while ( have_posts() ) : the_post(); ?>
    <li>
      <h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'boilerplate' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
    </li>
    <?php endwhile; // End the loop. Whew. ?>
  </ul>

  <div class="quarters-3 blog-roll extra-padding styled-bg">
    <?php
    /* Run the loop to output the posts.
     * If you want to overload this in a child theme then include a file
     * called loop-index.php and that will be used instead.
     */
    get_template_part( 'character', 'index' );
    ?>
  </div>
</div>
<?php get_footer(); ?>
