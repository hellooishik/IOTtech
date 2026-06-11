<?php
/**
 * Aspiring Minds Theme functions and definitions
 *
 * @package Aspiring_Minds
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function aspiring_minds_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register a primary menu
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'aspiring-minds' ),
	) );
}
add_action( 'after_setup_theme', 'aspiring_minds_setup' );

function aspiring_minds_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'aspiring-minds-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue main CSS
	wp_enqueue_style( 'aspiring-minds-main', get_template_directory_uri() . '/assets/css/main.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue main JS
	wp_enqueue_script( 'aspiring-minds-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'aspiring_minds_scripts' );
