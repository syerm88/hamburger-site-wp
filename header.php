<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="l-grid">
<!-- header -->
        <div class="l-grid__header">
            <header class="l-header">
                <div class="l-header__content">
                    <button class="c-button">
                        <span>Menu</span>
                    </button>
                            <h1 class="l-header__logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?><span class="header__ttl__sub"></span></a></h1>
                            <!-- <p class="header__description"><?php bloginfo( 'description' ); ?></p>
                          -->
                            <?php get_search_form(); ?>
                </div>
            </header>
        </div>