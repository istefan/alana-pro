<?php
/**
 * Customizer Controls - Theme Options.
 *
 * @package Alana
 */

// User access level
$capability = 'edit_theme_options';

// Option type
$type = 'theme_mod'; // option / theme_mod

/* ---------------------------------------------------------------------------------------------------
    Panels
--------------------------------------------------------------------------------------------------- */

// Theme Options
$options[] = array( 'title'             => __( 'Theme Options', 'alana' ),
                    'description'       => '',
                    'id'                => 'alana_theme_options',
                    'priority'          => 28,
                    'theme_supports'    => '',
                    'type'              => 'panel' );


/* ---------------------------------------------------------------------------------------------------
    Front Page
--------------------------------------------------------------------------------------------------- */

// Front Page - Section
$options[] = array( 'title'             => __( 'Front Page', 'alana' ),
                    'description'       => __( 'Each section will be populated with the content of the selected page.', 'alana' ),
                    'panel'             => 'alana_theme_options',
                    'id'                => 'alana_fp_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Front Page Section Pages
for ( $i = 1; $i < 11; $i++ ) { 

    $options[] = array( 'title'             => __( 'Front Page Section', 'alana' ) . ' ' . $i,
                        'description'       => '',
                        'section'           => 'alana_fp_options',
                        'id'                => 'alana_fp_section_' . $i,
                        'default'           => 0,
                        'option'            => 'pages',
                        'sanitize_callback' => '',
                        'type'              => 'control' );

}

/* ---------------------------------------------------------------------------------------------------
    Site Footer
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Site Footer', 'alana' ),
                    'description'       => '',
                    'panel'             => 'alana_theme_options',
                    'id'                => 'alana_footer_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Footer Widgets
$options[] = array( 'title'             => __( 'Footer Widgets', 'alana' ),
                    'description'       => __( 'The number of widgets in the footer.', 'alana' ),
                    'section'           => 'alana_footer_options',
                    'id'                => 'alana_footer_widgets',
                    'default'           => '3',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '0' => __( 'No footer widgets', 'alana' ),
                        '1' => __( '1 Footer Widget', 'alana' ),
                        '2' => __( '2 Footer Widgets', 'alana' ),
                        '3' => __( '3 Footer Widgets', 'alana' ),
                        '4' => __( '4 Footer Widgets', 'alana' ),
                    ),
                    'type'              => 'control' );

// Footer Credits
$options[] = array( 'title'             => __( 'Footer Credits', 'alana' ),
                    'description'       => __( 'This will replace the default footer credits', 'alana' ),
                    'section'           => 'alana_footer_options',
                    'id'                => 'alana_footer_credits',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Portfolio
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Portfolio', 'alana' ),
                    'description'       => '',
                    'panel'             => 'alana_theme_options',
                    'id'                => 'alana_portfolio_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Portfolio Page Title
$options[] = array( 'title'             => __( 'Portfolio Page Title', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_portfolio_options',
                    'id'                => 'alana_portfolio_title',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Portfolio Page Description
$options[] = array( 'title'             => __( 'Portfolio Page Description', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_portfolio_options',
                    'id'                => 'alana_portfolio_text',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Portfolio Post Columns
$options[] = array( 'title'             => __( 'Portfolio Post Columns', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_portfolio_options',
                    'id'                => 'alana_portfolio_cols',
                    'default'           => 2,
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '1' => __( '1 Column', 'alana' ),
                        '2' => __( '2 Columns', 'alana' ),
                        '3' => __( '3 Columns', 'alana' ),
                        '4' => __( '4 Columns', 'alana' ),
                    ),
                    'type'              => 'control' );

// Portfolio Posts / Page
$options[] = array( 'title'             => __( 'Portfolio Posts / Page', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_portfolio_options',
                    'id'                => 'alana_portfolio_posts',
                    'default'           => 12,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ),
                    'type'              => 'control' );

// Display title on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display title on Portfolio archive page.', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_portfolio_options',
                    'id'                => 'alana_portfolio_show_title',
                    'default'           => '1',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Display excerpt on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display excerpt on Portfolio archive page.', 'alana' ),
                    'description'       => '',
                    'section'           => 'alana_portfolio_options',
                    'id'                => 'alana_portfolio_excerpt',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Slug
$options[] = array( 'title'             => __( 'Portfolio Slug', 'alana' ),
                    'description'       => __( 'This is helpful for search engines. Example: use books if you showcase your books. Note: If you change the slug, you need to go to Settings > Permalinks and save the changes again.', 'alana' ),
                    'section'           => 'alana_portfolio_options',
                    'id'                => 'alana_portfolio_slug',
                    'default'           => 'portfolio',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Custom Scripts
--------------------------------------------------------------------------------------------------- */

// Custom Scripts - Section
$options[] = array( 'title'             => __( 'Custom Scripts', 'alana' ),
                    'description'       => '',
                    'panel'             => 'alana_theme_options',
                    'id'                => 'alana_scripts_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Header Scripts
$options[] = array( 'title'             => __( 'Header Scripts', 'alana' ),
                    'description'       => __( 'This code will output immediately before the closing </head> tag in the document source.', 'alana' ),
                    'section'           => 'alana_scripts_options',
                    'id'                => 'alana_header_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Footer Scripts
$options[] = array( 'title'             => __( 'Footer Scripts', 'alana' ),
                    'description'       => __( 'This code will output immediately before the closing </body> tag in the document source.', 'alana' ),
                    'section'           => 'alana_scripts_options',
                    'id'                => 'alana_footer_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
