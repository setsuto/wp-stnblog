<?php get_header(); ?>
<div class="l-content__width u-pt20">
  <?php get_template_part('component/breadcrumb'); ?>
  <main class="content u-pt40">
    <article class="content__article">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-project/single', 'article'); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </article>

    <aside class="content__aside" id="acordion">
      <div class="content-aside__top">
        <?php get_search_form(); ?>
        <div class="c-subTitle u-pt10">
          <h2><span>24時間の人気記事</span></h2>
        </div>
        <!-- サイドバーウィジェット -->
        <?php dynamic_sidebar('sidebar'); ?>
        <!-- サイドバーウィジェット -->

        <div class="c-subTitle u-pt20">
          <h2><span>最新記事一覧</span></h2>
        </div>
        <section class="u-pt40">
          <?php get_template_part('template-project/sidebar', 'latests'); ?>
        </section>

        <div class="c-subTitle u-pt20">
          <h2><span>その他</span></h2>
        </div>

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
