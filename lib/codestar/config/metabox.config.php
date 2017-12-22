<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_portfolio_meta_id',
  'title'     => 'Portfolio Post Options',
  'post_type' => 'portfolio',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    array(
      'name'   => 'portfolio_op',
      'fields' => array(
        array(
          'id'    => 'portfolio_link',
          'type'  => 'text',
          'title' => 'Portfolio Website URL',
        )
      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
