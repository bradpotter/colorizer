<?php
/**
 * Colorizer
 *
 * @package   Colorizer
 * @author    Brad Potter
 * @license   GPL-2.0+
 * @link      http://www.bradpotter.com/plugins/colorizer
 * @copyright Copyright (c) 2014, Brad Potter
 */

/**
 * Add custom body class for Colorizer
 *
 */	
function colorizer_body_class( $classes ) {
	$classes[] = 'colorizer';
	return $classes;
}
add_filter( 'body_class', 'colorizer_body_class', 45 );

/**
 * Registers color options with the WordPress Theme Customizer
 *
 */	
function colorizer_register_customizer_color( $wp_customize ) {

	/* - - - - - Section Title - - - - - */

	$wp_customize->add_section( 'colorizer', array(
		'title'          => __( 'Colorizer', 'colorizer' ),
		'priority'       => 20,
	) );
	
	/* - - - - - Body - - - - - */

	add_action( 'customize_render_control_colorizer_body_background_color', 'body_output' );
		function body_output() {
   		 echo '<h3 class="colorizer-separator-top">BODY</h3>';
	}

	/* - - - - - Body Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_body_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_body_background_color',
			array(
			    'label'      => __( 'Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_body_background_color',
				'priority'   => 5,
			)
		)
	);

	/* - - - - - Body Text Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_body_text_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_body_text_color',
			array(
			    'label'      => __( 'Text Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_body_text_color',
				'priority'   => 10,
			)
		)
	);

	/* - - - - - Body Link Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_body_link_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_body_link_color',
			array(
			    'label'      => __( 'Link Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_body_link_color',
				'priority'   => 15,
			)
		)
	);

	/* - - - - - Body Link Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_body_link_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_body_link_hover_color',
			array(
			    'label'      => __( 'Link Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_body_link_hover_color',
				'priority'   => 20,
			)
		)
	);

	/* - - - - - Header - - - - - */

	add_action( 'customize_render_control_colorizer_header_background_color', 'header_output' );
		function header_output() {
   		 echo '<h3 class="colorizer-separator">SITE HEADER</h3>';
	}

	/* - - - - - Header Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_header_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_header_background_color',
			array(
			    'label'      => __( 'Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_header_background_color',
				'priority'   => 25,
			)
		)
	);

	/* - - - - - Site Title Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_site_title_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_site_title_color',
			array(
			    'label'      => __( 'Title Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_site_title_color',
				'priority'   => 30,
			)
		)
	);

	/* - - - - - Site Title Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_site_title_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_site_title_hover_color',
			array(
			    'label'      => __( 'Title Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_site_title_hover_color',
				'priority'   => 35,
			)
		)
	);

	/* - - - - - Site Description Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_site_description_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_site_description_color',
			array(
			    'label'      => __( 'Description Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_site_description_color',
				'priority'   => 40,
			)
		)
	);

	/* - - - - - Header Menu - - - - - */

	add_action( 'customize_render_control_colorizer_header_menu_background_color', 'header_menu_output' );
		function header_menu_output() {
   		 echo '<h3 class="colorizer-separator">HEADER MENU</h3>';
	}

	/* - - - - - Header Menu Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_header_menu_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_header_menu_background_color',
			array(
			    'label'      => __( 'Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_header_menu_background_color',
				'priority'   => 45,
			)
		)
	);

	/* - - - - - Header Menu Link Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_header_menu_link_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_header_menu_link_background_color',
			array(
			    'label'      => __( 'Link Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_header_menu_link_background_color',
				'priority'   => 50,
			)
		)
	);

	/* - - - - - Header Menu Link Background Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_header_menu_link_background_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_header_menu_link_background_hover_color',
			array(
			    'label'      => __( 'Link Background Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_header_menu_link_background_hover_color',
				'priority'   => 55,
			)
		)
	);

	/* - - - - - Header Menu Link Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_header_menu_link_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_header_menu_link_color',
			array(
			    'label'      => __( 'Link Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_header_menu_link_color',
				'priority'   => 60,
			)
		)
	);

	/* - - - - - Header Menu Link Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_header_menu_link_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_header_menu_link_hover_color',
			array(
			    'label'      => __( 'Link Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_header_menu_link_hover_color',
				'priority'   => 65,
			)
		)
	);

	/* - - - - - Primary Menu - - - - - */

	add_action( 'customize_render_control_colorizer_primary_menu_background_color', 'primary_menu_output' );
		function primary_menu_output() {
   		 echo '<h3 class="colorizer-separator">PRIMARY MENU</h3>';
	}

	/* - - - - - Primary Menu Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_primary_menu_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_primary_menu_background_color',
			array(
			    'label'      => __( 'Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_primary_menu_background_color',
				'priority'   => 70,
			)
		)
	);

	/* - - - - - Primary Menu Link Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_primary_menu_link_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_primary_menu_link_background_color',
			array(
			    'label'      => __( 'Link Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_primary_menu_link_background_color',
				'priority'   => 75,
			)
		)
	);

	/* - - - - - Primary Menu Link Background Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_primary_menu_link_background_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_primary_menu_link_background_hover_color',
			array(
			    'label'      => __( 'Link Background Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_primary_menu_link_background_hover_color',
				'priority'   => 80,
			)
		)
	);

	/* - - - - - Primary Menu Link Background Current Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_primary_menu_link_background_current_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_primary_menu_link_background_current_color',
			array(
			    'label'      => __( 'Link Background Current Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_primary_menu_link_background_current_color',
				'priority'   => 85,
			)
		)
	);

	/* - - - - - Primary Menu Link Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_primary_menu_link_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_primary_menu_link_color',
			array(
			    'label'      => __( 'Link Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_primary_menu_link_color',
				'priority'   => 90,
			)
		)
	);

	/* - - - - - Primary Menu Link Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_primary_menu_link_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_primary_menu_link_hover_color',
			array(
			    'label'      => __( 'Link Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_primary_menu_link_hover_color',
				'priority'   => 95,
			)
		)
	);

	/* - - - - - Primary Menu Link Current Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_primary_menu_link_current_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_primary_menu_link_current_color',
			array(
			    'label'      => __( 'Link Current Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_primary_menu_link_current_color',
				'priority'   => 100,
			)
		)
	);

	/* - - - - - Secondary Menu - - - - - */

	add_action( 'customize_render_control_colorizer_secondary_menu_background_color', 'secondary_menu_output' );
		function secondary_menu_output() {
   		 echo '<h3 class="colorizer-separator">SECONDARY MENU</h3>';
	}

	/* - - - - - Secondary Menu Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_secondary_menu_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_secondary_menu_background_color',
			array(
			    'label'      => __( 'Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_secondary_menu_background_color',
				'priority'   => 105,
			)
		)
	);

	/* - - - - - Secondary Menu Link Background Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_secondary_menu_link_background_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_secondary_menu_link_background_color',
			array(
			    'label'      => __( 'Link Background Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_secondary_menu_link_background_color',
				'priority'   => 110,
			)
		)
	);

	/* - - - - - Secondary Menu Link Background Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_secondary_menu_link_background_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_secondary_menu_link_background_hover_color',
			array(
			    'label'      => __( 'Link Background Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_secondary_menu_link_background_hover_color',
				'priority'   => 115,
			)
		)
	);

	/* - - - - - Secondary Menu Link Background Current Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_secondary_menu_link_background_current_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_secondary_menu_link_background_current_color',
			array(
			    'label'      => __( 'Link Background Current Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_secondary_menu_link_background_current_color',
				'priority'   => 120,
			)
		)
	);

	/* - - - - - Secondary Menu Link Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_secondary_menu_link_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_secondary_menu_link_color',
			array(
			    'label'      => __( 'Link Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_secondary_menu_link_color',
				'priority'   => 125,
			)
		)
	);
	
	/* - - - - - Secondary Menu Link Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_secondary_menu_link_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_secondary_menu_link_hover_color',
			array(
			    'label'      => __( 'Link Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_secondary_menu_link_hover_color',
				'priority'   => 130,
			)
		)
	);
	
	/* - - - - - Secondary Menu Link Current Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_secondary_menu_link_current_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_secondary_menu_link_current_color',
			array(
			    'label'      => __( 'Link Current Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_secondary_menu_link_current_color',
				'priority'   => 135,
			)
		)
	);

	/* - - - - - Content - - - - - */

	add_action( 'customize_render_control_colorizer_entry_title_color', 'content_output' );
		function content_output() {
   		 echo '<h3 class="colorizer-separator">CONTENT</h3>';
	}

	/* - - - - - Entry Title Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_entry_title_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_entry_title_color',
			array(
			    'label'      => __( 'Entry Title Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_entry_title_color',
				'priority'   => 140,
			)
		)
	);

	/* - - - - - Entry Title Link Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_entry_title_link_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_entry_title_link_color',
			array(
			    'label'      => __( 'Entry Title Link Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_entry_title_link_color',
				'priority'   => 145,
			)
		)
	);

	/* - - - - - Entry Title Link Hover Color - - - - - */

	$wp_customize->add_setting(
		'colorizer_entry_title_link_hover_color',
		array(
			'default'     => '',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'colorizer_entry_title_link_hover_color',
			array(
			    'label'      => __( 'Entry Title Link Hover Color', 'colorizer' ),
			    'section'    => 'colorizer',
			    'settings'   => 'colorizer_entry_title_link_hover_color',
				'priority'   => 150,
			)
		)
	);

}
add_action( 'customize_register', 'colorizer_register_customizer_color' );

