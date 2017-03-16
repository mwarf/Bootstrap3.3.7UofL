<?php
/*
Template Name: Left Submenu
*/
?>

<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-2">
<?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 0,
                'container'         => false,
                'menu_class'        => 'nav nav-pills nav-stacked',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        




		</div>
		<div class="col-md-10">
			<?php the_content(); ?>
		</div>

<?php endwhile; ?>
		</div></div></div>


<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>