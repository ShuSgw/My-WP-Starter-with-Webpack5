<?php
function add_all_cssandjs()
{
    wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/public/js/frontend.js', array(), '1.0', true);
    wp_enqueue_style('maincss', get_template_directory_uri().'/public/css/frontend.css', [], time());
}
add_action('wp_enqueue_scripts', 'add_all_cssandjs');


function globalVal() {
	global $dataSource;
	$dataSource = [
        'partsPath' => './assets/src/components/parts/',
        'imagePath' => get_template_directory_uri().'/public/images/'
    ];
}
add_action( 'wp', 'globalVal' ); 