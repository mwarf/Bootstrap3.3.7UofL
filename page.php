<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/bootsrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 3.3.7
 * @autor 		Babobski
 */
?>
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="container">
		 <?php
if( function_exists( 'lana_breadcrumb' ) ) {
    echo lana_breadcrumb();
}
	?> 
	 </div> 
	  
	  </div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<?php the_content(); ?>
<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
