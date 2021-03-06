<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
  <div class="article__header">
    <h2 class="article__title"><?php the_title(); ?></h2>
    <ul class="article__meta">
      <li>
        <?php the_category(); ?>
      </li>
      <li>
        <time datetime="<?php the_time('Y-m-d-h-m'); ?>">
          <?php the_time('Y.m.d h:m'); ?></time>
      </li>
    </ul>
  </div>
  <div class="article__body">
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
  <div class="postLinks">
    <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?>
    </div>
    <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?>
    </div>
  </div>
  <?php comments_template(); ?>
</article>
