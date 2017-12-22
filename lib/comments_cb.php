<?php function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="media">
    <?php endif; ?>
   <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php 'Your comment is awaiting moderation.'; ?></em>
          <br />
    <?php endif; ?>
	<div class="single_comments">
		<div class="media-left">    
		  <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		</div>
		<div class="media-body">
			 <h4 class="author-name"><?php  echo get_comment_author_link(); ?></h4>
			 <span class="comments-date"> <?php echo get_comment_date();?> / <?php echo get_comment_time();?></span>
			 <?php comment_text(); ?>
			 <div class="repley_date">
				<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			 </div>
		</div>
	</div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
    }