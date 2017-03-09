 <div class="container-fluid">
	 
	<div class="row unit-header-pinstripe">
		  <div class="col-md-12">
		  &nbsp;
		  </div>
	  </div>
	  
	   <div class="container">
		   <div class="row site-header-brand">
		  <div class="col-md-6">
		  <img class="logoImage" src="/wordpress/wp-content/themes/Bootstrap3.3.7UofL/images/logo_rgb_noText.svg">
		  </div>
		  <div class="col-md-6">
		  <!--other stuff goes here--></div>
	  </div>
	   </div>
	  <div class="row unit-header-brand">
		  <div class="container">
			  <div class="col-md-12">
		  <?php bloginfo('name'); ?></div>
		  </div>
	  </div>
	  </div>
	  
	  </div>
	  
	  
	  
	  <div class="container navBackground">
		  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <!--<?php bloginfo('name'); ?>-->
        </a>
    </div>
	<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
		 <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		<!--<?php get_search_form(); ?>-->
	</div>
  </div>
  </div>
</nav>
</div>
<!--<?php
if( function_exists( 'lana_breadcrumb' ) ) {
    echo lana_breadcrumb();
}
?>-->