<?php
if (!defined('ABSPATH')) exit; ?>

<section id="about" class="about">
    <div class="container">
        <h2 class="about__title">Про курс</h2>

        <?php $aboutText = get_field('about_text');
        $aboutInfo = get_field('about_info');
        $number = $aboutInfo['number'];
        $duration = $aboutInfo['duration'];
        $frequency = $aboutInfo['frequency'];
        $format = $aboutInfo['format'];
        $time = $aboutInfo['time'];
        $price = $aboutInfo['price'];
        ?>

        <?php if ($aboutText <> '') : ?>
            <div class="about__text"><?php echo $aboutText; ?></div>
        <?php endif; ?>

        <div class="about-info">
            <?php if ($number <> '') : ?>
                <p class="about-info__text about-info__text--number">Вміст курсу – <?php echo $number; ?></p>
            <?php endif; ?>
            <?php if ($duration <> '') : ?>
                <p class="about-info__text about-info__text--duration">Тривалість курсу – <?php echo $duration; ?></p>
            <?php endif; ?>
            <?php if ($frequency <> '') : ?>
                <p class="about-info__text about-info__text--frequency">Як часто займатися? – <?php echo $frequency; ?></p>
            <?php endif; ?>
            <?php if ($format <> '') : ?>
                <p class="about-info__text about-info__text--format">Який вигляд мають заняття? – <?php echo $format; ?></p>
            <?php endif; ?>
            <?php if ($time <> '') : ?>
                <p class="about-info__text about-info__text--time">Коли проходять заняття? - <?php echo $time; ?></p>
            <?php endif; ?>
            <?php if ($price <> '') : ?>
                <p class="about-info__text about-info__text--price">Вартість – <?php echo $price; ?></p>
            <?php endif; ?>
        </div>

    </div>
</section>