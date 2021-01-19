<?php 
/*
Web Rocket Theme Functions Page.
*/

// Include CSS
function include_css() {
  
    wp_register_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css',array(),'1','All' );
    wp_enqueue_style( 'bootstrap-css');

    wp_register_style('theme-css',get_template_directory_uri().'/style.css',array(),'1','All' );
	wp_enqueue_style( 'theme-css');
	
}
add_action( 'wp_enqueue_scripts','include_css');

// Include Js
function include_js(){

    wp_register_script( 'bootstrap_js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '1','1','1' );
	wp_enqueue_script( 'bootstrap_js');

}
add_action( 'wp_enqueue_scripts', 'include_js' );

//Google Fonts
function custom_fonts(){

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap',array(), null );
			
}
add_action( 'wp_enqueue_scripts', 'custom_fonts' ); 

// theme support options starts
function web_rocket_custom_logo_setup() {
	$defaults = array(
	'height'      => 50,
	'width'       => 180,
	'flex-height' => true,
	'flex-width'  => true,
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'web_rocket_custom_logo_setup' );

register_nav_menus( 
    array('top_menu' => 'Main Menu')
);

add_theme_support( 'menus' );

add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat',
) );

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'automatic-feed-links' );
//theme support options end

// theme functions starts
function get_widgets() {

	register_sidebar(array(
		'name'          => __( 'Main Sidebar','web-rocket' ),
		'id'            => 'main_sidebar',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
    ) );
	register_sidebar(array(
		'name'          => __( 'Footer 1','web-rocket' ),
		'id'            => 'footer_widget_1',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
    ) );
    
    register_sidebar(array(
		'name'          => __( 'Footer 2','web-rocket' ),
		'id'            => 'footer_widget_2',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
    ) );
    
    register_sidebar(array(
		'name'          => __( 'Footer 3','web-rocket' ),
		'id'            => 'footer_widget_3',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
    ) );
    
    register_sidebar(array(
		'name'          => __( 'Footer 4','web-rocket' ),
		'id'            => 'footer_widget_4',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
    ) );
    
    register_sidebar(array(
		'name'          => __( 'Footer 5','web-rocket' ),
		'id'            => 'footer_widget_5',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );

    register_sidebar(array(
		'name'          => __( 'Copywrite','web-rocket' ),
		'id'            => 'copywrite',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );

	register_sidebar(array(
		'name'          => __( 'Blog Main Section','web-rocket' ),
		'id'            => 'Blog Main Section',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );
	register_sidebar(array(
		'name'          => __( 'Blog Second Section 1','web-rocket' ),
		'id'            => 'Blog Second Section 1',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );

	register_sidebar(array(
		'name'          => __( 'Blog Second Section 2','web-rocket' ),
		'id'            => 'Blog Second Section 2',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );

	register_sidebar(array(
		'name'          => __( 'Blog Second Section 3','web-rocket' ),
		'id'            => 'Blog Second Section 3',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );

	register_sidebar(array(
		'name'          => __( 'Blog Second Section 4 ','web-rocket' ),
		'id'            => 'Blog Second Section 4',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );

}
add_action( 'widgets_init', 'get_widgets' );
// Theme Functions end