function colorizer_customizer_css() {
	?>
<!--Customizer CSS--> 
<style type="text/css">

<?php

$bbc_color = get_theme_mod( 'colorizer_body_background_color' ); if ( $bbc_color ) { printf( '.colorizer { background-color: %s; }', $bbc_color ); }
$btec_color = get_theme_mod( 'colorizer_body_text_color' ); if ( $btec_color ) { printf( '.colorizer { color: %s; }', $btec_color ); }
$blc_color = get_theme_mod( 'colorizer_body_link_color' ); if ( $blc_color ) { printf( '.colorizer a { color: %s; }', $blc_color ); }
$blhc_color = get_theme_mod( 'colorizer_body_link_hover_color' ); if ( $blhc_color ) { printf( '.colorizer a:hover { color: %s; }', $blhc_color ); }
$hbc_color = get_theme_mod( 'colorizer_header_background_color' ); if ( $hbc_color ) { printf( '.colorizer .site-header { background-color: %s; }', $hbc_color ); }
$stc_color = get_theme_mod( 'colorizer_site_title_color' ); if ( $stc_color ) { printf( '.colorizer .site-title a { color: %s; }', $stc_color ); }
$sthc_color = get_theme_mod( 'colorizer_site_title_hover_color' ); if ( $sthc_color ) { printf( '.colorizer .site-title a:hover { color: %s; }', $sthc_color ); }
$sdc_color = get_theme_mod( 'colorizer_site_description_color' ); if ( $sdc_color ) { printf( '.colorizer .site-description { color: %s; }', $sdc_color ); }
$hmbc_color = get_theme_mod( 'colorizer_header_menu_background_color' ); if ( $hmbc_color ) { printf( '.colorizer .nav-header { background-color: %s; }', $hmbc_color ); }
$mlbc_color = get_theme_mod( 'colorizer_header_menu_link_background_color' ); if ( $mlbc_color ) { printf( '.colorizer .nav-header .genesis-nav-menu a { background-color: %s; }', $mlbc_color ); }
$hmlbhc_color = get_theme_mod( 'colorizer_header_menu_link_background_hover_color' ); if ( $hmlbhc_color ) { printf( '.colorizer .nav-header .genesis-nav-menu a:hover { background-color: %s; }', $hmlbhc_color ); }
$hmlc_color = get_theme_mod( 'colorizer_header_menu_link_color' ); if ( $hmlc_color ) { printf( '.colorizer .nav-header .genesis-nav-menu a { color: %s; }', $hmlc_color ); }
$hmlhc_color = get_theme_mod( 'colorizer_header_menu_link_hover_color' ); if ( $hmlhc_color ) { printf( '.colorizer .nav-header .genesis-nav-menu a:hover { color: %s; }', $hmlhc_color ); }
$pmbc_color = get_theme_mod( 'colorizer_primary_menu_background_color' ); if ( $pmbc_color ) { printf( '.colorizer .nav-primary { background-color: %s; }', $pmbc_color ); }
$pmlbc_color = get_theme_mod( 'colorizer_primary_menu_link_background_color' ); if ( $pmlbc_color ) { printf( '.colorizer .nav-primary .genesis-nav-menu a { background-color: %s; }', $pmlbc_color ); }
$pmlbhc_color = get_theme_mod( 'colorizer_primary_menu_link_background_hover_color' ); if ( $pmlbhc_color ) { printf( '.colorizer .nav-primary .genesis-nav-menu a:hover { background-color: %s; }', $pmlbhc_color ); }
$pmlbcc_color = get_theme_mod( 'colorizer_primary_menu_link_background_current_color' ); if ( $pmlbcc_color ) { printf( '.colorizer .nav-primary .genesis-nav-menu .current-menu-item > a { background-color: %s; }', $pmlbcc_color ); }
$pmlc_color = get_theme_mod( 'colorizer_primary_menu_link_color' ); if ( $pmlc_color ) { printf( '.colorizer .nav-primary .genesis-nav-menu a { color: %s; }', $pmlc_color ); }
$pmlhc_color = get_theme_mod( 'colorizer_primary_menu_link_hover_color' ); if ( $pmlhc_color ) { printf( '.colorizer .nav-primary .genesis-nav-menu a:hover { color: %s; }', $pmlhc_color ); }
$pmlcc_color = get_theme_mod( 'colorizer_primary_menu_link_current_color' ); if ( $pmlcc_color ) { printf( '.colorizer .nav-primary .genesis-nav-menu .current-menu-item > a { color: %s; }', $pmlcc_color ); }
$smbc_color = get_theme_mod( 'colorizer_secondary_menu_background_color' ); if ( $smbc_color ) { printf( '.colorizer .nav-secondary { background-color: %s; }', $smbc_color ); }
$smlbc_color = get_theme_mod( 'colorizer_secondary_menu_link_background_color' ); if ( $smlbc_color ) { printf( '.colorizer .nav-secondary .genesis-nav-menu a { background-color: %s; }', $smlbc_color ); }
$smlbhc_color = get_theme_mod( 'colorizer_secondary_menu_link_background_hover_color' ); if ( $smlbhc_color ) { printf( '.colorizer .nav-secondary .genesis-nav-menu a:hover { background-color: %s; }', $smlbhc_color ); }
$smlbcc_color = get_theme_mod( 'colorizer_secondary_menu_link_background_current_color' ); if ( $smlbcc_color ) { printf( '.colorizer .nav-secondary .genesis-nav-menu .current-menu-item > a { background-color: %s; }', $smlbcc_color ); }
$smlc_color = get_theme_mod( 'colorizer_secondary_menu_link_color' ); if ( $smlc_color ) { printf( '.colorizer .nav-secondary .genesis-nav-menu a { color: %s; }', $smlc_color ); }
$smlhc_color = get_theme_mod( 'colorizer_secondary_menu_link_hover_color' ); if ( $smlhc_color ) { printf( '.colorizer .nav-secondary .genesis-nav-menu a:hover { color: %s; }', $smlhc_color ); }
$smlcc_color = get_theme_mod( 'colorizer_secondary_menu_link_current_color' ); if ( $smlcc_color ) { printf( '.colorizer .nav-secondary .genesis-nav-menu .current-menu-item > a { color: %s; }', $smlcc_color ); }
$etc_color = get_theme_mod( 'colorizer_entry_title_color' ); if ( $etc_color ) { printf( '.colorizer .entry-title { color: %s; }', $etc_color ); }
$etlc_color = get_theme_mod( 'colorizer_entry_title_link_color' ); if ( $etlc_color ) { printf( '.colorizer .entry-title a { color: %s; }', $etlc_color ); }
$etlhc_color = get_theme_mod( 'colorizer_entry_title_link_hover_color' ); if ( $etlhc_color ) { printf( '.colorizer .entry-title a:hover { color: %s; }', $etlhc_color ); }

?>

</style>
<!--/Customizer CSS-->
	<?php
}
add_action( 'wp_head', 'colorizer_customizer_css' );