<?php
if (!defined('ABSPATH')) exit; ?>

<section id="about" class="about">
    <div class="container container--outer">
        <div class="about__img-1" aria-hidden="true">
        </div>

        <div class="container">

            <?php $aboutText = get_field('about_text');
            $aboutInfo = get_field('about_info');
            $number = $aboutInfo['number'];
            $duration = $aboutInfo['duration'];
            $frequency = $aboutInfo['frequency'];
            $format = $aboutInfo['format'];
            $time = $aboutInfo['time'];
            $price = $aboutInfo['price'];
            ?>

            <div class="about__title-wrapper">
                <h2 id="about" class="about__title">Про курс</h2>
            </div>
            <img class="about__img-2" src="<?php echo get_template_directory_uri() . '/assets/images/plant-5.svg'; ?>" alt="" aria-hidden="true" />
            <?php if ($aboutText <> '') : ?>
                <div class="about__text"><?php echo $aboutText; ?></div>
            <?php endif; ?>


            <div class="about-info">
                <?php if ($number <> '') : ?>
                    <div class="about-info__card  about-info__card--number">
                        <p class="about-info__text">Вміст курсу – <?php echo $number; ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($duration <> '') : ?>
                    <div class="about-info__card  about-info__card--duration">
                        <p class="about-info__text">Тривалість курсу – <?php echo $duration; ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($frequency <> '') : ?>
                    <div class="about-info__card  about-info__card--frequency">
                        <p class="about-info__text">Як часто займатися? – <?php echo $frequency; ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($format <> '') : ?>
                    <div class="about-info__card  about-info__card--format">
                        <p class="about-info__text">Який вигляд мають заняття? – <?php echo $format; ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($time <> '') : ?>
                    <div class="about-info__card  about-info__card--time">
                        <p class="about-info__text">Коли проходять заняття? - <?php echo $time; ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($price <> '') : ?>
                    <div class="about-info__card  about-info__card--price">
                        <p class="about-info__text">Вартість – <?php echo $price; ?></p>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>