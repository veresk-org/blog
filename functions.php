<?php
add_theme_support( 'post-thumbnails' );
function register_images_field() {
    register_rest_field( 
        'post',
        'images',
        array(
            'get_callback'    => 'get_images_urls',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function register_categories_names_field() {
    register_rest_field( 
        'post',
        'categories',
        array(
            'get_callback'    => 'get_categories_names',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
add_action( 'rest_api_init', 'register_images_field' );
add_action( 'rest_api_init', 'register_categories_names_field' );

function get_images_urls( $object, $field_name, $request ) {
    $medium = wp_get_attachment_image_src( get_post_thumbnail_id( $object->id ), 'medium' );
    $medium_url = $medium['0'];
    $large = wp_get_attachment_image_src( get_post_thumbnail_id( $object->id ), 'large' );
    $large_url = $large['0'];
    return array(
        'medium' => $medium_url,
        'large'  => $large_url,
    );
}
function get_categories_names( $object, $field_name, $request ) {
    $formatted_categories = array();
    $categories = get_the_category( $object['id'] );
    foreach ($categories as $category) {
        $formatted_categories[] = $category->name;
    }
    return $formatted_categories;
}

add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
    load_theme_textdomain( 'vereskBlog', get_template_directory() . '/languages' );
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'MyWidget', 'theme-slug' ),
        'id' => 'MyWidget',
        'description' => __('MyWidget')
    ) );
}

?>
