<?php
/*
Template Name: Edge to Edge Content
*/
?>

<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!--<h2><?php the_title(); ?></h2>-->
<?php the_content(); ?>
<?php comments_template( '', true ); ?>

<?php endwhile; ?>


<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>