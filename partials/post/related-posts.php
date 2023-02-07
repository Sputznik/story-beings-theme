<?php
/**
 * The template for displaying related posts based on post-tags.
 */
$post_id = get_the_ID();
$tags = wp_get_post_tags( $post_id, array( 'fields' => 'slugs' ) );
$tags_str = implode( ',', $tags );

$shortcode_str = do_shortcode("[orbit_query posts_per_page='6' style='related-posts-slider' tag='".$tags_str."' post__not_in='".$post_id."' ]");
if( $tags_str && strlen( $shortcode_str ) > 0 ):?>
  <div class="related-posts">
    <h3 class="headline sbct-dec-af">Recent Stories <i class="fa fa-angle-right" aria-hidden="true"></i></h3>
    <?php echo $shortcode_str;?>
  </div>
<?php endif;?>
