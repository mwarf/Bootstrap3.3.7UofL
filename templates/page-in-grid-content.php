<?php
/*
Template Name: Constrain to Grid
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
<?php the_content(); ?>
<?php comments_template( '', true ); ?>

<?php endwhile; ?>
		</div></div></div>


<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>