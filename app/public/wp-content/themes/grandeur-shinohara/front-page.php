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
  <div class="container">
    <div id="wrapper">
      <div class="swiper-wrap">
        <div class="swiper-container-4">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/livingroom.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/images/livingroom.jpg" alt="リビングルーム"
                    loading="lazy">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/livingroom2.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/images/livingroom2.jpg" alt="リビングルーム2"
                    loading="lazy">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/outside.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/images/outside.jpg" alt="外の風景" loading="lazy">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/exterior.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri() ?>/images/exterior.jpg" alt="外観" loading="lazy">
                </picture>
              </div>
            </div>
            <div class="slide-copy1">
              <p class="slide-title">リノベーション済みの空間で、新生活を始めてみませんか？
                <span class="slide-bg"></span>
              </p>
              <p class="slide__title-tow">ただいま入居者募集中！
                <span class="slide-bg-tow"></span>
              </p>
            </div>
            <div class="slide-copy2">
              <div class="copy2"><a href="https://www.athome.co.jp/ahst/sakusesu.html" target="_blank"
                  rel="noopener noreferrer">
                  <?php echo esc_html(get_theme_mod('company_name', 'サクセス不動産')); ?></a>
              </div>
              <p class="copy-text">内見の際はお気軽にお問い合わせください。</p>
              <div class="top-fastview__tel">
                <?php if ($phone_number = get_theme_mod('phone_number')): ?>
                  <a href="tel:<?php echo esc_attr($phone_number); ?>">
                    <i class="fa-solid fa-phone fa-lg tel"><?php echo esc_html($phone_number); ?></i>
                  </a>
                <?php endif; ?>
                <div class="hours-holidays">
                  <p class="hours-holidays__title">営業時間:</p>
                  <p class="hours-holidays__text">平日 9:00～17:00</p>
                  <p class="hours-holidays__text">定休日 水曜日、祭日</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="concept">
        <div class="concept__wrap">
          <div id="concept">
            <h1 class="concept__title  concept-title">グランドールシノハラの紹介</h1>
            <h2 class="concept__subtitle  concept-subtitle">新しい生活の始まりをサポートするアパート</h2>
          </div>
          <div class="concept__text">
            <p>グランドールシノハラは、<br> 群馬県邑楽郡大泉町吉田に位置する2階建てアパートです。</p>
            <p>リノベーションをし改装を施したお部屋にはモダンで<br>快適な空間に生まれ変わりました。また、<br>
              ドアインターホン完備で安全面も充実しています。</p><br>
            <p>周辺にはスーパー、コンビニ、薬局など、 <br>生活に必要な商業施設が充実しており、 </p>
            <p>日常の買い物も便利です。静かで落ち着いた住宅街に位置し、
              <br>都会の喧騒から離れた環境でのんびりとした時間を過ごせます。
            </p>
            <p>これから一人暮らしを考えている方に特におすすめのアパートです。 <br></p>
            <p>グランドールシノハラに入居してみませんか？ 今なら即日入居可能です。</p>
            <p>ぜひグランドール・シノハラへお越しください。</p>
          </div>
          <div class="concept__heading"></div>
          <div class="concept__image-wrap">
            <figure>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/housing.webp" type="image/webp">
                <img class="concept__picture-1" src="<?php echo get_template_directory_uri() ?>/images/housing.jpeg"
                  alt="住宅街のイメージ" loading="lazy" width="640" height="500">
              </picture>
            </figure>
          </div>
        </div>
      </section>
      <section class="features">
        <h2 class="features__title features-title">
          グランドールシノハラの特徴
        </h2>
        <div class="features__wrap">
          <div class="features__box">
            <div class="features__box-item">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/schedule.webp" type="image/webp">
                <img class="features-img" src="<?php echo get_template_directory_uri() ?>/images/schedule.jpg"
                  alt="即日入居可のイメージ" loading="lazy" width="460" height="300">
              </picture>
              <div class="features__txt">
                即日入居するすることができます。
              </div>
            </div>
            <div class="features__box-item">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/shopping.webp" type="image/webp">
                <img class="features-img" src="<?php echo get_template_directory_uri() ?>/images/shopping.jpeg"
                  alt="商業施設のイメージ" loading="lazy" width="460" height="300">
              </picture>
              <div class="features__txt">
                周囲にはスーパー、コンビニ、薬局など商業施設が多数
              </div>
            </div>
            <div class="features__box-item">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/renovation.webp" type="image/webp">
                <img class="features-img" src="<?php echo get_template_directory_uri() ?>/images/renovation.jpeg"
                  alt="リノベーション済みのイメージ" loading="lazy" width="460" height="300">
              </picture>
              <div class="features__txt">
                改装済みのお部屋はリノベーションを施しております。
              </div>
            </div>
          </div>
          <div class="features-button">
            <?php echo get_template_part('template-parts/room-feature'); ?>
          </div>
        </div>
      </section>
      <section class="information">
        <h2 class="information-title">お知らせ</h2>
        <!-- メインループ -->
        <?php if (have_posts()): ?>
          <ul class="information__list">
            <?php while (have_posts()):
              the_post(); ?>
              <li id="information-<?php the_ID(); ?>" <?php post_class('information__list__item'); ?>>
                <a href="<?php the_permalink(); ?> ">
                  <div class="information__list__date">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <p><?php the_title(); ?></p>
                    <span class="arrow"></span>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else: ?>
          <p>現在お知らせはありません。</p>
        <?php endif; ?>
      </section>
      <section class="contact">
        <?php get_template_part('template-parts/contact-info'); ?>
      </section>
    </div>
</main>

<?php
get_footer();