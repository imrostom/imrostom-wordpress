<?php get_header();?>
	<div class="breadcumb_section section_padding">
		<div class="container">
			<div class="col-md-12">
				<h2><a href="">Blog Arhieve</a></h2>
			</div>
		</div>
	</div>
	
	<div class="blog_page_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog_content">
					<?php if(have_posts()):
						while(have_posts()):the_post();
					?>
						<div class="single_blog">
							<?php if(has_post_thumbnail()):?>
								<div class="blog_thum">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
								</div>
							<?php endif;?>
							<h2><?php the_title();?></h2>
							<div class="blog_meta">
								<div class="single_meta_post">Post By: <?php the_author_posts_link(); ?></div>
								<div class="single_meta_category">Category: <?php the_category( ', ' ); ?></div>
							</div>
							<div class="blog_description">
								<?php the_content();?>
							</div>
							<div class="blog_metas">
								<div class="share_meta">
									<label for="">Social Share:</label>
									<a href="http://www.facebook.com/sharer.php?t=<?php the_title();?>&u=<?php the_permalink(); ?>" class="fa fa-facebook"></a>
									<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="fa fa-google-plus"></a>
									<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" class="fa fa-twitter"></a>
								</div>
								<?php if(has_tag()):?> 
								<div class="blog_tags">
									<label for="">Tags:</label>
									<?php the_tags();?>
								</div>
								<?php endif;?>
							</div>
							<div class="blog_pagination">
								<h4>You Might Also See Here Some Info</h4>
								<span class="pull-left"><?php previous_post_link(); ?></span>
								<span class="pull-right"><?php next_post_link();?></span>
							</div>
						</div>
						<?php 
							endwhile;
							else:
								get_template_part('template-parts/content','none');
							endif;
							wp_reset_postdata();
						?>
						<div class="single_blog">
							<div class="readmore_section">
								<h2>You Might Also Like</h2>
								<div class="row">
								<?php 
									global $post;
									//print_r(wp_get_post_categories($post->ID));
									$related = new Wp_Query(array(
										'posts_per_page'=>2,
										'post__not_in' => array($post->ID),
										'category_in'=>wp_get_post_categories($post->ID)
									));
									if($related):
										if($related->have_posts()):while($related->have_posts()):$related->the_post();
								?>
									<div class="col-md-6">
										<div class="single_blog">
											<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
											<div class="blog_meta">
												<div class="single_meta_post">Post By: <?php the_author_posts_link(); ?></div>
												<div class="single_meta_category">Category: <?php the_category( ' ' ); ?></div>
											</div>
											<?php if(has_post_thumbnail()):?>
												<div class="blog_thum">
													<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
												</div>
											<?php endif;?>
											<div class="blog_description">
												<?php
													$content = apply_filters( 'the_content', get_the_content() );
													$video = false;
													
													if ( false === strpos( $content,'wp-playlist-script' )){
														$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
													}
												if (!empty( $video ) ) :
														foreach ( $video as $video_html ) {
															echo '<div class="entry-video">';
																echo $video_html;
															echo '</div>';
														}
													else:
														echo wp_trim_words( get_the_content(),30, '.....' );
													endif;
												?>
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
									</div>
								<?php 
									endwhile;
									else:
										get_template_part('template-parts/content',get_post_format());
									endif;
									wp_reset_postdata();
								endif;?>
								</div>
							</div>
							<div class="comments_sections">
								<?php comments_template();?>
								<?php the_comments_pagination();?>
							</div>
						</div>
					</div>
				</div>
				<?php get_sidebar();?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer('home');?>