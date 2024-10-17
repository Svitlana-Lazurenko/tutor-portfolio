<?php
if (!defined('ABSPATH')) exit; ?>

<section id="hero-2" class="hero" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/paper-big.webp'; ?>);">
    <div class="container container--flex">
        <?php
        $welcome = get_field('welcome_text');
        $photo = get_field('photo');
        ?>

        <h1 class="visually-hidden"><?php the_title(); ?></h1>

        <div class="hero__text-wrapper">
            <?php if ($welcome <> '') : ?>
                <div class="hero__text"><?php echo $welcome; ?></div>
            <?php endif; ?>
            <button type="button" class="btn btn--main js-open-modal" aria-controls="modal" aria-expanded="false" aria-label="Відкрити модальне вікно запису на курс. Перший урок безкоштовно.">Перший урок безкоштовно!</button>
        </div>

        <?php if ($photo <> '') : ?>
            <img class="hero__img" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
        <?php endif; ?>
    </div>
</section>