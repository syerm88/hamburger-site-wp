<?php get_header(); ?>
<?php get_sidebar(); ?>

<h2 class="pageTitle">404 NOT FOUND<span>ERROR</span></h2>
<div class="main">
    <div class="p-wrapper__error">
        <p>お探しのページが見つかりませんでした。</p>
        <p>申し訳ございませんが、<a href="<?php echo esc_url(home_url('/')); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
    </div>
</div>

<?php get_footer(); ?>