<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
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
/*
    VARS GLOBAL DETECT BLOGS
*/
function blogs_global_vars() 
{

    global $detectBlogs;
    $detectBlogs = array(
        
        'blogId'    => get_current_blog_id(),
        'cosas'     => '1',
        'casas'     => '9',
        'repost'    => '5',
        'lujo'      => '7',
        'couture'      => '8',
        'suscripciones' => '6',

    );

}
// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        
        wp_enqueue_script('jquery');
         
        wp_enqueue_script( 'library', get_template_directory_uri() .'/js/library.min.js',array(),'20160424', true );
        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/cosas.min.js', array('jquery'), '1.0.0', true); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
        
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}
// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('html5blank', get_template_directory_uri() . '/css/cosas.min.css', array(), '1.0', 'all');   
    wp_enqueue_style('html5blank'); // Enqueue it!
    
    //wp_enqueue_style( 'colorbox-style', get_template_directory_uri() .'/css/colorbox.css' ); 
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() .'/css/swiper.min.css' ); 
    
    if($GLOBALS['detectBlogs']['suscripciones']==$GLOBALS['detectBlogs']['blogId']){
        wp_enqueue_style('suscripciones', get_template_directory_uri() .'/css/suscripcion.min.css' );
    }
}

//WOOCOMMERCE REMOVE
// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
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

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text'    => '<i class="fa fa-angle-left"></i> anterior',
        'next_text'    => 'siguiente <i class="fa fa-angle-right"></i>'
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 2000;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
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

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('init', 'blogs_global_vars'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('init', 'post_typeHoroscopo'); // Add our HTML5 Blank Custom Post Type
add_action('init', 'post_typeBranded'); // Add our HTML5 Blank Custom Post Type
add_action('init', 'post_typeAutomoviles'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);



//Problema de comillas en titulos de posts
remove_filter( 'the_title' , 'wptexturize'  );
remove_filter( 'the_content' , 'wptexturize' );
remove_filter( 'the_excerpt' , 'wptexturize' );
remove_filter( 'comment_text' , 'wptexturize' );
remove_filter( 'list_cats' , 'wptexturize' );




// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5() { // Create 1 Custom Post type for a Demo, called HTML5-Blank
        register_taxonomy_for_object_type('category','secc-video'); // Register Taxonomies for Category
        register_taxonomy_for_object_type('post_tag','video-secc');
        register_post_type( 'video-galeria', // Register Custom Post Type
                array(
                        'labels' => array(
                                'name' => __( 'Galeria de videos' ), // Rename these to suit
                                'singular_name' => __( 'Videos' ),
                                'add_new' => __( 'Agregar video' ),
                                'add_new_item' => __( 'Agregar nuevo video' ),
                                'edit' => __( 'Editar' ),
                                'edit_item' => __( 'Editar video' ),
                                'new_item' => __( 'Nuevo video' ),
                                'view' => __( 'Ver video' ),
                                'view_item' => __( 'Ver videos' ),
                                'search_items' => __( 'Buscar videos' ),
                                'not_found' => __( 'Video no encontrado' ),
                                'not_found_in_trash' => __( 'No  hay videos eliminados' ),
                        ),
                'public' => true,
                'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
                'has_archive' => true,
                'supports' => array( 'title', 'editor', 'thumbnail','excerpt'), // Go to Dashboard Custom HTML5 Blank post for supports
                'can_export' => true, // Allows export in Tools > Export
                'taxonomies' => array( 'post_tag', 'category'), // Add Category and Post Tags support
                )
        );
}
function post_typeHoroscopo() { // Create 1 Custom Post type for a Demo, called HTML5-Blank
	register_taxonomy_for_object_type('category','secc-horoscopo'); // Register Taxonomies for Category
	register_taxonomy_for_object_type('post_tag','horoscopo-secc');
	register_post_type( 'horoscopo', // Register Custom Post Type
			array(
					'labels' => array(
							'name' => __( 'Horóscopo' ), // Rename these to suit
							'singular_name' => __( 'Horóscopo' ),
							'add_new' => __( 'Agregar signo' ),
							'add_new_item' => __( 'Agregar nuevo signo' ),
							'edit' => __( 'Editar' ),
							'edit_item' => __( 'Editar horóscopo' ),
							'new_item' => __( 'Nuevo signo' ),
							'view' => __( 'Ver horóscopo' ),
							'view_item' => __( 'Ver horóscopo' ),
							'search_items' => __( 'Buscar signo' ),
							'not_found' => __( 'Signo no encontrado' ),
							'not_found_in_trash' => __( 'No hay signos eliminados' ),
					),
			'public' => true,
			'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ), // Go to Dashboard Custom HTML5 Blank post for supports
			'can_export' => true, // Allows export in Tools > Export
			'taxonomies' => array( 'post_tag', 'category'), // Add Category and Post Tags support
			)
	);
}
function post_typeBranded() { // Create 1 Custom Post type for a Demo, called HTML5-Blank
	register_taxonomy_for_object_type('category','secc-branded'); // Register Taxonomies for Category
	register_taxonomy_for_object_type('post_tag','branded-secc');
	register_post_type( 'branded', // Register Custom Post Type
			array(
					'labels' => array(
							'name' => __( 'Inmobiliarios content' ), // Rename these to suit
							'singular_name' => __( 'Inmobiliarios content' ),
							'add_new' => __( 'Agregar inmobiliarios content' ),
							'add_new_item' => __( 'Agregar inmobiliarios content' ),
							'edit' => __( 'Editar' ),
							'edit_item' => __( 'Editar inmobiliarios content' ),
							'new_item' => __( 'Nuevo inmobiliarios content' ),
							'view' => __( 'Ver inmobiliarios content' ),
							'view_item' => __( 'Ver inmobiliarios content' ),
							'search_items' => __( 'Buscar inmobiliarios content' ),
							'not_found' => __( 'Inmobiliarios content no encontrado' ),
							'not_found_in_trash' => __( 'No hay inmobiliarios content eliminados' ),
					),
			'public' => true,
			'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ), // Go to Dashboard Custom HTML5 Blank post for supports
			'can_export' => true, // Allows export in Tools > Export
			'taxonomies' => array( 'post_tag'), // Add Category and Post Tags support
			'menu_icon' => 'dashicons-building',
			)
	);
}
function post_typeAutomoviles() { // Create 1 Custom Post type for a Demo, called HTML5-Blank
	register_taxonomy_for_object_type('category','secc-auto'); // Register Taxonomies for Category
	register_taxonomy_for_object_type('post_tag','auto-secc');
	register_post_type( 'automovilismo', // Register Custom Post Type
			array(
					'labels' => array(
							'name' => __( 'Automoviles content' ), // Rename these to suit
							'singular_name' => __( 'Automoviles content' ),
							'add_new' => __( 'Agregar automoviles content' ),
							'add_new_item' => __( 'Agregar automoviles content' ),
							'edit' => __( 'Editar' ),
							'edit_item' => __( 'Editar automoviles content' ),
							'new_item' => __( 'Nuevo automoviles content' ),
							'view' => __( 'Ver automoviles content' ),
							'view_item' => __( 'Ver automoviles content' ),
							'search_items' => __( 'Buscar automoviles content' ),
							'not_found' => __( 'Automoviles content no encontrado' ),
							'not_found_in_trash' => __( 'No hay automoviles content eliminados' ),
					),
			'public' => true,
			'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ), // Go to Dashboard Custom HTML5 Blank post for supports
			'can_export' => true, // Allows export in Tools > Export
			'taxonomies' => array( 'post_tag'), // Add Category and Post Tags support
			'menu_icon' => 'dashicons-performance',
			)
	);
}
function blogi() {

	$labels = array(
		'name'                  => _x( 'Blogis', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'blogi', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Blogi', 'text_domain' ),
		'name_admin_bar'        => __( 'Blogi', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'blogi', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'post-formats', ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'blogi', $args );

}
add_action( 'init', 'blogi', 0 );

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}


/**
	Remove Emoji
**/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
    SUSCRIBE 
**/

add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
 
function woo_archive_custom_cart_button_text() {
 
        return __( 'Suscribir', 'woocommerce' );
 
}
function my_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'View Cart' :
            $translated_text = __( 'Ver Compra', 'woocommerce' );
            break;
    }
    return $translated_text;
} 

