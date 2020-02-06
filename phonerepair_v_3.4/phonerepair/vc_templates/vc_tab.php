<?php
/** @var $this WPBakeryShortCode_VC_Tab */
$output = $title = $tab_id = $phonerepair_icon = $phonerepair_image = $phonerepair_image_checkbox = $phonerepair_bg_image = $phonerepair_bg_position_h =  $phonerepair_bg_repeat =  $phonerepair_bg_position_v = '';

extract( shortcode_atts( array(
  'phonerepair_bg_image' => '',
  'phonerepair_bg_position_h' => '',
  'phonerepair_bg_position_v' => '',
  'phonerepair_bg_repeat' => ""
), $atts ) );


extract(shortcode_atts($this->predefined_atts, $atts));

wp_enqueue_script('jquery_ui_tabs_rotate');
$img_size="";
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix', $this->settings['base'], $atts );
$output .= "\n\t\t\t" . '<div id="tab-'. (empty($tab_id) ? sanitize_title( $title ) : $tab_id) .'" class="'.$css_class. '"';
	if (isset($phonerepair_bg_image)) {
		if ($phonerepair_bg_image != "") {
			$img_id    = preg_replace( '/[^\d]/', '', $phonerepair_bg_image );
			$img       = wpb_getImageBySize( array( 'attach_id' => $img_id, 'full_size' => $img_size,'thumb_size' => 'thumbnail') );
			$img_path  = $img['p_img_large'][0];
			$phonerepair_bg_position_string = "";
			$phonerepair_bg_repeat_string = "";
			if ($phonerepair_bg_position_h != "" && $phonerepair_bg_position_v != "") {
				$phonerepair_bg_position_string = "background-position : " . $phonerepair_bg_position_h . " " . $phonerepair_bg_position_v . ";";
			}
			if ($phonerepair_bg_repeat != "") {
				$phonerepair_bg_repeat_string = "background-repeat : " . $phonerepair_bg_repeat . ";";
			}
			$output .= ' style="background-image: url(' . $img_path .');' . $phonerepair_bg_position_string . ";" . $phonerepair_bg_repeat_string . ";" . '
			"';
		}
	}

	

$output .= ">";
$output .= ($content=='' || $content==' ') ? esc_html__("Empty tab. Edit page to add content here.", 'phonerepair') : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
$output .= "\n\t\t\t" . '</div> ' . $this->endBlockComment('.wpb_tab');

echo html_entity_decode($output);