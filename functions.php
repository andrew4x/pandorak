<?php
//* Start the engine
// include_once( get_template_directory() . '/lib/init.php' );

// Load child theme text domain
load_child_theme_textdomain( 'pandorak' );

add_action( 'genesis_setup', 'pandorak_setup', 15 );

function pandorak_setup() {
    // Define theme constants
    define( 'CHILD_THEME_NAME', 'Pandora K' );
    define( 'CHILD_THEME_URL', 'http://github.com/andrew4x/pandorak/' );
    define( 'CHILD_THEME_VERSION', '0.0.1' );

    // Add HTML5 markup structure
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    
    // Add viewport meta tag for mobile browsers
    add_theme_support( 'genesis-responsive-viewport' );
    
    // Add theme support for accessibility
    add_theme_support( 'genesis-accessibility', array( 
        '404-page',
        'drop-down-menu',
        'headings',
        'rems',
        'search-form',
        'skip-links'
    ) );   
}

// Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'pandorak_load_scripts' );
function pandorak_load_scripts() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Merriweather:300,300italic,700,700italic&subset=latin,cyrillic', array(), CHILD_THEME_VERSION );
}
