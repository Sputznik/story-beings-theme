<?php

/*  CONSTANTS */
if( !defined( 'SBCT_THEME_VERSION' ) ) {
  define( 'SBCT_THEME_VERSION', time() );
}

if( !defined( 'SBCT_THEME_URI' ) ) {
  define( 'SBCT_THEME_URI', get_stylesheet_directory_uri() );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-sbct-theme.php',
  'lib/sbct-orbit-cf.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
