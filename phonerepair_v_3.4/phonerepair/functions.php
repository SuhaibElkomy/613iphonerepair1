<?php
/**
 *----------------- include ------------------------------------------
 */

include_once( get_template_directory() . '/inc/tools.php' );
include_once( get_template_directory() . '/inc/plugins/plugins.php' );
include_once( get_template_directory() . '/inc/panel.php' );
include_once( get_template_directory() . '/inc/mega-menu.php' );
require_once( get_template_directory() . '/inc/aq_resizer.php' );


load_theme_textdomain( "phonerepair", get_template_directory() . '/languages' );

/* Add post formats */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form' ) );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor.css' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => esc_html__( 'Primary Color', 'phonerepair' ),
			'slug'  => 'primary',
			'color' => 'rgba(241,122,32,1)',
		),
		array(
			'name'  => esc_html__( 'Secondary color ', 'phonerepair' ),
			'slug'  => 'secondary ',
			'color' => 'rgba(192,57,43,1)',
		),
	) );
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => esc_html__( 'small', 'phonerepair' ),
			'shortName' => esc_html__( 'S', 'phonerepair' ),
			'size'      => 14,
			'slug'      => 'small'
		),
		array(
			'name'      => esc_html__( 'regular', 'phonerepair' ),
			'shortName' => esc_html__( 'M', 'phonerepair' ),
			'size'      => 16,
			'slug'      => 'regular'
		),
		array(
			'name'      => esc_html__( 'large', 'phonerepair' ),
			'shortName' => esc_html__( 'L', 'phonerepair' ),
			'size'      => 18,
			'slug'      => 'large'
		),
	) );

}


/*-----------------add Body Classes------------------------------------------*/
function phonerepair_body_classes( $classes ) {
	global $wp_query;
	if ( is_object( $wp_query ) && is_object( $wp_query->post ) && isset( $wp_query->post->ID ) ) {
		$phonerepair_thePageID = $wp_query->post->ID;
	} else {
		$phonerepair_thePageID = '';
	}
	$phonerepair_page_show_title_area = get_post_meta( $phonerepair_thePageID, 'phonerepair_page_show_title_area', true );


	$classes[] = 'has-title-area';


	if ( phonerepair_get_option( 'phonerepair_box_wrapper', 'of' ) == 'on' ) {
		$classes[] = 'bg_body_color';
	}

	return $classes;
}

add_filter( 'body_class', 'phonerepair_body_classes' );

/*
 * ----------header title----------
 */
function phonerepair_wp_title_for_home( $phonerepair_title, $phonerepair_sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $phonerepair_title;
	}


	// Add the site description for the home/front page.
	$phonerepair_site_description = get_bloginfo( 'name', 'display' );
	if ( $phonerepair_site_description && ( is_home() || is_front_page() ) ) {
		$phonerepair_title = esc_html__( 'Home - ', 'phonerepair' ) . "$phonerepair_title $phonerepair_sep $phonerepair_site_description";
	}

	return $phonerepair_title;
}

add_filter( 'wp_title', 'phonerepair_wp_title_for_home', 10, 2 );

/**
 *-----------------add sidebar------------------------------------------
 */

function phonerepair_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Right', 'phonerepair' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="block-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'phonerepair' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="block-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'phonerepair' ),
		'id'            => 'footer-1',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="block-title">',
		'after_title'   => '</h2>',
	) );
	$phonerepair_footer_columns = phonerepair_get_option( 'phonerepair_footer_columns', 'three _columns' );

	switch ( $phonerepair_footer_columns ) {
		case "one_columns":
			break;
		case "tow_a_columns":
		case "tow_b_columns":
		case "tow_c_columns":
			register_sidebar( array(
				'name'          => esc_html__( 'Footer 2', 'phonerepair' ),
				'id'            => 'footer-2',
				'before_widget' => '<li>',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="block-title">',
				'after_title'   => '</h2>',
			) );
			break;
		case "three_columns":
			register_sidebar( array(
				'name'          => esc_html__( 'Footer 2', 'phonerepair' ),
				'id'            => 'footer-2',
				'before_widget' => '<li>',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="block-title">',
				'after_title'   => '</h2>',
			) );
			register_sidebar( array(
				'name'          => esc_html__( 'Footer 3', 'phonerepair' ),
				'id'            => 'footer-3',
				'before_widget' => '<li>',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="block-title">',
				'after_title'   => '</h2>',
			) );
			break;
	}

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Sidebar', 'phonerepair' ),
		'id'            => 'shop-widgets',
		'description'   => esc_html__( 'Appears on the shop page of your website.', 'phonerepair' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s shop-widgets">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', 'phonerepair_widgets_init' );

// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(
	'primary'       => esc_html__( 'Primary Navigation', 'phonerepair' ),
	'primary-right' => esc_html__( 'Right', 'phonerepair' ),
) );

function phonerepair_register_phonerepair_menu() {
	register_nav_menu( 'footer', esc_html__( 'Footer', 'phonerepair' ) );
}

