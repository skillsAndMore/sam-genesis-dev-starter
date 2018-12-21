<?php
/**
 * SkillsAndMore Genesis Dev Starter.
 *
 * This file adds the Customizer additions to the SkillsAndMore Genesis Dev Starter Theme.
 *
 * @package SkillsAndMore Genesis Dev Starter
 * @author  SkillsAndMore
 * @license GPL-2.0-or-later
 * @link    https://skillsandmore.org/
 */

add_action( 'customize_register', 'sam_dev_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function sam_dev_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'sam_dev_link_color',
		array(
			'default'           => sam_dev_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sam_dev_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', 'sam-dev-starter' ),
				'label'       => __( 'Link Color', 'sam-dev-starter' ),
				'section'     => 'colors',
				'settings'    => 'sam_dev_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'sam_dev_accent_color',
		array(
			'default'           => sam_dev_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sam_dev_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', 'sam-dev-starter' ),
				'label'       => __( 'Accent Color', 'sam-dev-starter' ),
				'section'     => 'colors',
				'settings'    => 'sam_dev_accent_color',
			)
		)
	);

	$wp_customize->add_setting(
		'sam_dev_logo_width',
		array(
			'default'           => 350,
			'sanitize_callback' => 'absint',
		)
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'sam_dev_logo_width',
		array(
			'label'       => __( 'Logo Width', 'sam-dev-starter' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'sam-dev-starter' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'sam_dev_logo_width',
			'type'        => 'number',
			'input_attrs' => array(
				'min' => 100,
			),

		)
	);

}
