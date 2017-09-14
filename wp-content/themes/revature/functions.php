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

	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen

	 * If you're building a theme based on Twenty Sixteen, use a find and replace

	 * to change 'twentysixteen' to the name of your theme in all the template files

	 */

	load_theme_textdomain( 'twentysixteen' );



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

		'name'          => __( 'REVATUREPRO', 'twentysixteen' ),

		'id'            => 'sidebar-2',

		'description'   => __( 'REVATUREPRO Info', 'twentysixteen' ),

		'before_widget' => '<section id="%1$s" class="widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',

	) );



	register_sidebar( array(

		'name'          => __( 'ACADEMIC PARTNERS', 'twentysixteen' ),

		'id'            => 'sidebar-3',

		'description'   => __( 'ACADEMIC PARTNERS INFO.', 'twentysixteen' ),

		'before_widget' => '<section id="%1$s" class="widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',

	) );

	

	register_sidebar( array(

		'name'          => __( 'Contact Info', 'twentysixteen' ),

		'id'            => 'sidebar-4',

		'description'   => __( 'Contact Info.', 'twentysixteen' ),

		'before_widget' => '<section id="%1$s" class="widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',

	) );

	

	register_sidebar( array(

		'name'          => __( 'Footer Menu', 'twentysixteen' ),

		'id'            => 'sidebar-5',

		'description'   => __( 'Footer Menu Section.', 'twentysixteen' ),

		'before_widget' => '<section id="%1$s" class="widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',

	) );

	

	register_sidebar( array(

		'name'          => __( 'Footer Social Icons', 'twentysixteen' ),

		'id'            => 'sidebar-6',

		'description'   => __( 'Footer Social Icons Section.', 'twentysixteen' ),

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

	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );

	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );



	// Load the Internet Explorer 8 specific stylesheet.

	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );

	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );



	// Load the Internet Explorer 7 specific stylesheet.

	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );

	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );



	// Load the html5 shiv.

	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );

	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );



	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}



	if ( is_singular() && wp_attachment_is_image() ) {

		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );

	}



	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );



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

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);



function special_nav_class ($classes, $item) {

    if (in_array('current-menu-item', $classes) ){

        $classes[] = 'active ';

    }

    return $classes;

}

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

add_filter("mce_external_plugins", "tomjn_mce_external_plugins");

function tomjn_mce_external_plugins($plugin_array){

	$plugin_array['typekit']  =  get_template_directory_uri().'/typekit.tinymce.js';

    return $plugin_array;

}

/*------------------------------------------------Start Added function Ajay----------------------------------------------*/

// remove space

/* remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' ); */

function tinymce_remove_root_block_tag( $init ) {
    $init['forced_root_block'] = false; 
    return $init;
}
add_filter( 'tiny_mce_before_init', 'tinymce_remove_root_block_tag' );

// custom excerpt length
function themify_custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );

// add more link to excerpt
function themify_custom_excerpt_more($more) {
   global $post;
   return '<a class="more-link" href="'. get_permalink($post->ID) . '">'. __('..', 'themify') .'</a>';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');
 $pluginList = get_option( 'active_plugins' );

 
 // Function name ShortenText
 
function ShortenText($text) { 
  $chars_limit = 19; // Character length
  $chars_text = strlen($text);
  $text = $text." ";
  $text = substr($text,0,$chars_limit);
  $text = substr($text,0,strrpos($text,' '));

  if ($chars_text > $chars_limit)
     { $text = $text."..."; } 
     return $text;
}
 

   // numbered pagination
   
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class=\"blogs-pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

// numbered pagination closed


//Logic of logIn menu Page 

add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );?>
<?php 

	


function wti_loginout_menu_link( $items, $args ) {
  

  if ($args->theme_location == 'primary') {
      if (is_page('revaturepro') || is_page('online'))
{
	
         $items .= '<li class="login-revature"><a href="https://app.revature.com/login" target="_blank"><span class="glyphicon glyphicon-user" style="color:#f26925"></span>&nbsp;<span class="login-font" >LOG IN</span></a></li>';
     
	  return $items;
   }
   else
   {
   return $items;
   }
}
}

	
	/**
 * Redirection Plugin Editor access
 */
add_filter( 'redirection_role', 'redirection_to_editor' );
function redirection_to_editor() {
    return 'edit_pages';
}	

/**
 * Search based on only posts (not pages)
 */
function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type','post');
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');


// Added to extend allowed files types in Media upload
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {

// Add *.EPS files to Media upload
$existing_mimes['eps'] = 'application/postscript';

// Add *.AI files to Media upload
$existing_mimes['ai'] = 'application/postscript';

return $existing_mimes;
}
/*------------------------------------------------End Added function Ajay----------------------------------------------*/


require get_template_directory() . '/inc/vc_functions.php';
require get_template_directory() . '/inc/vc_functions_aron.php';
require get_template_directory() . '/inc/vc_functions_ajay.php';

/*--------------------------------------------------Plugin used for dropdown menus------------------------------*/

require_once('wp_bootstrap-navwalker.php');
/**
 * Return the capability that users need to view the Yoast SEO settings pages.
 *
 * @return mixed|void
 */
/**
 * Return the capability that users need to view the Yoast SEO settings pages.
 *
 * @return mixed|void
 */
function my_custom_wpseo_manage_options_capability() {

    $manage_options_cap = 'edit_others_posts';

    return $manage_options_cap;
}
add_filter( 'wpseo_manage_options_capability', 'my_custom_wpseo_manage_options_capability' );
/*-------------------------------------------------GEO IP Enabled---------------------------------------------*/
function country_geo_redirect(){
$country = getenv('HTTP_GEOIP_COUNTRY_CODE');
$url = site_url('', 'https');
if ( $country == "IN" && $url!='https://revature.in' && (strpos($url, 'staging')===false)) {
wp_redirect( 'https://revature.in', 301 );
exit;
}
}
add_action('init', 'country_geo_redirect');
function livchem_search_filter($s) {
    return urldecode($s);
}

add_filter('get_search_query', 'livchem_search_filter');
add_filter('the_search_query', 'livchem_search_filter');

function livchem_query_vars_search_filter($query)
{
    if ($query->is_search && !is_admin()) {
        $query->query_vars['s'] = urldecode($query->query_vars['s']);
    }

    return $query;
}
add_action('parse_query', 'livchem_query_vars_search_filter');