add_action( 'init', 'phonerepair_register_phonerepair_menu' );

/**
 *--------------- Image presets-----------
 */

add_image_size( 'phonerepair_recent-blog-h', 465, 243, true );
add_image_size( 'phonerepair_recent-blog-v', 390, 308, true );
add_image_size( 'phonerepair_blog-thumb', 880, 350, true );
add_image_size( 'phonerepair_270x198', 355, 220, true );
add_image_size( 'phonerepair_100x100', 100, 100, true );
add_image_size( 'phonerepair_team', 367, 281, true );
add_image_size( 'phonerepair_sidebar-thumb', 150, 120, true );
add_image_size( 'phonerepair_1900x620', 1900, 620, true );
add_image_size( 'phonerepair_200x91', 200, 91, true );


/**
 * --------------- Register Fonts -----------
 *
 * @credit https://gist.github.com/kailoon/e2dc2a04a8bd5034682c
 */
function phonerepair_fonts_url( $phonerepair_font_body_name, $phonerepair_font_weight_style, $phonerepair_main_text_font_subsets ) {
	$phonerepair_font_url = '';

	/*
	Translators: If there are characters in your language that are not supported
	by chosen font(s), translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'phonerepair' ) ) {
		$phonerepair_font_url = add_query_arg( 'family', urlencode( $phonerepair_font_body_name . ':' . $phonerepair_font_weight_style . '&subset=' . $phonerepair_main_text_font_subsets ), "//fonts.googleapis.com/css" );
	}

	return $phonerepair_font_url;
}

/**
 * ---------------load scripts and styles--------------------------------
 */
function phonerepair_load_js_css_file() {

	/*----------google -fonts ------------------*/
	$phonerepair_font_body_name         = phonerepair_get_option( 'phonerepair_body_font_familly', 'Open Sans' );
	$phonerepair_font_weight_style      = phonerepair_get_option( 'phonerepair_font-weight-style', '400' );
	$phonerepair_main_text_font_subsets = phonerepair_get_option( 'phonerepair_main-text-font-subsets', 'latin' );

	$phonerepair_font_header_name          = phonerepair_get_option( 'phonerepair_head_font_familly', 'Open Sans' );
	$phonerepair_heading_font_weight_style = phonerepair_get_option( 'phonerepair_heading-font-weight-style', '400' );
	$phonerepair_heading_text_font_subsets = phonerepair_get_option( 'phonerepair_heading-text-font-subsets', 'latin' );

	$phonerepair_navigation_font_familly      = phonerepair_get_option( 'phonerepair_navigation_font_familly', 'Open Sans' );
	$phonerepair_navigation_font_weight_style = phonerepair_get_option( 'phonerepair_navigation-font-weight-style', '600' );
	$phonerepair_navigation_text_font_subsets = phonerepair_get_option( 'phonerepair_navigation-text-font-subsets', 'latin' );

	$phonerepair_protocol = is_ssl() ? 'https' : 'http';

	// Enqueue body font
	if ( $phonerepair_font_body_name != "default" ) {
		wp_enqueue_style( 'wd-fonts-body', phonerepair_fonts_url( $phonerepair_font_body_name, $phonerepair_font_weight_style, $phonerepair_main_text_font_subsets ), array(), '1.0.0' );
	} else {
		wp_enqueue_style( 'wd-fonts-body', phonerepair_fonts_url( 'Open+Sans', '400,300,700', 'latin,latin-ext' ), array(), '1.0.0' );
	}
	// Enqueue headers font
	if ( $phonerepair_font_header_name != "default" ) {
		wp_enqueue_style( 'wd-fonts-header', phonerepair_fonts_url( $phonerepair_font_header_name, $phonerepair_heading_font_weight_style, $phonerepair_main_text_font_subsets ), array(), '1.0.0' );
	}
	// Enqueue navigation font
	if ( $phonerepair_navigation_font_familly != "default" ) {
		wp_enqueue_style( 'wd-fonts-navigation', phonerepair_fonts_url( $phonerepair_navigation_font_familly, $phonerepair_navigation_font_weight_style, $phonerepair_navigation_text_font_subsets ), array(), '1.0.0' );
	}


	wp_enqueue_style( 'phonerepair_animation-custom', get_template_directory_uri() . "/css/animate-custom.css" );
	wp_enqueue_style( 'phonerepair_customstyle', get_template_directory_uri() . "/css/app.css" );
	wp_enqueue_style( 'component', get_template_directory_uri() . "/css/vendor/component.css" );
	wp_enqueue_style( 'phonerepair_custom-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'owlcarouselstyl', get_template_directory_uri() . "/css/owl.carousel.css" );
	if ( function_exists( 'WC' ) ) {
		wp_enqueue_style( 'woocommerce', get_template_directory_uri() . "/css/woocommerce.css" );
	}
	wp_enqueue_style( 'mediaelementplayer', get_template_directory_uri() . "/css/mediaelementplayer.css" );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css" );
	wp_enqueue_style( 'twentytwenty', get_template_directory_uri() . "/css/twentytwenty.css" );
	if ( is_singular() && comments_open() && phonerepair_get_option( 'thread_comments', '' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	wp_enqueue_script( 'zeptojs', get_template_directory_uri() . '/js/vendor/zeptojs.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/vendor/appear.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'sharrre', get_template_directory_uri() . '/js/vendor/sharrre.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/vendor/easing.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'mediaelement', get_template_directory_uri() . '/js/vendor/mediaelement.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'mediaelementplayer', get_template_directory_uri() . '/js/vendor/mediaelementplayer.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/vendor/owl-carousel.min.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'packery-metafizzy', get_template_directory_uri() . '/js/vendor/packery.metafizzy.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/vendor/counterup.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/js/vendor/easypiechart.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/vendor/waypoints.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'phonerepair_plugins_owl', get_template_directory_uri() . "/js/wd_owlcarousel.js", array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'phonerepair_scripts_shortcodes', get_template_directory_uri() . '/js/shortcode/script-shortcodes.js', array( 'jquery' ) , 1.0, true);
	wp_enqueue_script( 'event-move', get_template_directory_uri() . '/js/event.move.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'phonerepair_scripts', get_template_directory_uri() . '/js/scripts.js', array(
		'jquery',
		'hoverIntent'
	) , 1.0, true);
	wp_enqueue_script( 'ismobile', get_template_directory_uri() . '/js/isMobile.min.js', array( 'jquery' ) , 1.0, true );

	$phonerepair_map_key = phonerepair_get_option( 'phonerepair_map_key' );
	if ( $phonerepair_map_key ) {
		wp_enqueue_script( 'googlemaps', $phonerepair_protocol . "://maps.googleapis.com/maps/api/js?key=" . $phonerepair_map_key, array( 'jquery' ) );
	}

	global $wp_query;
	if ( isset( $wp_query->post->ID ) ) {
		$phonerepair_thePageID = $wp_query->post->ID;
	} else {
		$phonerepair_thePageID = '';
	}
	$phonerepair_style       = get_post_meta( $phonerepair_thePageID, 'phonerepair_page_title_area_style', true );
	$phonerepair_page_bg_img = get_post_meta( $phonerepair_thePageID, 'phonerepair_page_title_area_bg_img', true );


	wp_enqueue_style( 'custom-line', get_template_directory_uri() . '/style.css' );
	//********* inline style ***************/
	$phonerepair_custom_css = "";
	$phonerepair_custom_css .= "";
	$phonerepair_custom_css .= ".l-footer-columns, .l-footer-columns .block-title , .l-footer-columns ul li a { color: " . phonerepair_get_option( 'footer_text_color', 'rgba(255,255,255,1)' ) . "}";
	$phonerepair_custom_css .= ".copyright { background-color: " . phonerepair_get_option( 'copyright_bg_color', 'rgba(0,0,0,0)' ) . "; color: " . phonerepair_get_option( 'copyright_text_color', 'rgba(255,255,255,1)' ) . ";}";

	$phonerepair_title_bg_img = phonerepair_get_option( 'phonerepair_title_bg_image', true ) == '' ? '' : phonerepair_get_option( 'phonerepair_title_bg_image', true );

	if ( $phonerepair_title_bg_img != '1' && $phonerepair_title_bg_img != 1 ) {
		$phonerepair_custom_css .= "
	            .titlebar {
	              background-image: url('$phonerepair_title_bg_img');
	              background-size: cover;
	            }";
	}


	$phonerepair_footer_bg_img = phonerepair_get_option( 'phonerepair_footer_bg_image', '' );
	if ( ! empty( $phonerepair_footer_bg_img ) and ( $phonerepair_footer_bg_img != ' ' ) ) {
		$phonerepair_custom_css .= "
	            .l-footer-columns {
	              background-image: url('$phonerepair_footer_bg_img');
	              background-size: cover;
	            }";
	}

	if ( is_singular() && has_post_thumbnail() && ! phonerepair_is_blog() ) {

		$phonerepair_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $phonerepair_thePageID ), 'full' );
		if ( $phonerepair_thumb ) {
			$phonerepair_custom_css .= "
            .titlebar {
              background-image: url('$phonerepair_thumb[0]');
              background-size: cover;
            }";
		}
	} elseif ( is_page() & ( $phonerepair_style != 'standard' ) ) {

		if ( $phonerepair_page_bg_img != '' ) {
			$phonerepair_custom_css .= "
            .titlebar {
              background-image: url(" . esc_attr( $phonerepair_page_bg_img ) . ");
              background-repeat: no-repeat;
              background-size: cover;
            }";
		}
		$phonerepair_page_bg_color = esc_attr( get_post_meta( $phonerepair_thePageID, 'phonerepair_page_title_area_bg_color', true ) );
		if ( $phonerepair_page_bg_color != '' ) {
			$phonerepair_custom_css .= "
            .titlebar {
              background-color: " . $phonerepair_page_bg_color . ";
		        }";
		}
		$phonerepair_page_title_fontsize = esc_attr( get_post_meta( $phonerepair_thePageID, 'phonerepair_page_title_fontsize', true ) );

		if ( $phonerepair_page_title_fontsize == 'small' ) {
			$phonerepair_custom_css .= ".titlebar .title {font-size: 25px;}
	  	                .breadcrumbs { margin-top: 45px; }";
		} elseif ( $phonerepair_page_title_fontsize == 'medium' ) {
			$phonerepair_custom_css .= ".titlebar .title {font-size: 30px;}";
		} elseif ( $phonerepair_page_title_fontsize == 'big' ) {

			$phonerepair_custom_css .= ".titlebar .title {font-size: 40px;}
	  	                .breadcrumbs { margin-top: 78px; }";
		}

		$phonerepair_custom_css .= "
            .titlebar {
              text-align:" . get_post_meta( $phonerepair_thePageID, 'phonerepair_page_title_position', true ) . ";
            }
            #page-title,.breadcrumbs a{
            	color:" . get_post_meta( $phonerepair_thePageID, 'phonerepair_page_title_color', true ) . ";
            }";
	}


	$phonerepair_custom_css .= "
            .corp {
              background-size: cover;
            };";

	if ( phonerepair_get_option( 'phonerepair_box_wrapper', 'off' ) == 'on' ) {
		$phonerepair_custom_css .= "
 							body {
 								background : " . phonerepair_get_option( 'wrapper_bg_color', '' ) . ";
 							}
 			";
	}
	if ( is_rtl() ) {
		$phonerepair_custom_css .= "body, p, #lang_sel_list {
            font-family : 'Droid Arabic Kufi', serif;
          } ";

		$phonerepair_custom_css .= "h1, h2, h3, h4, h5, h6 {
              font-family : 'Droid Arabic Naskh', serif;
            } ";
	} else {
		if ( ( phonerepair_get_option( 'phonerepair_body_font_familly', 'Open Sans' ) != 'default' ) && ( phonerepair_get_option( 'phonerepair_body_font_familly', 'Open Sans' ) != false ) ) {
			$phonerepair_custom_css .= "body ,body p {
    	font-family :'" . phonerepair_get_option( 'phonerepair_body_font_familly', 'Open Sans' ) . "';
    	font-weight :" . phonerepair_get_option( 'phonerepair_body_font_weight', '400' ) . ";
    }";
		} else {
			$phonerepair_custom_css .= "body ,body p {
    	font-family: 'Open Sans', sans-serif;
    	font-weight :" . phonerepair_get_option( 'phonerepair_body_font_weight', '400' ) . ";
    }";
		}
		if ( ( phonerepair_get_option( 'phonerepair_body-font-size', '14' ) != 'default' ) && ( phonerepair_get_option( 'phonerepair_body-font-size', '14' ) != false ) ) {
			$phonerepair_custom_css .= "body p {
    	font-size :" . phonerepair_get_option( 'phonerepair_body-font-size', '14' ) . "px;
    }";
		}
		if ( ( phonerepair_get_option( 'phonerepair_head_font_familly', 'Open Sans' ) != 'default' ) && ( phonerepair_get_option( 'phonerepair_head_font_familly', 'Open Sans' ) != false ) ) {
			$phonerepair_custom_css .= "h1, h2, h3, h4, h5, h6, .menu-list a {
    	font-family :'" . phonerepair_get_option( 'phonerepair_head_font_familly', 'Open Sans' ) . "';
    	font-weight :" . phonerepair_get_option( 'phonerepair_heading-font-weight-style', '400' ) . ";
    }";
		} else {
			$phonerepair_custom_css .= "h1, h2, h3, h4, h5, h6, .menu-list a {
    	font-family: 'Open Sans', sans-serif;
    	font-weight :" . phonerepair_get_option( 'phonerepair_heading-font-weight-style', '400' ) . ";
    }";
		}

		if ( phonerepair_get_option( 'phonerepair_navigation_font_familly', 'Open Sans' ) != "default" ) {
			$phonerepair_custom_css .= ".top-bar-section ul li > a {
				font-family : '" . phonerepair_get_option( 'phonerepair_navigation_font_familly', 'Open Sans' ) . "';
			}";
		} else {
			$phonerepair_custom_css .= ".top-bar-section ul li > a {
				font-family: 'Open Sans', sans-serif;
			}";
		}
		if ( phonerepair_get_option( 'phonerepair_navigation-font-weight-style', '600' ) != "" ) {
			$phonerepair_custom_css .= ".top-bar-section ul li > a {
				font-weight : " . phonerepair_get_option( 'phonerepair_navigation-font-weight-style', '600' ) . ";
			}";
		}

		if ( phonerepair_get_option( 'phonerepair_navigation-transform', 'uppercase' ) != "" ) {
			$phonerepair_custom_css .= ".top-bar-section ul li > a {
				text-transform : " . phonerepair_get_option( 'phonerepair_navigation-transform', 'uppercase' ) . ";
			}";
		}
		if ( ( phonerepair_get_option( 'phonerepair_navigation-font-size', '14' ) != 'default' ) && ( phonerepair_get_option( 'phonerepair_navigation-font-size', '14' ) != false ) ) {
			$phonerepair_custom_css .= ".top-bar-section ul li > a {
    	font-size :" . phonerepair_get_option( 'phonerepair_navigation-font-size', '14' ) . "px;
    }";
		}
		if ( phonerepair_get_option( 'phonerepair_heading-transform', 'none' ) != "" ) {
			$phonerepair_custom_css .= "h1, h2, h3, h4, h5, h6, .menu-list a {
				text-transform : " . phonerepair_get_option( 'phonerepair_heading-transform', 'none' ) . ";
			}";
		}
		if ( phonerepair_get_option( 'phonerepair_text-transform', 'none' ) != "" ) {
			$phonerepair_custom_css .= "body ,body p {
				text-transform : " . phonerepair_get_option( 'phonerepair_text-transform', 'none' ) . ";
			}";
		}


	}
	$phonerepair_custom_css    .= "
									.primary-color_bg, .square-img > a:before,
									.boxes .box > a:before, .boxes .box .flipper a:before,
									.phonerepair_onepost .title-block span, .one_post_box .box_image .titel_icon .box_icon,
									.one_post_box .more, .boxes .box-container > a:before,
									.boxes .box-container .flipper a:before, .layout-4 div.box-icon i.fa,
									.boxes.small.layout-5 .box-icon, .boxes.small.layout-5-inverse .box-icon, 
									.boxes.small.layout-6 .box-icon i.fa, .carousel_blog span.tag a,
									.wd-carousel-container .carousel-icon i, .search_box input[type='submit'],
									table thead, table tfoot, .block-block-17, .row.call-action, .blog-info,
									button.dark:hover, button.dark:focus, .button.dark:hover, .button.dark:focus,
									span.wpb_button:hover, span.wpb_button:focus,.sidebar #searchsubmit,
									.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
									.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
									.products .product .button,
									.woocommerce #content input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt,
									.woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce-page #content input.button.alt,
									.woocommerce-page #respond input#submit.alt, .woocommerce-page a.button.alt,
									.woocommerce-page button.button.alt, .woocommerce-page input.button.alt,
									.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, 
									.woocommerce a.button:hover, .woocommerce button.button:hover, 
									.woocommerce input.button:hover, .woocommerce-page #content input.button:hover, 
									.woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover,
									.woocommerce-page button.button:hover, .woocommerce-page input.button:hover,
									.woocommerce span.onsale, .woocommerce-page span.onsale,
									.woocommerce-page button.button, .widget_product_search #searchsubmit, .widget_product_search #searchsubmit:hover,
									.sidebar #searchsubmit, .l-footer-columns #searchsubmit,
									.featured-box-text .featured-box-button a,.readmore a,.boxes.small.layout-7 .box-icon i.fa,.featured-box-button a,.l-footer-columns .wpcf7-form .wpcf7-submit
									.featured-box-button .button.alert, .textwidget input.newslettersubmit
									  {
													background :		" . phonerepair_get_option( 'primary_color', 'rgba(241,122,32,1)' ) . ";
											}";
	$phonerepair_custom_css    .= ".sidebar #s:active,
                    .sidebar #s:focus {
      border-color :    " . phonerepair_get_option( 'primary_color', 'rgba(241,122,32,1)' ) . ";
    }";
	$phonerepair_custom_css    .= "
		@media screen and (max-width: 900px){
			.creative-layout .top-bar-container, .creative-layout .top-bar
			{
			background:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";
			}
		}";
	$phonerepair_custom_css    .= "
		.style-2.corporate-layout .top-bar.top_bar_logo_left, .corporate-layout .contain-to-grid.sticky {	background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}
	";
	$phonerepair_custom_css    .= ".creative-layout .top-bar-container .creative.top-bar-section,.creative.top-bar-section {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
	$phonerepair_custom_css    .= ".creative-layout .top-bar-container.fixed .creative.top-bar-section {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
	$phonerepair_logo_position = phonerepair_get_option( 'phonerepair_logo_position', 'logo_left' );
	if ( $phonerepair_logo_position == 'logo_top' || 'logo_top_center' ) {
		if ( phonerepair_get_option( 'phonerepair_menu_bg_in_grid', 'off' ) != "off" ) {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container .creative.top-bar-section,.creative.top-bar-section {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.fixed .creative.top-bar-section {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		} else {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container,.creative.top-bar-section {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.fixed {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		}
	} else {
		if ( phonerepair_get_option( 'phonerepair_menu_bg_in_grid', 'off' ) != "off" ) {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container .top-bar.top_bar_logo_left {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.fixed .top-bar.top_bar_logo_left {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		} else {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.fixed {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		}
	}
	if ( $phonerepair_logo_position == 'logo_center' ) {

		if ( phonerepair_get_option( 'phonerepair_menu_bg_in_grid', 'off' ) != "off" ) {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .creative.top-bar-section {background-color:transparent;}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .creative.top-bar-section {background-color:transparent;}";

			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .top-bar.top_bar_logo_center {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky.fixed .top-bar.top_bar_logo_center {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		} else {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky.fixed {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		}
	}

	if ( $phonerepair_logo_position == 'logo_right' ) {

		if ( phonerepair_get_option( 'phonerepair_menu_bg_in_grid', 'off' ) != "off" ) {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .creative.top-bar-section {background-color:transparent;}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .creative.top-bar-section {background-color:transparent;}";

			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .top-bar.top_bar_logo_right {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky.fixed .top-bar.top_bar_logo_right {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		} else {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky.fixed {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		}
	}

	if ( $phonerepair_logo_position == 'logo_left' ) {

		if ( phonerepair_get_option( 'phonerepair_menu_bg_in_grid', 'off' ) != "off" ) {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .creative.top-bar-section {background-color:transparent;}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .creative.top-bar-section {background-color:transparent;}";

			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky .top-bar.top_bar_logo_left {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky.fixed .top-bar.top_bar_logo_left {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		} else {
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky, .style-2.corporate-layout .contain-to-grid .top-bar {background-color:" . phonerepair_get_option( 'navigation_bg_color', 'rgba(36,44,50,1)' ) . ";}";
			$phonerepair_custom_css .= ".creative-layout .top-bar-container.sticky.fixed {background-color:" . phonerepair_get_option( 'navigation_bg_color_sticky', 'rgba(0,0,0,1)' ) . ";}";
		}
	}
	$phonerepair_custom_css .= ".header-top  span, .social-icons li i, .social_logo_top {color:" . phonerepair_get_option( 'top_bar_text_color', 'rgba(255,255,255,1)' ) . ";}";
	$phonerepair_custom_css .= ".social-icons li i {border-color:" . phonerepair_get_option( 'top_bar_text_color', 'rgba(255,255,255,1)' ) . ";}";
	$phonerepair_custom_css .= ".l-header.style-2 .contain-to-grid .top-bar, .corporate-layout .header-top, .creative-layout .top-bar .title-area , .creative-layout .top-bar-section ul li, .top-bar-section, .top-bar-section ul, .top-bar-section li a:not(.button), .top-bar-section .dropdown li:not(.has-form):not(.active) > a:not(.button) {
	background-color:" . phonerepair_get_option( 'top_bar_bg_color', 'rgba(36,44,50,1)' ) . " !important;
	}";

	$phonerepair_custom_css .= ".creative-layout .top-bar-section ul li > a , .corporate-layout .top-bar-section ul li > a, .top-bar-section .dropdown li.title h5 a, .top-bar-section .dropdown li:not(.has-form):not(.active) > a:not(.button) {
      color :    " . phonerepair_get_option( 'navigation_text_color', 'rgba(255,255,255,1)' ) . " !important;
    }";


	$phonerepair_custom_css .= "
					.primary-color_color, a, a:focus, a.active, a:active, a:hover,.corporate-layout .top-bar-section ul li > a i,
					 .box-container:hover .box-title, .blog-posts i, .woocommerce .woocommerce-breadcrumb, .woocommerce-page .woocommerce-breadcrumb,.textwidget i:hover 
					 ,.collapsed-title h2:nth-child(2)
					 {
							color : 	" . phonerepair_get_option( 'primary_color', 'rgba(241,122,32,1)' ) . " ;
					}
					 .boxes.small.layout-3 .box-icon i {
					 	 color: rgba(255,255,255,1);
					 }
			";
	$phonerepair_custom_css .= ".blog-posts h2 a, .breadcrumbs > *, .breadcrumbs, .comment-reply-link:hover, .tab-icon
		{
			color : " . phonerepair_get_option( 'secondary_color', 'rgba(192,57,43,1)' ) . "
		}
		";
	$phonerepair_custom_css .= ".pricing-table.featured
		{
			box-shadow : " . phonerepair_get_option( 'secondary_color', 'rgba(192,57,43,1)' ) . " 0px 0px 1px 0px
		}
		";
	$phonerepair_custom_css .= "button, .button, button:hover, button:focus, .button:hover, .button:focus, .products .product:hover .button, .woocommerce-product-search > input[type='submit']
		{
			background-color : " . phonerepair_get_option( 'secondary_color', 'rgba(192,57,43,1)' ) . "
		}
		.our-packages .pricing-table h4.title {text-transform:uppercase !important;}";

	$phonerepair_custom_css .= "
											.blog-info .arrow {
    									border-left-color:" . phonerepair_get_option( 'primary_color', 'rgba(241,122,32,1)' ) . " ;
												}
												.ui-accordion-header-active, .ui-tabs-active, .box-icon {
													border-top-color:" . phonerepair_get_option( 'primary_color', 'rgba(241,122,32,1)' ) . "
												}
												
												";
	$phonerepair_custom_css .= phonerepair_get_option( 'phonerepair_theme_custom_css', '' );
	wp_add_inline_style( 'phonerepair_customstyle', $phonerepair_custom_css );
	//*********/inline style***************/
	wp_enqueue_style( 'white-style', get_template_directory_uri() . "/css/white.css" );
}

add_action( 'wp_enqueue_scripts', 'phonerepair_load_js_css_file' );


/**
 * ---------------menu--------------------------------
 */
class phonerepair_top_bar_walker extends Walker_Nav_Menu {
	static protected $phonerepair_menu_bg_test;

	function start_el( &$output, $item, $depth = 0, $args = Array(), $id = 0 ) {

		if ( is_object( $args ) ) {
			global $wp_query;

			$phonerepair_class = '';
			//$icon=$item->classes[1];
			self::$phonerepair_menu_bg_test = $item->mega_menu_bg_image;
			$phonerepair_icon               = $item->mega_menu_icon;
			if ( $item->mega_menu == 1 ) {
				$phonerepair_class = 'phonerepair_mega-menu';
			}
			$indent      = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			$class_names = $value = '';

			$classes           = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[]         = ( $item->current ) ? 'active' : '';
			$classes[]         = ( $args->has_children ) ? 'color-1 has-dropdown not-click' : '';
			$args->link_before = ( in_array( 'section', $classes ) ) ? '<label>' : '';
			$args->link_after  = ( in_array( 'section', $classes ) ) ? '</label>' : '';
			$output            .= ( in_array( 'section', $classes ) );
			$class_names       = ( $args->has_children ) ? 'has-dropdown not-click ' . $phonerepair_class : '';
			$class_names       .= ( $item->current ) ? ' active_menu' : '';
			$parent            = $item->menu_item_parent;


			$class_names = strlen( trim( $class_names ) ) > 0 ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$output      .= $indent . '
			<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

			$attributes .= ' class="has-icon" ';

			$item_output = $args->before;
			$item_output .= ( ! in_array( 'section', $classes ) ) ? '
			<a' . $attributes . '>' : '';
			if ( ( $phonerepair_icon != '' ) and ( $phonerepair_icon != '---- None ----' ) ) {

				$item_output .= '<i class="' . $phonerepair_icon . ' fa"></i> ';
			}
			/*$item_output .= '<i class="'.$icon.' fa"></i> ';*/
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= $args->link_after;
			$item_output .= ( ! in_array( 'section', $classes ) ) ? '</a>' : '';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	function end_el( &$output, $item, $depth = 0, $args = Array() ) {
		$output .= '
</li>' . "\n";
	}

	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n" . $indent . '
		<ul class="sub-menu dropdown " style = "background : transparent url(' . self::$phonerepair_menu_bg_test . ') no-repeat scroll right bottom;">
			' . "\n";
	}

	function end_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= $indent . '
</ul>' . "\n";
	}

	function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {
		$id_field = $this->db_fields['id'];
		if ( is_object( $args[0] ) ) {
			$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
		}

		return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

}

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 625;
}

/*---------wooocomerce---------*/
//Reposition WooCommerce breadcrumb 
function phonerepair_woocommerce_remove_breadcrumb() {
	remove_action(
		'woocommerce_before_main_content', 'phonerepair_woocommerce_breadcrumb', 20 );
}

function phonerepair_woocommerce_custom_breadcrumb() {
	woocommerce_breadcrumb();
}

add_action( 'woo_custom_breadcrumb', 'phonerepair_woocommerce_custom_breadcrumb' );


// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'phonerepair_woocommerce_header_add_to_cart_fragment' );

function phonerepair_woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
  <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>"
     title="<?php load_theme_textdomain( 'View your shopping cart' ); ?>"><?php echo sprintf( _n( '%d item', '%d items', WC()->cart->cart_contents_count, 'phonerepair' ), WC()->cart->cart_contents_count ); ?>
    - <?php echo WC()->cart->get_cart_total(); ?></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}


// retrieves the attachment ID from the file URL
function phonerepair_get_image_id( $image_url ) {
	global $wpdb;
	$image_url  = esc_sql( $image_url );
	$attachment = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ) );
	if ( isset( $attachment[0] ) ) {
		return $attachment[0];
	}
}


// initialize options
if ( ! function_exists( 'phonerepair_initialize_options' ) ) {
	function phonerepair_initialize_options() {

		$options_array = get_option( "phonerepair_options_array" );

		if ( ! $options_array ) {
			$options_array = array(
				"phonerepair_show_logo"                    => "on",
				"phonerepair_show_top_social_bare"         => "on",
				"phonerepair_show_title"                   => "of",
				"phonerepair_menu_in_grid"                 => "",
				"phonerepair_menu_bg_in_grid"              => "",
				"phonerepair_menu_sticky"                  => "",
				"phonerepair_menu_overlay"                 => "",
				"phonerepair_mini_card_icon"               => "ok",
				"phonerepair_search_icon"                  => "ok",
				"phonerepair_logo"                         => "http://themes.webdevia.com/phonerepair/wp-content/themes/phonerepair/images/logo-2.png",
				"phonerepair_title_bg_image"               => "",
				"phonerepair_footer_bg_image"              => "",
				"phonerepair_404_page"                     => "",
				"phonerepair_favicon"                      => "",
				"primary_color"                            => "rgba(241,122,32,1)",
				"secondary_color"                          => "rgba(192,57,43,1)",
				"phonerepair_logo_position"                => "",
				"navigation_bg_color"                      => "rgba(36,44,50,1)",
				"navigation_bg_color_sticky"               => "rgba(0,0,0,1)",
				"navigation_border_top_color"              => "",
				"navigation_text_color"                    => "rgba(255,255,255,1)",
				"top_bar_bg_color"                         => "rgba(36,44,50,1)",
				"top_bar_text_color"                       => "rgba(255,255,255,1)",
				"footer_bg_color"                          => "",
				"footer_text_color"                        => "rgba(255,255,255,1)",
				"phonerepair_footer_columns"               => "three_columns",
				"phonerepair_copyright"                    => "",
				"copyright_text_color"                     => "rgba(255,255,255,1)",
				"copyright_bg_color"                       => "rgba(0,0,0,0)",
				"twitter"                                  => "#",
				"facebook"                                 => "#",
				"flickr"                                   => "#",
				"vimeo"                                    => "#",
				"phone"                                    => "",
				"adress"                                   => "",
				"phonerepair_body_font_familly"            => "Open Sans",
				"phonerepair_font-weight-style"            => "400",
				"phonerepair_main-text-font-subsets"       => "latin",
				"phonerepair_text-transform"               => "none",
				"phonerepair_body-font-size"               => "14",
				"phonerepair_head_font_familly"            => "Open Sans",
				"phonerepair_body_font_weight"             => "",
				"phonerepair_heading-font-weight-style"    => "400",
				"phonerepair_heading-text-font-subsets"    => "latin",
				"phonerepair_heading-transform"            => "none",
				"phonerepair_navigation_font_familly"      => "Open Sans",
				"phonerepair_navigation-font-weight-style" => "600",
				"phonerepair_navigation-text-font-subsets" => "",
				"phonerepair_navigation-transform"         => "uppercase",
				"phonerepair_navigation-font-size"         => "14",
				"phonerepair_menu_style"                   => "creative",
				"page_for_posts"                           => "",
				"phonerepair_theme_custom_css"             => "",
				"phonerepair_theme_custom_js"              => ""
			);
			update_option( "phonerepair_options_array", $options_array );
		}
	}
}


// get options value
if ( ! function_exists( 'phonerepair_get_option' ) ) {
	function phonerepair_get_option( $phonerepair_option_key, $default = null ) {
		phonerepair_initialize_options();
		$options_array          = get_option( "phonerepair_options_array" );
		$phonerepair_meta_value = "";
		if ( array_key_exists( $phonerepair_option_key, $options_array ) ) {
			if ( isset( $options_array[ $phonerepair_option_key ] ) && ! empty( $options_array[ $phonerepair_option_key ] ) ) {
				$phonerepair_meta_value = esc_attr( $options_array[ $phonerepair_option_key ] );
			}

			if ( $phonerepair_meta_value == "" && isset( $default ) ) {
				$phonerepair_meta_value = $default;
			}
		}

		return $phonerepair_meta_value;
	}
}

// get options value
if ( ! function_exists( 'phonerepair_save_option' ) ) {
	function phonerepair_save_option( $phonerepair_option_key, $phonerepair_option_value ) {
		$options_array                            = get_option( "phonerepair_options_array" );
		$options_array[ $phonerepair_option_key ] = $phonerepair_option_value;
		update_option( "phonerepair_options_array", $options_array );
	}
}

function phonerepair_theme_custom_js() { ?>
  <script type="text/javascript">
		<?php echo esc_js( phonerepair_get_option( 'phonerepair_theme_custom_js' ) ) ?>
  </script>
 s
	<?php
}

add_action( 'wp_footer', 'phonerepair_theme_custom_js' );

function phonerepair_footer_menu_fallback() {
	echo '<div class="empty-menu">';
	echo esc_html__( 'Please assign a menu to the footer menu location under ', 'phonerepair' ); ?>
  <a
    href="<?php echo get_admin_url( get_current_blog_id(), 'nav-menus.php' ) ?>"><?php echo esc_html__( 'Menus Settings', 'phonerepair' ); ?></a>
  </div>
	<?php
}

function phonerepair_header_menu_fallback() {
	echo '<div class="empty-menu">';
	echo esc_html__( 'Please assign a menu to the Primary menu location under ', 'phonerepair' ); ?>
  <a
    href="<?php echo get_admin_url( get_current_blog_id(), 'nav-menus.php' ) ?>"><?php echo esc_html__( 'Menus Settings', 'phonerepair' ); ?></a>
  </div>
	<?php
}