<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Global Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support('post-thumbnails');
add_image_size( 'ports', 450, 450, true ); // 940 pixels wide by 480 pixels tall, hard crop mode
add_post_type_support( 'page', 'excerpt' );


/*-----------------------------------------------------------------------------------*/
/* Equeue JS
/*-----------------------------------------------------------------------------------*/

function js_scripts_load_cdn()
{
	// Deregister the included library
	wp_deregister_script( 'jquery' );
	
	// Register the library again from Google's CDN
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), null, false );
	
	// Register the script like this for a theme:
	wp_register_script( 'lightgallery',  get_template_directory_uri() . '/js/lightgallery.js', array( 'jquery' ) );
	wp_register_script( 'mousewheel',  'https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js', array( 'jquery' ) );
	
	wp_register_script( 'fullscreen', get_template_directory_uri() . '/js/lg-fullscreen.js', array( 'jquery' ) );
	wp_register_script( 'thumbnail', get_template_directory_uri() . '/js/lg-thumbnail.js', array( 'jquery' ) );
	wp_register_script( 'zoom', get_template_directory_uri() . '/js/lg-zoom.js', array( 'jquery' ) );
	wp_register_script( 'hash', get_template_directory_uri() . '/js/lg-hash.js', array( 'jquery' ) );
	wp_register_script( 'pager', get_template_directory_uri() . '/js/lg-pager.js', array( 'jquery' ) );

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'lightgallery' );
	wp_enqueue_script( 'mousewheel' );
	wp_enqueue_script( 'fullscreen' );
	wp_enqueue_script( 'thumbnail' );
	wp_enqueue_script( 'zoom' );
	wp_enqueue_script( 'hash' );
	wp_enqueue_script( 'page' );

}
add_action( 'wp_enqueue_scripts', 'js_scripts_load_cdn' );

/*-----------------------------------------------------------------------------------*/
/* Equeue CCS
/*-----------------------------------------------------------------------------------*/

function css_styles()
{

	// Register the style like this for a theme:
		wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '', 'all' );
		wp_register_style( 'opensans',  'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700', array(), '', 'all' );
	wp_register_style( 'lightgallery', get_template_directory_uri() . '/css/lightgallery.css', array(), '', 'all' );
	wp_register_style( 'transitions', get_template_directory_uri() . '/css/transitions.css', array(), '', 'all' );
	wp_register_style( 'screen', get_template_directory_uri() . '/css/screen.css', array(), '', 'all' );


	// For either a plugin or a theme, you can then enqueue the style:
	wp_enqueue_style( 'reset' );
	wp_enqueue_style( 'opensans' );
	wp_enqueue_style( 'lightgallery' );
	wp_enqueue_style( 'transitions' );
	wp_enqueue_style( 'screen' );

}
add_action( 'wp_enqueue_scripts', 'css_styles' );

/*-----------------------------------------------------------------------------------*/
/* Sidebars
/*-----------------------------------------------------------------------------------*/

if ( function_exists('register_sidebar') ) {


			register_sidebar(array('name'=>'Default',
					'id'=>'Default',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h4>',
					'after_title' => '</h4>',
				));
}

/*-----------------------------------------------------------------------------------*/
/* Options
/*-----------------------------------------------------------------------------------*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
			'page_title' 	=> ' CODEBLOO Settings',
			'menu_title'	=>  'CODEBLOO Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}


?>
