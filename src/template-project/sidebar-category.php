<div slot="title">カテゴリ一覧</div>
<ul class="details" slot="detail">
  <?php $args = array('title_li' => '',);
  wp_list_categories($args); ?>
</ul>
