<?php

use Cyan\Theme\Helpers\Icon;
?>
<section class="bg-[#002D74] rounded-4xl p-5 flex flex-col gap-6 mb-6">
    <div class="flex max-md:flex-col-reverse max-md:gap-6 justify-between text-white">
        <ul class="gap-5 flex items-center max-sm:flex max-sm:flex-col max-sm:gap-5 max-sm:items-start ">
            <li><a href="#">صفحه اصلی</a></li>
            <li><a href="#">محصولات</a></li>
            <li><a href="#">مقالات</a></li>
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">سوالات متداول</a></li>
            <li><a href="#">تماس با ما</a></li>
            <li><a href="#">شعبه اصلی</a></li>

        </ul>
        <div class="[&_img]:grayscale [&_img]:brightness-0 [&_img]:invert max-md:[&_a]:flex max-md:[&_a]:justify-center">
            <?php the_custom_logo() ?>

        </div>
    </div>
    <hr class="border-gray-400">

    <div class="flex justify-between">

        <div class="flex gap-3 [&_a]:text-[#002D74]  items-center">

            <a href="#" class="p-1 size-8 bg-white  rounded-4xl flex items-center">
                <?php icon::print('Telegram'); ?>
            </a>
            <a href="#" class="p-1 size-8 bg-white rounded-4xl flex items-center">
                <?php icon::print('Instagram'); ?>
            </a>
            <a href="#" class="p-1 size-8 bg-white rounded-4xl flex items-center">
                <?php icon::print('Whatsup'); ?>
            </a>
        </div>
        <div class="text-white text-base flex items-center ">
            <p>انگیزه ای برای لبخند</p>
        </div>
    </div>
</section>