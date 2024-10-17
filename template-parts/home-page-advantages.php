<?php
if (!defined('ABSPATH')) exit; ?>

<section id="advantages-2" class="advantages">
    <div id="advantages" class="scroll-point visually-hidden"></div>
    <div class="container">
        <h2 class="advantages__title">Переваги курсу</h2>

        <?php $advantages = get_field('advantages'); ?>

        <?php if (have_rows('advantages')) : ?>
            <ol class="advantages-list">
                <?php while (have_rows('advantages')) : the_row();
                    $advantage = get_sub_field('advantage');
                ?>
                    <li class="advantages-list__item">
                        <?php if ($advantage <> '') : ?>
                            <div class="advantages-list__text"><?php echo $advantage; ?></div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ol>
        <?php endif; ?>

    </div>
</section>