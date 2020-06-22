<?php



// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//chargement des assets du thème
add_action('wp_enqueue_scripts','load_themes_assets');


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );



function load_themes_assets(){
    wp_enqueue_style('monStyle', get_template_directory_uri().'/css/monStyle.css');
    wp_enqueue_script('app', get_template_directory_uri().'/js/monJs.js', null,null, true);
}

// Register Custom Post Type => ville
function ville_post_type() {

	$labels = array(
		'name'                  => _x( 'Villes', 'Post Type General Name', 'ville' ),
		'singular_name'         => _x( 'Ville', 'Post Type Singular Name', 'ville' ),
		'menu_name'             => __( 'Villes', 'ville' ),
		'name_admin_bar'        => __( '', 'ville' ),
		'archives'              => __( '', 'ville' ),
		'attributes'            => __( '', 'ville' ),
		'parent_item_colon'     => __( '', 'ville' ),
		'all_items'             => __( 'Toutes les villes', 'ville' ),
		'add_new_item'          => __( 'Ajouter nouvelle ville', 'ville' ),
		'add_new'               => __( 'Ajouter ville', 'ville' ),
		'new_item'              => __( 'Nouvelle ville', 'ville' ),
		'edit_item'             => __( 'Modifier ville', 'ville' ),
		'update_item'           => __( '', 'ville' ),
		'view_item'             => __( 'Voir ville', 'ville' ),
		'view_items'            => __( '', 'ville' ),
		'search_items'          => __( 'Chercher ville', 'ville' ),
		'not_found'             => __( '', 'ville' ),
		'not_found_in_trash'    => __( '', 'ville' ),
		'featured_image'        => __( '', 'ville' ),
		'set_featured_image'    => __( '', 'ville' ),
		'remove_featured_image' => __( '', 'ville' ),
		'use_featured_image'    => __( '', 'ville' ),
		'insert_into_item'      => __( '', 'ville' ),
		'uploaded_to_this_item' => __( '', 'ville' ),
		'items_list'            => __( '', 'ville' ),
		'items_list_navigation' => __( '', 'ville' ),
		'filter_items_list'     => __( '', 'ville' ),
	);
	$args = array(
		'label'                 => __( 'Ville', 'ville' ),
		'description'           => __( 'Ceci est une ville', 'ville' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-site-alt3',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ville', $args );

}
add_action( 'init', 'ville_post_type', 0 );

add_post_type_support( 'logement', 'thumbnail' ); 

// Register Custom Post Type => logement
function custom_logement() {

	$labels = array(
		'name'                  => 'logements',
		'singular_name'         => 'logement',
		'menu_name'             => 'logements',
		'name_admin_bar'        => 'logement',
		'archives'              => '',
		'attributes'            => '',
		'parent_item_colon'     => '',
		'all_items'             => 'tous les logements',
		'add_new_item'          => '',
		'add_new'               => 'ajouter',
		'new_item'              => 'ajouter',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'logement',
		'description'           => 'logement',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'logement', $args );

}
add_action( 'init', 'custom_logement', 0 );


