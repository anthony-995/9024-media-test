<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function _9024_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );

	if ( _9024_is_dev() ) {
		add_editor_style( 'http://localhost:5173/assets/css/src/editor-style.scss' );
	} else {
		add_editor_style( 'assets/dist/css/editor.css' );
	}

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '9024-media' ),
	) );
}
add_action( 'after_setup_theme', '_9024_setup' );

function _9024_is_dev() {
	static $is_dev = null;
	if ( $is_dev !== null ) {
		return $is_dev;
	}

	$is_dev = false;
	if ( wp_get_environment_type() === 'local' || wp_get_environment_type() === 'development' ) {
		$fp = @fsockopen( 'localhost', 5173, $errno, $errstr, 0.05 );
		if ( $fp ) {
			$is_dev = true;
			fclose( $fp );
		}
	}
	return $is_dev;
}

function _9024_enqueue_scripts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Open+Sans:wght@400;600&family=Oswald:wght@500;700&display=swap', array(), null );

	// Always enqueue the compiled stylesheet statically to prevent dev-server MIME-type conflicts
	wp_enqueue_style( '9024-main', get_template_directory_uri() . '/assets/dist/css/main.css', array(), '1.0.0' );

	if ( _9024_is_dev() ) {
		wp_enqueue_script( 'vite-client', 'http://localhost:5173/@vite/client', array(), null, true );
		wp_enqueue_script( '9024-main', 'http://localhost:5173/assets/js/src/index.js', array(), null, true );
	} else {
		wp_enqueue_script( '9024-main', get_template_directory_uri() . '/assets/dist/js/main.js', array(), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', '_9024_enqueue_scripts' );

function _9024_script_loader_tag( $tag, $handle, $src ) {
	if ( in_array( $handle, array( 'vite-client', '9024-main' ), true ) ) {
		return sprintf( '<script type="module" src="%s" id="%s-js"></script>', esc_url( $src ), esc_attr( $handle ) );
	}
	return $tag;
}
add_filter( 'script_loader_tag', '_9024_script_loader_tag', 10, 3 );

require_once get_template_directory() . '/functionality/setup.php';
