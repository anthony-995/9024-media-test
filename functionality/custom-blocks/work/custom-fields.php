<?php
if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key' => 'group_work_block',
		'title' => 'Our Work Settings',
		'fields' => array(
			array(
				'key' => 'field_work_section_title',
				'label' => 'Section Title',
				'name' => 'section_title',
				'type' => 'text',
				'default_value' => 'OUR WORK',
			),
			array(
				'key' => 'field_work_see_all_text',
				'label' => 'See All Link Text',
				'name' => 'see_all_text',
				'type' => 'text',
				'default_value' => 'SEE ALL CASE STUDIES',
			),
			array(
				'key' => 'field_work_see_all_url',
				'label' => 'See All Link URL',
				'name' => 'see_all_url',
				'type' => 'url',
				'default_value' => '#',
			),
			array(
				'key' => 'field_work_case_studies',
				'label' => 'Case Studies',
				'name' => 'case_studies',
				'type' => 'repeater',
				'layout' => 'block',
				'min' => 1,
				'max' => 4,
				'button_label' => 'Add Case Study',
				'sub_fields' => array(
					array(
						'key' => 'field_work_case_title',
						'label' => 'Initial Title (Centered)',
						'name' => 'case_title',
						'type' => 'text',
						'default_value' => 'ONEPLUS+',
					),
					array(
						'key' => 'field_work_case_hover_title',
						'label' => 'Hover Title',
						'name' => 'case_hover_title',
						'type' => 'text',
						'default_value' => 'RED BULL',
					),
					array(
						'key' => 'field_work_case_desc',
						'label' => 'Hover Description',
						'name' => 'case_desc',
						'type' => 'textarea',
						'default_value' => 'We partnered with Red Bull to build the Red Bull Neymar Jr’s Five brand and community across Facebook and Instagram.',
					),
					array(
						'key' => 'field_work_case_bg_type',
						'label' => 'Background Type',
						'name' => 'case_bg_type',
						'type' => 'select',
						'choices' => array(
							'image' => 'Image',
							'video' => 'Video',
						),
						'default_value' => 'image',
					),
					array(
						'key' => 'field_work_case_image',
						'label' => 'Background Image',
						'name' => 'case_image',
						'type' => 'image',
						'return_format' => 'url',
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_work_case_bg_type',
									'operator' => '==',
									'value' => 'image',
								),
							),
						),
					),
					array(
						'key' => 'field_work_case_video',
						'label' => 'Background Video',
						'name' => 'case_video',
						'type' => 'file',
						'return_format' => 'url',
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_work_case_bg_type',
									'operator' => '==',
									'value' => 'video',
								),
							),
						),
					),
					array(
						'key' => 'field_work_case_link',
						'label' => 'Case Study Link URL',
						'name' => 'case_link',
						'type' => 'url',
						'default_value' => '#',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/work',
				),
			),
		),
	) );
}
