<?php
/**
 * The Template for displaying all single posts
 */
$youtube_link = get_post_meta( $post->ID, 'youtube_link', true );
?>
<?php if( strlen( trim( $youtube_link ) ) > 0 ): ?>
  <div class="video-container">
    <div class="container">
      <div class="youtube-video-wrapper">
        <?php if ( wp_oembed_get( $youtube_link ) ) : ?>
          <?php echo wp_oembed_get( $youtube_link ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="container content-container">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="post-title"><?php the_title();?></h1>
      <div class="post-content"><?php the_content(); ?></div>
      <?php if( has_category() ):?>
        <div class="post-categories">
          <h4>Theme:</h4>
          <?php the_category( '', '', '' ); ?>
        </div>
      <?php endif;?>
      <?php if( has_tag() ):?>
        <div class="post-tags">
          <h4>Tags:</h4>
          <?php the_tags( '', '', '' ); ?>
        </div>
      <?php endif;?>
    </div>
  </div>
</div>
<div class="single-prefooter">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php get_template_part( 'partials/post/related-posts' ); ?>
        <?php if ( is_active_sidebar( 'sbct-single-post-sidebar' ) ) { dynamic_sidebar( 'sbct-single-post-sidebar' ); } ?>
      </div>
    </div>
  </div>
</div>
