<div id="post-<?php the_ID(); ?>" <?php post_class('single_blog');?>>
<?php if(has_post_thumbnail()):?>
	<div class="blog_thum">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
	</div>
<?php endif;?>
	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<div class="blog_meta">
		<div class="single_meta_post">Post By: <?php the_author_posts_link(); ?></div>
		<div class="single_meta_category">Category: <?php the_category( ', ' ); ?></div>
	</div>
	<div class="blog_description">
	<?php the_excerpt();?>
	</div>
	<div class="mata_action">
		<div class="single_action_count">
			<a><i class="fa fa-leaf"></i> Total Comments : <?php comments_number('One Comment','Two Comments','% Comments'); ?></a>
		</div>
		<div class="single_action_readmore">
			<a href="<?php the_permalink();?>">Readmore</a>
		</div>
	</div>
</div>