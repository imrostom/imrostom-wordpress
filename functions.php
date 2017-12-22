<?php 

include_once(get_template_directory().'/lib/theme_supports.php');
include_once(get_template_directory().'/lib/theme_files.php');
include_once(get_template_directory().'/lib/comments_cb.php');
include_once(get_template_directory().'/lib/codestar/cs-framework.php');


function theme_foter_js(){
	?>
	<script type="text/javascript">
		var map = new GMaps({
		  el: '#map',
		  lat:<?php echo cs_get_option('maplat');?>,
		  lng:<?php echo cs_get_option('maplong');?>
		});
	</script>
	<?php
}

add_action('wp_footer','theme_foter_js',100);

function readmore($post_word){
	$post_content = explode(' ',get_the_content());
	$less_content = array_slice($post_content,0,$post_word);
	echo implode(' ',$less_content);
}

add_action( 'widgets_init', 'theme_widgets_here' );
function theme_widgets_here() {
    register_sidebar(array(
        'name' => __( 'Right Sidebar', 'imrostom' ),
        'id' => 'right_sidebar',
        'description' => __( 'Add Here Your Right Sidebar', 'imrostom' ),
        'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
    ));
}