<?php 


// Add support for post Featured Images
add_theme_support( 'post-thumbnails' ); 

// Load jQuery
wp_enqueue_script("jquery");


// Load Bootstrap JS
function wpbootstrap()
{
	
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap' );

}

add_action( 'wp_enqueue_scripts', 'wpbootstrap' );



// Register Nav Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-nav-menu' => __( 'Main Nav Menu' ),
    )
  );
}

add_action( 'init', 'register_my_menus' );



?>