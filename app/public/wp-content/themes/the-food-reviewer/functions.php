<?php
/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme The Food Reviewer for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'the_food_reviewer_register_required_plugins', 0);
function the_food_reviewer_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'the-food-reviewer',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function the_food_reviewer_pattern_styles()
{
	wp_enqueue_style('the-food-reviewer-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('the-food-reviewer-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'the_food_reviewer_pattern_styles');


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});





// Register customer The Food Reviewer pattern categories
function the_food_reviewer_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'the-food-reviewer'),
			'description' => __('Header patterns', 'the-food-reviewer'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'the-food-reviewer'),
			'description' => __('Call to action patterns', 'the-food-reviewer'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'the-food-reviewer'),
			'description' => __('Bakery and Pastry content patterns', 'the-food-reviewer'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'the-food-reviewer'),
			'description' => __('Team patterns', 'the-food-reviewer'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'the-food-reviewer'),
			'description' => __('Banner patterns', 'the-food-reviewer'),
		)
	);
	register_block_pattern_category(
		'contact',
		array(
			'label'       => __('Contact', 'the-food-reviewer'),
			'description' => __('Contact patterns', 'the-food-reviewer'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'the-food-reviewer'),
			'description' => __('layout patterns', 'the-food-reviewer'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'the-food-reviewer'),
			'description' => __('Testimonial and review patterns', 'the-food-reviewer'),
		)
	);

}

add_action('init', 'the_food_reviewer_register_block_pattern_categories');