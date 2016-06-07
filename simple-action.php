<?php
/*
Plugin Name: Simple Action
Plugin URI: <a href="http://www.hjemmesider.dk"<br />
Description:</a> Simple Action.
Version: 1.0
Author: Hjemmesider.dk
Author URI: http://www.hjemmesider.dk.dk
*/

// Plugin style sheet

add_action('wp_enqueue_scripts', 'simple_action_register_plugin_styles');
function simple_action_register_plugin_styles() {
    wp_register_style('simpleaction', plugins_url('simple-action/css/simple-action.css'));
		wp_enqueue_style('simpleaction');
}




function simple_action_scripts() {
    wp_register_script('simpleaction', plugins_url() . '/simple-action/js/simple-action.js', array('jquery'));
    wp_enqueue_script('simpleaction');
}
add_action('wp_enqueue_scripts', 'simple_action_scripts');



// Widget

function simple_action_widgets_init() {
    register_sidebar(array('name' => __('Simple Action', 'simplae_action_domain'), 'id' => 'simpleaction', 'description' => '', 'class' => '', 'before_widget' => '<div class="js-accordion-active">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>',));
}
add_action('widgets_init', 'simple_action_widgets_init');


// Print HTML - widget
if ( is_active_sidebar( 'simpleaction' ) ) {
function simple_Action_function() {
	echo '<div class="action-container">';
     dynamic_sidebar( 'simpleaction' );
  echo '<p class="action-but">?</p>';
  echo '</div>';
}
add_action( 'wp_footer', 'simple_action_function' );
}