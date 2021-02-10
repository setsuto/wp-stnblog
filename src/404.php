<?php get_header(); ?>

<div class="l-content__width u-pt20">
  <?php get_template_part('component/breadcrumb'); ?>
  <main class="content u-pt40">
    <article class="content__article">
      <section class="news">
        <div class="c-mainTitle">
          <h1><span>404&nbsp;NOT&nbsp;FOUND</span></h1>
        </div>
        <div class="u-text-center u-pt50">
          <p>お探しのページは見つかりませんでした。</p>
          <p>お手数ですが、<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
        </div>
      </section>
    </article>
    <?php get_sidebar('content'); ?>
  </main>
</div>
