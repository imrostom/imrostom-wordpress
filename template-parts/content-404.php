<div id="post-<?php the_ID(); ?>" <?php post_class('single_blog search_404');?>>
	<h2>Your Search Result <span><?php echo get_search_query();?></span> Not Found.</h2>
	<h2>Your Search Here Again</h2>
	<div class="search_form">
		<?php get_search_form();?>
	</div>
	<h2>OR</h2>
	<h2>Go Our Homepage Just <a href="<?php echo home_url();?>"><i class="fa fa-home"></i>Click Here</a></h2>
</div>