<?php
/**
 * The template for displaying category page
 */
get_header();
$category = $wp_query->get_queried_object();
?>
<div class="container wrapper-margin">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="page-title"><?php _e( $category->name ); ?></h1>
      <p class="page-description"><?php _e( $category->category_description ); ?></p>
      <div class="orbit-posts-wrapper">
        <?php echo do_shortcode('[orbit_query cat="'.$category->term_id.'" pagination="1" style="grid3-youtube" posts_per_page="12"]'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
