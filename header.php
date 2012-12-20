<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?> ">
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="/wp-content/themes/Boilermaker-Retiree/javascripts/modernizr_html5shiv_with_print.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> 
		   <?php if(is_page(Directions)) {echo 'onload="initialize()"';}
		   else {} ?> >

	<div id="header">
	    <header class="row">
	    
	    	<hgroup class=" four phone-two columns">
				<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a></h1>
				<h2 class="subheader"><?php bloginfo('description'); ?></h2>
			</hgroup>
			
	    	<nav class="seven phone-one columns">
	    		<?php wp_nav_menu( array( 'theme_location' => 'header-menu',
	    								                       'menu_class' => 'nav-bar', //Div class is nav-bar
	    								                       'container' => 'nav')); ?>
  				
  				<div class="mobile_select">
          			<div class="mobile_menu_btn">
          				
          				<div class="icon-bar-container">
          					<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          				</div>
          			</div>
	    		</div>
	    	</nav>
	    </header>
	    <nav>
	    	<div class="mobile_menu">
        	  				<div class="mobile_search">
	    						<?php get_search_form( $echo ); ?>
	    					</div>
	    					
	    					<?php wp_nav_menu( array( 'theme_location' => 'header-menu',
	    									      	 					   					'container' => 'nav')); ?>
	    	</div>
	    	<div class="clear"></div><!-- needed to clear the dropdown menu on iPad size -->
	    </nav>
	</div>
	  
				
				<!-- Header Column -->
				
		<!-- Header Row -->
		
		<!-- Begin Container -->
	<div class="container">

	

		
		
		
		
		
		
		
				