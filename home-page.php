<?php
if (!defined('ABSPATH')) exit; ?>

<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header(); ?>

<main>

    <?php

    get_template_part('template-parts/home-page', 'hero');

    get_template_part('template-parts/home-page', 'about');

    get_template_part('template-parts/home-page', 'advantages');

    get_template_part('template-parts/home-page', 'reviews');

    ?>
</main>

<?php get_footer(); ?>