<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

        <div class="group">

            <div class="site-footer__col-one">
                <nav class="nav-list">
                    <?php dynamic_sidebar('footer-1'); ?>
                </nav>
            </div>

            <div class="site-footer__col-two-three-group">
                <nav class="nav-list">
                    <div class="site-footer__col-two">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
            </div>
<!--hii-->
            <div class="site-footer__col-three">
                <h3 class="headline headline--small">Learn</h3>
                <nav class="nav-list">
                    <?php dynamic_sidebar('footer-3'); ?>
                </nav>
            </div>
        </div>

        <div class="site-footer__col-four">
            <nav class="nav-list">
                <?php dynamic_sidebar('footer-4'); ?>
            </nav>
        </div>
    </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>