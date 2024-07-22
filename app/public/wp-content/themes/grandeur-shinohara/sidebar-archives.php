<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grandeur-shinohara
 */

if (!is_active_sidebar('side-widget')) {
  return;
}
?>
<aside class="archive">
  <h3 class="archive-sidebar__ttl">月別の一覧</h3>
  <ul class="archive-list">
    <?php dynamic_sidebar('side-widget'); ?>
  </ul>
</aside>