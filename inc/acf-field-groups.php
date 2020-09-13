<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5f5e9739f19ea',
	'title' => 'CTA Bar Custom',
	'fields' => array(
		array(
			'key' => 'field_5f5e977ed5103',
			'label' => 'CTA Bar Custom Text',
			'name' => 'cta_bar_custom_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f5e97a0d5104',
			'label' => 'CTA Bar Custom URL',
			'name' => 'cta_bar_custom_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-program.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
