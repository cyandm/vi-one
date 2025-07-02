<?php
$postId = $args['post-id'] ?? get_the_ID();
$mobile_slider = get_field('mobile_slider', $postId);
$desktop_slider = get_field('desktop_slider', $postId);
$img_layer = get_field('img_layer', $postId);
$url_slider = get_field('url_slider', $postId);
?>

<a href="<?php echo $url_slider['url'] ?>" class="relative max-h-full">
    <?php
    if ($desktop_slider && $mobile_slider) :
        echo wp_get_attachment_image($mobile_slider, 'full', false, ['class' => 'w-full max-h-full object-cover object-bottom md:hidden']);
        echo wp_get_attachment_image($desktop_slider, 'full', false, ['class' => 'w-full max-h-full object-cover object-bottom max-md:hidden']);
    else :
        echo 'لطفا تصویر انتخاب نمایید!';
    endif;
    ?>

    <div class="w-1/2 z-10 pointer-events-none max-md:hidden absolute left-0 bottom-0">

        <?php echo wp_get_attachment_image($img_layer, 'full', false, ['class' => 'w-full max-h-full object-cover object-bottom']); ?>

    </div>
</a>