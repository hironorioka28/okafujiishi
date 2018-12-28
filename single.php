<?php

$previous_post = get_previous_post(true);
$next_post = get_next_post(true);

?>

<?php get_header(); ?>

<main class="page__main<?php if (is_admin_bar_showing()): ?> page__main--isAdmin<?php endif; ?>">
  <div class="page__video">
    <div class="js-youtube js-youtube--sub" id="js-youtube"></div>
  </div><!-- /.page__video -->
  <section class="page__contents page__contents--article">
    <article class="article">
      <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="article__title">
          <a class="aritcle__titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <div class="article__content">
          <div class="articleBody js-blogImg js-blogImg--single">
            <p><?php the_content('Read more'); ?></p>
          </div>
        </div>
        <div class="article__content">
          <time class="article__date" datetime="<?php the_time('Y-m-dTH:i'); ?>">Published at: <?php the_time('Y/m/d H:i'); ?></time>
        </div>
        <div class="article__content"><?php the_category(); ?></div>
      <?php endwhile; endif; ?>
      <div class="article__content">
        <div class="article__prevNext">
          <?php if (!empty($previous_post)): $prev_thum = get_the_post_thumbnail($previous_post->ID, array(300, 300)); ?>
            <a class="article__prev" href="<?php echo get_permalink($previous_post->ID); ?>">
              <div class="article__prevNextImgWrapper">
                <?php if ($prev_thum): echo $prev_thum; endif; ?>
              </div>
            </a>
          <?php endif; ?>
          <?php if (!empty($next_post)): $next_thum = get_the_post_thumbnail($next_post->ID, array(300, 300)); ?>
            <a class="article__next" href="<?php echo get_permalink($next_post->ID); ?>">
              <div class="article__prevNextImgWrapper">
                <?php if ($next_thum): echo $next_thum; endif; ?>
              </div>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </article>
  </section>
</main>

<?php get_footer(); ?>
