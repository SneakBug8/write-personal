<?php
/**
 * Write Theme Customizer
 *
 * @package Write
 */

/**
 * Set the Customizer
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function write_customize_register( $wp_customize ) {

	class Write_Read_Me extends WP_Customize_Control {
		public function render_content() {
			?>
			<div class="customize-text">
				<p><?php esc_html_e( 'Thank you for using the Write theme.', 'write' ); ?></p>
				<div class="customize-section first-customize-section">
				<h3><?php esc_html_e( 'Documentation', 'write' ); ?></h3>
				<p><?php esc_html_e( 'For instructions on theme configuration, please see the documentation.', 'write' ); ?></p>
				<p><a href="<?php echo esc_url( __( 'http://themegraphy.com/documents/write/', 'write' ) ); ?>" target="_blank"><?php esc_html_e( 'Theme Documentation', 'write' ); ?></a></p>
				</div>
				<div class="customize-section"><h3><?php esc_html_e( 'Support', 'write' ); ?></h3>
				<p><?php esc_html_e( 'If there is something you don\'t understand even after reading the documentation, please use the support forum.', 'write' ); ?></p>
				<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/write', 'write' ) ); ?>" target="_blank"><?php esc_html_e( 'Support Forum', 'write' ); ?></a></p>
				</div>
				<div class="customize-section"><h3><?php esc_html_e( 'Review', 'write' ); ?></h3>
				<p><?php esc_html_e( 'If you are satisfied with the theme, we would greatly appreciate if you would review it.', 'write' ); ?></p>
				<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/view/theme-reviews/write?filter=5', 'write' ) ); ?>" target="_blank"><?php esc_html_e( 'Review This Theme', 'write' ); ?></a></p>
				</div>
				<div class="customize-section"><h3><?php esc_html_e( 'Upgrade', 'write' ); ?></h3>
				<p><?php esc_html_e( 'If you would like even more features and/or 1-on-1 personal support, it is recommended you upgrade to Write Pro.', 'write' ); ?></p>
				<p><a href="<?php echo esc_url( __( 'http://themegraphy.com/wordpress-themes/write/#pro', 'write' ) ); ?>" target="_blank"><?php esc_html_e( 'Write Pro', 'write' ); ?></a></p>
				</div>
			</div>
			<?php
		}
	}

	class Write_Upgrade extends WP_Customize_Control {
		public function render_content() {
			?>
			<div class="customize-text">
				<p><?php esc_html_e( 'If you would like even more features and/or 1-on-1 personal support, it is recommended you upgrade to Write Pro.', 'write' ); ?></p>
				<p><a href="<?php echo esc_url( __( 'http://themegraphy.com/wordpress-themes/write/#pro', 'write' ) ); ?>" target="_blank" class="customize-button"><?php esc_html_e( 'Upgrade to Write Pro', 'write' ); ?></a></p>
				<div class="customize-section first-customize-section">
				<h3><?php esc_html_e( 'Fonts', 'write' ); ?></h3>
				<p><?php esc_html_e( 'With Write Pro you can set the header and body text to a variety of fonts.', 'write' ); ?></p>
				</div>
				<div class="customize-section">
				<h3><?php esc_html_e( 'Featured Posts', 'write' ); ?></h3>
				<p><?php esc_html_e( 'With Write Pro you can set the posts that will be featured on the homepage slider as well as in the Write Featured Posts widget.', 'write' ); ?></p>
				</div>
				<div class="customize-section">
				<h3><?php esc_html_e( 'Two Columns', 'write' ); ?></h3>
				<p><?php esc_html_e( 'With Write Pro you can use Sidebar and Sticky Sidebar widget areas, so you can make two columns blog.', 'write' ); ?></p>
				</div>
				<div class="customize-section">
				<h3><?php esc_html_e( 'Post Display', 'write' ); ?></h3>
				<p><?php esc_html_e( 'With Write Pro you can set how posts are displayed on the blog posts index page. You can also show/hide elements such as date, author name, comments number, featured image, categories, author profile, and post navigation.', 'write' ); ?></p>
				</div>
				<div class="customize-section">
				<h3><?php esc_html_e( 'Footer', 'write' ); ?></h3>
				<p><?php esc_html_e( 'With Write Pro you can set the footer text and hide the theme credits. You can also set Footer Social Links and Footer Menu.', 'write' ); ?></p>
				</div>
				<div class="customize-section">
				<h3><?php esc_html_e( 'Mail Support', 'write' ); ?></h3>
				<p><?php esc_html_e( 'With Write Pro you can receive 1-on-1 personal support via email. Unlike forum support, your site and support information will not be visible to other people.', 'write' ); ?></p>
				</div>
			</div>
			<?php
		}
	}

	// Site Identity
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	// READ ME
	$wp_customize->add_section( 'write_read_me', array(
		'title'    => esc_html__( 'READ ME', 'write' ),
		'priority' => 1,
	) );
	$wp_customize->add_setting( 'write_read_me_text', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Write_Read_Me( $wp_customize, 'write_read_me_text', array(
		'section'  => 'write_read_me',
		'priority' => 1,
	) ) );

	// UPGRADE
	$wp_customize->add_section( 'write_upgrade', array(
		'title'    => esc_html__( 'UPGRADE', 'write' ),
		'priority' => 2,
	) );
	$wp_customize->add_setting( 'write_upgrade_text', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Write_Upgrade( $wp_customize, 'write_upgrade_text', array(
		'section'  => 'write_upgrade',
		'priority' => 1,
	) ) );

	// Fonts
	global $write_home_text_font;
	$write_home_text_font = array(
			''                         => esc_html__( 'Default', 'write' ),
			'Safe Serif'               => 'Georgia, serif',
			'Safe Sans'                => 'Helvetica, Arial, sans-serif',
			'Selected Fonts'           => esc_html__( '----- Selected Fonts -----', 'write' ),
			'Slabo 27px:400'           => 'Slabo 27px',
			'PT Serif:400'             => 'PT Serif',
			'Alegreya:400'             => 'Alegreya',
			'Vollkorn:400'             => 'Vollkorn',
			'Crimson Text:400'         => 'Crimson Text',
			'Vesper Libre:400'         => 'Vesper Libre',
			'Halant:400'               => 'Halant',
			'Josefin Slab:400'         => 'Josefin Slab',
			'Source Sans Pro:400'      => 'Source Sans Pro',
			'Source Sans Pro:300'      => 'Source Sans Pro Light',
			'PT Sans:400'              => 'PT Sans',
			'Roboto:400'               => 'Roboto',
			'Roboto:300'               => 'Roboto Light',
			'Fira Sans:400'            => 'Fira Sans',
			'Fira Sans:300'            => 'Fira Sans Light',
			'Josefin Sans:400'         => 'Josefin Sans',
			'Fredericka the Great:400' => 'Fredericka the Great',
	);
	require get_template_directory() . '/inc/google-fonts.php';
	$write_all_fonts = write_all_google_fonts();
	$write_home_text_font = $write_home_text_font + $write_all_fonts;
	if ('ja' == get_bloginfo( 'language' ) ) {
		$write_home_text_font = array( 'Japanese Sans' => esc_html__( 'Japanese Sans', 'write' ) ) + $write_home_text_font;
	}

	// Colors
	$wp_customize->get_section( 'colors' )->priority     = 35;
	$wp_customize->add_setting( 'write_link_color' , array(
		'default'   => '#a87d28',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'write_link_color', array(
		'label'    => esc_html__( 'Link Color', 'write' ),
		'section'  => 'colors',
		'priority' => 13,
	) ) );
	$wp_customize->add_setting( 'write_link_hover_color' , array(
		'default'           => '#c49029',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'write_link_hover_color', array(
		'label'    => esc_html__( 'Link Hover Color', 'write' ),
		'section'  => 'colors',
		'priority' => 14,
	) ) );

	// Header Image
	$wp_customize->add_setting( 'write_header_display', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_header_display'
	) );
	$wp_customize->add_control( 'write_header_display', array(
		'label'   => esc_html__( 'Header Image Display', 'write' ),
		'section' => 'header_image',
		'type'    => 'radio',
		'choices' => array(
			''         => esc_html__( 'Display on the blog posts index page', 'write' ),
			'page'     => esc_html__( 'Display on all static pages', 'write' ),
			'site'     => esc_html__( 'Display on the whole site', 'write' ),
		),
		'priority' => 20,
	) );

	// Home
	$wp_customize->add_section( 'write_home', array(
		'title'       => __( 'Home', 'write' ),
		'description' => __( 'HTML tags are allowed in the home text.', 'write' ),
		'priority'    => 75,
	) );
	$wp_customize->add_setting( 'write_home_text', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'write_home_text', array(
		'label'    => __( 'Home Text', 'write' ),
		'section'  => 'write_home',
		'type'     => 'textarea',
		'priority' => 11,
	) );
	$wp_customize->add_setting( 'write_home_text_font', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_home_text_font',
	) );
	$wp_customize->add_control( 'write_home_text_font', array(
		'label'   => __( 'Font', 'write' ),
		'section' => 'write_home',
		'type'    => 'select',
		'choices' => $write_home_text_font,
		'priority' => 12,
	) );
	$wp_customize->add_setting( 'write_home_text_font_size', array(
		'default'           => ( 'ja' == get_bloginfo( 'language' ) ) ? '27' : '32',
		'sanitize_callback' => 'write_sanitize_home_text_font_size',
	) );
	$wp_customize->add_control( 'write_home_text_font_size', array(
		'label'    => __( 'Font Size (px)', 'write' ),
		'section'  => 'write_home',
		'type'     => 'text',
		'priority' => 13,
	));
	$wp_customize->add_setting( 'write_home_text_display', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_home_display'
	) );
	$wp_customize->add_control( 'write_home_text_display', array(
		'label'   => esc_html__( 'Home Text Display', 'write' ),
		'section' => 'write_home',
		'type'    => 'radio',
		'choices' => array(
			''          => esc_html__( 'Display on the blog posts index page', 'write' ),
			'front'     => esc_html__( 'Display on the static front page', 'write' ),
			'site'      => esc_html__( 'Display on the whole site', 'write' ),
		),
		'priority' => 14,
	) );

	// Menus
	$wp_customize->add_setting( 'write_hide_navigation', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_navigation', array(
		'label'    => esc_html__( 'Hide Main Navigation', 'write' ),
		'section'  => 'menu_locations',
		'type'     => 'checkbox',
		'priority' => 1,
	) );
	$wp_customize->add_setting( 'write_hide_search', array(
		'default'           => '',
		'sanitize_callback' => 'write_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'write_hide_search', array(
		'label'    => esc_html__( 'Hide Search on Main Navigation', 'write' ),
		'section'  => 'menu_locations',
		'type'     => 'checkbox',
		'priority' => 2,
	) );
}
add_action( 'customize_register', 'write_customize_register' );

/**
 * Sanitize user inputs.
 */
