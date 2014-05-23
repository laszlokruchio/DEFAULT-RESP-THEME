<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) the_post(); ?>
	<h1 class="page-title"><?php
		if ( is_day() ) :
			printf( __( 'Daily Archives: %s' ), get_the_date() );
		elseif ( is_month() ) :
			printf( __( 'Monthly Archives: %s' ), get_the_date('F Y') );
		elseif ( is_year() ) :
			printf( __( 'Yearly Archives: %s' ), get_the_date('Y') );
		else :
			_e( 'Blog Archives' );
		endif;
	?></h1>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
