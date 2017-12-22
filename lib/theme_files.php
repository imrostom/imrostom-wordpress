<?php 
//Add Here Theme All Css And Js File
function theme_all_files_css_js_files(){
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css',array(),'1.0','all');
	wp_enqueue_style('slicknav.min.css',get_template_directory_uri().'/css/slicknav.min.css',array(),'1.0','all');
	wp_enqueue_style('owl.carousel',get_template_directory_uri().'/css/owl.carousel.min.css',array(),'1.0','all');
	wp_enqueue_style('owl.theme.default',get_template_directory_uri().'/css/owl.theme.default.min.css',array(),'1.0','all');
	wp_enqueue_style('style',get_template_directory_uri().'/style.css',array(),'1.0','all');
	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.0','all');
	
	//Add Here Theme Js Files
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.0',true);
	wp_enqueue_script('mapapi','https://maps.googleapis.com/maps/api/js?key=AIzaSyBTQluD-di0nJMwIrxVfOqbEBdm8tflf00&callback=initMap',array(),'1.0',true);
	wp_enqueue_script('gmaps',get_template_directory_uri().'/js/gmaps.min.js',array(),'1.0',true);
	wp_enqueue_script('slicknav',get_template_directory_uri().'/js/jquery.slicknav.min.js',array(),'1.0',true);
	wp_enqueue_script('counterup',get_template_directory_uri().'/js/jquery.counterup.js',array(),'1.0',true);
	wp_enqueue_script('owl.carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array(),'1.0',true);
	wp_enqueue_script('script',get_template_directory_uri().'/js/script.js',array(),'1.0',true);
	if(is_singular() && comments_open() && get_option('thread_comments')){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts','theme_all_files_css_js_files');

