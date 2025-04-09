<?php
/**
 * travel functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since travel 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'travel_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since travel 1.0
	 *
	 * @return void
	 */
	function travel_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
		add_theme_support( 'block-template-parts' );
	}
endif;
add_action( 'after_setup_theme', 'travel_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'travel_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since travel 1.0
	 *
	 * @return void
	 */
	function travel_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'travel_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'travel_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since travel 1.0
	 *
	 * @return void
	 */
	function travel_enqueue_styles() {
		wp_enqueue_style(
			'travel-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'travel_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'travel_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since travel 1.0
	 *
	 * @return void
	 */
	function travel_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'travel' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'travel_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'travel_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since travel 1.0
	 *
	 * @return void
	 */
	function travel_pattern_categories() {

		register_block_pattern_category(
			'travel_page',
			array(
				'label'       => __( 'Pages', 'travel' ),
				'description' => __( 'A collection of full page layouts.', 'travel' ),
			)
		);

		register_block_pattern_category(
			'travel_post-format',
			array(
				'label'       => __( 'Post formats', 'travel' ),
				'description' => __( 'A collection of post format patterns.', 'travel' ),
			)
		);
	}
endif;
add_action( 'init', 'travel_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'travel_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since travel 1.0
	 *
	 * @return void
	 */
	function travel_register_block_bindings() {
		register_block_bindings_source(
			'travel/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'travel' ),
				'get_value_callback' => 'travel_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'travel_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'travel_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since travel 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function travel_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
