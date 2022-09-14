<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- main -->
        <div class="l-grid__main">
            <main class="l-main">
                <!-- mainvisual -->
                    <div class="p-mainvisual__page">
                        <h2 class="c-title__page-main"><?php the_title(); ?></h2>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-main.jpg" alt="top-images" class="p-page__top-images">
                    </div>

                <!-- article -->
                    <article class="p-article">
                            <?php if ( have_posts()) : ?>
                <?php while ( have_posts()) : the_post();?>
                <?php $slug = $post->post_name; ?><!-- スラッグを $slug に代入 -->

                <?php endwhile;
                    endif;
                ?>                
                    <!-- コンテンツ出力 -->
                <?php the_content(); ?>  
                                
                            
                    </article> 
            </main>
        </div>
                    

<?php get_footer(); ?>