<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );
    //head
    function hamburger_script() {
        wp_enqueue_style( 'M+PLUS+1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap', array() );
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', array() );
        wp_enqueue_style( 'Noto+Sans+JP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap', array(), );
        wp_enqueue_style('ress', '//cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css', array(), false, 'all');
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array('ress'), 'all' );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'hamburger_script');
    //sidebar
    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'All Menu',
                'id'            => 'menu_widget',
                'description'   => 'メニューの一覧です',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="c-title__sidebar">',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );

    

    