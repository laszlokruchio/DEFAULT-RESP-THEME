<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */

get_header(); ?>

	<h1><?php printf( __( 'Tag Archives: %s' ), '' . single_tag_title( '', false ) . '' ); ?></h1>

<?php get_sidebar(); ?>
<?php get_footer(); ?>