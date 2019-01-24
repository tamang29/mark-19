<?php 

function mark1_style(){

    wp_enqueue_style('default_stylesheet', get_stylesheet_uri());//location of the stylesheet//
}


add_action('wp_enqueue_scripts', 'mark1_style');//

?>