<?php

// CREATES META FIELD
add_filter( 'orbit_meta_box_vars', function( $meta_box ){

  $meta_box['post'] = array(
		array(
			'id'			=> 'sbct-youtube-link',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'youtube_link'	=> array(
					'type' => 'text',
					'text' => 'Youtube Video Url'
				)
			)
		)
	);

	return $meta_box;

});
