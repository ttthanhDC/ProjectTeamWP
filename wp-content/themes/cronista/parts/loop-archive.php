<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
		<header class="article-header">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<p class="byline">
				<?php the_time(get_option( 'date_format' ));  _e(' por ',  'cronista');  the_author_posts_link(); ?>  - <?php the_category(', ') ?>
			</p>	
		</header> <!-- end article header -->
						
		<section class="entry-content" >
			<div class="row">	
	   
	   			<?php if (has_post_thumbnail() ) { ?>
		 		<div class="hidden-xs col-md-3">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => "img-thumbnail")); ?></a>
				</div>
				<div class="col-md-8 text-justify">
					<?php the_excerpt(); ?>
				</div>
				
				<?php  } else { ?>
				<div class="col-md-12 text-justify">
					<?php the_excerpt(); ?>
				</div>
				
				<?php  } ?>
			</div>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
	    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Etiquetas:', 'cronista') . '</span> ', ', ', ''); ?></p>
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
	<?php _e( 'Ups, no se ha recuperado nada con ese criterio.', 'cronista' ); ?>
<?php endif; ?>