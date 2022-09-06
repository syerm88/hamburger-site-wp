<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- main -->
    <div class="l-grid__main">
        <main class="l-main">
            <div class="p-mainvisual">
                <h2 class="c-title__archiveseach-main">Seach:</h2>
                <p class="c-title-sub__arciveseach-main"><?php echo get_search_query(); ?></P>
            </div>
            
<?php if( have_posts() ) : ?>
    <p class="p-search-snumber">『<?php echo get_search_query(); ?>』の検索結果:<?php echo $wp_query->found_posts; ?>件</p>
    <?php while( have_posts() ) : the_post(); ?> 
    <section id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="c-card">
        <figure class="c-inner__card">
            <?php the_post_thumbnail(); ?>
            <figcaption class="c-card__article">
                <h2 class="c-card__title"><?php the_title(); ?></h2>
                <h3 class="c-card__title-sub">小見出しが入ります</h3>
                <p class="c-card__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。   
                </p>
                <a href="<?php the_permalink(); ?>">詳しく見る</a>  
            </figcaption>
        </figure>
    </section>
    <?php endwhile; ?>
    <?php else: ?>
        <p class=p-search-result>検索結果はありませんでした</p>
    <?php endif; ?> 
                                    
<!-- pagination -->
<?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
            </main>
        </div>
            
<?php get_footer(); ?>