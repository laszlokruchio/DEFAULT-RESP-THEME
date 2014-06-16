<?php
/* Add a Favicon to the Site */
add_action( 'wp_head', 'mytheme_add_favicon' );
add_action('admin_head', 'mytheme_add_favicon');
function mytheme_add_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" />';
}

/* Theme Support */
add_theme_support('post-thumbnails');

/* Show Page Template */
add_action('wp_head', 'show_template');
function show_template() {
	global $template;
	$template = '<div id="page_template"><span>Template URL:</span> '.$template.'</div>';
	if ( is_super_admin() ) { print_r($template); }
}

/* Load the theme stylesheets */
function theme_styles() { 
	wp_enqueue_style( 'functions', get_template_directory_uri() . '/css/functions.css' ); // Functions file only
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' ); // Main css file
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' ); // Responsive styles
}
add_action('wp_enqueue_scripts', 'theme_styles');


/* NEW COMMENT LINE */
/* Load the theme scripts */
function theme_scripts() { 
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js' ); // Include jQuery
	wp_register_script( 'respond', get_template_directory_uri() . '/js/respond.js' ); // Responsive helper
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js' ); // IE helper
	wp_register_script( 'swipe', get_template_directory_uri() . '/js/jquery.event.swipe.js' ); // Swipe event for slider
	wp_register_script( 'bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js' ); // Slider 
	wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js' ); // Main jQuery file
	wp_enqueue_script('jquery');
	wp_enqueue_script('respond');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('swipe'); // Optional
	wp_enqueue_script('bxslider'); // Optional
	wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'theme_scripts'); 

/* Add Wordpress Documentation Page */
add_action( 'admin_menu', 'ebow_wp_faq' );
function ebow_wp_faq() {
	add_menu_page( 'Easy WP Guide Options', 'How to?', 'manage_options', 'my-unique-identifier', 'my_plugin_options', 'dashicons-format-aside' );
}
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page. :(' ) );
	}
	include ('faq/ebow-wp-faq.php');
}

/* Custom Login Page */
add_action("login_head", "my_login_head");
function my_login_head() {
     echo "<link rel='stylesheet' href='" . get_template_directory_uri() . "/css/functions.css' />";
}

/* Custom Post Types */
function codex_custom_init() {
  $labels = array(
    'name' 						=> _x('CUSTOM_POSTTYPE', 'post type general name'),
    'singular_name' 		=> _x('CUSTOM_POSTTYPE', 'post type singular name'),
    'add_new' 					=> _x('Add New', 'CUSTOM_POSTTYPE'),
    'add_new_item' 		=> __('Add New CUSTOM_POSTTYPE'),
    'edit_item' 				=> __('Edit CUSTOM_POSTTYPE'),
    'new_item' 				=> __('New CUSTOM_POSTTYPE'),
    'all_items' 				=> __('All CUSTOM_POSTTYPE'),
    'view_item' 				=> __('View CUSTOM_POSTTYPE'),
    'search_items' 			=> __('Search CUSTOM_POSTTYPE'),
    'not_found' 				=> __('No CUSTOM_POSTTYPE found'),
    'not_found_in_trash'	=> __('No CUSTOM_POSTTYPE found in Trash'),
    'parent_item_colon'	=> '',
    'menu_name' 			=> __('CUSTOM_POSTTYPE')
  );
  $args = array(
    'labels' 						=> $labels,
    'menu_icon' 				=> 'dashicons-portfolio',
    'taxonomies' 			=> array('category', 'post_tag'),
    'public' 						=> true,
    'publicly_queryable' 	=> true,
    'show_ui' 					=> true,
    'show_in_menu' 		=> true,
    'query_var' 				=> true,
    'rewrite' 					=> true,
    'exclude_from_search' 	=> true,
    'capability_type' 		=> 'post',
    'has_archive' 			=> false,
    'hierarchical' 			=> false,
    'menu_position' 		=> null,
    'supports' 				=> array( 'title', 'editor', 'author', 'thumbnail' )
  );
  register_post_type('custom_posttype',$args);
  flush_rewrite_rules();
}
add_action( 'init', 'codex_custom_init' );

/* Custom Post Image Sizes */
add_image_size( 'custom-image-name', 651, 362, true ); // Hard cropped

/* Menu - Registering */
function register_my_menus() {
  register_nav_menus(
    array(
      'custom-menu-place-name' => __( 'CUSTOM MENU PLACE NAME' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* Menu - Function */
function menu_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'custom-menu-place-name',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}


/* Include in Search */
function filter_search($query) {
    if ($query->is_search) {
	$query->set('post_type', array('customposttype', 'customposttype2'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');

/* Is Sub page */
function is_subpage() {
    global $post;                              		// load details about this page
    if ( is_page() && $post->post_parent ) {   		// test to see if the page has a parent
        return $post->post_parent;             		// return the ID of the parent post
    } else {                                  		// there is no parent so ...
        return false;                          		// ... the answer to the question is false
    }
}

/* Create custom widget */
class widget_subscribe extends WP_Widget {
    // Create Widget
    function widget_subscribe() {
        parent::WP_Widget(false, $name = 'CUSTOM WIDGET NAME', array('description' => 'CUSTOM WIDGET DESCRIPTION'));
    }
    // Widget Content
    function widget($args, $instance) { 
        extract( $args );
        ?>
           	<li class="widget">
				<!-- CUSTOM WIDGET CONTENT -->      	
           	</li>
        <?php
     }
}
register_widget('widget_subscribe');

/* Custom Excerpts */
function new_excerpt_more($more) {
    global $post;
	return '...<br /><br /><a href="'. get_permalink($post->ID) . '" class="read_more">read more →</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
//call using excerpt('excerpt_index');
function excerpt_index($length) { return 20; }
//call using excerpt('excerpt_custom');
function excerpt_custom($length) { return 40; }
function excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}
// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

/* Remove Admin bar */
function remove_admin_bar() {  return false; }

/* Add page slug to body class  */
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
add_action('init', 'pagination'); 


?>
