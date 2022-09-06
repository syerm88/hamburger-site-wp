<form class="p-seach-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <span class="search_box">
    <input class="p-seach-form-keyword" placeholder="" name="s" id="s" value="<?php get_search_query(); ?>" placeholder="キーワードを入力">
    </span>
    <input class="p-button__seach" id="searchsubmit" type="submit" value="検索">
</form>