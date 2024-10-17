<?php
if (!defined('ABSPATH')) exit; ?>

<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header(); ?>

<main>
    <div class="hero-about-wrapper">
        <?php
        get_template_part('template-parts/home-page', 'hero');

        get_template_part('template-parts/home-page', 'about');
        ?>
    </div>
    <?php
    get_template_part('template-parts/home-page', 'advantages');

    get_template_part('template-parts/home-page', 'reviews');

    get_template_part('template-parts/home-page', 'path');
    ?>
</main>

<?php get_footer(); ?>