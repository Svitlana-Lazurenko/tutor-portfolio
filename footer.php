<?php
if (!defined('ABSPATH')) exit; ?>

<footer class="footer">
</footer>

<div class="menu-container js-menu-container" aria-hidden="true">
    <button type="button" class="menu-button js-close-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Закрити мобільне меню.">
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

<div class="backdrop is-hidden" aria-hidden="true">
    <div class="modal">
        <form name="" class="form">
            <button type="submit" class="btn js-close-modal" aria-controls="modal" aria-expanded="false" aria-label="Відправити форму запису на курс та закрити модальне вікно.">
                Записатись
            </button>
        </form>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>