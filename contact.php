<?php 
/*
Template name: Contacts
*/
get_header();?>
	<section class="contacts_section section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>Message Me</h2>
					<div class="contact_form">
						<?php echo do_shortcode('[contact-form-7 id="42" title="My Contact Form"]');?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>My Location</h2>
					<div class="contact_map" id="map">
						
					</div>
				</div>
				<span class="call_to_action_top"><i class="fa fa-chevron-up"></i></span>
			</div>
		</div>
	</section>
<?php get_footer('home');?>