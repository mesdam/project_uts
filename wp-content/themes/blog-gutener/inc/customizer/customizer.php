<?php

function blog_gutener_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Primary Color', 'blog-gutener' ),
		'type'         => 'color',
		'settings'     => 'site_primary_color',
		'section'      => 'colors',
		'default'      => '#f47e00',
		'priority'     => '50',
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Button Background Color', 'blog-gutener' ),
		'type'         => 'color',
		'settings'     => 'notification_bar_button_background_color',
		'section'      => 'notification_bar_options',
		'default'      => '#f47e00',
		'active_callback' => array(
			array(
				'setting'  => 'disable_notification_bar',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Button Text Color', 'blog-gutener' ),
		'type'         => 'color',
		'settings'     => 'notification_bar_button_text_color',
		'section'      => 'notification_bar_options',
		'default'      => '#ffffff',
		'active_callback' => array(
			array(
				'setting'  => 'disable_notification_bar',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );
	
	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Color', 'blog-gutener' ),
		'type'         => 'color',
		'settings'     => 'blog_post_category_color',
		'section'      => 'blog_page_options',
		'default'      => '#f47e00',
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Site Title', 'blog-gutener' ),
		'type'         => 'typography',
		'settings'     => 'site_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'font-size'      => '36px',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.site-header .site-branding .site-title',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'General Title', 'blog-gutener' ),
		'type'         => 'typography',
		'settings'     => 'general_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => 'h1, h2, h3, h4, h5, h6',
			),
		),	
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Page & Single Post Title', 'blog-gutener' ),
		'type'         => 'typography',
		'settings'     => 'page_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'font-size'      => '48px',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => 'body.single .page-title, body.page .page-title',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Homepage Section Title', 'blog-gutener' ),
		'type'         => 'typography',
		'settings'     => 'section_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Roboto',
			'font-size'      => '24px',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => 'h2.section-title',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Disable Site Tagline Border', 'blog-gutener' ),
		'type'         => 'checkbox',
		'settings'     => 'disable_site_tagline_border',
		'section'      => 'title_tagline',
		'priority'     => '30',
		'default'      => true,
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Height (in px)', 'blog-gutener' ),
		'description' => esc_html__( 'These options will only apply to Desktop. Please click on below Desktop Icon to see changes.
		', 'blog-gutener' ),
		'type'        => 'slider',
		'settings'    => 'header_image_height',
		'section'     => 'header_options',
		'transport'   => 'postMessage',
		'default'     => 120,
		'choices'     => array(
			'min'  => 0,
			'max'  => 1500,
			'step' => 5,
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Display Slider on', 'blog-gutener' ),
		'type'        => 'select',
		'settings'    => 'display_slider_on',
		'section'     => 'main_slider_options',
		'default'     => 'blog-page-above-latest-posts',
		'choices'  => array(
			'blog-page-below-header'       => esc_html__( 'Blog Page Below Header', 'blog-gutener' ),
			'blog-page-above-latest-posts' => esc_html__( 'Blog Page Above Latest Posts', 'blog-gutener' ),
			'front-page-below-header'      => esc_html__( 'Front Page Below Header', 'blog-gutener' ),
			'front-blog-page-below-header' => esc_html__( 'Front and Blog Page Below Header', 'blog-gutener' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Columns', 'blog-gutener' ),
		'type'        => 'select',
		'settings'    => 'highlight_posts_columns',
		'section'     => 'highlight_posts_options',
		'default'     => 'four_columns',
		'placeholder' => esc_attr__( 'Select category', 'blog-gutener' ),
		'choices'  => array(
			'one_column'    => esc_html__( '1 Column', 'blog-gutener' ),
			'two_columns'   => esc_html__( '2 Columns', 'blog-gutener' ),
			'three_columns' => esc_html__( '3 Columns', 'blog-gutener' ),
			'four_columns'  => esc_html__( '4 Columns', 'blog-gutener' ),
		)
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post View Number', 'blog-gutener' ),
		'description'  => esc_html__( 'Number of posts to show.', 'blog-gutener' ),
		'type'         => 'number',
		'settings'     => 'highlight_posts_posts_number',
		'section'      => 'highlight_posts_options',
		'default'      => 4,
		'choices' => array(
			'min' => '1',
			'max' => '48',
			'step' => '1',
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Height (in px)', 'blog-gutener' ),
		'description'  => esc_html__( 'These options will only apply to Desktop. Please click on below Desktop Icon to see changes.
		', 'blog-gutener' ),
		'type'         => 'slider',
		'settings'     => 'highlight_posts_height',
		'section'      => 'highlight_posts_options',
		'transport'    => 'postMessage',
		'default'      => 160,
		'choices' => array(
			'min' => '100',
			'max' => '1200',
			'step' => '10',
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Sidebar Layouts', 'blog-gutener' ),
		'description' => esc_html__( 'Right / Left / None', 'blog-gutener' ),
		'type'        => 'radio-image',
		'settings'    => 'sidebar_settings',
		'section'     => 'global_layout_options',
		'default'     => 'no-sidebar',
		'choices'  => array(
			'right'      => get_template_directory_uri() . '/assets/images/right-sidebar.png',
			'left'       => get_template_directory_uri() . '/assets/images/left-sidebar.png',
			'right-left' => get_template_directory_uri() . '/assets/images/right-left-sidebar.png',
			'no-sidebar' => get_template_directory_uri() . '/assets/images/no-sidebar.png',
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Footer Layouts', 'blog-gutener' ),
		'type'        => 'radio-image',
		'settings'    => 'footer_layout',
		'section'     => 'footer_options',
		'default'     => 'footer_three',
		'choices'  => array(
			'footer_one'   => get_template_directory_uri() . '/assets/images/footer-layout-1.png',
			'footer_two'   => get_template_directory_uri() . '/assets/images/footer-layout-2.png',
			'footer_three' => get_template_directory_uri() . '/assets/images/footer-layout-3.png',
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_bottom_footer',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );
}
add_action( 'init', 'blog_gutener_kirki_fields', 999, 1 );