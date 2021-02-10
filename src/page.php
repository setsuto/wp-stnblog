<?php get_header(); ?>
<div class="l-content__width u-pt20">
  <?php get_template_part('component/breadcrumb'); ?>
  <div class="c-mainTitle u-pt50">
    <h1><span><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></span></h1>
  </div>
  <main class="u-text-center u-pt60" style="height: 60vh;">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>


        <section>
          <?php the_content() ?>
        </section>

      <?php endwhile; ?>
    <?php endif ?>

  </main>
</div>



<?php get_footer(); ?>
