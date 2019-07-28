<footer class="py-5 bg-dark">
    <div class="container">
        <?php wp_footer(); ?>
        <div id="footer-menu" class="row">
            <div class="col-sm">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'BottomLeft',
                    'depth'              => 2
                ));
                ?>
            </div>
            <div class="col-sm">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'BottomMiddle',
                    'depth'              => 2
                ));
                ?>
            </div>
            <div class="col-sm">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'BottomRight',
                    'depth'              => 2
                ));
                ?>
            </div>
        </div>
        <p class="m-0 text-center text-white">Copyright © Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>