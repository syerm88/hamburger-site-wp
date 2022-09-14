<!-- sidebar -->
<div class="l-grid__sidebar">
    
            <aside class="l-sidebar">
                <!-- <h2 class="c-title__sidebar">Menu</h2> -->
                <!-- <?php wp_nav_menu
                (array('theme_location ' => 'category_widget')); ?> -->
              <?php
        if ( is_active_sidebar( 'menu_widget' ) ) :
            dynamic_sidebar( 'menu_widget' );
        else:
    ?>
    <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
                
            </aside>
            <div class="l-sidebar-bg-cover"></div>
        </div>