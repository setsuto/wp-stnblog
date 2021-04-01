<?php get_header(); ?>
<div class="l-content__width u-pt20">
  <?php get_template_part('template-parts/breadcrumb'); ?>
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
          <section class="u-pt40">
            <?php while (have_posts()) : the_post(); ?>
              <article class="u-pt5">
                <?php get_template_part('template-parts/loop', 'news'); ?>
              </article>
            <?php endwhile; ?>
          </section>
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

    <aside class="content__aside" id="acordion">
      <div class="content-aside__top">
        <?php get_search_form(); ?>
        <div class="c-subTitle u-pt20">
          <h2><span>24時間の人気記事</span></h2>
        </div>
        <!-- サイドバーウィジェット -->
        <?php dynamic_sidebar('sidebar'); ?>
        <!-- サイドバーウィジェット -->

        <div class="c-subTitle u-pt20">
          <h2><span>最新記事一覧</span></h2>
        </div>
        <section class="u-pt30">
          <?php get_template_part('template-project/sidebar', 'latests'); ?>
        </section>



        <section class="sidebar-category u-pt40">
          <accordion>
            <?php get_template_part('template-project/sidebar', 'category'); ?>
          </accordion>
        </section>
        <section class="sidebar-archive">
          <accordion>
            <?php get_template_part('template-project/sidebar', 'archive'); ?>
          </accordion>
        </section>
      </div>
      <?php get_footer(); ?>
    </aside>
  </main>
</div>
