<?php get_header(); ?>
<div class="l-content__width u-pt20">
  <?php get_template_part('component/breadcrumb'); ?>
  <main class="content u-pt40">
    <article class="content__article">
      <section class="news">
        <div class="c-mainTitle">
          <h1><span><?php the_search_query(); ?>の検索結果</span></h1>
        </div>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="u-pt50">
              <?php get_template_part('component/loop', 'news'); ?>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </section>
      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>
    </article>
    <?php get_sidebar('content'); ?>
  </main>
</div>
