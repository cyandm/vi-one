<?php

/**
 * ACF Class
 * @package Cyan\Theme\Classes
 */

namespace Cyan\Theme\Classes;

use Cyan\Theme\Helpers\Validators;
use Cyan\Theme\Helpers\ACF\AcfGroup;


class ACF
{

	public static function init()
	{
		$isDev = ENVIRONMENT === 'development';
		$isDev ? null : add_filter('acf/settings/show_admin', '__return_false', 100);

		if (! function_exists('acf_add_local_field_group')) {
			return;
		}


		add_action('acf/include_fields', [__CLASS__, 'registerAllACF']);
	}

	/**
	 * Register all ACF fields for the individual post types, taxonomies, page templates, and menu items
	 * @return void
	 */
	public static function registerAllACF()
	{
		//PostTypes
		self::forSlider();
		self::forProducts();

		//Taxonomies

		//Page Templates
		self::forHome();
		self::forAbout();

		//Menu Items

	}

	private static function forSlider()
	{
		//define helper
		$acfGroup = new AcfGroup();

		$acfGroup->contentFields->addImage('desktop_slider', 'عکس اسلایدر برای دسکتاپ', [
			'width' => '50%',
		]);

		//add fields
		$acfGroup->contentFields->addImage('mobile_slider', 'عکس اسلایدر برای موبایل', [
			'width' => '50%',
		]);

		$acfGroup->contentFields->addImage('img_layer', 'عکسی که روی هدر و متن قرار میگیرد', [
			'width' => '50%'
		]);

		$acfGroup->relationshipFields->addLink('url_slider', 'آدرس اسلایدر', [
			'width' => '50%'
		]);

		//location
		$acfGroup->setLocation('post_type', '==', 'slider');

		// register group
		$acfGroup->register('اطلاعات');
	}

	private static function forProducts()
	{
		$acfGroup = new AcfGroup();

		$acfGroup->layoutFields->addTab('products_gallery','گالری محصول');

		$acfGroup->groupCustom->addGallery('lightbox', 'گالری محصول', ['width' => '50%'], 10);

		$acfGroup->layoutFields->addTab('products_dec', 'توضیحات محصول');

		$acfGroup->contentFields->addTextEditor('products_features', 'ویژگی محصول', ['width'=> '50%']);
		
		$acfGroup->contentFields->addTextEditor('products_specifications', 'مشخصات محصول', ['width'=> '50%']);

		//location
		$acfGroup->setLocation('post_type', '==', 'products');

		// register group
		$acfGroup->register('گالری');
	}

	private static function forHome()
	{

		//define helper
		$acfGroup = new AcfGroup();

		//add fields
		$acfGroup->basicFields->addTextarea('under_video', 'متن زیر ویدیو', [
			'width' => '50%',
		]);

		//location
		$acfGroup->setLocation('page_template', '==', 'templates/home.php');

		// register group
		$acfGroup->register('home');
	}

	private static function forAbout()
	{

		//define helper
		$acfGroup = new AcfGroup();

		//add fields
		$acfGroup->basicFields->addTextarea('under_video', 'متن زیر ویدیو', [
			'width' => '50%',
		]);

		//location
		$acfGroup->setLocation('page_template', '==', 'templates/about.php');

		// register group
		$acfGroup->register('about-us');
	}
}
