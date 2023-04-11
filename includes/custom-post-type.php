<?php

function cvd_custom_post(){

    $services_label = array(
        'name' => __('Services Post', 'textdomain'),
        'singular_name' => __('Services Post', 'textdomain'),
        'add_new' => __(' Add Services Post', 'textdomain'),
        'add_new_item' => __('Add New services', 'textdomain'),
        'edit_item' => __('Edit services Post', 'textdomain'),
        'all_items' => __('services Post', 'textdomain')

    );

    $services_args = array(
        'labels'  => $services_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('servicesPost' , $services_args);

    $trends_label = array(
        'name' => __('Trends Post', 'textdomain'),
        'singular_name' => __('trends Post', 'textdomain'),
        'add_new' => __(' Add trends Post', 'textdomain'),
        'add_new_item' => __('Add New trends', 'textdomain'),
        'edit_item' => __('Edit trends Post', 'textdomain'),
        'all_items' => __('trends Post', 'textdomain')

    );

    $trends_args = array(
        'labels'  => $trends_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('trendsPost' , $trends_args);

    $recentProjects_label = array(
        'name' => __('Project Post', 'textdomain'),
        'singular_name' => __('Project Post', 'textdomain'),
        'add_new' => __(' Add Project Post', 'textdomain'),
        'add_new_item' => __('Add New Project', 'textdomain'),
        'edit_item' => __('Edit Project Post', 'textdomain'),
        'all_items' => __('Project Post', 'textdomain')

    );

    $recentProjects_args = array(
        'labels'  => $recentProjects_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('recentProjectPost' , $recentProjects_args);
    
}

add_action('init','cvd_custom_post');
