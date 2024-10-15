<?php
if (!defined('ABSPATH')) exit; ?>

<footer class="footer">
</footer>

<div class="menu-container js-menu-container" aria-hidden="true">
    <button type="button" class="menu-button js-close-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Close mobile menu">
        <svg class="menu-button__icon">
            <use href="<?php echo get_template_directory_uri() . './assets/images/sprites/symbol/sprite.svg#assets--svg--cross"'; ?>">
            </use>
        </svg>
    </button>
    <?php
    wp_nav_menu([
        'theme_location' => "mobile_menu",
        'menu_id' => 'mobile-menu',
        'container' => 'nav',
        'container_class' => 'mobile-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ]);
    ?>
</div>

<div class="modal-window">
</div>

<?php wp_footer(); ?>
</body>

</html>