<?php
  	$permalink = get_the_permalink();
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
    $background_img = ( isset( $thumbnail ) && $thumbnail ) ? 'style="background-image:url('.$thumbnail.');"' : "";
?>
<div class="post-story">
  <div class="sbct-thumbnail-bg" <?php _e( $background_img ); ?>>
    <a href="<?php _e( $permalink );?>" class="img-link">
      <i class="fa fa-play-circle-o" aria-hidden="true"></i>
    </a>
  </div>
  <div class="post-desc">
  	<h3 class="title"><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h3>
  	<div class="post-excerpt"><?php the_excerpt(); ?></div>
  	<div class="read-more"><a href="<?php _e( $permalink );?>">Read More</a><i class="fa fa-angle-right" aria-hidden="true"></i></div>
  </div>
</div>
