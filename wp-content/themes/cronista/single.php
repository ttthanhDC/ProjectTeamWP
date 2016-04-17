<?php get_header(); ?>
	
	<div class="container-fluid">
	
		<div class="row">
			   
		 	<div class="col-xs-12 col-md-8">
		 	
		 		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
			    	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" >
											
						<header class="article-header">	
							<h1 class="entry-title single-title" ><?php the_title(); ?></h1>
							<p class="byline">						
								<?php the_time(get_option( 'date_format' )) ?> por <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?>
							</p>	
																
					    </header> <!-- end article header -->
										
					    <section class="entry-content" >
							<?php the_post_thumbnail('full'); ?>
							<?php the_content(); ?>
						</section> <!-- end article section -->
											
						<footer class="article-footer">							
							<p class="tags"><?php the_tags('<span class="tags-title">' . __('Etiquetas:', 'cronista') . '</span> ', ', ', ''); ?></p>
						</footer>
														
						<?php comments_template(); ?>	
																		
					</article> <!-- end article -->
					    	
			    <?php endwhile; endif; ?>
	    			
			</div>				
		
			<aside>
				<?php get_sidebar(); ?>
			</aside>
		
			
		</div>
		
    </div>

	
<?php get_footer(); ?>	