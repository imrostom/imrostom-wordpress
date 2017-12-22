<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'menu_position'       =>2,
  'ajax_save'       => false,
  'show_reset_all'  => true,
  'framework_title' => 'Theme Framework <small>by Rostom Ali</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]       = array(
	'name'=>'general_options',
	'title'=>'General Options',
	'icon'=>'fa fa-home',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Header Top Options',
		),
		array(
			'id'=>'header_email',
			'title'=>'Header Email Address',
			'type'=>'text',
			'default'=>'rostomali4444@gmail.com',
			'help'=>'Just Put Here Your Phone Number',
		),
		array(
			'id'=>'header_phone',
			'title'=>'Header Phone Number',
			'type'=>'text',
			'default'=>'+8801793589850',
			'help'=>'Just Put Here Your Phone Number',
		),
		array(
			'type'=>'heading',
			'content'=>'Header Social Options',
		),
		array(
			'id'=>'social_option',
			'title'=>'Social Options',
			'type'=>'group',
			'button_title'=>'Add New Social Account',
			'accordion_title'=>'Added Social Account',
			'fields'=>array(
				array(
					'id'=>'social_icon',
					'type'=>'icon',
					'title'=>'Social Icon Add Here',
					'default'=>'fa fa-facebook',
				),
				array(
					'id'=>'social_link',
					'type'=>'text',
					'title'=>'Social Link Add Here',
					'default'=>'http://www.facebook.com/engrrostomali',
				)
			)
		),
		array(
			'type'=>'heading',
			'content'=>'Logo Options',
		),
		array(
			'id'=>'logo_option',
			'title'=>'Logo Options',
			'type'=>'text',
			'default'=>'IMROSTOM',
			'help'=>'Just Put Here Your Theme Logo',
		),
		array(
			'type'=>'heading',
			'content'=>'Copyright Options',
		),
		array(
			'id'=>'copyright_option',
			'title'=>'Copyright Options',
			'type'=>'text',
			'default'=>'&copy;This Site Developed By Rostom Ali',
			'help'=>'Just Put Here Your Phone Number',
		)
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]       = array(
	'name'=>'author_options',
	'title'=>'Author Options',
	'icon'=>'fa fa-user',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Header Bottom Author Options',
		),
		array(
			'id'=>'author_name',
			'title'=>'Author Name',
			'type'=>'text',
			'default'=>'Rostom Ali',
			'help'=>'Just Put Here Your Name',
		),
		array(
			'id'=>'author_desc',
			'title'=>'Author Description',
			'type'=>'textarea',
			'default'=>'Im a Web Developer To Creating Awesome And Effective Website For Your Company.If You Want To Build Up Your Personal Or Company Website.',
			'help'=>'Just Put Here Your Description',
		),
		array(
			'id'=>'author_hire',
			'title'=>'Author Hire Link',
			'type'=>'text',
			'default'=>'#',
			'help'=>'Just Put Here Your Fiver Account Link',
		)
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// ABOUT ME OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]       = array(
	'name'=>'abouts_options',
	'title'=>'Author Abouts',
	'icon'=>'fa fa-user',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Author Descriptions Options',
		),
		array(
			'id'=>'author_img',
			'title'=>'Author Image',
			'type'=>'upload',
			'default'=>get_template_directory_uri().'/images/author.png',
			'help'=>'Just Put Here Your Image',
		),
		array(
			'id'=>'author_about_desc',
			'title'=>'Author Abouts Descriptions',
			'type'=>'textarea',
			'default'=>'Im a Web Developer To Creating Awesome And Effective Website For Your Company.If You Want To Build Up Your Personal Or Company Website.',
			'help'=>'Just Put Here Your Description',
		),
		array(
			'id'=>'info_options',
			'title'=>'Info Options',
			'type'=>'group',
			'button_title'=>'Add Your Info',
			'accordion_title'=>'Added Your Info',
			'fields'=>array(
				array(
					'id'=>'info_label',
					'type'=>'text',
					'title'=>'Add Here Label Info',
					'default'=>'Name'
				),
				array(
					'id'=>'info_value',
					'type'=>'text',
					'title'=>'Add Here Info Value',
					'default'=>'Rostom Ali',
				)
			)
		),
		array(
			'id'=>'author_resume',
			'title'=>'Author Resume Descriptions',
			'type'=>'text',
			'default'=>'#',
			'help'=>'Just Put Here Resume Link',
		),
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SKILL OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]       = array(
	'name'=>'skills_options',
	'title'=>'Skill Options',
	'icon'=>'fa fa-leaf',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Author Skill Options',
		),
		array(
			'id'=>'skill_desc',
			'title'=>'Skill Description',
			'type'=>'textarea',
			'default'=>'#',
			'help'=>'Just Put Here Description',
		),
		array(
			'id'=>'skill_option',
			'title'=>'Skill Options',
			'type'=>'group',
			'button_title'=>'Add Your Skill',
			'accordion_title'=>'Added Your Skill',
			'fields'=>array(
				array(
					'id'=>'skill_label',
					'type'=>'text',
					'title'=>'Add Here Skill Info',
					'default'=>'Wordpress'
				),
				array(
					'id'=>'skill_percentage',
					'type'=>'text',
					'title'=>'Add Here SKill Percentage',
					'default'=>'50',
				)
			)
		)
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// Experience OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]    = array(
	'name'=>'experience_options',
	'title'=>'Experience Options',
	'icon'=>'fa fa-leaf',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Author Experience Options',
		),
		array(
			'id'=>'experience_desc',
			'title'=>'Experience Description',
			'type'=>'textarea',
			'default'=>'#',
			'help'=>'Just Put Here Description',
		),
		array(
			'id'=>'ecperience_option_grp',
			'title'=>'Experience Group Options',
			'type'=>'group',
			'button_title'=>'Add Your Experience',
			'accordion_title'=>'Added Your Experience',
			'fields'=>array(
				array(
					'id'=>'experience_time',
					'type'=>'text',
					'title'=>'Add Here Experience Time Info',
					'default'=>'January 2012-Present'
				),
				array(
					'id'=>'experience_image',
					'type'=>'upload',
					'title'=>'Add Here Experience Image',
					'default'=>get_template_directory_uri().'/images/slide1.jpg',
				),
				array(
					'id'=>'experience_desig',
					'type'=>'text',
					'title'=>'Add Here Experience Designation',
					'default'=>'Web Developer',
				),
				array(
					'id'=>'experience_company',
					'type'=>'text',
					'title'=>'Add Here Company Name',
					'default'=>'RRF INSTITUTE',
				)
			)
		)
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// Education OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]    = array(
	'name'=>'education_options',
	'title'=>'Education Options',
	'icon'=>'fa fa-leaf',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Author Education Options',
		),
		array(
			'id'=>'education_desc',
			'title'=>'Education Description',
			'type'=>'textarea',
			'default'=>'#',
			'help'=>'Just Put Here Description',
		),
		array(
			'id'=>'education_option_grp',
			'title'=>'Education Group Options',
			'type'=>'group',
			'button_title'=>'Add Your Education',
			'accordion_title'=>'Added Your Education',
			'fields'=>array(
				array(
					'id'=>'education_time',
					'type'=>'text',
					'title'=>'Add Here Education Time Info',
					'default'=>'January 2012-Present'
				),
				array(
					'id'=>'education_image',
					'type'=>'upload',
					'title'=>'Add Here Education Image',
					'default'=>get_template_directory_uri().'/images/slide1.jpg',
				),
				array(
					'id'=>'education_desig',
					'type'=>'text',
					'title'=>'Add Here Education Designation',
					'default'=>'Web Developer',
				),
				array(
					'id'=>'education_company',
					'type'=>'text',
					'title'=>'Add Here Company Name',
					'default'=>'RRF INSTITUTE',
				)
			)
		)
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// Portfolio OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]    = array(
	'name'=>'portfolio_options',
	'title'=>'Portfolio Options',
	'icon'=>'fa fa-leaf',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Author Portfolio Options',
		),
		array(
			'id'=>'portfolio_desc',
			'title'=>'Portfolio Description',
			'type'=>'textarea',
			'default'=>'#',
			'help'=>'Just Put Here Description',
		),
		array(
			'type'=>'heading',
			'content'=>'Project Sections',
		),
		array(
			'id'=>'project_option_grp',
			'title'=>'Project Group Options',
			'type'=>'group',
			'button_title'=>'Add Your Project',
			'accordion_title'=>'Added Your Project',
			'fields'=>array(
				array(
					'id'=>'project_icon',
					'type'=>'icon',
					'title'=>'Add Here Project Icon',
					'default'=>'fa fa-leaf'
				),
				array(
					'id'=>'project_number',
					'type'=>'text',
					'title'=>'Add Here Project Number',
					'default'=>'555',
				),
				array(
					'id'=>'project_title',
					'type'=>'text',
					'title'=>'Add Here Project Title',
					'default'=>'Happy Clients',
				)
			)
		)
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TESTIMONIAL OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]    = array(
	'name'=>'Testimonial_options',
	'title'=>'Testimonial Options',
	'icon'=>'fa fa-leaf',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Testimonial Description',
		),
		array(
			'id'=>'testimonial_desc',
			'title'=>'Testimonial Description',
			'type'=>'textarea',
			'default'=>'#',
			'help'=>'Just Put Here Description',
		),
		array(
			'type'=>'heading',
			'content'=>'Testimonial Sections',
		),
		array(
			'id'=>'testimonial_option_grp',
			'title'=>'Testimonial Group Options',
			'type'=>'group',
			'button_title'=>'Add Your Testimonial',
			'accordion_title'=>'Added Your Testimonial',
			'fields'=>array(
				array(
					'id'=>'testimonial_image',
					'type'=>'upload',
					'title'=>'Add Here Testimonial Clients Image',
					'default'=>get_template_directory_uri().'/images/slide1.jpg',
				),
				array(
					'id'=>'clients_name',
					'type'=>'text',
					'title'=>'Add Here Clients Name',
					'default'=>'Rostom Ali',
				),
				array(
					'id'=>'clients_desing',
					'type'=>'text',
					'title'=>'Add Here clients_desing',
					'default'=>'Web Developer',
				),
				array(
					'id'=>'clients_desig',
					'type'=>'textarea',
					'title'=>'Add Here clients_desing',
					'default'=>'#',
				)
			)
		)
	),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// OTHERS OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]    = array(
	'name'=>'myothers_options',
	'title'=>'Others Options',
	'icon'=>'fa fa-leaf',
	'fields'=>array(
		array(
			'type'=>'heading',
			'content'=>'Blog Description',
		),
		array(
			'id'=>'blog_desc',
			'title'=>'Blog Description',
			'type'=>'textarea',
			'default'=>'#',
			'help'=>'Just Put Here Description',
		),
		array(
			'type'=>'heading',
			'content'=>'Map Sections',
		),
		array(
			'id'=>'maplat',
			'title'=>'Map Lattitude',
			'type'=>'text',
			'default'=>'23.790401',
			'help'=>'Just Put Here Map ',
		),
		array(
			'id'=>'maplong',
			'title'=>'Map Longitude',
			'type'=>'text',
			'default'=>'90.375563',
			'help'=>'Just Put Here Map',
		),
	),
);




// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);


CSFramework::instance( $settings, $options );
