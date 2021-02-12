<?php get_header(); ?>



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
<section class="hero u-pt40 l-content__width-up ">
  <div class="c-mainTitle">
    <h1><span>pick up games</span></h1>
    <!-- <p class="u-pt40">よさげなゲームがあったらぶらさげてます。</p> -->
  </div>
  <div class="swiper-container u-pt40">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero1.jpg" alt="hero_1">
            </a>
          </figure>
          <iframe src="https://store.steampowered.com/widget/968350/" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero5.jpg" alt="hero_5">
            </a>
          </figure>
          <iframe src="https://store.steampowered.com/widget/1150690/" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero3.jpg" alt="hero_3">
            </a>
          </figure>
          <iframe src="https://store.steampowered.com/widget/736260/" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero4.jpg" alt="hero_4">
            </a>
          </figure>
          <iframe src="https://store.steampowered.com/widget/701160/" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

  </div>








  <!-- </article> -->
</section>
<!-- PICK UP GAMES ----------------------------------------------------->

<div class="l-content__width">
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


        <section class="tab u-pt40">
          <!-- 最新記事 ----------------------------------------------------->
          <ul class="tab__label">
            <li><a class="active" data-id="tab__info">記事一覧</a></li>
            <li><a data-id="tab__product">コラム</a></li>
            <li><a data-id="tab__contact">セール・クーポン</a></li>
          </ul>
          <div class="tab__content active" id="tab__info">
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
          </div>
          <!-- コラム ----------------------------------------------------->
          <div class="tab__content" id="tab__product">
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
          </div>
          <!-- セール・クーポン情報 ----------------------------------------------------->
          <div class="tab__content" id="tab__contact">
            お問い合わせ。お問い合わせ。
          </div>
        </section>










      </section>
    </article>
    <?php get_sidebar('content'); ?>
  </main>
  <!-- 今月のおすすめ記事 ------------------------------------------------->
</div>
