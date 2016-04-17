<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bizlight
 */

get_header(); ?>
<div class="wrapper page-inner-title">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bizlight
 */

 ?>
<div class="wrapper page-inner-title">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php 
				global $post;
				global $wp_session;
				$slug = get_post( $post )->post_name;
				$categories = get_the_category();
				$page_title = $wp_query->post->post_title;
				//echo $page_title;
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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if(get_the_title() != $page_title):  ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
				<?php endif; ?>

			<?php endwhile; // End of the loop. ?>
			<?php wp_reset_query();?>
			<?php endforeach; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div><!-- #content -->
<?php get_footer(); ?>


				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div><!-- #content -->
<?php get_footer(); ?>
