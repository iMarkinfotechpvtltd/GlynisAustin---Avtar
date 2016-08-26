<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
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

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );


// image Sizes

add_image_size('about_pic', 555, 332, true );

add_image_size('news_image', 1140, 423, true );

add_image_size('news_tile', 337, 254, true );

add_image_size('team_member', 263, 329, true );

add_image_size('feature-slider', 1920, 697, true );

/* Hide admin bar for all user except admin */

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

/*   login handling */

function wpLoginForm() 
{ 	
  if ( isset( $_POST['wpLoginForm_nonce'] ) && wp_verify_nonce( $_POST['wpLoginForm_nonce'], 'wpLoginForm_html' ) ) 
  {
	$username = sanitize_text_field($_POST['username']);
	$password = $_POST['user_pass'];
	
	if ( username_exists( $username ) ) 
	{

	   $user = get_user_by( 'login', $username );
       /*
	   echo "<pre>";
       print_r($user);
	   echo "</pre>";
	   */
	   if ( $user && wp_check_password( $password, $user->data->user_pass, $user->ID) ) 
		{
		$login_data = array();
		$login_data['user_login'] = $username;
		$login_data['user_password'] = $password;
		$login_data['remember'] = $remember;
		wp_signon( $login_data, false );
	    
		echo "3"; 

		}
		else 
		{

		echo "2";

		}   
	}
	else
	{
		echo "1";
	}
  
   die(); 

  }
 
}
add_action( 'wp_ajax_wpLoginForm', 'wpLoginForm' );
add_action( 'wp_ajax_nopriv_wpLoginForm', 'wpLoginForm' );


/*   Registration Handling   */

function wpjobusRegisterForm() 
{

  if ( isset( $_POST['wpjobusRegister_nonce'] ) && wp_verify_nonce( $_POST['wpjobusRegister_nonce'], 'wpjobusRegister_html' ) ) 
  {
	$fname = sanitize_text_field($_POST['fname']);
	$lname = sanitize_text_field($_POST['lname']);
	$email = sanitize_email($_POST['user_email']);
	$password = $_POST['user_pass'];
	$phoneno = $_POST['phone_no'];
	
	$username = $fname.' '.$lname;
	if (username_exists($username)) {

	  echo "1";

	}
	else if( email_exists( $email )) {

	  echo "2";

	}
	else
	{
		
    wp_create_user( $username, $password, $email );
	
    $from = get_option('admin_email');
    $headers = 'From: '.$from . "\r\n";
    $subject = "Registration successful";
    $msg = "Registration successful.\nYour login details\nUsername: $username\nPassword: $password";
    wp_mail( $email, $subject, $msg, $headers );
	
	
	
	
    $login_data = array();
    $login_data['user_login'] = $username;
    $login_data['user_password'] = $password;
    wp_signon( $login_data, false );
	//echo $password;
	echo "3";	
		
	}	
	
  
  die(); 

 }
}
add_action( 'wp_ajax_wpjobusRegisterForm', 'wpjobusRegisterForm' );
add_action( 'wp_ajax_nopriv_wpjobusRegisterForm', 'wpjobusRegisterForm' );






