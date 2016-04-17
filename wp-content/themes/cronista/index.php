<?php get_header(); ?>

	<div class="container-fluid">
	
		<div class="row">
			
	   
		 	<div class="col-xs-12 col-md-8">
		 	
		 		<header>
				    <h1 class="page-title"><?php _e('ULTIMAS NOTICIAS', 'cronista' ); ?></h1>
		    	</header>
		    	
		  		<!-- To see additional archive styles, visit the /parts directory -->
	    		<?php get_template_part( 'parts/loop', 'archive' ); ?>
	    	
			
			</div>
				
			<aside>
				<?php get_sidebar(); ?>
			</aside>
				
		</div>
		
    </div>
		
<?php get_footer(); ?>
