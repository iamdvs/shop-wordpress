<?php 

function loadfiles(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/vendors/bootstrap/bootstrap.min.css',false);
    wp_enqueue_style('allmin',get_template_directory_uri().'/vendors/fontawesome/css/all.min.css',false);
    wp_enqueue_style('themify',get_template_directory_uri().'/vendors/themify-icons/themify-icons.css',false);
    wp_enqueue_style('stylecss',get_template_directory_uri().'/vendors/linericon/style.css',false);
    wp_enqueue_style('owl',get_template_directory_uri().'/vendors/owl-carousel/owl.theme.default.min.css',false);
    wp_enqueue_style('carousel',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css',false);
    wp_enqueue_style('flaticon',get_template_directory_uri().'/vendors/flat-icon/font/flaticon.css',false);
    wp_enqueue_style('nic-select',get_template_directory_uri().'/vendors/nice-select/nice-select.css',false);
    wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',false);

    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/vendors/jquery/jquery-3.2.1.min.js',array(),'1.0','false');
    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/vendors/bootstrap/bootstrap.bundle.min.js',array('jquery'),'1.0','false');
    wp_enqueue_script('bootstrap-owl.carousel',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js',array(),'1.0','false');
    wp_enqueue_script('jquery.nic',get_template_directory_uri().'/vendors/nice-select/jquery.nice-select.min.js',array(),'1.0','false');
    wp_enqueue_script('jqueryajaxchimp',get_template_directory_uri().'/js/jquery.ajaxchimp.min.js',array(),'1.0','false');
    wp_enqueue_script('mail-scripts',get_template_directory_uri().'/js/mail-script.js',array(),'1.0','false');
    wp_enqueue_script('scroller',get_template_directory_uri().'/js/skrollr.min.js',array(),'1.0','false');
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',array(),'1.0','false');



}

add_action('wp_enqueue_scripts','loadfiles');


function my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'منوی اصلی' ),
        'footer-menu' => __( 'منوی اخر صفحه' )
      )
    );
  }
  add_action( 'init', 'my_menus' );




/**
 * Register our sidebars and widgetized areas.
 *
 */
function widgett_func() {

	register_sidebar( array(
		'name'          => 'ستون سمت چپ قالب',
		'id'            => 'left_side_bar',
		'before_widget' => '<div class="col-lg-4">
    <div class="blog_right_sidebar"><aside class="single_sidebar_widget popular_post_widget text-right">',
		'after_widget'  => '<div class="media post_item">',
		'before_title'  => '<div class="media post_item">
    <div class="media-body">
        <a href="single-blog.html">',
		'after_title'   => '</a>
</div>
</div></div>
</div></div>',
	) );

}
add_action( 'widgets_init', 'widgett_func' );  





add_theme_support('post-thumbnails');
add_image_size('articlethumb',350,300,true)


?>


<?php
/*=============================================
=            BREADCRUMBS			            =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(' > ');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}
/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/
?>