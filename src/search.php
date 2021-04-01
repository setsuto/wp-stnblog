<?php get_header(); ?>
<div class="l-content__width u-pt20">
  <?php get_template_part('component/breadcrumb'); ?>
  <main class="content u-pt40">
    <article class="content__article">
      <section class="news">
        <div class="c-mainTitle">
          <h1><span><?php the_search_query(); ?>の検索結果</span></h1>
        </div>
        <section class="u-pt40">
          <?php while (have_posts()) : the_post(); ?>
            <article class="u-pt5">
              <?php get_template_part('template-parts/loop', 'news'); ?>
            </article>
          <?php endwhile; ?>
        </section>
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </section>
      <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>
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
          <h2><span>関連記事一覧</span></h2>
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
