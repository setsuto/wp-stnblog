<?php get_header(); ?>

<div class="l-content__width">

  <section class="hero">
    <article class="c-listing__item">
      <a href="" class="c-listing__image">
        <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
      </a>
      <a href="" class="c-listing__title">タイトル</a>
    </article>
    <article class="c-listing__item">
      <a href="" class="c-listing__image">
        <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
      </a>
      <a href="" class="c-listing__title">タイトル</a>
    </article>
    <article class="c-listing__item">
      <a href="" class="c-listing__image">
        <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
      </a>
      <a href="" class="c-listing__title">タイトル</a>
    </article>
  </section>

  <section class="news u-pt100">
    <div class="c-mainTitle">
      <h1><span>最新の記事</span></h1>
    </div>
    <div class="c-news__container u-pt50">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-1" class="c-news">
            <div class="c-news__pic">
              <a class="c-news__pic-link" href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri() ?>./images/noimage_600x400.png" alt="noimage">
                <?php endif; ?>
              </a>
            </div>
            <div class="c-news__body">
              <div class="c-news__meta">
                <?php the_category(); ?>
                <time class="c-news__time" datetime="<?php the_time('Y-m-d-h-m'); ?>">
                  <?php the_time('Y.m.d h:m'); ?>
                </time>
              </div>
              <h2 class="c-news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="c-news__desc">
                <p><?php the_excerpt(); ?></p>
                <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>

  <section class="news u-pt100">
    <div class="c-mainTitle">
      <h1><span>QIita投稿記事</span></h1>
    </div>
    <div class="c-news__container u-pt50" id="qiita-posts">
      <article v-for="post in posts" class="c-news">
        <div class="c-news__pic">
          <a class="c-news__pic-link" v-bind:href="post['url']">
            <img src="<?php echo get_template_directory_uri(); ?>./images/qiita.jpg" alt="hero_1">
          </a>
        </div>
        <div class="c-news__body">
          <div class="c-news__meta">
            <ul class="post-categories">
              <li><a href="#" v-for="tag in post['tags']">{{ tag['name'] }}</a></li>
            </ul> <time class=" c-news__time" datetime="2021-02-08">{{ post.created_at | moment }}</time>
          </div>
          <h2 class="c-news__title"><a v-bind:href="post['url']">{{ post['title'] }}</a></h2>
          <div class="c-news__desc">
            <p>リンクをクリックすると外部サイトへ遷移します。</p>
            <p><a v-bind:href="post['url']">[続きを読む]</a></p>
          </div>
        </div>
      </article>
    </div>
  </section>

</div>
<?php get_footer(); ?>
