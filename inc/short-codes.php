<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Alana
 */


/**
 * Grid shortcode.
 */
function alana_grid_shortcode( $atts, $content = null ) {

    extract( shortcode_atts( array( 'size' => '' ), $atts ) );
    
    $output = sprintf( '<div class="%s">%s</div>', 
        trim( $size ),
        alana_parse_content( $content )
    );
	
    return $output;
}
add_shortcode( 'grid', 'alana_grid_shortcode' );


/**
 * Content Box shortcode.
 */
function alana_box_shortcode( $atts, $content = null ) {

    extract( shortcode_atts( array( 'color' => 'blue' ), $atts ) );

    $output = sprintf( '<div class="content-box cb-%s">%s</div>', 
        trim( $color ),
        alana_parse_content( $content )
    );

	return $output;
}
add_shortcode( 'box', 'alana_box_shortcode' );


/**
 * Effect shortcode.
 */
function alana_effect_shortcode( $atts, $content = null ) {

    extract( shortcode_atts( array( 'effect' => 'fade-up' ), $atts ) );

    $output = sprintf( '<div class="%s">%s</div>',
        trim( $effect ),
        alana_parse_content( $content )
    );

    return $output;
}
add_shortcode( 'fade', 'alana_effect_shortcode' );


/**
 * Button shortcode.
 */
function alana_button_shortcode( $atts, $content = null ) {

    extract( shortcode_atts(array(
        'target'    => '_self',
        'url'       => '#',
        'text'      => 'Click Here',
        'type'      => 'default',
        'icon'      => '',
    ), $atts ) );

    $icon = trim( str_replace( 'genericon-', '', $icon ) );

    $before = ( $icon != '' ) ? '<span class="inline-icon genericon genericon-'. $icon .'"></span> ' : '';
    
    $output = sprintf( '<a href="%s" class="button %s" target="%s">%s%s</a>',
        esc_url( $url ),
        trim( $type ),
        trim( $target ),
        $before,
        esc_attr( $text )
    );

    return $output;
}
add_shortcode( 'button', 'alana_button_shortcode' );


/**
 * Divider shortcode.
 */
function alana_divider_shortcode( $atts, $content = null ) {
    $output = '<div class="divider"><div class="divider-inside"></div></div>';
    return $output;
}
add_shortcode( 'divider', 'alana_divider_shortcode' );


/**
 * Icon shortcode.
 */
function alana_icon_shortcode( $atts, $content = null ) {

    extract( shortcode_atts(array(
        'icon'      => 'wordpress',
    ), $atts ) );

    $icon = trim( str_replace( 'genericon-', '', $icon ) );
    
    $output = sprintf( '<span class="inline-icon genericon genericon-%s"></span>',
        $icon
    );

    return $output;
}
add_shortcode( 'icon', 'alana_icon_shortcode' );


