<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="news u-pt40">
      <?php get_template_part('component/loop', 'news'); ?>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
