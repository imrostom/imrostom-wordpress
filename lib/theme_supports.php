<?php 

function theme_supports(){
	add_theme_support('title-tag');
	add_theme_support( 'automatic-feed-links' );
	load_theme_textdomain( 'imrostom', get_template_directory() . '/languages' );
	register_nav_menus(array(
		'main_menu'=>'Main Menu'
	));
	
	if ( ! isset( $content_width ) ) $content_width =700;
	
	add_theme_support( 'post-formats', array( 'image', 'video' ) );
	
	add_theme_support('post-thumbnails');
	
	//Services Custom Post..
	register_post_type('portfolio',array(
		'labels'=>array(
			'name'=>'Portfolio'
		),
		'public'=>true,
		'menu_icon'=>'dashicons-list-view',
		'supports'=>array('title','editor','thumbnail'),
	));
	
	add_image_size('port_img',600,400,true);
	
}
add_action('after_setup_theme','theme_supports');

function fallback_menu(){
	?>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Abouts</a></li>
		<li><a href="#">Portfolio</a></li>
		<li><a href="#">Blog</a></li> 
		<li><a href="#">Contacts</a></li>
	</ul>
	<?php
}