<?php
// SIDEBARS AND WIDGETIZED AREAS
function cronista_register_sidebars() {
	
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => __('Sidebar Principal', 'cronista'),
		'description' => __('Aparece en paginas y articulos en la barra lateral.', 'cronista'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'sidebar-footer',
		'name' => __('Sidebar Footer', 'cronista'),
		'description' => __('Aparece en la seccion de pie de pagina del sitio.', 'cronista'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	

	
} // don't remove this bracket!

// adding sidebars to Wordpress
add_action( 'widgets_init', 'cronista_register_sidebars' );

?>