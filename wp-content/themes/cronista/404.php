<?php get_header(); ?>

	<div class="container-fluid">
	
		<div class="row">
			   
		 	<div class="col-xs-12 col-md-8">
		 	
		 		<article id="post-not-found" class="hentry">
		 		
				  <header class="article-header">
				    <h1><?php _e("Cachis, Entrada no encontrada", "cronista"); ?></h1>
				    
				  </header>
				  
				  <section class="entry-content">
				    <p><?php _e("Prueba con nuestro buscador.", "cronista"); ?></p>
				    <?php get_search_form(); ?>
				  </section>
				  
				  <footer class="article-footer">
				      <p></p>
				  </footer>
				  
				</article>
			
			</div>
			
			<aside>
				<?php get_sidebar(); ?>
			</aside>
		
		</div>
		
    </div>

	
<?php get_footer(); ?>	