<?php get_header(); ?>

<div class="l-content__width">

  <!-- <section class="u-pt40">
    <div class="c-mainTitle">
      <h1><span>Qiita</span></h1>
    </div>
    <article class="hero u-pt50" id="qiita-posts">
      <div v-for="post in limitCount" class="hero__content">
        <figure class="hero__image">
          <a v-bind:href="post['url']" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/qiita.jpg" alt="hero_1">
          </a>
        </figure>
        <div class="hero__body">
          <div class="hero__title">
            <a v-bind:href="post['url']" target="_blank">
              <h2 class="hero__title">{{ post['title'] }}</h2>
            </a>
          </div>
        </div>
        <time class="hero__time">{{ post.created_at | moment }}</time>
      </div>
    </article>
  </section> -->

  <!-- PICK UP GAMES ----------------------------------------------------->
  <section class="u-pt40">
    <div class="c-mainTitle">
      <h1><span>pick up games</span></h1>
      <p class="u-pt40">毎月更新予定です。概要から感想まで軽く書いているので興味があったらどうぞ。</p>
    </div>
    <article class="hero u-pt30">
      <div class="hero__content">
        <figure class="hero__image">
          <a v-bind:href="post['url']" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero1.jpg" alt="hero_1">
          </a>
        </figure>
        <iframe src="https://store.steampowered.com/widget/968350/" frameborder="0" width="100%" height="100%"></iframe>
      </div>
      <div class="hero__content">
        <figure class="hero__image">
          <a v-bind:href="post['url']" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero2.jpg" alt="hero_2">
          </a>
        </figure>
        <iframe src="https://store.steampowered.com/widget/481510/" frameborder="0" width="100%" height="100%"></iframe>
      </div>
      <div class="hero__content">
        <figure class="hero__image">
          <a v-bind:href="post['url']" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero3.jpg" alt="hero_3">
          </a>
        </figure>
        <iframe src="https://store.steampowered.com/widget/736260/" frameborder="0" width="100%" height="100%"></iframe>
      </div>
      <div class="hero__content">
        <figure class="hero__image">
          <a v-bind:href="post['url']" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero4.jpg" alt="hero_4">
          </a>
        </figure>
        <iframe src="https://store.steampowered.com/widget/701160/" frameborder="0" width="100%" height="100%"></iframe>
      </div>
    </article>
  </section>
  <!-- PICK UP GAMES ----------------------------------------------------->


  <!-- 今月のおすすめ記事 ------------------------------------------------->
  <main class="content u-pt80">
    <article class="content__article">
      <section class="news">
        <div class="c-mainTitle">
          <h1><span>今月のおすすめ記事</span></h1>
        </div>
        <div class="hero__container u-pt50" id="pickup">
          <?php dynamic_sidebar('pickup'); ?>
        </div>
      </section>
      <section class="news">
        <div class="c-mainTitle">
          <h1><span>最新記事</span></h1>
        </div>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="news u-pt40">
              <?php get_template_part('component/loop', 'news'); ?>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </section>
    </article>
    <?php get_sidebar('content'); ?>
  </main>
  <!-- 今月のおすすめ記事 ------------------------------------------------->
</div>
