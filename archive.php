
<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- main -->
<div class="l-grid__main">
    <main class="l-main">
        <div class="p-mainvisual">
                <h2 class="c-title__archive-main">Menu:</h2>
                <p class="c-title-sub__arcive-main">チーズバーガー</p>
        </div>
            <section class="p-section__figure">
            <h3 class="c-title__section-figure">小見出しが入ります</h3>
                        <p class="c-text__figure">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
<?php
    if( have_posts() ) : //1.投稿データがあるかの条件分岐。
        while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
            the_post(); 
            ?> 
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
            
        <?php       
            endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
        else : //6.投稿データがなければ
            echo '<p>コンテンツがありません。</p>';//7.ない時の処理
        endif; ?> 

                <!-- pagination -->
                        <?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
                    </section>
            </main>
        </div>
<?php get_footer(); ?>