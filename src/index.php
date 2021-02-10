<?php get_header(); ?>

<div class="l-content__width">
  <main class="content u-pt40">
    <article class="content__article">
      <section class="news">
        <div class="c-mainTitle">
          <?php if (is_month()) : ?>
            <h1><span><?php the_time('Y年M'); ?></span></h1>
          <?php else : ?>
            <h1><span><?php wp_title(''); ?></span></h1>
          <?php endif; ?>
        </div>
        <?php get_template_part('component/loop', 'news'); ?>
      </section>
    </article>
    <?php get_sidebar('content'); ?>
  </main>

</div>
<?php get_footer(); ?>
