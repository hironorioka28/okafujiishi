<?php
/*
Template Name: Blog
*/

$args = array(
  'post_type' => 'post',
  'paged' => $paged,
);
query_posts( $args );
?>

<?php get_header(); ?>
<main class="page__main<?php if (is_admin_bar_showing()): ?> page__main--isAdmin<?php endif; ?>">
  <div class="page__video">
    <div class="js-youtube js-youtube--sub" id="js-youtube"></div>
  </div><!-- /.page__video -->
  <section class="page__contents">
    <ul class="blogList">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="blogList__item">
            <a class="blogList__link" href="<?php the_permalink() ?>">
              <?php if (has_post_thumbnail()): ?>
                <div class="blogList__imgWrapper">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php endif; ?>
              <div class="blogList__titleWrapper">
                <h3 class="blogList__title"><?php the_title(); ?></h3>
                <div class="blogList__headline">
                  <?php the_excerpt(); ?>
                </div>
                <p class="blogList__date"><?php the_time("Y/m/j") ?></p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <li class="blogList__item">
          <h3>記事がありません</h3>
          <p>表示する記事はありませんでした</p>
        </li>
      <?php endif; ?>
    </ul>
  </section><!-- /.page__contents -->
</main>
<?php get_footer(); ?>
