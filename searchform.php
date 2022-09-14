<form class="p-seach-form" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <span class="search_box">
    <input class="p-seach-form-keyword" type="search" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="キーワードを入力">
    </span>
    <input class="p-button__seach" id="searchsubmit" type="submit" value="検索">
</form>