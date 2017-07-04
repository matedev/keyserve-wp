<?php
//-----------------------------------------------
// Thumbnail sizes
//-----------------------------------------------
add_theme_support('post-thumbnails');
set_post_thumbnail_size(294, 196, true);

//-----------------------------------------------
// Menu registration
//-----------------------------------------------
register_nav_menus(array('primary' => 'Header Menu'));

load_theme_textdomain( 'keyserve', get_template_directory() . '/languages' );

//-----------------------------------------------
// Including scripts
//-----------------------------------------------
function add_keyserve_scripts(){
    /*wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendors/bootstrap.min.css', array());
    wp_enqueue_style('owl', get_template_directory_uri() . '/vendors/owl/owl.carousel.min.css', array());
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/vendors/owl/owl.theme.default.min.css', array('owl', 'bootstrap'));
    wp_enqueue_style('fa', get_template_directory_uri() . '/vendors/fa/font-awesome.min.css', array('bootstrap'));
    
	wp_enqueue_style('font', get_template_directory_uri() . '/res/css/fonts.css', array());
    wp_enqueue_style('design', get_template_directory_uri() . '/res/css/style.css', array('font', 'bootstrap'));*/
    wp_enqueue_style('design', get_template_directory_uri() . '/prod/style.min.css', array());
    wp_enqueue_script('jquery');
    /*wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendors/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/vendors/owl/owl.carousel.min.js', array('jquery'));
    wp_enqueue_script('app-js', get_template_directory_uri() . '/res/js/main.js', array('bootstrap-js', 'owl-js'));*/
    wp_enqueue_script('app-js', get_template_directory_uri() . '/prod/app.min.js', array('jquery'));
    wp_localize_script('app-js', "keyserve_ajax", array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'add_keyserve_scripts');

//-----------------------------------------------
// Remove admin bar
//-----------------------------------------------
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

//-----------------------------------------------
// Registering option menus
//-----------------------------------------------
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Keyserve custom',
        'menu_title'    => 'Courses',
        'menu_slug'     => 'keyserve_custom',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

//-----------------------------------------------
// Admin menu chrome fix
//-----------------------------------------------
function chrome_fix(){
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
        wp_add_inline_style('wp-admin', '#adminmenu { transform: translateZ(0); }');
}

add_action('admin_enqueue_scripts', 'chrome_fix');

//-----------------------------------------------
// Hide ACF
//-----------------------------------------------
//add_filter('acf/settings/show_admin', '__return_false');


//-----------------------------------------------
// Change the footer text
//-----------------------------------------------
function change_admin_footer() {
    echo "Keyserve WordPress Admin";
}

add_filter( 'admin_footer_text', 'change_admin_footer' );

//-----------------------------------------------
// Change the login form logo
//-----------------------------------------------
function change_login_logo() { ?>
    <style>
        .login h1 a {
            background-image: url( <?= get_stylesheet_directory_uri(); ?>/assets/etc/img/favicon.ico );
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'change_login_logo' );

//-----------------------------------------------
// Change the login logo URL and title
//-----------------------------------------------
function change_login_logo_url() {
    return home_url();
}

add_filter( 'login_headerurl', 'change_login_logo_url' );

function change_login_logo_url_title() {
    return "Login Theme";
}

add_filter( 'login_headertitle', 'change_login_logo_url_title' );

//-----------------------------------------------
// Style the login page
//-----------------------------------------------
function change_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/custom-login/custom-login.css' );
}

add_action( 'login_enqueue_scripts', 'change_login_stylesheet' );

//-----------------------------------------------
// Change default WP e-mail and name
//-----------------------------------------------
function new_mail_from($old) {
 return 'keyserve@keyserve.hu';
}
function new_mail_from_name($old) {
 return 'Keyserve team';
}

add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');

//-----------------------------------------------
// Disable the password reset feature
//-----------------------------------------------
function disable_reset_pwd() {
    return false;
}

add_filter( 'allow_password_reset', 'disable_reset_pwd' );

//-----------------------------------------------
// Remove error shake
//-----------------------------------------------
function remove_shake() {
    remove_action( 'login_head', 'wp_shake_js', 12 );
}

add_action( 'login_head', 'remove_shake' );

// Defer Javascripts
// Defer jQuery Parsing using the HTML5 defer property
if (!(is_admin() )) {
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}