<form action="<?php echo home_url('/'); ?>" method="get" class="search">
  <input class="search__input" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="キーワードを入力">
</form>
