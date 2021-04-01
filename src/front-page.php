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
<section class="hero u-pt40">
  <div class="c-mainTitle  l-content__width-up ">
    <h1><span>pick up games</span></h1>
    <p class="u-pt40">リンク先で概要やPV等が確認できます。画像をクリックで簡単な紹介文が表示されます。
    </p>
  </div>
  <div class="swiper-container u-pt30  l-content__width-up ">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero1.jpg" alt="hero_1">
            </a>
            <div class="c-mask">
              <p class="c-mask__caption">
                「ホテル・ソウルズ」は独特な2Dグラフィックのミステリーアドベンチャーゲームです。 薬学者のあなたは、つらい旅程の末に貴重で神秘的な石を得たものの、翌朝ホテルの誰かがその石を盗み出します! あなたはこの奇妙で不思議なホテルで石を探し、ホテルの秘密を知ることができるでしょうか?
              </p>
            </div>

          </figure>
          <iframe src="https://store.steampowered.com/widget/968350/?t=%20" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero5.jpg" alt="hero_5">
            </a>
            <div class="c-mask">
              <p class="c-mask__caption">
                夢日記やmotherシリーズに似た雰囲気のホラーゲーム(PG12相当？)、開発に6年かかっていることもありシナリオはよく練られています。
                ポップでどこか懐かしさを感じるキャラクター達と楽し気な雰囲気とは裏腹に、時より見え隠れする不穏な気配...。とりあえずPVだけでも是非見てほしい。
              </p>
            </div>
          </figure>
          <iframe src="https://store.steampowered.com/widget/1150690/?t=%20" frameborder="0" width="100%" height="200px"></iframe>
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
            <div class="c-mask">
              <p class="c-mask__caption">
                受賞歴を誇るマイクロストラテジーシリーズの最新作で、自分自身の王国を築き上げ、グリードの脅威から守り抜け！新しいソロプレイと協力プレイのモードで、新しい技術やユニット、敵、乗り物、秘密の数々を存分に楽しもう。
              </p>
            </div>
          </figure>
          <iframe src="https://store.steampowered.com/widget/701160/?t=%20" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero6.jpg" alt="hero_4">
            </a>
            <div class="c-mask">
              <p class="c-mask__caption">
                カードゲームとローグライクゲームを融合させて、最高のシングルプレイヤーデッキビルダーを作りました。ユニークなデッキを作り、奇妙な生き物に遭遇し、巨大な力の遺物を発見し、スパイアを倒してください！
              </p>
            </div>
          </figure>
          <iframe src="https://store.steampowered.com/widget/646570/?t=%20" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero__content">
          <figure class="hero__image">
            <a v-bind:href="post['url']" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/games/hero7.jpg" alt="hero_4">
            </a>
          </figure>
          <iframe src="https://store.steampowered.com/widget/294100/41602/?t=%20" frameborder="0" width="100%" height="200px"></iframe>
        </div>
      </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
<!-- PICK UP GAMES ----------------------------------------------------->

<div class="l-content__width">
  <!-- 今月のおすすめ記事 ------------------------------------------------->
  <main class="content u-pt80">
    <article class="content__article">
      <section class="news">
        <div class="c-mainTitle">
          <h1><span>24時間の人気記事</span></h1>
        </div>
        <div class="pickup-box u-pt50" id="pickup">
          <!-- ピックアップウィジェット -->
          <?php dynamic_sidebar('pickup'); ?>
          <!-- ピックアップウィジェット -->
        </div>
        <!-- <div class="c-mainTitle">
          <h1><span>記事一覧</span></h1>
        </div> -->
        <div class="tab">
          <ul class="tab__label">
            <li><a class="active" data-id="tab__info">最新記事</a></li>
            <li><a data-id="tab__product">コラム</a></li>
            <li><a data-id="tab__product">セール</a></li>
          </ul>
          <div class="tab__content active" id="tab__info">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <article class="news">
                  <?php get_template_part('template-parts/loop', 'news'); ?>
                </article>
              <?php endwhile; ?>
            <?php endif; ?>

            <div class="news__footer">
              <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
              } ?>
            </div>
          </div>
          <div class="tab__content" id="tab__product">
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
                  <?php get_template_part('template-parts/loop', 'news'); ?>
                </article>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div>
          <div class="tab__content" id="tab__product">
            <?php
            $args = array(
              'post_type' => 'post', //投稿記事だけを指定
              'category_name' => 'game',
              'posts_per_page' => 10, //最新記事を5件表示
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>

              <?php while ($the_query->have_posts()) :  $the_query->the_post(); ?>
                <article class="news">
                  <?php get_template_part('template-parts/loop', 'news'); ?>
                </article>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div>
        </div>
      </section>
    </article>



    <aside class="content__aside" id="acordion">
      <div class="content-aside__top">
        <?php get_search_form(); ?>

        <section class="sidebar-category u-pt10">
          <accordion>
            <?php get_template_part('template-project/sidebar', 'category'); ?>
          </accordion>
        </section>
        <section class="sidebar-archive">
          <accordion>
            <?php get_template_part('template-project/sidebar', 'archive'); ?>
          </accordion>
        </section>


        <div class="c-subTitle u-pt20">
          <h2><span>今週の人気記事</span></h2>
        </div>

        <!-- サイドバーウィジェット -->
        <?php dynamic_sidebar('sidebar'); ?>
        <!-- サイドバーウィジェット -->

        <div class="c-subTitle u-pt20">
          <h2><span>今月の人気記事</span></h2>
        </div>
        <section class="u-pt40">
          <?php get_template_part('template-project/sidebar', 'latests'); ?>
        </section>


        <div class="c-subTitle u-pt20">
          <h2><span>web系入門ススメ</span></h2>
          <p class="u-pt40">ブログ作成に役立った講座・参考書</p>
        </div>
        <section class="sidebar-content">
          <?php get_template_part('template-project/sidebar', 'study'); ?>
        </section>

        <div class="c-subTitle u-pt20">
          <h2><span>当サイトについて</span></h2>
        </div>
        <section class="sidebar-profile u-pt20">
          <?php get_template_part('template-project/sidebar', 'profile'); ?>
        </section>
      </div>
      <?php get_footer(); ?>
    </aside>
  </main>
</div>
