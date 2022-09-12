<?php get_header(); ?>
<?php get_sidebar(); ?>


<!-- main -->
<div class="l-grid__main">
    <main class="l-main">
    <div class="p-mainvisual--single">
        <h1><?php the_title(); ?></h1>
        <?php if ( have_posts()) : ?>
            <?php while ( have_posts()) : the_post();?>
            <?php $slug = $post->post_name; ?><!-- スラッグ名を取得 -->
            
            <?php the_post_thumbnail('full');?>
            <?php endwhile; ?>
            
            <?php endif; ?> 
        </div>
   
         
        <!-- <article class="p-article"> -->
            <div class="c-inner__single">
                <section class="c-containar">
                    <?php the_content();?>
                   
                                                 

                </section>

            </div>
        <!-- </article> -->

                
    </main>
</div>
<?php get_footer(); ?>  
    