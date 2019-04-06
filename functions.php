<?php
/**
 * exam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package exam
 */

if ( ! function_exists( 'exam_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function exam_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on exam, use a find and replace
		 * to change 'exam' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'exam', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'exam' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'exam_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'exam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function exam_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'exam_content_width', 640 );
}
add_action( 'after_setup_theme', 'exam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'exam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'exam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'exam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function exam_scripts() {
	//BOOTSTRAP
	wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
	wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );

	//FONTAWESOME
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');

	//FONTS
	wp_enqueue_style( 'Nunito', 'https://fonts.googleapis.com/css?family=Nunito:400,700,900', false );
	wp_enqueue_style( 'Poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,500', false );

	//MASONRY
	wp_enqueue_script('masonry');

	//DEFAULT
	wp_enqueue_style( 'exam-style', get_stylesheet_uri() );
	wp_enqueue_script( 'exam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'exam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'exam_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// MY CUSTOM CODE
function hw18_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'socials', array(
		'title'       => __( 'Socials', 'socials' ),
		'description' => '',
		'priority'    => 120,
	) );
	//===
	$wp_customize->add_setting( 'social_url_1', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_url_1', array(
		'label'    => __( 'social_url_1', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_url_1',
	) ) );

	$wp_customize->add_setting( 'social_label_1', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_label_1', array(
		'label'    => __( 'social_label_1', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_label_1',
	) ) );
	//===
	$wp_customize->add_setting( 'social_url_2', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_url_2', array(
		'label'    => __( 'social_url_2', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_url_2',
	) ) );

	$wp_customize->add_setting( 'social_label_2', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_label_2', array(
		'label'    => __( 'social_label_2', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_label_2',
	) ) );
	//===
	$wp_customize->add_setting( 'social_url_3', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_url_3', array(
		'label'    => __( 'social_url_3', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_url_3',
	) ) );

	$wp_customize->add_setting( 'social_label_3', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_label_3', array(
		'label'    => __( 'social_label_3', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_label_3',
	) ) );
	//===
	$wp_customize->add_setting( 'social_url_4', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_url_4', array(
		'label'    => __( 'social_url_4', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_url_4',
	) ) );

	$wp_customize->add_setting( 'social_label_4', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_label_4', array(
		'label'    => __( 'social_label_4', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_label_4',
	) ) );
	//===
	$wp_customize->add_setting( 'social_url_5', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_url_5', array(
		'label'    => __( 'social_url_5', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_url_5',
	) ) );

	$wp_customize->add_setting( 'social_label_5', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_label_5', array(
		'label'    => __( 'social_label_5', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_label_5',
	) ) );
	//===
	$wp_customize->add_setting( 'social_url_6', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_url_6', array(
		'label'    => __( 'social_url_6', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_url_6',
	) ) );

	$wp_customize->add_setting( 'social_label_6', array(
		'transport' => 'refresh'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_label_6', array(
		'label'    => __( 'social_label_6', 'socials' ),
		'section'  => 'socials',
		'settings' => 'social_label_6',
	) ) );
}

add_action( 'customize_register', 'hw18_customize_register' );


function create_post_types() {
	register_post_type( 'talent',
		array(
			'labels'      => array(
				'name'          => __( 'talents' ),
				'singular_name' => __( 'talent' )
			),
			'public'      => true,
			'has_archive' => true,
			'supports'    => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'post-formats'
			)
		)
	);
}

add_action( 'init', 'create_post_types' );
