<?php

// Custom Post Types

add_action('init', 'sidebar');

function sidebar() {
	///Register type and custom taxonomy for type.
	$sidebar_args = array('label' => 'Sidebar',
				  'public' => true,
				  'show_ui' => true,
				  'capability_type' => 'post',
				  'hierarchical' => true,
				  'has_archive' => true,
				  'taxonomies' => array('post_tag'),
				  'supports' => array('title', 'editor', 'excerpt', 'comments', 'thumbnail'));
 //Register type and custom taxonomy for type.
     
      register_post_type( 'sidebar' , $sidebar_args );}  //Register type and custom taxonomy for type.

    
?>