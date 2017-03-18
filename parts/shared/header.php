 	  <!--Start fluid parent container--><div class="container-fluid">
		  
		  <!--begin hidden search panel-->
		   <div id="hidden-search-panel" class="container collapse">
			   <div id="hidden-search-panel-input" class="row">
			   	<div class="col-md-12 text-center">
				   	 <div class="well well-lg"><?php get_search_form(); ?>
    				</div>
			   	</div>
			   </div>
			   <div id="hidden-search-panel-content" class="row">
			   	<div class="col-xs-6 col-md-3">
				   	<ul>
					   		<li><a href="#">The Bridge</a></li>
					   		<li><a href="#">Web Tools</a></li>
					   		<li><a href="#">University Directory</a></li>
				   	</ul>
			   	</div>
			   	<div class="col-xs-6 col-md-3">
				   		<ul>
					   		<li><a href="#">Academic Calendar</a></li>
					   		<li><a href="#">Campus Map</a></li>
					   		<li><a href="#">Faculties &amp; Schools</a></li>
				   	</ul>

			   	</div>
			   	<div class="col-xs-6 col-md-3">
				   		<ul>
					   		<li><a href="#">Moodle</a></li>
					   		<li><a href="#">Student Web Mail</a></li>
					   		<li><a href="#">Staff Web Mail</a></li>
				   	</ul>

			   	</div>
			   	<div class="col-xs-6 col-md-3">
				   		<ul>
					   		<li><a href="#">2017 Graduate Viewbook (PDF)</a></li>
					   		<li><a href="#">2017 Undergrad Viewbook (PDF)</a></li>
					   		<li><a href="#">Apply Now</a></li>
				   	</ul>

			   	</div>
			   </div>
		   </div>
		 
	  </div> <!--[end big container]-->

		  
		  
		  
		  
		  <!--One big empty blue row--><div class="row unit-header-pinstripe">
		  <div class="col-md-12">&nbsp;</div><!--[end big row]-->
	  </div>
	  
	  <!--Content fixed on grid--><div class="container">
		   <div class="row site-header-brand">
		  <div class="col-md-3">
		 <h6>Responsive Logo Goes Here</h6>
		  		  </div>
		  <div class="col-md-6"><h6 style="letter-spacing: 4px;text-transform: uppercase">Alberta's Destination University</h6></div>
		  <div class="col-md-3 text-right">
		  <a class="btn btn-primary"  role="button" data-toggle="collapse" href="#hidden-search-panel" aria-expanded="false" aria-controls="collapseExample">
  <span class="glyphicon glyphicon-search">&nbsp;</span></a></div><!--[end header on grid]-->
	  </div>
	  </div>
	  
	  <!--Begin big fluid site name container--> <div class="row unit-header-brand">
		  <!--Content fixed on grid--><div class="container">
			  <div class="col-md-12">
		  <?php bloginfo('name'); ?>
		  </div>
	  </div><!--[end sitename on grid]-->
	  </div><!--[end big fluid site name container]-->
	  
	  <!--Begin Nav Bar-->
	  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End Nav Bar-->

	   


	  