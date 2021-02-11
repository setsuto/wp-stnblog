<aside class="content__aside" id="acordion">
  <div class="content-aside__top">
    <?php get_search_form(); ?>
    <div class="c-subTitle u-pt20">
      <h2><span>24時間の人気記事</span></h2>
    </div>

    <?php dynamic_sidebar('sidebar'); ?>



    <div class="c-subTitle u-pt20">
      <h2><span>その他のコンテンツ</span></h2>
    </div>

    <section class="category u-pt40">
      <accordion>
        <div slot="title">カテゴリ一覧</div>
        <ul class="details" slot="detail">
          <?php $args = array('title_li' => '',);
          wp_list_categories($args); ?>
        </ul>
      </accordion>
    </section>

    <section class="archive">
      <accordion>
        <div slot="title">アーカイブ</div>
        <ul class="details" slot="detail">
          <?php $args = array('type' => 'monthly',);
          wp_get_archives($args); ?>
        </ul>
      </accordion>
    </section>

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
          ネット文化とゲームと映画が大好きです。<br>
          趣味のパソコンカタカタが興じてブログを作ってみました。楽しんでいってください。
        </p>
        <ul class="profile__icon">
          <li>
            <a href="https://twitter.com/intent/tweet?screen_name=stnb1201&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @stnb1201</a>
          </li>
        </ul>
      </div>

    </section>


    <div class="c-subTitle u-pt20">
      <h2><span>web系入門ススメ</span></h2>
    </div>
    <section class="sidebar-content">
      <div class="listing__item">
        <div class="listing__image">
          <a href="https://www.udemy.com/course/excel-start/" target="_blank" style="padding-top: 66.5%;">
            <img src="<?php echo get_template_directory_uri(); ?>./images/udemy_1.jpg" alt="hero_1">
          </a>
        </div>
        <div class="listing__title">
          <a href="https://www.udemy.com/course/excel-start/" target="_blank">【初心者から上級者まで】１日で学べるエクセルの教科書　マスターコース</a>
        </div>
      </div>
      <div class="listing__item">
        <div class="listing__image">
          <a href="https://www.udemy.com/course/advanced-css-and-sass/" target="_blank" style="padding-top: 66.5%;">
            <img src="<?php echo get_template_directory_uri(); ?>./images/udemy_2.jpg" alt="hero_1">
          </a>
        </div>
        <div class="listing__title">
          <a href="https://www.udemy.com/course/advanced-css-and-sass/" target="_blank">高度なCSSとSass：Flexbox、グリッド、アニメーションなど！</a>
        </div>
      </div>



      <div class="listing__item">
        <div class="listing__image">
          <a href="https://www.amazon.co.jp/dp/4797398892/" target="_blank" style="padding-top: 140%;">
            <img src="<?php echo get_template_directory_uri(); ?>./images/book1.jpg" alt="hero_1">
          </a>
        </div>
        <div class="listing__title">
          <a href="https://www.amazon.co.jp/dp/4797398892/" target="_blank">1冊ですべて身につくHTML & CSSとWebデザイン入門講座</a>
        </div>
      </div>



      <div class="listing__item">
        <div class="listing__image">
          <a href="https://www.amazon.co.jp/dp/4297111853/" target="_blank" style="padding-top: 140%;">
            <img src="<?php echo get_template_directory_uri(); ?>./images/book2.jpg" alt="hero_1">
          </a>
        </div>
        <div class="listing__title">
          <a href="https://www.amazon.co.jp/dp/4297111853/" target="_blank">WordPress 仕事の現場でサッと使える! デザイン教科書</a>
        </div>
      </div>
    </section>



  </div>
  <?php get_footer(); ?>
</aside>
