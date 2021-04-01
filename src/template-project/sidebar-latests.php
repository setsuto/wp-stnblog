<?php
$args = array(
  'post_type' => 'post', //投稿記事だけを指定
  'category_name' => 'column',
  'posts_per_page' => 10, //最新記事を5件表示
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>

  <?php while ($the_query->have_posts()) :  $the_query->the_post(); ?>

    <article class="news">
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
          <!-- <ul class="news__meta">
            <li>
              <time class="pickup__time" datetime="<?php the_time('Y-m-d-h-m'); ?>">
                <?php the_time('Y.m.d h:m'); ?>
              </time>
            </li>
          </ul> -->
          <div class="news__text">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        </div>
      </div>
    </article>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
