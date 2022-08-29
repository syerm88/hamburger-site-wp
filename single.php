<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- reset.css destyle -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <title>Hamburger</title>
</head>
<body>
    <div class="l-grid">

 <!-- header -->
        <div class="l-grid__header">
            <header class="l-header">
                <div class="l-header__content">
                    <button class="c-button">
                        <span>Menu</span>
                    </button>
                        <h1 class="l-header__logo">Hamburger</h1>
                    <form class="p-seach-form" action="#" method="post">
                        <span class="search_box">
                            <input class="p-seach-form-keyword" type="text">
                        </span>
                        <input class="p-button__seach" type="submit" name="submit" value="検索">
                    </form>
                </div>
            </header>
        </div>
<!-- sidebar -->
     <div class="l-grid__sidebar">
        <aside class="l-sidebar">
            <h2 class="c-title__sidebar">Menu</h2>
            <ul class="p-side__menu">
                <li><h3 class="c-title__menu__burger">バーガー</h3></li>
                <li class="c-item__menu">ハンバーガー</li>
                <li class="c-item__menu">チーズバーガー</li>
                <li class="c-item__menu">テリヤキバーガー</li>
                <li class="c-item__menu">アボカドバーガー</li>
                <li class="c-item__menu">フィッシュバーガー</li>
                <li class="c-item__menu">ベーコンバーガー</li>
                <li class="c-item__menu">チキンバーガー</li>
            </ul>
            <ul class="p-side__menu">
                <li><h3 class="c-title__menu">サイド</h3></li>
                <li class="c-item__menu">ポテト</li>
                <li class="c-item__menu">サラダ</li>
                <li class="c-item__menu">ナゲット</li>
                <li class="c-item__menu">コーン</li>
            </ul>
            <ul class="p-side__menu">
                <li><h3 class="c-title__menu">ドリンク</h3></li>
                <li class="c-item__menu">コーラ</li>
                <li class="c-item__menu">ファンタ</li>
                <li class="c-item__menu">オレンジ</li>
                <li class="c-item__menu">アップル</li>
                <li class="c-item__menu">紅茶 (Ice/Hot)</li>
                <li class="c-item__menu">コーヒー (Ice/Hot)</li>
            </ul>
        </aside>
        <div class="l-sidebar-bg-cover"></div>
    </div>
<!-- main -->
        <div class="l-grid__main">
            <main class="l-main">
                <!-- mainvisual -->
                    <div class="p-mainvisual__single">
                        <h2 class="c-title__single-main">h1 チーズバーガー</h2>
                        <img src="/img/single-main.png" alt="">
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
                                <img class="c-image" src="/img/single-burger.jpg" alt="">
                                <section class="c-image__single-menu">
                                    <img class="c-image__single-burger" src="/img/single-menu.jpg" alt="">
                                    <p class="c-text__single-menu">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                </section>
                                <section class="c-image__single-menu-reverse">
                                    <p class="c-text__single-menu-reverse">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                    <img class="c-image__single-burger" src="/img/single-menu.jpg" alt="">
                                </section>
                                <!-- このimgにはタグ入りますか？ -->
                                <img class="c-image__single-burger-center" src="/img/single-menu.jpg" alt="">
                                
                                <section class="l-glid__image">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
                                        <img src="/img/single-menu.jpg" alt="">
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
                    
<!-- footer -->
    <div class="l-grid__footer">
        <footer class="l-footer">
            <ul class="c-link">
                <li class="c-link__shop">ショップ情報</li>
                <li class="c-link__history">ヒストリー</li>
            </ul>
            <p class="c-copy">
                <small>copyright: Raise Tech</small>
            </p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</div>
</body>
</html>