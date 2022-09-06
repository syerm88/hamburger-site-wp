<?php get_header(); ?>
<?php get_sidebar(); ?>
 
<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <ul class="post__meta">
                    <li class="post__meta__item">
                        <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                    </li>
                    <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
                    <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
                </ul>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
                <?php $args = array (
                    'before' => '<div class="page-split">',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    );
                    wp_link_pages( $args );
                ?>
            </div>
        <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>
<
<!-- main -->
        <div class="l-grid__main">
            <main class="l-main">
                <!-- mainvisual -->
                    <div class="p-mainvisual__single">
                        <h2 class="c-title__single-main">h1 チーズバーガー</h2>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-main.png" alt="">
                    </div>

                <!-- article -->
                    <article class="p-article">
                        <div class="c-inner__single">
                            <section class="p-wrapper__single">
                                <h2 class="c-title__h2">見出しh2</h2>
                                <p class="c-text__h2">
                                    pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。
                                </p>
                                <h3 class="c-title__h3">見出しh3</h3>
                                <h4 class="c-title__h4">見出しh4</h4>
                                <h5 class="c-title__h5">見出しh5</h5>
                                <h6 class="c-title__h6">見出しh6</h6>
                                <blockquote class="p-section__text">
                                    <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                                    <p class="p-section__text-quote">出典元 : <a href="#">◯◯◯◯◯◯◯◯◯◯◯◯</a></p>
                                </blockquote>
                                <!-- このimgにはタグ入りますか？ -->
                                <img class="c-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-burger.jpg" alt="">
                                <section class="c-image__single-menu">
                                    <img class="c-image__single-burger" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                    <p class="c-text__single-menu">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                </section>
                                <section class="c-image__single-menu-reverse">
                                    <p class="c-text__single-menu-reverse">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                    <img class="c-image__single-burger" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                </section>
                                <!-- このimgにはタグ入りますか？ -->
                                <img class="c-image__single-burger-center" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                
                                <section class="l-glid__image">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/single-menu.jpg" alt="">    
                                </section>
                                <section class="p-section__list">
                                    <ol>
                                        <li>リストリストリスト</li>
                                        <li>リストリストリスト</li>
                                    </ol>
                                    <ol>
                                        <li>リスト2リスト2リスト2</li>
                                        <li>リスト2リスト2リスト2</li>
                                    </ol>
                                    <ol>
                                        <li>リストリストリスト</li>
                                        <li>リストリストリスト</li>
                                    </ol>
                                    <ul>
                                        <li>リストリストリスト</li>
                                        <li>リストリストリスト</li>
                                    </ul>
                                    <ul>
                                        <li>リスト2リスト2リスト2</li>
                                        <li>リスト2リスト2リスト2</li>
                                    </ul>
                                    <ul>
                                        <li>リストリストリスト</li>
                                        <li>リストリストリスト</li>
                                    </ul>
                                </section>
                                <section class="c-item__code">
                                    &lt;html&gt;<br>
                                    &emsp;&emsp;&nbsp;&nbsp;&lt;head&gt;<br>
                                    &emsp;&emsp;&nbsp;&nbsp;&lt;/head&gt;<br>
                                    &emsp;&emsp;&nbsp;&nbsp;&lt;body&gt;<br>
                                    &emsp;&emsp;&nbsp;&nbsp;&lt;/body&gt;<br>
                                    &emsp;&emsp;&nbsp;&nbsp;&lt;/html&gt;<br>
                                    &lt;/html&gt;
                                </section>
                                <table class="c-item__table">
                                    <tr>
                                        <th>テーブル</th>
                                        <td>テーブル</td>
                                    </tr>
                                    <tr>
                                        <th>テーブル</th>
                                        <td>テーブル</td>
                                    </tr>
                                    <tr>
                                        <th>テーブル</th>
                                        <td>テーブル</td>
                                    </tr>
                                </table>
                                 <button class="c-button__single">ボタン</button>
                                <p class="c-text__bold">boldboldboldboldboldboldbold</p>
                        </div>
                    </article>
                </section>
            </main>
        </div>
    <?php get_footer(); ?>  
    