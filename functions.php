<?php
/**
 * COA Microsite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package COA_Microsite
 */

if ( ! function_exists( 'coa_micro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function coa_micro_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on COA Microsite, use a find and replace
	 * to change 'coa_micro' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'coa_micro', get_template_directory() . '/languages' );

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
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'coa_micro' ),
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
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'coa_micro_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // coa_micro_setup
add_action( 'after_setup_theme', 'coa_micro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coa_micro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'coa_micro_content_width', 640 );
}
add_action( 'after_setup_theme', 'coa_micro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coa_micro_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'coa_micro' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'coa_micro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function coa_micro_scripts() {

	wp_enqueue_style( 'coa_micro-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'coa_micro-style', get_stylesheet_uri() );

	//owlcarousel.css
	wp_enqueue_style( 'coa_micro-owl-carousel', get_template_directory_uri() . '/libraries/owl-carousel/owl.carousel.css' );

	wp_enqueue_style( 'coa_micro-owl-transitions', get_template_directory_uri() . '/libraries/owl-carousel/owl.transitions.css' );

	wp_enqueue_script( 'coa_micro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'coa_micro-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'coa_micro-jquery-match-height', get_template_directory_uri() . '/js/jquery.match-height.min.js', array(), null, true );

	//owlcarousel.min.js
	wp_enqueue_script( 'coa_micro-owl-carousel-min', get_template_directory_uri() . '/libraries/owl-carousel/owl.carousel.min.js', array(), null, true );

	wp_enqueue_script( 'coa_micro-jquery-placeholder', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array(), null, true );

	wp_enqueue_script( 'coa_micro-jquery-smooth-scroll', get_template_directory_uri() . '/js/jquery.smooth-scroll.min.js', array(), null, true );

	wp_enqueue_script( 'coa_micro-program', get_template_directory_uri() . '/js/program.js', array(), null, true );

	wp_enqueue_script( 'coa_micro-jquery-scripts', get_template_directory_uri() . '/js/jquery.scripts.js', array(), null, true );
	//Program Ninja Form
	wp_enqueue_script( 'coa_micro-program', get_template_directory_uri() . '/js/program.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'coa_micro_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Creates hidden field for Ninja Form that adds page id to value
 */
function register_ninja_form_fields() {

	$argsPage = array(
		'name' => 'Page',
		'display_function' => 'collect_user_page',
		'sidebar' => 'template_fields',
		'display_label' => false,
		'display_wrap' => false,
	);

	if( function_exists( 'ninja_forms_register_field' ) )
	{
		ninja_forms_register_field('user_page', $argsPage);
	}
}

add_action( 'init', 'register_ninja_form_fields' );


function collect_user_page( $field_id, $data, $post_title )
{
	global $post;

	if(!empty($post))
	{
		?>

		<input type="hidden" name="ninja_forms_field_<?php echo $field_id;?>" value="<?php echo get_permalink($post->ID);?>">

		<input type="hidden" name="ninja_forms_field_<?php echo $field_id;?>" value="<?php echo ($post->ID);?>">

		<input type="hidden" name="ninja_forms_field_<?php echo $field_id;?>" value="<?php echo the_title_attribute($post->post_title);?>">

		<?php
	}

    if(is_admin())
	{
		?>
			<div class="field-wrap text-wrap label-above">
				<label for="ninja_forms_field_<?php echo $field_id;?>">Page Form Submitted</label>
				<input type="text" name="ninja_forms_field_<?php echo $field_id;?>" value="<?php echo $data['default_value'];?>">
			</div>
		<?php
	}
}

// Move Yoast Meta Box to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

include_once get_theme_file_path( 'inc/acf-field-groups.php' );
