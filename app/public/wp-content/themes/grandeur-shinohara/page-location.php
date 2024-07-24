<?php
/*
Template Name: Location Page
*/

get_header();
?>
<main class="main">
  <?php get_template_part('template-parts/top-title'); ?>
  <div class="container">
    <!-- メインループ -->
    <?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post();
        ?>
    <section class="access">
      <div class="access-title__wrap">
        <h2 class="access-info"><?php echo strtoupper(get_the_title()); ?></h2>
      </div>
      <div class="location-access">
        <i class="fa-solid fa-location-dot">
          <?php echo CFS()->get('address'); ?>
        </i>
        <i class="fa-solid fa-train-subway">
          <?php echo esc_html(CFS()->get('nearest_station')); ?>
        </i>
      </div>
      <div class="gmap-container">
        <div id="gmap">
          <?php echo CFS()->get('google_map_embed'); ?>
        </div>
      </div>
    </section>
    <section class="environment">
      <div class="environment__wrap">
        <h2 class="environment-title">周辺環境</h2>
      </div>
      <div class="environment__view">
        <h2>スーパーマーケット</h2>
        <ul class="environment__item">
          <?php $supermarkets = CFS()->get('supermarket'); ?>
          <?php foreach ($supermarkets as $supermarket): ?>
          <li class="environment__item-list">
            <?php echo esc_html($supermarket['name']); ?>
            <?php echo esc_html($supermarket['distance']); ?>
            <?php echo esc_html($supermarket['walking_time']); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="environment__view">
        <h2>コンビニエンスストア</h2>
        <ul class="environment__item">
          <?php $convenience_stores = CFS()->get('convenience_store'); ?>
          <?php foreach ($convenience_stores as $convenience_store): ?>
          <li class="environment__item-list">
            <?php echo esc_html($convenience_store['name']); ?>
            <?php echo esc_html($convenience_store['distance']); ?>
            <?php echo esc_html($convenience_store['walking_time']); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="environment__view">
        <h2>ドラッグストア</h2>
        <ul class="environment__item">
          <?php $drugstores = CFS()->get('drugstore'); ?>
          <?php foreach ($drugstores as $drugstore): ?>
          <li class="environment__item-list">
            <?php echo esc_html($drugstore['name']); ?>
            <?php echo esc_html($drugstore['distance']); ?>
            <?php echo esc_html($drugstore['walking_time']); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="environment__view">
        <h2>ホームセンター</h2>
        <ul class="environment__item">
          <?php $home_centers = CFS()->get('home_center'); ?>
          <?php foreach ($home_centers as $home_center): ?>
          <li class="environment__item-list">
            <?php echo esc_html($home_center['name']); ?>
            <?php echo esc_html($home_center['distance']); ?>
            <?php echo esc_html($home_center['walking_time']); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="environment__view">
        <h2>郵便局</h2>
        <ul class="environment__item">
          <?php $post_offices = CFS()->get('post_office'); ?>
          <?php foreach ($post_offices as $post_office): ?>
          <li class="environment__item-list">
            <?php echo esc_html($post_office['name']); ?>
            <?php echo esc_html($post_office['distance']); ?>
            <?php echo esc_html($post_office['walking_time']); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
    <?php endwhile; ?>

    <?php endif; ?>
    <section class="contact">
      <?php get_template_part('template-parts/contact-info'); ?>
    </section>
  </div>
</main>

<?php
get_footer();