function write_sanitize_checkbox( $value ) {
	if ( $value == 1 ) {
		return 1;
	} else {
		return '';
	}
}
function write_sanitize_margin( $value ) {
	if ( preg_match("/^-?[0-9]+$/", $value) ) {
		return $value;
	} else {
		return '0';
	}
}
function write_sanitize_header_display( $value ) {
	$valid = array(
		''         => esc_html__( 'Display on the blog posts index page', 'write' ),
		'page'     => esc_html__( 'Display on all static pages', 'write' ),
		'site'     => esc_html__( 'Display on the whole site', 'write' ),
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_home_display( $value ) {
	$valid = array(
		''          => esc_html__( 'Display on the blog posts index page', 'write' ),
		'front'     => esc_html__( 'Display on the static front page', 'write' ),
		'site'      => esc_html__( 'Display on the whole site', 'write' ),
	);

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_home_text_font( $value ) {
	global $write_home_text_font;
	unset ( $write_home_text_font['Selected Fonts'] );
	unset ( $write_home_text_font['All Fonts'] );
	$valid = $write_home_text_font;

	if ( array_key_exists( $value, $valid ) ) {
		return $value;
	} else {
		return '';
	}
}
function write_sanitize_home_text_font_size( $value ) {
	if ( preg_match("/^[1-9][0-9]*$/", $value) ) {
		return $value;
	} else {
		return ( 'ja' == get_bloginfo( 'language' ) ) ? '27' : '32';
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function write_customize_preview_js() {
	wp_enqueue_script( 'write_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20180907', true );
}
add_action( 'customize_preview_init', 'write_customize_preview_js' );


/**
 * Enqueue Customizer CSS
 */
function write_customizer_style() {
	wp_enqueue_style( 'write-customizer-style', get_template_directory_uri() . '/css/customizer.css', array() );
}
add_action( 'customize_controls_print_styles', 'write_customizer_style');
