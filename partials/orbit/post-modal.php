<?php
  $video_id       = '';
	$permalink      = get_the_permalink();
  $youtube_link   = get_post_meta( $post->ID, 'youtube_link', true );
  $has_video      = !empty( $youtube_link ) ? true : false;
  $thumbnail      = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
  $background_img = !empty( $thumbnail ) ? 'style="background-image:url('.$thumbnail.');"' : "";

  if( $has_video ){
    $query_str = parse_url( $youtube_link, PHP_URL_QUERY );
    parse_str( $query_str, $params );
    $video_id = $params['v'];
  }

?>
<?php if( $has_video ):?>
  <div class="orbit-thumbnail-bg has-ytube-video" data-behaviour="sp-ytube-video" data-video="<?php _e( $video_id ); ?>" <?php _e( $background_img ); ?>>
    <i class="fa fa-play-circle-o" aria-hidden="true"></i>
  </div>
<?php else:?>
  <div class="orbit-thumbnail-bg" <?php _e( $background_img ); ?>>
    <a href="<?php _e( $permalink );?>"></a>
  </div>
<?php endif;?>
<div class="orbit-post-content">
  <h3><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h3>
  <div class="post-excerpt"><?php the_excerpt(); ?></div>
  <a class="orbit-read-more" href="<?php _e( $permalink );?>">Read More</a>
</div>
