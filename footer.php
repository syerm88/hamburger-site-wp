<!-- footer -->
<div class="l-grid__footer">
            <footer class="l-footer">
                <ul class="c-link">
                <?php
                $args = array(
                'menu' => 'ショップ情報', // 管理画面で作成したメニューの名前
                );
                wp_nav_menu($args);
                ?>
                </ul>
                <p class="c-copy">
                    <small><?php bloginfo( 'name' ); ?>copyright: Raise Tech</small>
                </p>
            </footer>
        </div>
    </div>
        <?php wp_footer(); ?>
</body>
</html>
