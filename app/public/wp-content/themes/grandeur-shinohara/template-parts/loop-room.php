<li id="room-<?php the_ID(); ?>" <?php post_class('room__list__item'); ?>>
  <a href="<?php the_permalink(); ?>">
    <figure class="room-img">
      <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else: ?>
        <img src="<?php echo esc_url(get_theme_file_uri('images/no-image.png')); ?>" alt="イメージ画像">
      <?php endif; ?>
    </figure>
  </a>
  <p class="room-tag">
    <?php echo get_the_term_list($post->ID, 'residential-apartment', '', ' | '); ?>
  </p>
</li>