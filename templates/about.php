<?php /* Template Name: about */ ?>

<?php

use Cyan\Theme\Helpers\Templates;

$under_video = get_field('under_video');

get_header(); ?>

<section>
    <div>
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</section>

<section>
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section>
    <div>
        <p>

            <?php echo $under_video ?>
        </p>
    </div>
</section>

<?php Templates::getPart('experience'); ?>


<?php get_footer(); ?>