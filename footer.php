<?php
if (!defined('ABSPATH')) exit; ?>

<footer class="footer">
</footer>

<div class="menu-container js-menu-container" aria-hidden="true">
    <?php $phone = get_field('phone', 'option'); ?>
    <?php $instagram = get_field('instagram', 'option'); ?>

    <button type="button" class="btn btn--close js-close-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Закрити мобільне меню.">
        <svg class="btn--open__icon">
            <use href="<?php echo get_template_directory_uri() . './assets/images/sprites/symbol/sprite.svg#assets--svg--cross"'; ?>">
            </use>
        </svg>
    </button>

    <nav class="mobile-menu">
        <ul class="menu">
            <li class="menu-item"><a href="#about">Про курс</a></li>
            <li class="menu-item"><a href="#advantages">Переваги</a></li>
            <li class="menu-item"><a href="#path">Шлях до знань</a></li>
            <li class="menu-item"><a href="#reviews">Відгуки</a></li>
        </ul>
    </nav>

    <div class="link-wrapper">
        <?php if ($phone <> '') : ?>
            <a class="link link--phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>">
                <svg class="link__icon">
                    <use href="<?php echo get_template_directory_uri() . '/assets/images/sprites/symbol/sprite.svg#assets--svg--phone'; ?>" />
                    </use>
                </svg>
            </a>
        <?php endif; ?>
        <?php if ($instagram <> '') : ?>
            <a class="link link--instagram" href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer">
                <svg class="link__icon">
                    <use href="<?php echo get_template_directory_uri() . '/assets/images/sprites/symbol/sprite.svg#assets--svg--instagram'; ?>" />
                    </use>
                </svg>
            </a>
        <?php endif; ?>
    </div>
</div>

<div class="backdrop is-hidden" aria-hidden="true">
    <div class="modal">
        <form name="enrollment_form" class="form" autocomplete="on">
            <p class="form__description">Якесь речення Якесь речення Якесь речення Якесь речення Якесь речення Якесь речення</p>
            <input class="form__input" autocomplete="name" type="text" name="name" placeholder="Ім'я" arial-label="Поле для вводу імені" />
            <input class="form__input" autocomplete="tel" type="tel" name="phone" placeholder="Номер телефону" arial-label="Поле для вводу номера телефону" />
            <button type="submit" class="btn-main btn-main--modal js-close-modal" aria-controls="modal" aria-expanded="false" aria-label="Відправити форму запису на курс та закрити модальне вікно.">
                Записатись
            </button>
        </form>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>