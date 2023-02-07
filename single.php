<?php
/**
 * The Template for displaying all single posts
 */
get_header();
?>
<div id="sbct-single-post">
  <?php if( have_posts()  ): while( have_posts() ): the_post(); ?>
    <?php get_template_part("partials/post/single-default"); ?>
  <?php endwhile; endif; ?>
</div>
<?php get_footer();?>
