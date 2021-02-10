<!DOCTYPE html>
<html lang="ja">

<?php
wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
wp_enqueue_style('font-Poppins', 'https://fonts.googleapis.com/css2?family=Poppins%3Awght%40400%3B500%3B700&#038;display=swap');
wp_enqueue_style('font-2P', 'https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap');
wp_enqueue_style('swiper-min', 'https://unpkg.com/swiper/swiper-bundle.min.css');
wp_enqueue_style('style-css', get_template_directory_uri() . './styles/style.css');
wp_head();
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo(' name'); ?></title>
</head>

<body>
  <div id="global-container">
    <header class="header">
      <section class="l-header l-content__width" id="headerMenu">
        <h1><a style="color:black" href="<?php echo home_url(); ?>">S.TANABE</a></h1>
        <div class="p-menu">
          <ul class="p-menu__list nav__links">
            <li v-for="headerList in headerLists" class="p-menu__item">
              <a :href="headerList.id" class="p-menu__link nav__link">{{headerList.name}}</a>
            </li>
          </ul>
        </div>
        <div class="p-mobile__menu">
          <input type="checkbox" id="mobile-toggle" class="p-mobile__trigger">
          <label for="mobile-toggle" class="p-mobile__btn"><span class="p-mobile__icon">&nbsp;</span></label>
          <nav class="p-mobile__contents">
            <ul class="p-mobile__list nav__links">
              <li v-for="headerList in headerLists" class="p-mobile__item">
                <button :href="'#' + headerList.name" class="p-mobile__link nav__link">{{headerList.name}}</button>
              </li>
            </ul>
          </nav>
        </div>
      </section>
    </header>
