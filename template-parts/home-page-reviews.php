<?php
if (!defined('ABSPATH')) exit; ?>

<section id="reviews" class="reviews">
    <div class="container">
        <h2 class="reviews__title">ВІДГУКИ</h2>

        <?php $reviews = get_field('reviews'); ?>

        <?php if (have_rows('reviews')) : ?>
            <ul class="reviews">
                <?php while (have_rows('reviews')) : the_row();
                    $review = get_sub_field('review');
                    $reviewName = $review['review_name'];
                    $reviewScore = $review['review_score'];
                    $reviewText = $review['review_text'];
                ?>
                    <li class="reviews__item">
                        <?php if ($reviewName <> '') : ?>
                            <span class="reviews__name"><?php echo $reviewName; ?></span>
                        <?php endif; ?>
                        <?php if ($reviewScore <> '') : ?>
                            <span class="reviews__score"><?php echo $reviewScore; ?></span>
                        <?php endif; ?>
                        <?php if ($reviewText <> '') : ?>
                            <div class="reviews__text"><?php echo $reviewText; ?></div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </div>
</section>