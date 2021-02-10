<?php get_header(); ?>

<div class="l-content__width">

  <section class="u-pt40">
    <div class="hero" id="qiita-posts">
      <article v-for="post in posts">
        <div class="pickup__pic">
          <a class="pickup__pic-link" v-bind:href="post['url']" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>./images/qiita.jpg" alt="hero_1">
          </a>
        </div>
      </article>
    </div>
  </section>


  <main class="content u-pt40">
    <article class="content__article">
      <section class="news">
        <div class="c-mainTitle">
          <h1><span>PICK&nbsp;UP</span></h1>
        </div>
        <div class="pickup__container u-pt50">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article class="pickup">
                <div class="pickup__pic">
                  <a class="pickup__pic-link" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri() ?>./images/noimage_600x400.png" alt="noimage">
                    <?php endif; ?>
                  </a>
                </div>
                <div class="pickup__body">
                  <div class="pickup__meta">
                    <?php the_category(); ?>
                    <time class="pickup__time" datetime="<?php the_time('Y-m-d-h-m'); ?>">
                      <?php the_time('Y.m.d h:m'); ?>
                    </time>
                  </div>
                  <h2 class="pickup__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="pickup__desc">
                    <p><?php the_excerpt(); ?></p>
                    <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                  </div>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </section>
      <section class="news">
        <div class="c-mainTitle">
          <h1><span>最新記事</span></h1>
        </div>
        <?php get_template_part('component/loop', 'news'); ?>
      </section>

    </article>
    <?php get_sidebar('content'); ?>
  </main>

</div>
