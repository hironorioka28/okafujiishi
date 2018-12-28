<?php get_header(); ?>
<main class="page__main<?php if (is_admin_bar_showing()): ?> page__main--isAdmin<?php endif; ?>">
  <div class="page__video">
    <div class="js-youtube js-youtube--sub" id="js-youtube"></div>
  </div><!-- /.page__video -->
  <div class="page__contents">
    <div class="error">
      <p class="error__text">Not Found</p>
      <p class="error__text">ページが見つかりませんでした。</p>
    </div>
  </div>
</main>
<?php get_footer(); ?>
