<?php get_header(); ?>

	<div class="container-fluid">
	
		<div class="row">
				   
		 	<div class="col-xs-12 col-md-8">
				<?php 
				global $post;
				global $wp_session;
				$slug = get_post( $post )->post_name;
				$categories = get_the_category();
				//echo $slug;
				?>
		 		<?php 
					foreach( $categories as $cates) :
						$catId = $cates->cat_ID;
						//query_posts( 'posts_per_page=2&cat='.$catId);
						query_posts( 'cat='.$catId);
						$link = get_category_link($catId);
						//echo $link;
						$title_cate = get_cat_name($catId);
				?>
					<h2 style="color:red"><a href="<?php echo $link; ?>"><?php echo $title_cate ?></a></h2>

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

					<?php endwhile; endif;?>	
					<?php wp_reset_query();?>
					<?php 
						endforeach; ?>
				
				
				
				
	    	
			
			</div>
			
			<aside>
				<?php get_sidebar(); ?>
			</aside>
		
			
		</div>
		
    </div>

	
<?php get_footer(); ?>	