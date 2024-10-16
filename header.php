<?php
if (!defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="container container--flex">


            <div class="header-menu__wrapper">
                <?php $logo = get_field('logo', 'option'); ?>
                <?php $phone = get_field('phone', 'option'); ?>
                <?php $instagram = get_field('instagram', 'option'); ?>

                <?php if ($logo <> '') : ?>
                    <a class="logo" href="<?php echo home_url(); ?>">
                        <img class="logo__img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                    </a>
                <?php endif; ?>

                <?php
                wp_nav_menu([
                    'theme_location' => "header_menu",
                    'menu_id' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'header-menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ]);
                ?>
            </div>

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

            <button type="button" class="menu-button js-open-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Відкрити мобільне меню.">
                <svg class="menu-button__icon">
                    <use href="<?php echo get_template_directory_uri() . './assets/images/sprites/symbol/sprite.svg#assets--svg--menu-hamburger"'; ?>"></use>
                </svg>
            </button>

        </div>
    </header>