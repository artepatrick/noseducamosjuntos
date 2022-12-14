<?php

Kirki::add_field( 'bizberg', array(
    'type'        => 'custom',
    'settings'    => 'blank_content',
    'section'     => 'typography',
    'default'     => '',
) );

Kirki::add_field( 'bizberg', array(
    'type'        => 'custom',
    'settings'    => 'body_content_typo',
    'section'     => 'base-typography',
    'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Body & Content', 'bizberg' ) . '</div>',
) );

Kirki::add_field( 'bizberg', [
	'type'        => 'checkbox',
	'settings'    => 'body_content_typo_status',
	'label'       => esc_html__( 'Enable / Disable', 'bizberg' ),
	'description' => esc_html__( 'Tick to enable custom font', 'bizberg' ),
	'section'     => 'base-typography',
	'default'     => false,
] );

Kirki::add_field( 'bizberg', [
	'type'        => 'typography',
	'settings'    => 'typography_body_content',
	'section'     => 'base-typography',
	'default'     => [
		'font-family'    => 'Open Sans',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.8'
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'p,#blog .blog-post .entry-meta > span > a,#blog .blog-post.blog-large .entry-date a,#sidebar.sidebar-wrapper a,#footer ul.inline-menu > li a,#footer p.copyright,#footer .copyright a,.result-paging-wrapper ul.paging li a, .navigation.pagination a, .navigation.pagination span,.breadcrumb-wrapper.not-home li a,.breadcrumb li .active,.comment-navigation .nav-previous a, .comment-navigation .nav-next a, .post-navigation .nav-previous a, .post-navigation .nav-next a,ul.comment-item li .comment-header > a,.edit_repy_links a,#respond .logged-in-as a,.comments-area label,#respond form input,#respond .comment-form-comment textarea,#cancel-comment-reply-link,.detail-content.single_page p, .comment-content p,p.banner_subtitle, .swiper-content p, .bizberg_detail_cat,.bizberg_detail_user_wrapper a, .bizberg_detail_comment_count, .tag-cloud-heading, .single_page .tagcloud.tags a, .full-screen-search input[type="text"].search-field,.detail-content.single_page ul, .comment-content ul,.bizberg_default_page ul,.bizberg_default_page li',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'body_content_typo_status',
			'operator' => '==',
			'value'    => true,
		]
	],
] );