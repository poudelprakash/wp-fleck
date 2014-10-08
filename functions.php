<?php 
/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */
include('admin/theme_customiser.php');
//import javascripts
function fleck_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'fleck_scripts_with_jquery' );
//adding post thumbnails in the theme
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails
    add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
    
//create nav menu
	if (!function_exists('fleck_menu_setup')) :
	function fleck_menu_setup() {
		//adds the main menu
		register_nav_menus(array(
			'main-menu'=> __('Main Menu','fleck_menu'),
			) );
		}
	endif;
	add_action('after_setup_theme','fleck_menu_setup' );


// breadcrumb snippet from http://cazue.com/articles/wordpress-creating-breadcrumbs-without-a-plugin-2013 
function fleck_breadcrumb() {
    global $post;
    echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo home_url( );
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';
}

//this code adds sidebars | code was found at http://www.wpbeginner.com/wp-themes/how-to-add-dynamic-widget-ready-sidebars-in-wordpress/
function fleck_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'fleck' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'fleck' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Left-Footer', 'fleck'),
        'id' => 'footer-1',
        'description' => __( 'Appears on Left column footer', 'fleck' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Mid-Footer', 'fleck'),
        'id' => 'footer-2',
        'description' => __( 'Appears on middle column footer', 'fleck' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Right-Footer', 'fleck'),
        'id' => 'footer-3',
        'description' => __( 'Appears on Right column footer', 'fleck' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    }

add_action( 'widgets_init', 'fleck_widgets_init' );

// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '..&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" role="button" href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

// custom admin footer, adds your details in wordpress admin board
function remove_footer_admin () {
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.sharmaprakash.com.np" target="_blank">Prakash Poudel</a></p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');



?>