<?php
add_theme_support( 'post-thumbnails' );

// remove auto <p> before single page "the_content"
remove_filter('the_content','wpautop');
