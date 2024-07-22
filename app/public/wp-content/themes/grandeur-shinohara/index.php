<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grandeur-shinohara
 */

get_header();
?>
<main class="main">
  <?php get_template_part('template-parts/top-title'); ?>
  <div class="container">
    <section class="news">
      <div class="news__wrap">
        <h1 class="news-title">お知らせ一覧</h1>
      </div>
      <div class="wrapper">
        <ul class="news__list">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_pere_page' => -1,
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()):
              $the_query->the_post(); ?>
              <?php get_template_part('template-parts/loop-content'); ?>
            <?php endwhile; ?>
          <?php else: ?>
            <p>お知らせはありません</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <?php get_sidebar('archives'); ?>
      </div>
      <div class="pagination">
        <?php //ページリスト表示処理
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
          $paginate_format = '';
          $paginate_base = add_query_arg('paged', '%#%');
        } else {
          $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');
          $paginate_base .= '%_%';
        }
        echo paginate_links(
          array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $the_query->max_num_pages,
            'mid_size' => 3,
            'current' => ($paged ? $paged : 1),
            'prev_text' => ' <i class="fa-solid fa-angles-left fa-lg"></i>',
            'next_text' => '<i class="fa-solid fa-angles-right fa-lg"></i>',
          )
        );
        ?>
      </div>
    </section>
    <section class="contact">
      <?php get_template_part('template-parts/contact-info'); ?>
    </section>
  </div>
</main>

<?php
get_footer();