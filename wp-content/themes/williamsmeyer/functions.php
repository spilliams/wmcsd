<?php
/**
 * Williams & Meyer functions and definitions.
 *
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */
 
/**
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Twelve supports.
 *
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Williams & Meyer 1.0
 */
function williamsmeyer_setup() {
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'gallery' ) );
  
  // Add a sidebar below the nav for a widget!
  if ( function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Below Nav',
      'id' => 'below-nav',
      'description' => 'Appears as a full-width banner just below the nav bar',
      'before_widget' => '<hr />',
      'after_widget' => '<hr />',
      'before_title' => '',
      'after_title' => '',
    ))
  }

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 890, 550 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'williamsmeyer_setup' );
