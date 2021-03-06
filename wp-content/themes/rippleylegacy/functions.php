<?php

function rippleyEnqueueScripts()
{
    wp_enqueue_style( 'main-style', get_template_directory_uri(). '/css/main.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    wp_enqueue_style( 'google-font-1', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style( 'google-font-2', 'https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic');

    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), microtime(), true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/scripts-bundled.js', array('jquery'), microtime(), true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/boostrap.min.js', array('jquery','main-script'), microtime(), true );
    wp_enqueue_script( 'particles', get_template_directory_uri() . '/js/particles.min.js', array('jquery','main-script', 'bootstrap-js'), microtime(), true );

    wp_localize_script( 'main-script', 'server_data_object',
        array( 
            'siteUrl' => get_site_url()
        )
    );
}

add_action('wp_enqueue_scripts', 'rippleyEnqueueScripts');

function rippleyAdminLogo() 
{ 
?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg);
        }
        
        form
        {
            /* padding: .75em !important; */
            background: whitesmoke;
        }
    </style>
<?php 
}
add_action( 'login_enqueue_scripts', 'rippleyAdminLogo' );


// Disable toolbar only if the administrator is developing the theme
add_filter('show_admin_bar', '__return_false');

/*
function kv_options_init() { 
        register_setting(
        'vaajo_general', // Option group
        'vaajo_general', // Option name
        array( $this, 'sanitize' ) // Sanitize
    );

    add_settings_section(
        'setting_section_id', // ID
        'All Settings', // Title
        array( $this, 'print_section_info' ), // Callback
        'vaajo-setting-admin' // Page
    ); 
        add_settings_field(
        'logo_image', 
        'Logo Image', 
        array( $this, 'logo_image_callback' ), 
        'vaajo-setting-admin', 
        'setting_section_id'
    );  		
    
    register_setting(
        'vaajo_social', // Option group
        'vaajo_social', // Option name
        array( $this, 'sanitize' ) // Sanitize
    );
    add_settings_section(
        'setting_section_id', // ID
        'Social Settings', // Title
        array( $this, 'print_section_info' ), // Callback
        'vaajo-setting-social' // Page
    );  
    
    add_settings_field(
        'fb_url', // ID
        'Facebook URL', // Title 
        array( $this, 'fb_url_callback' ), // Callback
        'vaajo-setting-social', // Page
        'setting_section_id' // Section           
    );
    
    
    register_setting(
        'vaajo_footer', // Option group
        'vaajo_footer', // Option name
        array( $this, 'sanitize' ) // Sanitize
    );
    add_settings_section(
        'setting_section_id', // ID
        'Footer Details', // Title
        array( $this, 'print_section_info' ), // Callback
        'vaajo-setting-footer' // Page
    );         

    add_settings_field(
        'hide_more_themes', 
        'Hide Find more themes at Kvcodes.com', 
        array( $this, 'hide_more_themes_callback' ), 
        'vaajo-setting-footer', 
        'setting_section_id'
    );
}*/