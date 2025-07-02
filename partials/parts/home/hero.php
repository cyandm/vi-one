<?php

use Cyan\Theme\Helpers\Templates;

$query = new WP_Query([
    'post_type' => 'slider',
    'posts_per_page' => -1,
    'tax_query' => [
        [
            'taxonomy' => 'slider_place',
            'field'    => 'slug',
            'terms'    => 'home',
        ],
    ],
]);

if (!$query->have_posts()) return;
?>


<section class="bg-no-repeat bg-cover pt-18 -mt-60 -z-10">

    <swiper-container class="md:h-screen" autoplay="true">
        <?php
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <swiper-slide>
                    <?php Templates::getCard('slider') ?>
                </swiper-slide>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </swiper-container>

</section>