<?php
if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key' => 'group_services_block',
		'title' => 'Services Block Settings',
		'fields' => array(
			// Service 1
			array(
				'key' => 'field_services_title_1',
				'label' => 'Service 1 Title',
				'name' => 'service_title_1',
				'type' => 'text',
				'default_value' => 'COMMERCIAL',
			),
			array(
				'key' => 'field_services_subtitles_1',
				'label' => 'Service 1 Subtitles',
				'name' => 'service_subtitles_1',
				'type' => 'repeater',
				'layout' => 'table',
				'button_label' => 'Add Subtitle Tag',
				'sub_fields' => array(
					array(
						'key' => 'field_services_sub_text_1',
						'label' => 'Tag Text',
						'name' => 'subtitle_text',
						'type' => 'text',
					),
				),
			),
			array(
				'key' => 'field_services_bg_type_1',
				'label' => 'Service 1 Background Type',
				'name' => 'service_bg_type_1',
				'type' => 'select',
				'choices' => array(
					'image' => 'Image',
					'video' => 'Video',
				),
				'default_value' => 'image',
			),
			array(
				'key' => 'field_services_image_1',
				'label' => 'Service 1 Background Image',
				'name' => 'service_image_1',
				'type' => 'image',
				'return_format' => 'url',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_services_bg_type_1',
							'operator' => '==',
							'value' => 'image',
						),
					),
				),
			),
			array(
				'key' => 'field_services_video_1',
				'label' => 'Service 1 Background Video',
				'name' => 'service_video_1',
				'type' => 'file',
				'return_format' => 'url',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_services_bg_type_1',
							'operator' => '==',
							'value' => 'video',
						),
					),
				),
			),

			// Service 2
			array(
				'key' => 'field_services_title_2',
				'label' => 'Service 2 Title',
				'name' => 'service_title_2',
				'type' => 'text',
				'default_value' => 'SOCIAL',
			),
			array(
				'key' => 'field_services_subtitles_2',
				'label' => 'Service 2 Subtitles',
				'name' => 'service_subtitles_2',
				'type' => 'repeater',
				'layout' => 'table',
				'button_label' => 'Add Subtitle Tag',
				'sub_fields' => array(
					array(
						'key' => 'field_services_sub_text_2',
						'label' => 'Tag Text',
						'name' => 'subtitle_text',
						'type' => 'text',
					),
				),
			),
			array(
				'key' => 'field_services_bg_type_2',
				'label' => 'Service 2 Background Type',
				'name' => 'service_bg_type_2',
				'type' => 'select',
				'choices' => array(
					'image' => 'Image',
					'video' => 'Video',
				),
				'default_value' => 'image',
			),
			array(
				'key' => 'field_services_image_2',
				'label' => 'Service 2 Background Image',
				'name' => 'service_image_2',
				'type' => 'image',
				'return_format' => 'url',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_services_bg_type_2',
							'operator' => '==',
							'value' => 'image',
						),
					),
				),
			),
			array(
				'key' => 'field_services_video_2',
				'label' => 'Service 2 Background Video',
				'name' => 'service_video_2',
				'type' => 'file',
				'return_format' => 'url',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_services_bg_type_2',
							'operator' => '==',
							'value' => 'video',
						),
					),
				),
			),

			// Service 3
			array(
				'key' => 'field_services_title_3',
				'label' => 'Service 3 Title',
				'name' => 'service_title_3',
				'type' => 'text',
				'default_value' => 'PRODUCTION',
			),
			array(
				'key' => 'field_services_subtitles_3',
				'label' => 'Service 3 Subtitles',
				'name' => 'service_subtitles_3',
				'type' => 'repeater',
				'layout' => 'table',
				'button_label' => 'Add Subtitle Tag',
				'sub_fields' => array(
					array(
						'key' => 'field_services_sub_text_3',
						'label' => 'Tag Text',
						'name' => 'subtitle_text',
						'type' => 'text',
					),
				),
			),
			array(
				'key' => 'field_services_bg_type_3',
				'label' => 'Service 3 Background Type',
				'name' => 'service_bg_type_3',
				'type' => 'select',
				'choices' => array(
					'image' => 'Image',
					'video' => 'Video',
				),
				'default_value' => 'image',
			),
			array(
				'key' => 'field_services_image_3',
				'label' => 'Service 3 Background Image',
				'name' => 'service_image_3',
				'type' => 'image',
				'return_format' => 'url',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_services_bg_type_3',
							'operator' => '==',
							'value' => 'image',
						),
					),
				),
			),
			array(
				'key' => 'field_services_video_3',
				'label' => 'Service 3 Background Video',
				'name' => 'service_video_3',
				'type' => 'file',
				'return_format' => 'url',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_services_bg_type_3',
							'operator' => '==',
							'value' => 'video',
						),
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/services',
				),
			),
		),
	) );
}
