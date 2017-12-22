<?php

if ( post_password_required() ) {
	return;
}
?>

<div class="comments_section">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'Comments title', 'imrostom' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>
		<div class="comments">
			<ul class="comment-list">
				<?php
					wp_list_comments( array(
						'walker'       => new Walker_Comment(),
						'callback'       => 'mytheme_comment',
						'style'       => 'li',
						'short_ping'  => false,
						'avatar_size' => 80,
					) );
				?>
			</ul><!-- .comment-list -->
		</div>
		

	<?php endif; // have_comments() ?>

	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php echo 'Comments are closed.'; ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- .comments-area -->
