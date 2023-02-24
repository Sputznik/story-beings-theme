<?php
/**
 * The template for displaying tag page
 */
get_header();
$tag = $wp_query->get_queried_object();
?>
<div class="container wrapper-margin">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="page-title"><?php _e( $tag->name ); ?></h1>
      <p class="page-description"><?php _e( $tag->description ); ?></p>
      <div class="orbit-posts-wrapper">
        <?php echo do_shortcode('[orbit_query tag="'.$tag->slug.'" pagination="1" style="grid3-youtube" posts_per_page="12"]'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
