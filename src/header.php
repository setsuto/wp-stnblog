<!DOCTYPE html>
<html lang="ja">

<?php
wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
wp_enqueue_style('font-Poppins', 'https://fonts.googleapis.com/css2?family=Poppins%3Awght%40400%3B500%3B700&#038;display=swap');
wp_enqueue_style('font-2P', 'https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap');
wp_enqueue_style('vendors-css', get_template_directory_uri() . '/styles/vendors/swiper.min.css');
wp_enqueue_style('style-css', get_template_directory_uri() . '/styles/style.css');
wp_enqueue_script('jquery');
wp_head();
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="カッコウ速報,カッコウ,5ch,2ch,steam,ゲーム,アニメ" />
<title><?php bloginfo(' name'); ?></title>
</head>

<body>
  <div id="global-container">
    <header class="header">
      <section class="l-header l-content__width" id="headerMenu">
        <h1><a style="color:black" href="<?php echo home_url(); ?>">カッコウ速報（作成中）</a></h1>
      </section>
    </header>
