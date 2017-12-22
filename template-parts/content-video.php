<div id="post-<?php the_ID(); ?>" <?php post_class('single_blog');?>>
<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$video = false;
	
	if ( false === strpos( $content,'wp-playlist-script' )){
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
?>

<?php
if(is_single() || empty($video)):
if(has_post_thumbnail()):?>
	<div class="blog_thum">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
	</div>
<?php endif;?>
<?php endif;?>
	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<div class="blog_meta">
		<div class="single_meta_post">Post By: <?php the_author_posts_link(); ?></div>
		<div class="single_meta_category">Category: <?php the_category( ', ' ); ?></div>
	</div>
	<div class="blog_description myoverlay">
		<?php if (! is_single()):
			if (!empty( $video ) ) :
				foreach ( $video as $video_html ) {
					echo '<div class="entry-video">';
						echo $video_html;
					echo '</div>';
				}
			else:
				echo wp_trim_words( get_the_content(),150, '.....' );
			endif;
		endif;
		if (is_single()):
			the_content();
		endif; ?>
	</div>
	<div class="mata_action">
		<div class="single_action_count">
			<a><i class="fa fa-leaf"></i> Total Comments : <?php comments_number('No Comment','One Comments','% Comments'); ?></a>
		</div>
		<div class="single_action_readmore">
			<a href="<?php the_permalink();?>">Readmore</a>
		</div>
	</div>
</div>