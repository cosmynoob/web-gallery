<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
	wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (!function_exists('\Roots\bootloader')) {
	wp_die(
		__('You need to install Acorn to use this theme.', 'sage'),
		'',
		[
			'link_url' => 'https://roots.io/acorn/docs/installation/',
			'link_text' => __('Acorn Docs: Installation', 'sage'),
		]
	);
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
	->each(function ($file) {
		if (!locate_template($file = "app/{$file}.php", true, true)) {
			wp_die(
				/* translators: %s is replaced with the relative file path */
				sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
			);
		}
	});

/*
|--------------------------------------------------------------------------
| Add custom post type Créations
|--------------------------------------------------------------------------|
*/

function wp_creations_post_type()
{

	$labels = array(
		'name' => _x('Créations', 'Post Type General Name'),
		'singular_name' => _x('Création', 'Post Type Singular Name'),
		'menu_name' => __('Créations'),
		'all_items' => __('Tous les créations'),
		'view_item' => __('Voir les créations'),
		'add_new_item' => __('Ajouter une nouvelle création'),
		'add_new' => __('Ajouter'),
		'edit_item' => __('Editer la création'),
		'update_item' => __('Modifier la création'),
		'search_items' => __('Rechercher une création'),
		'not_found' => __('Non trouvé'),
		'not_found_in_trash' => __('Non trouvé dans la corbeille'),
	);

	$args = array(
		'label' => __('Créations'),
		'description' => __('Liste des créations'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'show_in_rest' => true,
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'creations'),

	);

	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type('creations', $args);

}

add_action('init', 'wp_creations_post_type', 0);


/*
|--------------------------------------------------------------------------
| Add options pqge ACF PRO
|--------------------------------------------------------------------------|
*/

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();

}

/*
|--------------------------------------------------------------------------
| Remove read more form excerpt
|--------------------------------------------------------------------------|
*/
// Changing excerpt more
function new_excerpt_more($more)
{
	global $post;
	remove_filter('excerpt_more', 'new_excerpt_more');
}
add_filter('excerpt_more', 'new_excerpt_more', 11);