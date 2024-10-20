<?php
if (!defined('ABSPATH')) exit; ?>

<section id="reviews" class="reviews">
    <div class="container container--outer">
        <div class="reviews__img" aria-hidden="true">
        </div>

        <div class="container">
            <div class="reviews__title-wrapper">
                <h2 id="reviews" class="reviews__title">Відгуки</h2>
            </div>
        </div>


        <div class="container container--wide container--no-gap">
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
                            <div class="reviews-list__item-inner">
                                <div class="reviews-list__item-review">
                                    <h3 class="reviews-list__item-title">
                                        <?php if ($reviewName <> '') : ?>
                                            <span class="reviews-list__name"><?php echo $reviewName; ?></span>,
                                        <?php endif; ?>
                                        <?php if ($reviewScore <> '') : ?>
                                            <span class="reviews-list__score"><?php echo $reviewScore; ?></span>
                                        <?php endif; ?>
                                    </h3>
                                    <?php if ($reviewText <> '') : ?>
                                        <div class="reviews-list__text"><?php echo $reviewText; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>