<?php

// load the theme css
function theme_styles() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'animation', get_template_directory_uri() . '/css/fontello/css/animation.css' );
    wp_enqueue_style( 'fontello-codes', get_template_directory_uri() . '/css/fontello/css/fontello-codes.css' );
    wp_enqueue_style( 'animation-embedded', get_template_directory_uri() . '/css/fontello/css/fontello-embedded.css' );
    wp_enqueue_style( 'animation-ie7-codes', get_template_directory_uri() . '/css/fontello/css/fontello-ie7-codes.css' );
    wp_enqueue_style( 'animation-ie7', get_template_directory_uri() . '/css/fontello/css/fontello-ie7.css' );
    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello/css/fontello.css' );
    wp_enqueue_style( 'stroll', get_template_directory_uri() . '/css/stroll.min.css' );
}
// load the theme js
function theme_js() {
    wp_enqueue_script( 'disable-scrolling', get_template_directory_uri() . '/js/disable_scrolling.js', array('jquery'), '', true );
    wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/js/fastclick.js', array('jquery'), '', false );
    wp_enqueue_script( 'stroll', get_template_directory_uri() . '/js/stroll.min.js', array(''), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main-ck.js', array('jquery','modernizr'), '', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.js', array('jquery'), '', true );
    wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav-ck.js', array('jquery'), '', true );
    wp_enqueue_script( 'headroom', get_template_directory_uri() . '/js/headroom.js', array('jquery'), '', true );
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky.js', array('jquery'), '', true );
    wp_enqueue_script( 'admin-shortcut', get_template_directory_uri() . '/js/admin-shortcut.js', array('jquery'), '', true );
    wp_register_script( 'flexslider', get_template_directory_uri() . '/js/flexslider-ck.js', array('jquery'), '', true );
    wp_register_script( 'home', get_template_directory_uri() . '/js/home.js', array('jquery'), '', true );
    wp_register_script( 'map', get_template_directory_uri() . '/js/map-ck.js', array('jquery'), '', true );
    wp_register_script( 'projects', get_template_directory_uri() . '/js/projects-ck.js', array('jquery'), '', true );
    wp_register_script( 'studio', get_template_directory_uri() . '/js/studio-ck.js', array('jquery'), '', true );
    wp_register_script( 'gallery', get_template_directory_uri() . '/js/gallery-ck.js', array('jquery'), '', true );
    wp_register_script( 'contact', get_template_directory_uri() . '/js/contact-ck.js', array('jquery'), '', true );
    wp_register_script( 'single-project', get_template_directory_uri() . '/js/single-project-ck.js', array('jquery'), '', true );
    wp_register_script( 'stats-generator', get_template_directory_uri() . '/js/stats-generator-ck.js', array('jquery'), '', true );
    wp_register_script( 'stats-animator', get_template_directory_uri() . '/js/stats-animator-ck.js', array('jquery'), '', true );
    wp_register_script( 'masonry', get_template_directory_uri() . '/js/masonry.js', array('jquery'), '', true );
    
    if( is_single() ) {
        wp_enqueue_script( 'single-project' );
        wp_enqueue_script( 'stats-generator' );
        wp_enqueue_script( 'stats-animator' );
    }
    if( is_page('home') || is_page('test') ) {
        wp_enqueue_script( 'flexslider' );
        wp_enqueue_script( 'home' );
    }
    if( is_page('projects') ) {
        wp_enqueue_script( 'projects' );
    }
    if( is_page('studio') ) {
        wp_enqueue_script( 'studio' );
    }
    if( is_page('gallery') ) {
        wp_enqueue_script( 'gallery' );
        wp_enqueue_script( 'masonry' );
    }
    if( is_page('contact') ) {
        wp_enqueue_script( 'map' );
    }
}

function get_image($field, $the_size) {
    $the_image = wp_get_attachment_image_src( $field, $the_size );
    echo $the_image[0];
}

function any_ptype_on_cat($request) {
    if ( isset($request['category_name']) )
        $request['post_type'] = 'any';

    return $request;
}

function pdc_dashboard_widget_function() {
    // Display whatever it is you want to show.
    echo "Hello World, how are you doing today?";
}

function pdc_remove_menus(){
  // remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
}

function pdc_remove_dashboard_meta() {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal'); //since 3.8
}

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action( 'admin_init', 'pdc_remove_dashboard_meta' );
add_action( 'admin_menu', 'pdc_remove_menus' );
add_filter('request', 'any_ptype_on_cat');
add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'get_image', 'get_image' );

// Enable custom menus
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// add_image_size( "cover", 2000, 1126, true );
add_image_size( "cover", 1400, 1050, true );
add_image_size( "cover_nocrop", 1400, 1050, false);
// add_image_size( "half" , 1000, 563, true );
add_image_size( "half" , 700, 394, true );
add_image_size( "half_nocrop" , 700, 394, false );

?>