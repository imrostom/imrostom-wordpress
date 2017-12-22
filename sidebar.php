<div class="col-md-4">
	<div class="sidebar">
		<div class="single_sidebar">
			<h2>Search Here</h2>
			<?php echo get_search_form();?>
		</div>
		<div class="single_sidebar recent_posts">
			<h2>Recent News</h2>
			<?php 
				$recent_posts = new WP_Query(array(
					'post_type'=>'post',
					'oorder_by'=>'desc',
					'posts_per_page'=>5,
				));
				if($recent_posts->have_posts()):while($recent_posts->have_posts()):$recent_posts->the_post();
			?>
			<div class="single_recents">
				<div class="recents_info">
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				</div>
			</div>
			<?php 
			endwhile;
			endif;
			wp_reset_query();
			?>
		</div>
		<?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'right_sidebar' ); ?>
		<?php endif; ?>
		
	</div>
</div>