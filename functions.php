<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


function enqueuing_admin_scripts(){
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/admin-styles.css');
 
}

add_action( 'admin_enqueue_scripts', 'enqueuing_admin_scripts' );

// Add in Custom Google Fonts

function google_fonts() {
    wp_enqueue_style( 'playfair-font', '//fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap', false );
    wp_enqueue_style( 'fjalla-font', '//fonts.googleapis.com/css2?family=Fjalla+One&display=swap', false );
    wp_enqueue_style( 'roboto-font', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'google_fonts' );


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Seattle',
        'menu_title'    => 'Seattle',
        'menu_slug'     => 'seattle-tasting-room',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => '/wp-content/uploads/2022/12/wine-glass.png'
    ));

    acf_add_options_page(array(
        'page_title'    => 'Woodinville',
        'menu_title'    => 'Woodinville',
        'menu_slug'     => 'woodinville-tasting-room',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => '/wp-content/uploads/2022/12/wine-glass.png'
    ));

    acf_add_options_page(array(
        'page_title'    => 'Wine Clubs',
        'menu_title'    => 'Wine Clubs',
        'menu_slug'     => 'wine-clubs',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => get_stylesheet_directory_uri() . '/graphics/club.png'
    ));

    acf_add_options_page(array(
        'page_title'    => 'Branding',
        'menu_title'    => 'Branding',
        'menu_slug'     => 'branding',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => get_stylesheet_directory_uri() . '/graphics/brand-image.png'
    ));

    acf_add_options_page(array(
        'page_title'    => 'Home Page',
        'menu_title'    => 'Home Page',
        'menu_slug'     => 'home-page',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => '/wp-content/uploads/2023/02/home.png'
    ));

    acf_add_options_page(array(
        'page_title'    => 'Darby\'s Team',
        'menu_title'    => 'Darby\'s Team',
        'menu_slug'     => 'darby-winery-team',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => '/wp-content/uploads/2023/02/team.png'
    ));

}