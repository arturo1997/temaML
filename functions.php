<?php
/**
 * Machupicchu Lama functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Machupicchu_Lama
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function machupicchu_lama_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Machupicchu Lama, use a find and replace
		* to change 'machupicchu-lama' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'machupicchu-lama', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'machupicchu-lama' ),
		)
	);
    register_nav_menus(
        array(
            'menu-blog' => esc_html__( 'blog', 'machupicchu-lama' ),
        )
    );


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'machupicchu_lama_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'machupicchu_lama_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function machupicchu_lama_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'machupicchu_lama_content_width', 640 );
}
add_action( 'after_setup_theme', 'machupicchu_lama_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function machupicchu_lama_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'machupicchu-lama' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'machupicchu-lama' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'machupicchu_lama_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function machupicchu_lama_scripts() {
	wp_enqueue_style( 'machupicchu-lama-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'machupicchu-lama-style', 'rtl', 'replace' );

	wp_enqueue_script( 'machupicchu-lama-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'machupicchu_lama_scripts' );



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

/**_________________________________________________________________________________________________________________________ */
//My Styles and Scripts
function agregar_mi_estilo() {

	// Registra el archivo JavaScript
    wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', false);

	// Lo encola para que se cargue los scripts
	wp_enqueue_script('custom-js');

}
function enqueue_owl_carousel() {
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true);
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel');

// Añade el estilo a la acción 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'agregar_mi_estilo');


/** 
 * Mi Propio Widget
 */
