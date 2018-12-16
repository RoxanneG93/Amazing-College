<?php

// making function to call CSS file
function college_files(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('college_main_styles', get_stylesheet_uri());
}

// we can tell WP what to do with 'add_action()'
// adding function onto WP Hook
add_action('wp_enqueue_scripts', 'college_files');

?>