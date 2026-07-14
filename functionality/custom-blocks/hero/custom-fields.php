<?php
if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key' => 'group_hero_block',
		'title' => 'Hero Block Settings',
		'fields' => array(
			array(
				'key' => 'field_hero_bg_type',
				'label' => 'Background Type',
				'name' => 'bg_type',
				'type' => 'button_group',
				'choices' => array(
					'image' => 'Image',
					'video' => 'Video',
				),
				'default_value' => 'image',
			),
			array(
				'key' => 'field_hero_bg_image',
				'label' => 'Background Image',
				'name' => 'bg_image',
				'type' => 'image',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_hero_bg_type',
							'operator' => '==',
							'value' => 'image',
						),
					),
				),
				'return_format' => 'url',
			),
			array(
				'key' => 'field_hero_bg_video',
				'label' => 'Background Video',
				'name' => 'bg_video',
				'type' => 'file',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_hero_bg_type',
							'operator' => '==',
							'value' => 'video',
						),
					),
				),
				'return_format' => 'url',
			),
			array(
				'key' => 'field_hero_heading',
				'label' => 'Heading Text',
				'name' => 'heading',
				'type' => 'textarea',
			),
			array(
				'key' => 'field_hero_subheading',
				'label' => 'Subheading Text',
				'name' => 'subheading',
				'type' => 'text',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/hero',
				),
			),
		),
	) );
}
