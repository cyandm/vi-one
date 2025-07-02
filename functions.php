<?php
/**
 * Cyan Theme Functions
 * this file is used to initialize the theme
 * @package CyanTheme
 */



//Constants
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_VERSION', '0.0.1' );
define( 'ENVIRONMENT', 'development' ); //development, production
define( 'THEME_SLUG', 'vi-one' );
define( 'THEME_NAME', 'vi-one' );

define( 'THEME_ASSETS_DIR', THEME_DIR . '/assets' );
define( 'THEME_ASSETS_URI', THEME_URI . '/assets' );

define( 'THEME_IMAGES_DIR', THEME_DIR . '/assets/images' );
define( 'THEME_IMAGES_URI', THEME_URI . '/assets/images' );

//Autoload
include_once THEME_DIR . '/vendor/autoload.php';

//Setup Theme
Cyan\Theme\Classes\Setup::init();


