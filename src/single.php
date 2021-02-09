<?php get_header(); ?>

<div class="l-content__width u-pt20">
  <main class="content">
    <article class="content__article">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
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
              <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
              <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
            </div>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
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
