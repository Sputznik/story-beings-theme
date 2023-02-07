<div class="sbct-related-slider" data-auto="true" data-dots="true" data-arrows="true" data-behaviour="sbct-related-posts-slider">
	<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
    <article class="related-post">
      <?php get_template_part( 'partials/orbit/post-story' );?>
    </article>
	<?php endwhile;?>
</div>
