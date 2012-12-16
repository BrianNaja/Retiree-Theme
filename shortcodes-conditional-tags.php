<?php

// Shortcodes

add_shortcode('destination', 'destination_fn');  // maps shortcode 
	function destination_fn ($atts) {
	$atts = shortcode_atts(
		array(
			'latlng' => ' ',
			'name' => ' '
				), $atts);
		
		return '<option value=" ' . $atts['latlng'] . ' "> ' . $atts['name'] . ' </option>' ;
	}
	
/*
add_shortcode('gdocs', 'gdocs_fn');	
	function gdocs_fn ($atts) {
	extract(shortcode_atts(array(
		"width" => '',
		"height" => '',
		"src" => ''
			), $atts));
	return '<iframe class="gdocs_large" src="'.$src.'/preview" width="'.$width.'" height="'.$height.'"></iframe>
		   <iframe class="gdocs_medium" src="'.$src.'/preview" width="'.$width.'" height="'.$height.'"></iframe>
		   <iframe class="gdocs_small" src="'.$src.'/preview" width="'.$width.'" height="'.$height.'"></iframe>' ;
	}
*/
	


function google_maps_scripts() {  
    if(is_page(Directions)) { // '123' is the ID of the page we are checking for 
    	wp_register_script( 'mapsgoogleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB1YEaR7kbICknhsNK2WHH4lE_jO2yk1T4&sensor=true');
    	wp_enqueue_script( 'mapsgoogleapis' ); 
        wp_enqueue_script('my-script', get_template_directory_uri().'/javascripts/gogle-maps-ck.js');  
    }  
}  
add_action('wp_head','google_maps_scripts');


function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', /* get_template_directory_uri().'/javascripts/jquery-1.7.2.js' */'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');  
}    
 
add_action('wp_enqueue_scripts', 'my_scripts_method');

