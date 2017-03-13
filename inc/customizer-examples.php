<?php
/**
 * Customizer Controls.
 *
 * @package WPshed Customizer Framework
 */

// User access level
$capability = 'edit_theme_options';

// Option type
$type = 'theme_mod'; // option / theme_mod

/* ---------------------------------------------------------------------------------------------------
    Panels
--------------------------------------------------------------------------------------------------- */

// Panel
$options[] = array( 'title'             => __( 'Theme Options', 'alana' ),
                    'description'       => '',
                    'id'                => 'alana_theme_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'panel' );


/* ---------------------------------------------------------------------------------------------------
    Sections
--------------------------------------------------------------------------------------------------- */

// Section
$options[] = array( 'title'             => __( 'Test Section', 'alana' ),
                    'description'       => __( 'Section description', 'alana' ),
                    'panel'             => 'alana_theme_options',
                    'id'                => 'alana_section_id',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

/* ---------------------------------------------------------------------------------------------------
    Controls
--------------------------------------------------------------------------------------------------- */

// Text
$options[] = array( 'title'             => __( 'Text Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_text',
                    'default'           => 'Default value',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Textarea
$options[] = array( 'title'             => __( 'Textarea Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_textarea',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

// Color
$options[] = array( 'title'             => __( 'Color Picker Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_color',
                    'default'           => '#BADA55',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Radio
$options[] = array( 'title'             => __( 'Radio Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_radio',
                    'default'           => 'value2',
                    'option'            => 'radio',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'alana' ),
                        'value2' => __( 'Choice 2', 'alana' ),
                        'value3' => __( 'Choice 3', 'alana' ),
                    ),
                    'type'              => 'control' );

// Checkbox
$options[] = array( 'title'             => __( 'Checkbox Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_checkbox',
                    'default'           => '', // 1 for checked
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Select
$options[] = array( 'title'             => __( 'Select Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_select',
                    'default'           => 'value2',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'alana' ),
                        'value2' => __( 'Choice 2', 'alana' ),
                        'value3' => __( 'Choice 3', 'alana' ),
                    ),
                    'type'              => 'control' );

// Image Upload
$options[] = array( 'title'             => __( 'Image Upload Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_image',
                    'default'           => '',
                    'option'            => 'image',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// File Upload
$options[] = array( 'title'             => __( 'File Upload Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_file',
                    'default'           => '',
                    'option'            => 'file',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// URL
$options[] = array( 'title'             => __( 'URL Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_url',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// Email
$options[] = array( 'title'             => __( 'Email Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_email',
                    'default'           => '',
                    'option'            => 'email',
                    'sanitize_callback' => 'sanitize_email',
                    'type'              => 'control' );

// Password
$options[] = array( 'title'             => __( 'Password Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_password',
                    'default'           => '',
                    'option'            => 'password',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// number
$options[] = array( 'title'             => __( 'number Field (px)', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_number',
                    'default'           => 70,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                        'class' => 'example-class',
                    ),
                    'type'              => 'control' );

// Pages
$options[] = array( 'title'             => __( 'Pages Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_pages',
                    'default'           => 0,
                    'option'            => 'pages',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Categories
$options[] = array( 'title'             => __( 'Categories Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_categories',
                    'default'           => 0,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Tags
$options[] = array( 'title'             => __( 'Tags Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_tags',
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Post Types
$options[] = array( 'title'             => __( 'Post Types Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_post_types',
                    'default'           => '',
                    'option'            => 'post_types',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Posts
$options[] = array( 'title'             => __( 'Posts Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_posts',
                    'default'           => '',
                    'option'            => 'posts',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Users
$options[] = array( 'title'             => __( 'Users Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_users',
                    'default'           => '',
                    'option'            => 'users',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Menus
$options[] = array( 'title'             => __( 'Menus Field', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_section_id',
                    'id'                => 'alana_menus',
                    'default'           => '',
                    'option'            => 'menus',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
