<?php
if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key' => 'group_logos_block',
		'title' => 'Logos Settings',
		'fields' => array(
			array(
				'key' => 'field_logos_list',
				'label' => 'Logos List',
				'name' => 'logos_list',
				'type' => 'repeater',
				'layout' => 'table',
				'button_label' => 'Add Logo',
				'sub_fields' => array(
					array(
						'key' => 'field_logo_image',
						'label' => 'Logo Image',
						'name' => 'logo_image',
						'type' => 'image',
						'return_format' => 'url',
					),
					array(
						'key' => 'field_logo_name',
						'label' => 'Logo Name',
						'name' => 'logo_name',
						'type' => 'text',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/logos',
				),
			),
		),
	) );
}
