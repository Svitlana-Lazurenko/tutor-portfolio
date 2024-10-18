<?php
if (!defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr" id="top">

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

            <?php $logo = get_field('logo', 'option'); ?>
            <?php $phone = get_field('phone', 'option'); ?>
            <?php $instagram = get_field('instagram', 'option'); ?>

            <div class="header-menu__wrapper-left">
                <?php if ($logo <> '') : ?>
                    <a class="logo" href="#top">
                        <img class="logo__img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                    </a>
                <?php endif; ?>

                <nav class="header-menu">
                    <ul class="menu">
                        <li class="menu-item"><a href="#about">Про курс</a></li>
                        <li class="menu-item"><a href="#advantages">Переваги</a></li>
                        <li class="menu-item"><a href="#path">Шлях до знань</a></li>
                        <li class="menu-item"><a href="#reviews">Відгуки</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-menu__wrapper-right">
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


                <button type="button" class="btn btn--open js-open-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Відкрити мобільне меню.">
                    <svg class="btn--open__icon">
                        <use href="<?php echo get_template_directory_uri() . './assets/images/sprites/symbol/sprite.svg#assets--svg--menu-hamburger"'; ?>"></use>
                    </svg>
                </button>
            </div>

        </div>
    </header>