<?php
if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group( array(
		'key' => 'group_about_block',
		'title' => 'About Block Settings',
		'fields' => array(
			array(
				'key' => 'field_about_title_line_1',
				'label' => 'Title Line 1',
				'name' => 'title_line_1',
				'type' => 'text',
				'default_value' => 'WE ARE',
			),
			array(
				'key' => 'field_about_title_line_2',
				'label' => 'Title Line 2',
				'name' => 'title_line_2',
				'type' => 'text',
				'default_value' => '9024',
			),
			array(
				'key' => 'field_about_subheading',
				'label' => 'Subheading',
				'name' => 'subheading',
				'type' => 'text',
				'default_value' => 'WE TELL YOUR STORY',
			),
			array(
				'key' => 'field_about_text',
				'label' => 'Description Text',
				'name' => 'description_text',
				'type' => 'textarea',
				'default_value' => '9024 is a social-first, digital agency working with talent, brands and sporting organisations, determined to deepen connections with the fans and re-imagine what is possible when blending social media and sport.',
			),
			array(
				'key' => 'field_about_button_text',
				'label' => 'Button Text',
				'name' => 'button_text',
				'type' => 'text',
				'default_value' => 'LEARN MORE ABOUT US',
			),
			array(
				'key' => 'field_about_button_url',
				'label' => 'Button URL',
				'name' => 'button_url',
				'type' => 'url',
				'default_value' => '#',
			),
			array(
				'key' => 'field_about_post_1',
				'label' => 'Social Post Image 1 (Top Left)',
				'name' => 'post_image_1',
				'type' => 'image',
				'return_format' => 'url',
			),
			array(
				'key' => 'field_about_post_2',
				'label' => 'Social Post Image 2 (Bottom Left)',
				'name' => 'post_image_2',
				'type' => 'image',
				'return_format' => 'url',
			),
			array(
				'key' => 'field_about_post_3',
				'label' => 'Social Post Image 3 (Top Right)',
				'name' => 'post_image_3',
				'type' => 'image',
				'return_format' => 'url',
			),
			array(
				'key' => 'field_about_post_4',
				'label' => 'Social Post Image 4 (Bottom Right)',
				'name' => 'post_image_4',
				'type' => 'image',
				'return_format' => 'url',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/about',
				),
			),
		),
	) );
}
