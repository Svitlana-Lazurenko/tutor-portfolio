<?php
if (!defined('ABSPATH')) exit; ?>

<section id="reviews-2" class="reviews">
    <div id="reviews" class="scroll-point visually-hidden"></div>
    <div class="container">
        <h2 class="reviews__title">Відгуки</h2>

        <?php $reviews = get_field('reviews'); ?>

        <?php if (have_rows('reviews')) : ?>
            <ul class="reviews-list">
                <?php while (have_rows('reviews')) : the_row();
                    $review = get_sub_field('review');
                    $reviewName = $review['review_name'];
                    $reviewScore = $review['review_score'];
                    $reviewText = $review['review_text'];
                ?>
                    <li class="reviews-list__item">
                        <h3 class="reviews-list__item-title">
                            <?php if ($reviewName <> '') : ?>
                                <span class="reviews-list__name"><?php echo $reviewName; ?></span>
                            <?php endif; ?>
                            <?php if ($reviewScore <> '') : ?>
                                <span class="reviews-list__score"><?php echo $reviewScore; ?></span>
                            <?php endif; ?>
                        </h3>
                        <?php if ($reviewText <> '') : ?>
                            <div class="reviews-list__text"><?php echo $reviewText; ?></div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </div>
</section>