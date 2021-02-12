<div slot="title">アーカイブ</div>
<ul class="details" slot="detail">
  <?php $args = array('type' => 'monthly',);
  wp_get_archives($args); ?>
</ul>
