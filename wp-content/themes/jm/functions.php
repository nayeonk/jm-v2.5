<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
// Global variable
$cdnLink = '//d1btkvhnhp6n3k.cloudfront.net';

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...<a class="moretag" href="'. get_permalink($post->ID) . '"> Read more &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Enqueue stylesheets depending on page template
function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'page-home.php' ) ) {
        wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css' );
    }
    else if ( is_page_template( 'page-fun.php' ) ) {
        wp_enqueue_style( 'fun', get_template_directory_uri() . '/css/fun.css' );
    }
    else if ( is_page_template( 'page-projects.php' ) ) {
        wp_enqueue_style( 'projects', get_template_directory_uri() . '/css/projects.css' );
    }
    else if ( is_page_template( 'page-connect.php' ) ) {
        wp_enqueue_style( 'connect', get_template_directory_uri() . '/css/connect.css' );
    }
    else if ( is_page_template( 'page-photos.php' ) ) {
        wp_enqueue_style( 'photos', get_template_directory_uri() . '/css/photos.css' );
    }
    else if ( is_page_template( 'page-videos.php' ) ) {
        wp_enqueue_style( 'videos', get_template_directory_uri() . '/css/videos.css' );
    }
    else if ( is_page_template( 'page-bio.php' ) ) {
        wp_enqueue_style( 'bio', get_template_directory_uri() . '/css/bio.css' );
    }
    else { }

}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );

function custom_loginlogo() {
    echo '<style type="text/css">
    h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/images/profilepic.jpg) !important; }
    </style>';
}
add_action('login_head', 'custom_loginlogo');