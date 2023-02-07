<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class SBCT_THEME {

  private $sidebars;

  public function __construct() {

    $this->sidebars = array(
      'sbct-single-post-sidebar'	=> array(
        'name' 				=> __( 'Single Post Sidebar', 'story-beings-theme' ),
        'description' => __( 'Appears in the single post page below the similar stories section', 'story-beings-theme' )
      )
    );

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS

    add_action( 'widgets_init', array( $this, 'widgets_init' ) );  // INITIALIZE ALL THE WIDGETS IN THE SIDEBAR

    add_filter( 'excerpt_length', function( $length ){ return 20; } );  // EXCERPT LENGTH

    add_filter( 'excerpt_more', function( $more ){ return '&hellip;'; } );  // EXCERPT MORE

  }

  function assets() {

    // ENQUEUE STYLES
    wp_enqueue_style('sbct-core-css', SBCT_THEME_URI.'/assets/css/main.css', array('sp-core-style'), SBCT_THEME_VERSION );

    // ENQUEUE SCRIPTS
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', array('jquery'), null, true);
    wp_enqueue_script( 'sbct-core-js', SBCT_THEME_URI.'/assets/js/main.js', array('jquery'), SBCT_THEME_VERSION, true );

  }

  function widgets_init() {
    foreach( $this->sidebars as $id => $sidebar ) {
      $sidebar['id'] = $id;
      $this->register_sidebar( $sidebar );
    }
  }

  function register_sidebar( $sidebar ) {
    register_sidebar( array(
      'name' 			    => $sidebar['name'],
      'id' 			      => $sidebar['id'],
      'description' 	=> $sidebar['description'],
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' 	=> "</aside>",
      'before_title' 	=> '<h3>',
      'after_title' 	=> '</h3>'
    ) );
  }

}

new SBCT_THEME;
