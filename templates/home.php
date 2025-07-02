<?php /* Template Name: Home */ ?>

<?php

use Cyan\Theme\Helpers\Templates;

get_header(); ?>

<main>
    <?php Templates::getPart('home/hero'); ?>
    <?php Templates::getPart('home/help'); ?>
    <?php Templates::getPart('experience'); ?>
    <?php Templates::getPart('home/about'); ?>
    <?php Templates::getPart('home/Diagnostic test'); ?>
</main>


<!-- <div>
    <p>انگیزه ای برای <hr>لبخند</p>
</div> -->
<?php get_footer(); ?>