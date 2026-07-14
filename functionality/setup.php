<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', '_9024_register_custom_blocks', 10 );
function _9024_register_custom_blocks() {
	$blocks_dir = get_template_directory() . '/functionality/custom-blocks/';
	if ( ! is_dir( $blocks_dir ) ) {
		return;
	}

	$blocks = array_diff( scandir( $blocks_dir ), array( '.', '..' ) );

	foreach ( $blocks as $block ) {
		$block_path = $blocks_dir . $block;
		if ( ! is_dir( $block_path ) ) {
			continue;
		}

		_9024_register_block_assets( $block );
		register_block_type( $block_path );

		$fields_file = $block_path . '/custom-fields.php';
		if ( file_exists( $fields_file ) ) {
			include_once $fields_file;
		}
	}
}

add_filter( 'block_categories_all', '_9024_custom_block_categories', 10, 2 );
function _9024_custom_block_categories( $categories, $post ) {
	array_unshift(
		$categories,
		array(
			'slug'  => '9024-blocks',
			'title' => __( '9024 Media Blocks', '9024-media' ),
			'icon'  => 'grid',
		)
	);
	return $categories;
}

function _9024_register_block_assets( $block_name ) {
	$theme_uri = get_template_directory_uri();
	$theme_dir = get_template_directory();
	$is_dev = _9024_is_dev();

	$css_handle = "9024-{$block_name}-style";
	if ( $is_dev ) {
		$css_src = "http://localhost:5173/functionality/custom-blocks/{$block_name}/{$block_name}.scss";
		wp_register_style( $css_handle, $css_src, array(), null );
	} else {
		$css_rel = "/assets/dist/css/{$block_name}.css";
		if ( file_exists( $theme_dir . $css_rel ) ) {
			wp_register_style( $css_handle, $theme_uri . $css_rel, array(), '1.0.0' );
		}
	}

	$js_handle = "9024-{$block_name}-script";
	if ( $is_dev ) {
		$js_src = "http://localhost:5173/functionality/custom-blocks/{$block_name}/{$block_name}.js";
		wp_register_script( $js_handle, $js_src, array(), null, true );
	} else {
		$js_rel = "/assets/dist/js/{$block_name}.js";
		if ( file_exists( $theme_dir . $js_rel ) ) {
			wp_register_script( $js_handle, $theme_uri . $js_rel, array(), '1.0.0', true );
		}
	}
}

add_filter( 'script_loader_tag', '_9024_block_script_loader_tag', 10, 3 );
function _9024_block_script_loader_tag( $tag, $handle, $src ) {
	if ( _9024_is_dev() && strpos( $handle, '9024-' ) === 0 && strpos( $handle, '-script' ) !== false ) {
		return sprintf( '<script type="module" src="%s" id="%s-js"></script>', esc_url( $src ), esc_attr( $handle ) );
	}
	return $tag;
}
