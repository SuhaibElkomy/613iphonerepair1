<?php

if(!function_exists('phonerepair_get_categoriesi')) {
	function phonerepair_get_categories( $taxonomy = '') {
		$args = array(
			'post_type' => 'portfolio',
			'hide_empty' => 0
		);

		$output = array();

		$args['taxonomy'] = $taxonomy;
		$categories = get_categories( $args);

		if(!empty($categories) && is_array($categories)) {
			foreach( $categories as $category ) {
				if(is_object($category)) {
					$output[$category->name] = $category->slug;
				}
			}
		}

		return $output;
	}
}

//-----------------portfolio------------------*/
add_action('admin_init', 'phonerepair_portfolio_init');

function phonerepair_portfolio_init() {
	global $vc_add_css_animation;
	global $phonerepair_fonts_array;

	if ( function_exists( 'vc_map' ) ) {
		vc_map( array(
			"name"            => esc_html__( "Portfolio", 'phonerepair' ),
			"base"            => "phonerepair_portfolio",
			"icon"            => get_template_directory_uri() . "/images/icon/meknes.png",
			"content_element" => true,
			"is_container"    => false,
			"params"          => array(
				array(
					"heading"    => esc_html__( "Portfolio Layout", 'phonerepair' ),
					"type"       => "dropdown",
					"param_name" => "phonerepair_portfolio_layout",
					"value"      => array(
						'Grid (Default)'        => 'grid',
						'Masonry'               => 'masonry',
						'Free Style'            => 'free_style',
						'Carousel'              => 'carousel',
						'Custom portfolio item' => 'custom_item'
					),
				),
				array(
					"heading"    => esc_html__( "Hover Style", 'phonerepair' ),
					"type"       => "dropdown",
					"param_name" => "phonerepair_portfolio_hover_style",
					"value"      => array(
						'Style 1' => 'style-1',
						'Style 2' => 'style-2',
						'Style 3' => 'style-3'
					),
					"dependency" => Array(
						"element" => "phonerepair_portfolio_layout",
						"value"   => array( 'grid', 'masonry', 'free_style' )
					),
				),
                array(
                    "heading"    => esc_html__( "Layout Style", 'phonerepair' ),
                    "type"       => "dropdown",
                    "param_name" => "phonerepair_portfolio_free_style_layout",
                    "value"      => array(
                        'Style 1' => 'style-1',
                        'Style 2' => 'style-2'
                    ),
                    "dependency" => Array(
                        "element" => "phonerepair_portfolio_layout",
                        "value"   => array( 'free_style' )
                    ),
                ),
				array(
             "type" => "colorpicker",
             "class" => "",
             "heading" => __("Overlay Color", 'phonerepair'),
             "param_name" => "overlay_color",
             "value" => "",
             "value"   => array( 'grid', 'masonry', 'free_style' )
        ),
				array(
					"type"       => "checkbox",
					"heading"    => esc_html__( "Categories", 'phonerepair' ),
					"param_name" => "phonerepair_portfolio_categories",
					'value'      => phonerepair_get_categories( 'projet' ),
				),
				array(
					"type"       => "checkbox",
					"heading"    => esc_html__( "Enable Filters", 'phonerepair' ),
					"param_name" => "phonerepair_portfolio_filters",
					"std"        => "yes",
					'value'      => array( esc_html__( 'Yes, please', 'phonerepair' ) => 'yes' ),
					"dependency" => Array(
						"element" => "phonerepair_portfolio_layout",
						"value"   => array( 'grid', 'masonry', 'free_style' )
					),
				),
                array(
                    "type"       => "dropdown",
                    "heading"    => esc_html__( "Items To Show", 'phonerepair' ),
                    "param_name" => "portfolio_items_to_show",
                    'value'      => array(
                        '1 item'  => '1',
                        '2 items' => '2',
                        '3 items' => '3',
                        '4 items' => '4',
                        '5 items' => '5',
                        '6 items' => '6',
                        '7 items' => '7',
                        '8 items' => '8',
                        '9 items' => '9',
                        '10 items' => '10',
                        '11 items' => '11',
                        '12 items' => '12',
                        '13 items' => '13',
                        '14 items' => '14',
                        '15 items' => '15',
                        '20 items' => '20',
                        '25 items' => '25',
                        '30 items' => '30',
                        '35 items' => '35',
                        '40 items' => '40',
                        'All items' => '-1'
                        
                        
                    ),
                    "dependency" => Array(
                        "element" => "phonerepair_portfolio_layout",
                        "value"   => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )
                    ),
                ),
                array(
                    "type"       => "checkbox",
                    "heading"    => esc_html__( "Enable Link Icon", 'phonerepair' ),
                    "param_name" => "phonerepair_portfolio_link",
                    "std"        => "yes",
                    'value'      => array( esc_html__( 'Yes, please', 'phonerepair' ) => 'yes' ),
                    "dependency" => Array(
                        "element" => "phonerepair_portfolio_layout",
                        "value"   => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )
                    ),
                ),
                array(
                    "type"       => "checkbox",
                    "heading"    => esc_html__( "Enable View Icon", 'phonerepair' ),
                    "param_name" => "phonerepair_portfolio_view",
                    "std"        => "yes",
                    'value'      => array( esc_html__( 'Yes, please', 'phonerepair' ) => 'yes' ),
                    "dependency" => Array(
                        "element" => "phonerepair_portfolio_layout",
                        "value"   => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )
                    ),
                ),
                
				array(
					"type"       => "dropdown",
					"heading"    => esc_html__( "Columns Number On Mobile", 'phonerepair' ),
					"param_name" => "phonerepair_portfolio_columns_mobile",
					'value'      => array(
						'1 Column'  => '1',
						'2 Columns' => '2',
						'3 Columns' => '3',
						'4 Columns' => '4',
						'5 Columns' => '5',
						'6 Columns' => '6'
					),
					"dependency" => Array(
						"element" => "phonerepair_portfolio_layout",
						"value"   => array( 'grid', 'masonry', 'free_style' )
					),
				),
				array(
					"type"       => "dropdown",
					"heading"    => esc_html__( "Columns Number On Tablet", 'phonerepair' ),
					"param_name" => "phonerepair_portfolio_columns_tablet",
					'value'      => array(
						'1 Column'  => '1',
						'2 Columns' => '2',
						'3 Columns' => '3',
						'4 Columns' => '4',
						'5 Columns' => '5',
						'6 Columns' => '6'
					),
					"dependency" => Array(
						"element" => "phonerepair_portfolio_layout",
						"value"   => array( 'grid', 'masonry', 'free_style' )
					),
				),
				array(
					"type"       => "dropdown",
					"heading"    => esc_html__( "Columns Number On Desktop", 'phonerepair' ),
					"param_name" => "phonerepair_portfolio_columns_desktop",
					'value'      => array(
						'1 Column'  => '1',
						'2 Columns' => '2',
						'3 Columns' => '3',
						'4 Columns' => '4',
						'5 Columns' => '5',
						'6 Columns' => '6'
					),
					"dependency" => Array(
						"element" => "phonerepair_portfolio_layout",
						"value"   => array( 'grid', 'masonry', 'free_style' )
					),
				),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Static Html Item Description Position", 'phonerepair'),
                    "param_name" => "phonerepair_static_html_item_position",
                    "value" => array( 'None' => 'none',
                                      'Before' => 'before',
                                      'After' => 'after'),
                    "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array( 'grid'))
                ),
                array(
                    "type" => "dropdown",
                    "heading" => esc_html__("Static Html Item Description Column Width", 'phonerepair'),
                    "param_name" => "phonerepair_static_html_item_width",
                    "value" => array( '1 Columns' => 'one-column',
                                      '2 Columns' => 'two-columns',
                                      '3 Columns' => 'three-columns'),
                    "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array( 'grid'))
                ),
                array(
                    "type" => "textarea_raw_html",
                    "heading" => esc_html__("Static HTML Item", 'phonerepair'),
                    "param_name" => "phonerepair_static_html_item",
                    "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('grid'))
                ),
                array(
                     "type" => "textfield",
                     "class" => "",
                     "heading" => __("Spacing Between Items", 'phonerepair'),
                     "param_name" => "padding_items",
                     "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'grid'))
                ),
                array(
                     "type" => "colorpicker",
                     "class" => "",
                     "heading" => __("Static HTML Item background Color", 'phonerepair'),
                     "param_name" => "phonerepair_static_html_item_bg_color",
                     "value" => "",
                     "group" => "Title Style",
                     "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array( 'grid' ))
                ),
				array(
					"type"       => "dropdown",
					"heading"    => esc_html__( "Load More Style", 'phonerepair' ),
					"param_name" => "load_more_style",
					'value'      => array(
						'Load More Link' => 'load_more_link',
						'Load More on scroll' => 'load_more_on_scroll',
                        'None'  => 'none'
					),
					"dependency" => Array(
						"element" => "phonerepair_portfolio_layout",
						"value"   => array( 'grid', 'masonry', 'free_style' )
					),
				),
				array(
					"type"       => "dropdown",
					"heading"    => esc_html__( "Navigation Style", 'phonerepair' ),
					"param_name" => "navigation_style",
					'value'      => array(
						'Arrows'  => 'arrow',
						'Thumbnail' => 'thumb'
					),
					"dependency" => Array(
						"element" => "phonerepair_portfolio_layout",
						"value"   => array( 'carousel' )
					),
				),

				// Portfolio title Typo
				array(
                     "heading" => esc_html__("Portfolio Title Tag", 'phonerepair'),
                     "type" => "dropdown",
                     "param_name" => "portfolio_title_tag",
                     "value" => array('H2 (Default)' => 'h2',
                                                        'H1' => 'h1',
                                                        'H3' => 'h3',
                                                        'H4' => 'h4',
                                                        'H5' => 'h5',
                                                        'H6' => 'h6'),
                     "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )),
                     "group" => "Title Style",
                ),
        array(
             "type" => "dropdown",
             'value' => $phonerepair_fonts_array,
             "heading" => __("Portfolio Title Font Family", 'phonerepair'),
             "param_name" => "portfolio_title_font_family",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )),
             "group" => "Title Style",
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Portfolio Title Font Size", 'phonerepair'),
             "param_name" => "portfolio_title_font_size",
             "min" => 14,
             "suffix" => "px",
             "group" => "Title Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "colorpicker",
             "class" => "",
             "heading" => __("Portfolio Title Font Color", 'phonerepair'),
             "param_name" => "portfolio_title_color",
             "value" => "",
             "group" => "Title Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading"           =>   __("Portfolio Title Font Weight", 'phonerepair'),
             "param_name"   =>   "portfolio_title_font_weight",
             'value' => array(
                  __('Default', 'phonerepair') =>   '900',
                  '100'     =>   '100',
                  '200'     =>   '200',
                  '300'     =>   '300',
                  '500'     =>   '500',
                  '600'     =>   '600',
                  '700'     =>   '700',
                  '800'     =>   '800',
                  '400'     =>   '400',
             ),
             "group" => "Title Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading" => __("Portfolio Title Text Transform", 'phonerepair'),
             "param_name" => "portfolio_title_text_transform",
             'value' => array(
                  __('Default', 'phonerepair') =>   'none',
                  'Lowercase'    =>   'lowercase',
                  'Uppercase'    =>   'uppercase',
                  'Capitalize'   =>   'capitalize',
                  'Inherit' =>   'inherit',
             ),
             "group" => "Title Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Portfolio Title Line Height", 'phonerepair'),
             "param_name" => "portfolio_title_line_height",
             "value" => "",
             "suffix" => "px",
             "group" => "Title Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Portfolio Title Letter spacing", 'phonerepair'),
             "param_name" => "portfolio_title_letter_spacing",
             "value" => "",
             "suffix" => "px",
             "group" => "Title Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading"           =>   __("Portfolio Title Font Style", 'phonerepair'),
             "param_name"   =>   "portfolio_title_font_style",
             'value' => array(
                  __('Normal', 'phonerepair')  =>   'normal',
                  __('Italic','phonerepair')        =>   'italic',
                  __('Inherit','phonerepair')       =>   'inherit',
                  __('Initial','phonerepair')       =>   'initial',
             ),
             "group" => "Title Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
				

				// Tags Typo
        array(
             "type" => "dropdown",
             'value' => $phonerepair_fonts_array,
             "heading" => __("Portfolio Tags Font Family", 'phonerepair'),
             "param_name" => "portfolio_tags_font_family",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )),
             "group" => "Tags Style",
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Portfolio Tags Font Size", 'phonerepair'),
             "param_name" => "portfolio_tags_font_size",
             "min" => 14,
             "suffix" => "px",
             "group" => "Tags Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )),
        ),
        array(
             "type" => "colorpicker",
             "class" => "",
             "heading" => __("Portfolio Tags Font Color", 'phonerepair'),
             "param_name" => "portfolio_tags_color",
             "value" => "",
             "group" => "Tags Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' )),
        ),
        array(
             "type" => "dropdown",
             "heading"           =>   __("Portfolio Tags Font Weight", 'phonerepair'),
             "param_name"   =>   "portfolio_tags_font_weight",
             'value' => array(
                  __('Default', 'phonerepair') =>   '400',
                  '100'     =>   '100',
                  '200'     =>   '200',
                  '300'     =>   '300',
                  '500'     =>   '500',
                  '600'     =>   '600',
                  '700'     =>   '700',
                  '800'     =>   '800',
                  '400'     =>   '900',
             ),
             "group" => "Tags Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading" => __("Portfolio Tags Text Transform", 'phonerepair'),
             "param_name" => "portfolio_tags_text_transform",
             'value' => array(
                  __('Default', 'phonerepair') =>   'none',
                  'Lowercase'    =>   'lowercase',
                  'Uppercase'    =>   'uppercase',
                  'Capitalize'   =>   'capitalize',
                  'Inherit' =>   'inherit',
             ),
             "group" => "Tags Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Portfolio Tags Line Height", 'phonerepair'),
             "param_name" => "portfolio_tags_line_height",
             "value" => "",
             "suffix" => "px",
             "group" => "Tags Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Portfolio Tags Letter spacing", 'phonerepair'),
             "param_name" => "portfolio_tags_letter_spacing",
             "value" => "",
             "suffix" => "px",
             "group" => "Tags Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading"           =>   __("Portfolio Tags Font Style", 'phonerepair'),
             "param_name"   =>   "portfolio_tags_font_style",
             'value' => array(
                  __('Normal', 'phonerepair')  =>   'normal',
                  __('Italic','phonerepair')        =>   'italic',
                  __('Inherit','phonerepair')       =>   'inherit',
                  __('Initial','phonerepair')       =>   'initial',
             ),
             "group" => "Tags Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry' , 'free_style', 'carousel', 'custom_item', 'grid' ))
        ),

        // Filters Typo
        array(
             "type" => "dropdown",
             "heading"           =>   __("Filters Position", 'phonerepair'),
             "param_name"   =>   "filters_position",
             'value' => array(
                  __('Center', 'phonerepair')  =>   'center',
                  __('Right','phonerepair')        =>   'right',
                  __('Left','phonerepair')       =>   'left'
             ),
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             'value' => $phonerepair_fonts_array,
             "heading" => __("Filters Font Family", 'phonerepair'),
             "param_name" => "filters_font_family",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' )),
             "group" => "Filters Style",
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Filters Font Size", 'phonerepair'),
             "param_name" => "filters_font_size",
             "min" => 14,
             "suffix" => "px",
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "colorpicker",
             "class" => "",
             "heading" => __("Filters Font Color", 'phonerepair'),
             "param_name" => "filters_color",
             "value" => "",
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "colorpicker",
             "class" => "",
             "heading" => __("Filters Hover Color", 'phonerepair'),
             "param_name" => "filters_hover_color",
             "value" => "",
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading"           =>   __("Filters Font Weight", 'phonerepair'),
             "param_name"   =>   "filters_font_weight",
             'value' => array(
                  __('Default', 'phonerepair') =>   '900',
                  '100'     =>   '100',
                  '200'     =>   '200',
                  '300'     =>   '300',
                  '500'     =>   '500',
                  '600'     =>   '600',
                  '700'     =>   '700',
                  '800'     =>   '800',
                  '400'     =>   '400',
             ),
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading" => __("Filters Text Transform", 'phonerepair'),
             "param_name" => "filters_text_transform",
             'value' => array(
                  __('Default', 'phonerepair') =>   'none',
                  'Lowercase'    =>   'lowercase',
                  'Uppercase'    =>   'uppercase',
                  'Capitalize'   =>   'capitalize',
                  'Inherit' =>   'inherit',
             ),
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Filters Line Height", 'phonerepair'),
             "param_name" => "filters_line_height",
             "value" => "",
             "suffix" => "px",
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "textfield",
             "class" => "",
             "heading" => __("Filters Letter spacing", 'phonerepair'),
             "param_name" => "filters_letter_spacing",
             "value" => "",
             "suffix" => "px",
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
        array(
             "type" => "dropdown",
             "heading"           =>   __("Filters Font Style", 'phonerepair'),
             "param_name"   =>   "filters_font_style",
             'value' => array(
                  __('Normal', 'phonerepair')  =>   'normal',
                  __('Italic','phonerepair')        =>   'italic',
                  __('Inherit','phonerepair')       =>   'inherit',
                  __('Initial','phonerepair')       =>   'initial',
             ),
             "group" => "Filters Style",
             "dependency" => Array("element" => "phonerepair_portfolio_layout", "value" => array('masonry', 'grid' ))
        ),
		$vc_add_css_animation
    )
) );
}}