/* ------------Testimonial custom post------------- */
function testimoni_init() {
	$labels = array(
		'name'               => __( 'Testimonial' ),
		'singular_name'      => __( 'All Testimonies Post' ),
		'menu_name'          => __( 'Testimonial Post'),
		'name_admin_bar'     => __( 'Testimonial'),
		'add_new'            => __( 'Add Testimonial' ),
		'add_new_item'       => __( 'Add Testimonial' ),
		'new_item'           => __( 'New Testimonial Post'),
		'edit_item'          => __( 'Edit Testimonial Post'),
		'view_item'          => __( 'View Testimonial post'),
		'all_items'          => __( 'All Testimonial post'),
		'search_items'       => __( 'Search Testimonial post'),
		'parent_item_colon'  => __( 'Parent Testimonial post:'),
		'not_found'          => __( 'No Testimonial post found.'),
		'not_found_in_trash' => __( 'No Testimonial post found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'Testimonial', $args );
}
add_action( 'init', 'Testimoni_init' );

/* ------------News custom post------------- */
function news_init() {
	$labels = array(
		'name'               => __( 'News' ),
		'singular_name'      => __( 'All News Post' ),
		'menu_name'          => __( 'News Post'),
		'name_admin_bar'     => __( 'News'),
		'add_new'            => __( 'Add News' ),
		'add_new_item'       => __( 'Add News' ),
		'new_item'           => __( 'New News Post'),
		'edit_item'          => __( 'Edit News Post'),
		'view_item'          => __( 'View News post'),
		'all_items'          => __( 'All News post'),
		'search_items'       => __( 'Search News post'),
		'parent_item_colon'  => __( 'Parent News post:'),
		'not_found'          => __( 'No News post found.'),
		'not_found_in_trash' => __( 'No News post found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail','comments' )
	);

	register_post_type( 'news', $args );
}
add_action( 'init', 'News_init' );


/* ------------Member custom post------------- */
function Member_init() {
	$labels = array(
		'name'               => __( 'Member' ),
		'singular_name'      => __( 'All Member' ),
		'menu_name'          => __( 'Member'),
		'name_admin_bar'     => __( 'Member'),
		'add_new'            => __( 'Add Member' ),
		'add_new_item'       => __( 'Add Member' ),
		'new_item'           => __( 'New Member'),
		'edit_item'          => __( 'Edit Member Detail'),
		'view_item'          => __( 'View Member '),
		'all_items'          => __( 'All Member'),
		'search_items'       => __( 'Search Member'),
		'parent_item_colon'  => __( 'Parent Member:'),
		'not_found'          => __( 'No Member found.'),
		'not_found_in_trash' => __( 'No Member found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'member' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'member', $args );
}
add_action( 'init', 'Member_init' );



// ************ Austin experience custom post ************** 
function Austin_init() {
	$labels = array(
		'name'               => __( 'Austin Experience' ),
		'singular_name'      => __( 'All Austin Experience Post' ),
		'menu_name'          => __( 'Austin Experience'),
		'name_admin_bar'     => __( 'Austin Experience'),
		'add_new'            => __( 'Add Austin Experience Post' ),
		'add_new_item'       => __( 'Add Austin Experience Post' ),
		'new_item'           => __( 'New Austin Experience Post'),
		'edit_item'          => __( 'Edit Austin Experience Post'),
		'view_item'          => __( 'View Austin Experience Post '),
		'all_items'          => __( 'All Austin Experience Post'),
		'search_items'       => __( 'Search Austin Experience Post'),
		'parent_item_colon'  => __( 'Parent Austin Experience Post:'),
		'not_found'          => __( 'No Austin Experience Post found.'),
		'not_found_in_trash' => __( 'No Austin Experience Post found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'austin' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'austin', $args );
}
add_action( 'init', 'Austin_init' );


/* ********************* Property custom post and texonomy **************************** */


add_action( 'init', 'Property' );
function Property() {
	$labels = array(
		'name'               => __( 'Property' ),
		'singular_name'      => __( 'All Property Post' ),
		'menu_name'          => __( 'Property post'),
		'name_admin_bar'     => __( 'Property'),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Property post' ),
		'new_item'           => __( 'New Property post'),
		'edit_item'          => __( 'Edit Property post'),
		'view_item'          => __( 'View Property post'),
		'all_items'          => __( 'All Property post'),
		'search_items'       => __( 'Search Property post'),
		'parent_item_colon'  => __( 'Parent Property post:'),
		'not_found'          => __( 'No Property post found.'),
		'not_found_in_trash' => __( 'No Property post found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'property' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'property', $args );
}

add_action( 'init', 'create_Property_taxonomies', 0 );

function create_Property_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Property', 'taxonomy general name' ),
		'singular_name'     => _x( 'Property', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Category' ),
		'all_items'         => __( 'All Category' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category Name' ),
		'menu_name'         => __( 'Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'property-category' ),
	);

	register_taxonomy( 'property-category', 'property', $args );
}




/********** Load member for Property assosiation *********************/

function my_acf_load_field( $field )
{
	$field['choices']= array();
		$type = 'member';
	$args=array(
	  'post_type' => $type,
	  'post_status' => 'publish',
	  'order'      => 'ASC',
	  'orderby'=> 'title',
	  'posts_per_page' =>-1
	  );
	$my_query = new WP_Query($args);
	while ($my_query->have_posts()) : $my_query->the_post(); 
      $title = get_the_title();
	  $id = get_the_id();
	  $desi = get_field('designation',$post->ID);
	  $field['choices'][$id] = $title .' ('.$desi.')'  ;
  endwhile;

    return $field;
}


add_filter('acf/load_field/name=assosiatewith', 'my_acf_load_field');

/********** Load taxonomy for Testinomial *********************/

function my_acf_load_field1( $field )
{

	$args = array(
		'type'                     => 'community',
		'orderby'                  => 'term_id',
		'taxonomy'                 => 'community-category',
		);
	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
      $name = $category->name;
	  $id = $category->term_id; 
	  $field['choices'][$id] = $name  ; 
	  
	}
	
	/* $field['choices']= array(
	
		'custom' => 'Dummy'
	); */

    return $field;
}

add_filter('acf/load_field/name=testimonial_of', 'my_acf_load_field1');

/********** Load taxonomy for property *********************/
function my_acf_load_field2( $field )
{

	$args = array(
		'type'                     => 'community',
		'orderby'                  => 'term_id',
		'taxonomy'                 => 'community-category',
		);
	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
      $name = $category->name;
	  $id = $category->term_id; 
	  $field['choices'][$id] = $name  ; 
	  
	}
	
	/* $field['choices']= array(
	
		'custom' => 'Dummy'
	); */

    return $field;
}

add_filter('acf/load_field/name=community', 'my_acf_load_field2');

/********** Load taxonomy for Seller guide  *********************/

function my_acf_load_field3( $field )
{

	$args = array(
		'type'                     => 'seller-guide',
		'orderby'                  => 'term_id',
		'taxonomy'                 => 'seller-guide-category',
		);
	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
      $name = $category->name;
	  $id = $category->term_id; 
	  $field['choices'][$id] = $name  ; 
	  
	}
	
	 /*$field['choices']= array(
	
		'custom' => 'Dummy'
	); */

    return $field;
}

add_filter('acf/load_field/name=select_category', 'my_acf_load_field3');


/********** Load post type for community post  *********************/

function my_acf_load_field5( $field )
{

	$field['choices']= array(
	
		'Why live in this community' => 'WHY LIVE IN THIS COMMUNITY',
		'Best of community' => 'BEST OF COMMUNITY'
	);

    return $field;
}

add_filter('acf/load_field/name=post_relate_with', 'my_acf_load_field5');


/********** Load taxonomy for Buyer guide  *********************/

function my_acf_load_field4( $field )
{
	
	$args = array(
		'type'                     => 'buyer-guide',
		'orderby'                  => 'term_id',
		'taxonomy'                 => 'buyer-guide-category',
		);
	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
      $name = $category->name;
	  $id = $category->term_id; 
	  $field['choices'][$id] = $name  ; 
	  
	}
	
	 /*$field['choices']= array(
	
		'custom' => 'Dummy'
	); */

    return $field;

}

add_filter('acf/load_field/name=buyer_category', 'my_acf_load_field4');

/********** Load taxonomy for Property type  *********************/

function my_acf_load_field6( $field )
{
		 $field['choices']= array(
			'1' => 'House',
			'2' => 'Apartment / Unit',
			'3' => 'Townhouse',
			'4' => 'New Development',
			'5' => 'Vacant Land',
			'6' => 'Commercial',
			'7' => 'Acreage / Rural',
	); 

    return $field;
}

add_filter('acf/load_field/name=property_type', 'my_acf_load_field6');

/********** Property For  *********************/

function my_acf_load_field7( $field )
{
		 $field['choices']= array(
			'1' => 'Sale',
			'2' => 'Sold',
			'3' => 'Auction',
			'4' => 'Off market home'
	); 

    return $field;
}

add_filter('acf/load_field/name=property_for', 'my_acf_load_field7');


/* ********************* Community custom post and texonomy **************************** */


add_action( 'init', 'Community' );
function Community() {
	$labels = array(
		'name'               => __( 'Community' ),
		'singular_name'      => __( 'All Community Post' ),
		'menu_name'          => __( 'Community post'),
		'name_admin_bar'     => __( 'Community'),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Community post' ),
		'new_item'           => __( 'New Community post'),
		'edit_item'          => __( 'Edit Community post'),
		'view_item'          => __( 'View Community post'),
		'all_items'          => __( 'All Community post'),
		'search_items'       => __( 'Search Community post'),
		'parent_item_colon'  => __( 'Parent Community post:'),
		'not_found'          => __( 'No Community post found.'),
		'not_found_in_trash' => __( 'No Community post found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'community' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'community', $args );
}

add_action( 'init', 'create_Community_taxonomies', 0 );

function create_Community_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Community', 'taxonomy general name' ),
		'singular_name'     => _x( 'Community', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Category' ),
		'all_items'         => __( 'All Category' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category Name' ),
		'menu_name'         => __( 'Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'community-category' ),
	);
 
	register_taxonomy( 'community-category', 'community', $args );
}


/* ********************* seller custom post and texonomy **************************** */


add_action( 'init', 'Seller' );
function Seller() {
	$labels = array(
		'name'               => __( 'Seller Guide' ),
		'singular_name'      => __( 'All Seller Guide Post' ),
		'menu_name'          => __( 'Seller Guide post'),
		'name_admin_bar'     => __( 'Seller Guide'),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Seller Guide post' ),
		'new_item'           => __( 'New Seller Guide post'),
		'edit_item'          => __( 'Edit Seller Guide post'),
		'view_item'          => __( 'View Seller Guide post'),
		'all_items'          => __( 'All Seller Guide post'),
		'search_items'       => __( 'Search Seller Guide post'),
		'parent_item_colon'  => __( 'Parent Seller Guide post:'),
		'not_found'          => __( 'No Seller Guide post found.'),
		'not_found_in_trash' => __( 'No Seller Guide post found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'seller-guide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'seller-guide', $args );
}

add_action( 'init', 'create_Seller_taxonomies', 0 );

function create_Seller_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Seller Guide', 'taxonomy general name' ),
		'singular_name'     => _x( 'Seller Guide', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Category' ),
		'all_items'         => __( 'All Category' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category Name' ),
		'menu_name'         => __( 'Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'seller-guide-category' ),
	);

	register_taxonomy( 'seller-guide-category', 'seller-guide', $args );
}

/* ********************* buyer custom post and texonomy **************************** */


add_action( 'init', 'Buyer' );
function Buyer() {
	$labels = array(
		'name'               => __( 'Buyer Guide' ),
		'singular_name'      => __( 'All Buyer Guide Post' ),
		'menu_name'          => __( 'Buyer Guide post'),
		'name_admin_bar'     => __( 'Buyer Guide'),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Buyer Guide post' ),
		'new_item'           => __( 'New Buyer Guide post'),
		'edit_item'          => __( 'Edit Buyer Guide post'),
		'view_item'          => __( 'View Buyer Guide post'),
		'all_items'          => __( 'All Buyer Guide post'),
		'search_items'       => __( 'Search Buyer Guide post'),
		'parent_item_colon'  => __( 'Parent Buyer Guide post:'),
		'not_found'          => __( 'No Buyer Guide post found.'),
		'not_found_in_trash' => __( 'No Buyer Guide post found in Trash.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'buyer-guide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'buyer-guide', $args );
}

add_action( 'init', 'create_Buyer_taxonomies', 0 );

function create_buyer_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Buyer Guide', 'taxonomy general name' ),
		'singular_name'     => _x( 'Buyer Guide', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Category' ),
		'all_items'         => __( 'All Category' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category Name' ),
		'menu_name'         => __( 'Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'buyer-guide-category' ),
	);

	register_taxonomy( 'buyer-guide-category', 'buyer-guide', $args );
}


add_action('save_post','save_post_callback');
function save_post_callback($post_id){
	
    global $post; 
	$post = get_post($post_id);
	
    if ($post->post_type == 'property'){
		
		global $wpdb;
		$wpdb->delete( 'properties', array( 'post_id' => $post_id  ));
		
		$id = $post->ID;
		$cid = get_field('property_for',$post->ID);
		$area = strip_tags(get_field('address',$post->ID));	
		$type = get_field('property_type',$post->ID);
		$bed = get_field('number_of_bedroom',$post->ID);
		$bath = get_field('number_of_washroom',$post->ID);
		$parking = get_field('parking_capacity',$post->ID); 
		$price = get_field('property_price',$post->ID);
		
		
		
			$wpdb->insert('properties', array('post_id' => $id, 'status' => $cid, 'area' => $area, 'type' => $type, 'bedrooms' => $bed, 'bathrooms' => $bath, 'parking' => 2, 'price' => $price) );
	}
}

