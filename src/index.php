<?php get_header(); ?>

<section class="top l-content__width">
  <div class="c-mainTitle">
    <h1>24時間<br>ランキング</h1>
  </div>
  <div class="p-listing__item">
    <a href="" class="p-listing__image">
      <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
    </a>
    <a href="" class="p-listing__title">タイトル</a>
  </div>
  <div class="p-listing__item">
    <a href="" class="p-listing__image">
      <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
    </a>
    <a href="" class="p-listing__title">タイトル</a>
  </div>
  <div class="p-listing__item">
    <a href="" class="p-listing__image">
      <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
    </a>
    <a href="" class="p-listing__title">タイトル</a>
  </div>
  <div class="p-listing__item">
    <a href="" class="p-listing__image">
      <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
    </a>
    <a href="" class="p-listing__title">タイトル</a>
  </div>
  <div class="p-listing__item">
    <a href="" class="p-listing__image">
      <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
    </a>
    <a href="" class="p-listing__title">タイトル</a>
  </div>
</section>

<section class="news l-content__width u-pt100">
  <div class="c-mainTitle">
    <h1>最新の記事</h1>
  </div>

  <div class="article-container">
    <article id="post-1" class="c-news">
      <div class="c-news__pic">
        <a class="c-news__pic-link" href="http://localhost/wordpress/2021/02/08/hello-world/">
          <img src="<?php echo get_template_directory_uri(); ?>./images/hero_1.jpg" alt="hero_1">
        </a>
      </div>
      <div class="c-news__meta">
        <ul class="post-categories">
          <li><a href="http://localhost/wordpress/category/uncategorized/" rel="category tag">未分類</a></li>
        </ul> <time class="c-news__time" datetime="2021-02-08">2021年02月08日</time>
      </div>
      <h2 class="c-news__title"><a href="http://localhost/wordpress/2021/02/08/hello-world/">Hello world!</a></h2>
      <div class="c-news__desc">
        <p>WordPress へようこそ。こちらは最初の投稿です。編集または削除し、コンテンツ作成を始めてください。</p>
        <p><a href="http://localhost/wordpress/2021/02/08/hello-world/">[続きを読む]</a></p>
      </div>
    </article>
  </div>
</section>

<section class="news l-content__width u-pt100">
  <div class="c-mainTitle">
    <h1>最新の記事</h1>
  </div>
  <div class="article-container" id="qiita-posts">
    <article v-for="post in posts" class="c-news">
      <div class="c-news__pic">
        <a class="c-news__pic-link" v-bind:href="post['url']">
          <img src="<?php echo get_template_directory_uri(); ?>./images/qiita.jpg" alt="hero_1">
        </a>
      </div>
      <div class="c-news__meta">
        <ul class="post-categories">
          <li><a href="#" v-for="tag in post['tags']">{{ tag['name'] }}</a></li>
        </ul> <time class=" c-news__time" datetime="2021-02-08">{{ post.created_at | moment }}</time>
      </div>
      <h2 class="c-news__title"><a v-bind:href="post['url']">{{ post['title'] }}</a></h2>
      <div class="c-news__desc">
        <p></p>
        <p><a v-bind:href="post['url']">[続きを読む]</a></p>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>
