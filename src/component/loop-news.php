  <div class="news__item">
    <figure class="news__pic">
      <a class="news__pic-link" href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri() ?>./images/noimage_600x400.png" alt="noimage">
        <?php endif; ?>
      </a>
    </figure>
    <div class="news__preview">
      <ul class="news__meta">
        <li>
          <?php the_category(); ?>
        </li>
        <li>
          <time class="pickup__time" datetime="<?php the_time('Y-m-d-h-m'); ?>">
            <?php the_time('Y.m.d h:m'); ?>
          </time>
        </li>
      </ul>
      <div class="news__text">
        <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
      </div>
      <div class="news__more">
        <a href="<?php the_permalink(); ?>">続きを読む</a>
      </div>
    </div>
  </div>
