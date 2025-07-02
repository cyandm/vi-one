<?php

/**
 * Header for wordpress theme
 * its must include only head and body tags
 * header templates located in /partials/header/
 * @package CyanTheme
 */

use Cyan\Theme\Helpers\Templates;

$render_template = $args['render_template'] ?? true;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

</head>

<body class="overflow-x-hidden">
	<?php wp_body_open(); ?>

	<?php if ($render_template) : ?>
		<header class="relative container z-10">
			<?php Templates::getPart('header'); ?>
		</header>
	<?php endif; ?>