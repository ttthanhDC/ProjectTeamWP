<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div id="header" role="banner" >
	
		<div id="header-info">
			<div class="row">
				<div class="col-xs-6 col-md-2 col-md-offset-1">
					<a href="<?php echo esc_url(home_url()); ?>/">
						<img height="<?php echo esc_attr(get_custom_header()->height); ?>" src="<?php esc_url(header_image()); ?>"  alt="<?php esc_attr(_e('Logo', 'cronista')); ?>" />
					</a>
				</div>
				
				<div class="col-xs-12 col-md-8 text-center">
					<h1><a href="<?php echo esc_url(home_url()); ?>/"><?php bloginfo('name'); ?></a></h1>
					<?php $description = get_bloginfo( 'description' );
						if ( $description  &&  (get_header_textcolor()!='blank')) { ?>
						<div class="description"><?php echo esc_attr($description); ?></div>
					<?php } ?>
				</div>
				
			</div>
			
		</div>
				
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid col-md-offset-1 col-md-7">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo  esc_url(home_url()); ?>">
		      	 <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
		      	 <span class="visible-xs" > <?php bloginfo();?> </span>
		      </a>
		            
		    </div>
		
		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 5,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		       			'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'cronista_navwalker::fallback',
		                'walker'            => new cronista_navwalker())
		            );
		        ?>
		         
		  </div>
		  <div class="col-md-4">
				<?php get_search_form(); ?>
		  </div>
		
		</nav>
 				
	</div>

	<div id="page-wrapper">
		<div class="container">
	
