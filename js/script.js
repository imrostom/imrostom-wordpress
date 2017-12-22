
	jQuery(document).ready(function(){
		jQuery('.educations').owlCarousel({
			loop:true,
			dots:false,
			items:4,
			nav:true,
			navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			autoplay:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				480:{
					items:2,
					nav:true
				},
				767:{
					items:2,
					nav:true
				},
				992:{
					items:3,
					nav:true
				},
				1100:{
					items:4,
					nav:true,
					loop:true
				}
			}
		});
		
		jQuery('.testimonials').owlCarousel({
			loop:true,
			dots:false,
			items:2,
			nav:true,
			navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			autoplay:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				480:{
					items:1,
					nav:true
				},
				767:{
					items:2,
					nav:true
				},
				992:{
					items:2,
					nav:true
				},
				1100:{
					items:2,
					nav:true,
					loop:true
				}
			}
		});
		
		jQuery('.experiences').owlCarousel({
			loop:true,
			dots:false,
			items:4,
			nav:true,
			navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			autoplay:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				480:{
					items:2,
					nav:true
				},
				767:{
					items:2,
					nav:true
				},
				992:{
					items:3,
					nav:true
				},
				1100:{
					items:4,
					nav:true,
					loop:true
				}
			}
		});
	});
	
	jQuery(function(){
		jQuery('.mainmenu ul').slicknav();
	});



