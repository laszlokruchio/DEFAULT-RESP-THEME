<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0 
 *
 */

get_header(); ?>

<?php if ( have_posts() ) the_post(); ?>

	<h1><?php printf( __( 'Author Archives: %s' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>

	<?php if ( get_the_author_meta( 'description' ) ) : ?>

		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'boilerplate_author_bio_avatar_size', 60 ) ); ?>
		<h2><?php printf( __( 'About %s' ), get_the_author() ); ?></h2>
		<?php the_author_meta( 'description' ); ?>

	<?php endif; ?>

<?php endif; ?>

<?php rewind_posts(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>