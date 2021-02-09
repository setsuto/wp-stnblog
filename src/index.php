<?php get_header(); ?>

<div class="l-content__width">

  <section class="news u-pt40">
    <div class="c-mainTitle">
      <h1><span>QIita投稿記事</span></h1>
    </div>
    <div class="u-pt50">
      <div class="swiper-container" id="qiita-posts">
        <div class="swiper-wrapper">
          <div class="swiper-slide" v-for="post in posts">
            <div class="pickup__pic">
              <a class="pickup__pic-link" v-bind:href="post['url']" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>./images/qiita.jpg" alt="hero_1">
              </a>
            </div>
            <div class="pickup__body">
              <div class="pickup__meta">
                <ul class="post-categories">
                  <li><a href="#" v-for="tag in post['tags']" target="_blank">{{ tag['name'] }}</a></li>
                </ul> <time class=" pickup__time" datetime="2021-02-08">{{ post.created_at | moment }}</time>
              </div>
              <h2 class="pickup__title"><a v-bind:href="post['url']" target="_blank">{{ post['title'] }}</a></h2>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
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
              <article id="post-1" class="pickup">
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
        <div class="u-pt50">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <ul class="news__list">
                <li class="news__item">
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
                      <p><?php the_excerpt(); ?></p>
                      <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                    </div>
                  </div>
                </li>
              </ul>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </section>

    </article>
    <aside class="content__aside">
      <div class="c-subTitle">
        <h2><span>24時間の人気記事</span></h2>
      </div>
      <section class="sidebar-content">
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">タイトル</a>
        </div>
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">タイトル</a>
        </div>
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">タイトル</a>
        </div>
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">タイトル</a>
        </div>
      </section>
      <div class="c-subTitle u-pt20">
        <h2><span>おすすめ講座</span></h2>
      </div>
      <section class="sidebar-content">
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/udemy_1.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">【初心者から上級者まで】１日で学べるエクセルの教科書　マスターコース</a>
        </div>
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/udemy_2.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">高度なCSSとSass：Flexbox、グリッド、アニメーションなど！</a>
        </div>
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/udemy_1.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">【初心者から上級者まで】１日で学べるエクセルの教科書　マスターコース</a>
        </div>
        <div class="c-listing__item">
          <a href="" class="c-listing__image">
            <img src="<?php echo get_template_directory_uri(); ?>./images/udemy_2.jpg" alt="hero_1">
          </a>
          <a href="" class="c-listing__title">高度なCSSとSass：Flexbox、グリッド、アニメーションなど！</a>
        </div>
      </section>
    </aside>
  </main>

</div>
<?php get_footer(); ?>