/**
GALLERY'S
**/

function custom_gallery( $output, $attr ){
    global $post, $wp_locale;

    static $instance = 0;
    $instance++;

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'itemtag'    => 'div',
        'icontag'    => '',
        'captiontag' => '',
        'columns'    => 3,
        'size'       => 'full',
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';

    $selector = "gallery-{$instance}";

    $gallery_div = '';
    $size_class = sanitize_html_class( $size );
    $gallery_div = "<div id=\"$selector\" class=\"gallery galleryid-{$id} swiper-gallery gallery-columns-{$columns} gallery-size-{$size_class}\"><div class='shadow-opt'></div><div class='swiper-wrapper'>";
    $output = apply_filters( 'gallery_style', $gallery_div );

    $i = 0;
    foreach ( $attachments as $id => $attachment ) {
        $image = wp_get_attachment_image( $id, $size );

        $output .= "<{$itemtag} class=\"gallery-item swiper-slide\"><a href='' class='group1'>";
        $output .= $image;
        if ( $captiontag && trim($attachment->post_excerpt) ) {
            $output .= "
                <{$captiontag} class=\"wp-caption-text gallery-caption\">
                " . wptexturize($attachment->post_excerpt) . "
                </{$captiontag}>";
        }
        $output .= "</a></{$itemtag}>";
    }

    $output .= "</div><div class='swiper-pagination'></div><div class='arrows next-gallery'><i class='fa fa-chevron-right'></i></div><div class='arrows prev-gallery'><i class='fa fa-chevron-left'></i></div></div>\n";

    return $output;
}
add_filter('post_gallery', 'custom_gallery', 11, 2);

//*WEBPAY SHORCODE*//

add_filter('widget_text','do_shortcode');

?>
