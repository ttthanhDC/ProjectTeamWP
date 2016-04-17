<?php


if ( ! function_exists( '_wp_render_title_tag' ) ) :
	function cronista_slug_render_title() {
	?>
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<?php
    }
    add_action( 'wp_head', 'cronista_slug_render_title' );
endif;

