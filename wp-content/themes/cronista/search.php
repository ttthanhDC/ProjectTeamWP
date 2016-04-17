<?php get_header(); ?>
			
			<div id="content">

				<div class="row">
			
					<div  class="col-lg-8 col-md-8 col-xs-12" >
						<h1 class="archive-title"><span><?php _e('Resultado de busqueda para:', 'cronista'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
								<header class="article-header">

									<h3 class="search-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline">
										<?php the_time(get_option( 'date_format' )) ?> por <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?>
									</p>
						
								</header> <!-- end article header -->
					
								<section class="entry-content">
									<?php the_excerpt(); ?> 
								</section> <!-- end article section -->
						
								<footer class="article-footer">
							
								</footer> <!-- end article footer -->
					
							</article> <!-- end article -->
					
						<?php endwhile; ?>	
					
						  
							
							
							<div  class="text-center">					
								
								<?php the_posts_pagination( array(
						    			'mid_size' => 2,
						    			'prev_text' => __( '<<', 'cronista' ),
						   				 'next_text' => __( '>>', 'cronista' ),
										) ); ?>
							</div>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Cachis, Entrada no encontrada", "cronista"); ?></h1>
    					    	</header>
    					    	
    					    	 <section class="entry-content">
								    <p><?php _e("Prueba con nuestro buscador.", "cronista"); ?></p>
								    <?php get_search_form(); ?>
								  </section>				  
    					    
    					    </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    			
    			    <aside>
						<?php get_sidebar(); ?>
					</aside>
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
