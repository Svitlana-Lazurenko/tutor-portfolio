<?php
if (!defined('ABSPATH')) exit; ?>

<section id="advantages" class="advantages">
    <div class="container">
        <h2 class="advantages__title">ПЕРЕВАГИ КУРСУ</h2>

        <?php $advantages = get_field('advantages'); ?>

        <?php if (have_rows('advantages')) : ?>
            <ol class="advantages">
                <?php while (have_rows('advantages')) : the_row();
                    $advantage = get_sub_field('advantage');
                ?>
                    <li class="advantages__item">
                        <?php if ($advantage <> '') : ?>
                            <div class="advantages__text"><?php echo $advantage; ?></div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ol>
        <?php endif; ?>

    </div>
</section>