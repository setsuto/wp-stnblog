<aside class="content__aside" id="acordion">
  <div class="content-aside__top">
    <div class="c-subTitle">
      <h2><span>24時間の人気記事</span></h2>
    </div>

    <?php dynamic_sidebar('sidebar'); ?>



    <!-- <div class="c-subTitle u-pt20">
      <h2><span>おすすめ講座</span></h2>
    </div> -->

    <!-- <section class="sidebar-content">
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
    </section> -->

    <div class="c-subTitle u-pt20">
      <h2><span>当サイトについて</span></h2>
    </div>

    <section class="profile u-pt40">
      <div class="profile__header">
        <div class="profile__pic"></div>
        <div class="profile__text">
          <h1>SETSUTO</h1>
        </div>
      </div>
      <div class="profile__body">
        <p>
          27歳高卒フリーターのおっさんです。<br>
          趣味はパソコンかたかたと映画鑑賞。<br>
          御用がありましたらツイッターのDM、又はリプライからお願いします。
        </p>
        <ul class="profile__icon">
          <li>
            <a href="https://twitter.com/intent/tweet?screen_name=stnb1201&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @stnb1201</a>
          </li>
        </ul>
      </div>
      <div class="search">
        <input type="text" placeholder="Search" class="search__input">
      </div>
    </section>

    <div class="c-subTitle u-pt20">
      <h2><span>その他のコンテンツ</span></h2>
    </div>

    <section class="category u-pt40">
      <accordion>
        <div slot="title">カテゴリ一覧</div>
        <div class="details" slot="detail">
          <ul>
            <?php $args = array('title_li' => '',);
            wp_list_categories($args); ?>
          </ul>
        </div>
      </accordion>
    </section>

    <section class="archive">
      <accordion>
        <div slot="title">アーカイブ</div>
        <div class="details" slot="detail">
          <ul>
            <?php $args = array('type' => 'monthly',);
            wp_get_archives($args); ?>
          </ul>
        </div>
      </accordion>
    </section>
  </div>
  <?php get_footer(); ?>
</aside>
