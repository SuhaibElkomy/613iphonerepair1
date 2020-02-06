<?php
$output = $title = $interval = $el_class = $phonerepair_icon = $phonerepair_image_checkbox  = '';

extract( shortcode_atts( array(
	'title' => '',
	'interval' => 0,
	'el_class' => '',
	'phonerepair_icon'=>'',
	'phonerepair_image_checkbox' => '',
  'phonerepair_image' => ''
), $atts ) );


$img_size="";
$thumb_size="thumbnail";
$post_thumbnail="";

wp_enqueue_script( 'jquery-ui-tabs' );

$el_class = $this->getExtraClass( $el_class );

$element = 'wpb_tabs';
if ( 'vc_tour' == $this->shortcode ) $element = 'wpb_tour';

// Extract tab titles
preg_match_all( '/vc_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = array();
/**
 * vc_tabs
 *
 */
if ( isset( $matches[1] ) ) {
	$tab_titles = $matches[1];
}
$tabs_nav = '';
$tabs_nav .= '<ul class="wpb_tabs_nav ui-tabs-nav vc_clearfix">';

foreach ( $tab_titles as $tab ) {
	$tab_atts = shortcode_parse_atts($tab[0]);


	if(isset($tab_atts['title'])) {
		$tabs_nav .= '<li class="tabs-icon"><div class="tab-separateur">';
		if (isset($tab_atts['phonerepair_image_checkbox'])) {

			if ($tab_atts['phonerepair_image_checkbox'] == 'yes'){
				/*var_dump($tab_atts['phonerepair_image']);*/
	      $img_id    = preg_replace( '/[^\d]/', '', $tab_atts['phonerepair_image'] );
	      $img       = wpb_getImageBySize( array( 'attach_id' => $img_id, 'full_size' => $img_size,'thumb_size' => 'thumbnail') );
	      
	      $img_path  = $img['p_img_large'][0];

	      $tabs_nav .=$img['thumbnail'];
	    }
   }else {
	      $tabs_nav .= '<i class="fa '.$tab_atts['phonerepair_icon'] .' tab-icon"></i>';
	     }
		$tabs_nav   .= '<a href="#tab-' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '">' . $tab_atts['title'] . '</a></div></li>';
		
	}
}
$tabs_nav .= '</ul>' . "\n";

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim( $element . ' wpb_content_element ' . $el_class ), $this->settings['base'], $atts );

$output .= "\n\t" . '<div class="' . $css_class . '" data-interval="' . $interval . '">';
$output .= "\n\t\t" . '<div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs vc_clearfix">';
$output .= wpb_widget_title( array( 'title' => $title, 'extraclass' => $element . '_heading' ) );
$output .= "\n\t\t\t" . $tabs_nav;
$output .= "\n\t\t\t" . wpb_js_remove_wpautop( $content );
if ( 'vc_tour' == $this->shortcode ) {
	$output .= "\n\t\t\t" . '<div class="wpb_tour_next_prev_nav vc_clearfix"> <span class="wpb_prev_slide"><a href="#prev" title="' . esc_attr__( 'Previous tab', 'phonerepair' ) . '">' . esc_html__( 'Previous tab', 'phonerepair' ) . '</a></span> <span class="wpb_next_slide"><a href="#next" title="' .esc_attr__( 'Next tab', 'phonerepair' ) . '">' .esc_html__( 'Next tab', 'phonerepair' ) . '</a></span></div>';
}
$output .= "\n\t\t" . '</div> ' . $this->endBlockComment( '.wpb_wrapper' );
$output .= "\n\t" . '</div> ' . $this->endBlockComment( $element );

echo html_entity_decode($output);
