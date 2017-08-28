<?php 
	
// Register sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
	
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

wp_register_script( $handle, $src, $deps, $ver, $in_footer );
	
//	Add the stylesheets.
//-----------------------------------------------------------------------------------------------------------------------
add_action('wp_enqueue_scripts', 'add_my_custom_styles');
function add_my_custom_styles(){
   // register styles
   wp_register_style('stylesheet', get_stylesheet_directory_uri().'/style.css');
   wp_register_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css');
   wp_register_style('roboto', '//fonts.googleapis.com/css?family=Roboto:100,400,700');
   wp_register_style('maxcdn', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

   // enqueue styles
   wp_enqueue_style('stylesheet');
   wp_enqueue_style('bootstrap');
   wp_enqueue_style('roboto');
   wp_enqueue_style('maxcdn');
}

// logo
add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

