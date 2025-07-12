<?php

use Cyan\Theme\Helpers\Templates;
?>

<?php get_header(); ?>

<main>

    <?php Templates::getPart('breadcrumb') ?>

    <section class="container">

        <div>

            <swiper-container class="" autoplay="true">
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

        </div>

        <div>

        </div>

    </section>

</main>

<?php get_footer();