function widgets_footer() {
    register_sidebar(array(
        'name'          => 'Widget del Encabezado',
        'id'            => 'widget-encabezado',
        'description'   => 'Esta es la sección de widgets en el encabezado.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => 'empresa',
        'id'            => 'empresa',
        'description'   => 'Esta es una área de widget personalizada.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => 'destinos',
        'id'            => 'destinos',
        'description'   => 'Esta es una área de widget personalizada.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => 'informacion util',
        'id'            => 'informacion_util',
        'description'   => 'Esta es una área de widget personalizada.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => 'horario y ubicacion',
        'id'            => 'horario',
        'description'   => 'Esta es una área de widget personalizada.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => 'contactenos',
        'id'            => 'contactenos',
        'description'   => 'Esta es una área de widget personalizada.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'widgets_footer');



function registrar_tipo_preguntas_frecuentes() {
    $labels = array(
        'name' => 'Preguntas Frecuentes',
        'singular_name' => 'Pregunta Frecuente',
        'menu_name' => 'Preguntas Frecuentes',
        'add_new' => 'Agregar Nueva',
        'add_new_item' => 'Agregar Nueva Pregunta Frecuente',
        'edit_item' => 'Editar Pregunta Frecuente',
        'view_item' => 'Ver Pregunta Frecuente',
        'all_items' => 'Todas las Preguntas Frecuentes',
        'search_items' => 'Buscar Preguntas Frecuentes',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-format-chat',
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'preguntas-frecuentes'),
    );

    register_post_type('pregunta_frecuente', $args);
}

add_action('init', 'registrar_tipo_preguntas_frecuentes');

// ------------ICONOS

function phone_icon_shortcode() {
    $svg_code = '
	<svg width="20" height="22" viewBox="0 0 20 22" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_8_5)">
        <path class="color-1"
            d="M1.51986e-05 5.39039C-0.00229454 4.29679 0.258706 3.22164 0.74837 2.26212C1.15604 1.46498 1.81893 0.275428 2.70587 0.0453899C3.77297 -0.231394 4.58484 0.803162 5.28354 1.51542C6.06654 2.31379 6.96618 3.18965 7.54939 4.17131C8.12913 5.14928 7.44891 6.04483 6.78833 6.70542C6.53657 6.9576 5.90023 7.38446 5.81131 7.75597C5.72354 8.11886 6.249 8.82005 6.42108 9.12144C7.54592 11.102 9.07035 12.7393 10.8535 14.0531C11.2935 14.3766 11.7623 14.726 12.2532 14.956C12.796 15.2119 13.02 14.7051 13.3861 14.309C14.0859 13.5537 14.9798 12.5486 16.0388 13.2277C17.0262 13.8612 17.8531 14.9154 18.6454 15.7925C19.4018 16.6315 20.2148 17.2687 19.9492 18.5321C19.4595 20.8644 17.8173 22.2754 15.5503 21.9519C13.3491 21.6382 11.2658 20.274 9.46416 18.9688C7.32072 17.4151 5.3101 15.6831 3.61937 13.5783C1.96791 11.5251 0.474666 9.15588 0.0646878 6.43725C0.0127187 6.09773 0.00809927 5.75574 1.51986e-05 5.39039Z"
            fill="#FE630C" />
    </g>
    <defs>
        <clipPath id="clip0_8_5">
            <rect width="20" height="22" fill="white" />
        </clipPath>
    </defs>
</svg>
    ';

    return $svg_code;
}
add_shortcode('phone_shortcode', 'phone-icon_shortcode');

function horario_icon_shortcode() {
    $svg_code = '
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
    <g clip-path="url(#clip0_164_2)">
        <path
            d="M12.0204 21.9931C9.06077 21.9931 6.1011 21.9931 3.14143 21.9931C2.82502 21.9931 2.50668 22.0195 2.19338 21.967C0.892492 21.7493 0.00997955 20.7144 0.00881631 19.4047C0.00687757 17.2072 0.00804081 15.0098 0.00804081 12.8124C0.00804081 10.2635 0.0270404 7.71455 -0.000101876 5.16602C-0.0128975 3.96746 0.838208 2.75241 2.25193 2.55923C2.37291 2.54275 2.4966 2.54084 2.61913 2.54007C3.11661 2.53777 3.61448 2.5347 4.11196 2.5416C4.24651 2.54352 4.28955 2.50557 4.28761 2.37027C4.28024 1.86585 4.27636 1.36067 4.28761 0.856252C4.29536 0.485222 4.4714 0.20465 4.82851 0.0666639C5.1643 -0.0632732 5.47799 -0.00539561 5.74631 0.23723C5.94445 0.416229 6.02122 0.64774 6.02045 0.909147C6.01929 1.38827 6.0189 1.86739 6.02045 2.3465C6.02084 2.53662 6.02316 2.53854 6.21122 2.53854C7.79439 2.53854 9.37756 2.53662 10.9607 2.54199C11.1096 2.54237 11.1441 2.49791 11.1422 2.35724C11.1344 1.8463 11.1329 1.33499 11.1422 0.824055C11.1496 0.408947 11.4753 0.0601479 11.8793 0.0114694C12.3128 -0.0410421 12.7009 0.201584 12.8293 0.602511C12.8611 0.701784 12.8653 0.803357 12.8653 0.905697C12.8653 1.39133 12.8712 1.87697 12.8619 2.36222C12.8591 2.50902 12.9065 2.54237 13.0488 2.54199C14.6253 2.537 16.2023 2.53892 17.7793 2.53892C17.9832 2.53892 17.9844 2.53777 17.9848 2.34267C17.9856 1.85704 17.9801 1.37178 17.9871 0.886149C17.9941 0.405114 18.319 0.0444328 18.763 0.00840302C19.2911 -0.0341428 19.7106 0.336504 19.7172 0.861618C19.7234 1.35339 19.7184 1.84554 19.7192 2.33731C19.7192 2.53739 19.7199 2.53815 19.9158 2.53854C20.407 2.5393 20.8983 2.54812 21.3892 2.53777C22.8211 2.50711 24.0077 3.70337 24.0003 5.11083C23.9848 7.99819 23.996 10.8856 23.996 13.7729C23.996 15.6637 23.9983 17.5545 23.9952 19.4453C23.9933 20.6347 23.2042 21.6266 22.0375 21.9218C21.8099 21.9793 21.5792 21.9931 21.3458 21.9931C19.756 21.9923 18.1662 21.9931 16.5765 21.9931C15.0581 21.9931 13.5393 21.9931 12.0208 21.9931H12.0204ZM11.9945 9.31941V9.32171C8.63464 9.32171 5.27442 9.32248 1.91459 9.31865C1.76725 9.31865 1.7308 9.36311 1.73119 9.50378C1.73468 11.669 1.73274 13.8346 1.73274 15.9999C1.73274 17.1306 1.73507 18.2609 1.7339 19.3916C1.7339 19.6615 1.81804 19.8938 2.02316 20.0762C2.21161 20.2441 2.43844 20.2893 2.68699 20.2893C8.89055 20.2874 15.0937 20.2878 21.2973 20.2882C21.9344 20.2882 22.2698 19.9612 22.2694 19.3365C22.2682 18.2506 22.2651 17.1647 22.2655 16.0788C22.2659 13.8879 22.2682 11.697 22.2694 9.50608C22.2694 9.31903 22.2674 9.31941 22.0747 9.31941C18.7149 9.31941 15.3551 9.31941 11.9949 9.31941H11.9945ZM12.0022 7.60723V7.608C15.3493 7.608 18.6967 7.608 22.0437 7.608C22.2682 7.608 22.269 7.608 22.269 7.3945C22.269 6.64056 22.2705 5.887 22.2682 5.13306C22.2667 4.59875 21.9092 4.24688 21.3671 4.2442C20.8824 4.2419 20.3977 4.24343 19.9134 4.2442C19.7196 4.2442 19.7188 4.24535 19.7188 4.44773C19.7188 4.9395 19.723 5.43126 19.718 5.92303C19.7122 6.44431 19.281 6.82416 18.7614 6.77433C18.312 6.7314 17.9937 6.37685 17.9867 5.89582C17.9797 5.4167 17.9856 4.93758 17.9848 4.45846C17.9848 4.24497 17.9836 4.2442 17.7773 4.2442C16.2073 4.2442 14.637 4.2442 13.067 4.2442C12.8669 4.2442 12.8661 4.24535 12.8657 4.44313C12.865 4.94141 12.8657 5.43931 12.8653 5.9376C12.8653 6.18099 12.7727 6.38759 12.5928 6.5501C12.3237 6.7935 12.0065 6.84831 11.6742 6.71454C11.3403 6.58038 11.1507 6.31898 11.1434 5.9583C11.1329 5.44736 11.1348 4.93643 11.1426 4.4255C11.1445 4.28483 11.1085 4.24037 10.9603 4.24113C9.37718 4.2465 7.794 4.2442 6.21083 4.24458C6.02316 4.24458 6.02161 4.2465 6.02084 4.43738C6.01967 4.9165 6.01928 5.39562 6.02084 5.87435C6.02161 6.14343 5.94135 6.37954 5.73274 6.55892C5.4586 6.79465 5.14336 6.84907 4.81145 6.70917C4.46985 6.56544 4.29459 6.28985 4.28799 5.92572C4.27869 5.4213 4.2814 4.9165 4.28877 4.41208C4.29071 4.27563 4.24573 4.2396 4.11234 4.24152C3.63425 4.24842 3.15616 4.24343 2.67768 4.2442C2.08365 4.24497 1.73662 4.58572 1.73545 5.17101C1.73429 5.86745 1.73545 6.56352 1.73545 7.25997C1.73545 7.49148 1.84971 7.60723 2.07822 7.60723C5.38648 7.60723 8.69513 7.60723 12.0034 7.60723H12.0022Z"
            fill="black" />
        <path
            d="M11.1946 17.7696C10.9767 17.7707 10.8174 17.7251 10.6739 17.6308C9.81386 17.0655 8.9519 16.5032 8.09576 15.9317C7.6894 15.6607 7.5944 15.1451 7.86039 14.7504C8.11941 14.3663 8.6355 14.2513 9.03992 14.5089C9.63162 14.8853 10.2132 15.2766 10.7995 15.6618C10.9197 15.7408 11.0248 15.7267 11.1148 15.6197C12.3187 14.193 13.5223 12.7664 14.7266 11.3406C15.1314 10.8611 15.8092 10.8779 16.1485 11.3739C16.3637 11.6886 16.3416 12.0914 16.0806 12.4046C15.6743 12.8925 15.2621 13.3755 14.8523 13.8607C13.8511 15.047 12.8491 16.2322 11.8499 17.42C11.6657 17.6392 11.4397 17.7646 11.1946 17.7696Z"
            fill="black" />
    </g>
    <defs>
        <clipPath id="clip0_164_2">
            <rect width="24" height="22" fill="white" />
        </clipPath>
    </defs>
</svg>
    ';

    return $svg_code;
}
add_shortcode('horario_shortcode', 'horario_icon_shortcode');

// Agregar sección de personalización de horario y numero celular
function agregar_seccion_personalizacion($wp_customize) {
    $wp_customize->add_section('header_personalizado', array(
        'title' => 'Horario y Numero',
        'priority' => 30,
    ));

    // Campo para el horario de texto
    $wp_customize->add_setting('horario_texto', array(
        'default' => 'Lunes a Viernes: 9am - 5pm',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('horario_texto', array(
        'label' => 'Horario de Texto',
        'section' => 'header_personalizado',
        'type' => 'text',
    ));

    // Campo para el enlace de teléfono
    $wp_customize->add_setting('enlace_telefono', array(
        'default' => '+51982934132',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('enlace_telefono', array(
        'label' => 'Enlace de Teléfono',
        'section' => 'header_personalizado',
        'type' => 'text',
    ));
}

add_action('customize_register', 'agregar_seccion_personalizacion');

//Menu personalizado
function registrar_menu_destinos() {
    register_nav_menu('menu_destinos', 'Menú de Destinos');
}

add_action('init', 'registrar_menu_destinos');

function registrar_personalizador_destinos($wp_customize) {
    $wp_customize->add_section('destinos_section', array(
        'title' => 'Configuración de tittulos del footer',
        'priority' => 30,
    ));

    $wp_customize->add_setting('titulo_destinos', array(
        'default' => 'Destinos', // Título por defecto
        'sanitize_callback' => 'sanitize_text_field', // Sanitización de datos
    ));

    $wp_customize->add_control('titulo_destinos', array(
        'label' => 'Título 1',
        'section' => 'destinos_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'registrar_personalizador_destinos');

/*----------------- Tabbys-------------------------------*/




/**
 * Shortcode personalizado para un titulo dentro del tabby
 */

 function shortcode_dia($atts, $content = null) {
    // Obtiene el valor del atributo 'dia' desde el shortcode
    $dia_tour = $atts['numero_dia'];
    $titulo = $atts['titulo'];


    // Procesa el contenido del shortcode y el valor del span
    $output = '<div class="tour-dia">';
    $output .= '<span class="tour-dia-numero"><span>Día</span><span>' . esc_attr($dia_tour) . '</span></span>';
    $output .= '<h4 class="tour-dia-titulo">' . $titulo . '</h4>'; 
    $output .= '</div>';
    $output .= '<div class="tour-content-dia">';
    if ($content !== null) {
        $output .= do_shortcode($content);
    }
    $output .= '</div>';

    return $output;
}
add_shortcode('dia', 'shortcode_dia');




function shortcode_lugares_open() {

    // Procesa el contenido del shortcode y el valor del span
    $output = '<div class="lugares">';
    return $output;
}
add_shortcode('lugares_open', 'shortcode_lugares_open');
function shortcode_lugares_close() {

    // Procesa el contenido del shortcode y el valor del span
    $output = '</div>';

    return $output;
}
add_shortcode('lugares_close', 'shortcode_lugares_close');

function shortcode_iconos_open() {

    // Procesa el contenido del shortcode y el valor del span
    $output = '<div class="detalles">';
    return $output;
}
add_shortcode('detalles_open', 'shortcode_iconos_open');
function shortcode_iconos_close() {

    // Procesa el contenido del shortcode y el valor del span
    $output = '</div>';

    return $output;
}
add_shortcode('detalles_close', 'shortcode_iconos_close');


// Función para el shortcode personalizado
function mi_shortcode_personalizado($atts, $content = null) {
    // Obtener los atributos (clase y título)
    $atts = shortcode_atts(
        array(
            'clase' => '',
            'titulo' => '',
        ),
        $atts,
        'mi_shortcode'
    );

    // Sanitizar y asignar valores
    $clase = sanitize_html_class($atts['clase']);
    $titulo = sanitize_text_field($atts['titulo']);

    // Crear el HTML del shortcode
    $output = '<div class="day-feature">';
    $output .= '<span class="' . esc_attr($clase) . '"></span>';
    $output .= '<div class="day-feature-content">';
    $output .= '<strong>' . esc_html($content) . '</strong>';
    $output .= '<span>' . esc_html($titulo) . '</span>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;
}

// Registrar el shortcode personalizado
add_shortcode('detalles_item', 'mi_shortcode_personalizado');

//-----------Div

function mi_card($atts, $content = null) {
    
    $output = '<div class="card_alojamiento">';
    if ($content !== null) {
        $output .= do_shortcode($content);
    }
    $output .= '</div>';
    
    return $output;
}

add_shortcode('card_alojamiento', 'mi_card');
function mi_card_img($atts, $content = null) {

    $output = '<div class="card_alojamiento_img">';
    if ($content !== null) {
        $output .= do_shortcode($content);
    }
    $output .= '</div>';

  
    return $output;
}

add_shortcode('card_alojamiento_img', 'mi_card_img');
function mi_card_content($atts, $content = null) {
    

    $output = '<div class="card_alojamiento_content">';
    if ($content !== null) {
        $output .= do_shortcode($content);
    }
    $output .= '</div>';

return $output;
}

add_shortcode('card_alojamiento_content', 'mi_card_content');

function shortcode_incluye($atts, $content = null) {
    // Procesa el contenido del shortcode y el valor del span
    $output = '<div class="incluye">';
    $output .= $content;
    $output .='</div>';
    return $output;
}
add_shortcode('incluye', 'shortcode_incluye');
function shortcode_no_incluye($atts, $content = null) {
    // Procesa el contenido del shortcode y el valor del span
    $output = '<div class="no-incluye">';
    $output .= $content;
    $output .='</div>';
    return $output;
}
add_shortcode('no_incluye', 'shortcode_no_incluye');

/**
* Mis Tabs Personales
*/




function register_custom_nav_walker(){
require_once 'inc/custom-class-walker-nav-menu.php';
}
add_action( 'after_setup_theme', 'register_custom_nav_walker' );

function register_custom_walker(){
require_once 'inc/custom-walker.php';
}
add_action( 'after_setup_theme', 'register_custom_walker' );

// Agregar un campo de metadatos personalizados para el recuento de vistas
function agregar_contador_de_vistas() {
add_post_meta(get_the_ID(), 'contador_de_vistas', 0, true);
}
add_action('wp_head', 'agregar_contador_de_vistas');

// Función para aumentar el contador de vistas
function aumentar_contador_de_vistas() {
if (is_single()) {
$post_id = get_the_ID();
$vistas = get_post_meta($post_id, 'contador_de_vistas', true);
$vistas++;
update_post_meta($post_id, 'contador_de_vistas', $vistas);
}
}
add_action('wp', 'aumentar_contador_de_vistas');

// Función para obtener las entradas más vistas
function obtener_entradas_mas_vistas($cantidad = 5) {
$args = array(
'category_name' => 'blog',
'post_type' => 'post', // Ajusta según el tipo de contenido
'posts_per_page' => $cantidad,
'meta_key' => 'contador_de_vistas',
'orderby' => 'meta_value_num',
'order' => 'DESC',
);

$entradas_mas_vistas = new WP_Query($args);

return $entradas_mas_vistas->posts;
}

function custom_excerpt_more($more) {
return ' ...';
}
add_filter('excerpt_more', 'custom_excerpt_more');