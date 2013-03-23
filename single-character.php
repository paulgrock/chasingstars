<?php
/**
 * The Template for displaying all single posts.
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
    <?php endwhile; wp_reset_query(); ?>
  </ul>
	<div class="quarters-3 blog-roll extra-padding styled-bg">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
			</div><!-- .entry-content -->
	<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
			<footer id="entry-author-info">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'boilerplate_author_bio_avatar_size', 60 ) ); ?>
				<h2><?php printf( esc_attr__( 'About %s', 'boilerplate' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
					<?php printf( __( 'View all posts by %s &rarr;', 'boilerplate' ), get_the_author() ); ?>
				</a>
			</footer><!-- #entry-author-info -->
	<?php endif; ?>
			<footer class="entry-utility">
				<?php edit_post_link( __( 'Edit', 'boilerplate' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-utility -->
		</article><!-- #post-## -->
		<?php comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>
	</div>
</div>
<?php get_footer(); ?>
