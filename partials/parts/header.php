<section class="w-full bg-white mt-10 rounded-4xl flex justify-between items-center py-2 px-3.5">

    <div class="rounded-4xl">

        <?php wp_nav_menu([
            'menu_id' => 'main-menu',
            'menu_class' => 'lg:flex max-lg:hidden gap-6 bg-slate-200/40 rounded-4xl items-center px-5 py-2.5 [&_li]:px-1 [&_li]:py-0.5 [&_li]:hover:text-cynBlue [&_li]:hover:bg-white [&_li]:transition-all [&_li]:duration-300 [&_li]:rounded-xl',
            'depth' => '3',
            'theme_location' => 'header-menu',
            'container' => 'ul'
        ]); ?>

    </div>

    <div>
        <?php the_custom_logo() ?>
    </div>

</section>