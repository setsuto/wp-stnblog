<?php get_header(); ?>
<div class="l-content__width u-pt20">
  <?php get_template_part('component/breadcrumb'); ?>
  <main class="content u-pt40">
    <article class="content__article">
      <section class="news">
        <?php if (have_posts()) : ?>
          <div class="c-mainTitle">
            <?php if (is_month()) : ?>
              <h1><span><?php the_time('Y年M'); ?></span></h1>
            <?php else : ?>
              <h1><span><?php wp_title(''); ?>一覧</span></h1>
            <?php endif; ?>
          </div>
          <?php while (have_posts()) : the_post(); ?>


            <article class="u-pt50">
              <?php get_template_part('component/loop', 'news'); ?>
            </article>


          <?php endwhile; ?>
        <?php else : ?>
          <div class="c-mainTitle">
            <h1><span>検索結果は0件です。</span></h1>
          </div>
        <?php endif; ?>
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </section>
    </article>
    <?php get_sidebar('content'); ?>
  </main>
</div>
