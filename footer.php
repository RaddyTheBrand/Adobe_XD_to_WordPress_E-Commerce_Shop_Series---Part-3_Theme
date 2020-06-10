<footer>
    <div class="footer">
        <div class="footer-container">
            <h3 class="footer-container__heading">How can we help? <i data-feather="chevron-down" class="footer-container__icon"></i></h3>
            <?php
            wp_nav_menu( array(
                'menu' => '20',
                'menu_class' => 'footer-container__body'
            ));
            ?>
        </div>
        <div class="footer-container">
            <h3 class="footer-container__heading">Useful Info <i data-feather="chevron-down" class="footer-container__icon"></i></h3>
            <?php
            wp_nav_menu( array(
                'menu' => '21',
                'menu_class' => 'footer-container__body'
            ));
            ?>
        </div>
        <div class="footer-container">
            <h3 class="footer-container__heading">Company <i data-feather="chevron-down" class="footer-container__icon"></i></h3>
            <?php
            wp_nav_menu( array(
                'menu' => '22',
                'menu_class' => 'footer-container__body'
            ));
            ?>
        </div>
        <div class="footer-container">
            <h3 class="footer-container__heading">Download <i data-feather="chevron-down" class="footer-container__icon"></i></h3>
            <a href="#" class="footer-container__body"><img src="/wp-content/uploads/2020/06/appstore.png" alt="AppStore"></a>
        </div>
    </div>

    <div class="copyright">
        <div class="copyright__social">
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"></a><i data-feather="facebook"></i></a>
            <a href="#"></a><i data-feather="instagram"></i></a>
            <a href="#"></a><i data-feather="youtube"></i></a>
        </div>
        <div class="copyright__body">&copy;  <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>