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

/**
 * Auto-create pages and setup menu
 */
function aspiring_minds_auto_setup_pages_menu() {
    // Only run once
    if ( get_option( 'aspiring_minds_setup_pages_v1' ) ) {
        return;
    }

    $pages_to_create = array(
        'Home'       => 'home',
        'About Us'   => 'about-us',
        'Services'   => 'services',
        'Contact Us' => 'contact-us',
        'Career'     => 'career'
    );

    $menu_name = 'Main Menu';
    $menu_exists = wp_get_nav_menu_object( $menu_name );
    $menu_id = 0;

    if ( ! $menu_exists ) {
        $menu_id = wp_create_nav_menu( $menu_name );
    } else {
        $menu_id = $menu_exists->term_id;
    }

    if ( $menu_id ) {
        // Assign menu to primary location
        $locations = get_theme_mod( 'nav_menu_locations' );
        if ( ! is_array( $locations ) ) {
            $locations = array();
        }
        $locations['primary'] = $menu_id;
        set_theme_mod( 'nav_menu_locations', $locations );

        foreach ( $pages_to_create as $page_title => $page_slug ) {
            $page_check = get_page_by_path( $page_slug );
            $new_page_id = 0;
            
            if ( ! isset( $page_check->ID ) ) {
                $new_page = array(
                    'post_type'   => 'page',
                    'post_title'  => $page_title,
                    'post_name'   => $page_slug,
                    'post_status' => 'publish',
                    'post_author' => 1,
                );
                $new_page_id = wp_insert_post( $new_page );
            } else {
                $new_page_id = $page_check->ID;
            }

            if ( $new_page_id ) {
                // Check if item already exists in menu
                $menu_items = wp_get_nav_menu_items( $menu_id );
                $item_exists = false;
                if ( $menu_items ) {
                    foreach ( $menu_items as $item ) {
                        if ( (int) $item->object_id === (int) $new_page_id ) {
                            $item_exists = true;
                            break;
                        }
                    }
                }

                if ( ! $item_exists ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $page_title,
                        'menu-item-object-id' => $new_page_id,
                        'menu-item-object'    => 'page',
                        'menu-item-status'    => 'publish',
                        'menu-item-type'      => 'post_type',
                    ));
                }
            }
            
            // Set front page if it's Home
            if ( $page_title === 'Home' && $new_page_id ) {
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $new_page_id );
            }
        }
    }

    update_option( 'aspiring_minds_setup_pages_v1', true );
}
add_action( 'init', 'aspiring_minds_auto_setup_pages_menu' );
