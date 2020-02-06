<?php 
if(function_exists('vc_set_as_theme')) vc_set_as_theme(true);

// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
  function require_composer_Extend(){
    require_once ( get_template_directory() . '/inc/vcomposer/extend.php');
  }
  add_action('init', 'require_composer_Extend',2);
}






/**
 * Include the TGM_Plugin_Activation class.
 */
require_once ( get_template_directory() . '/inc/plugins/lib/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'phonerepair_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 */
function phonerepair_register_required_plugins() {

  /*** Array of plugin arrays. Required keys are name and slug. */
  $plugins = array(


    array(
      'name'      => 'Webdevia main plugin', // The plugin name
      'slug'      => 'wd-main-plugin', // The plugin slug (typically the folder name)
      'source'      => get_stylesheet_directory() . '/inc/plugins/lib/wd-main-plugin.zip', // The plugin source
      'required'      => false, // If false, the plugin is only 'recommended' instead of required
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'    => '', // If set, overrides default API URL and points to an external URL
      'version'     => '3.4',
    ),

    array(
      'name'      => 'WPBakery Visual Composer', // The plugin name
      'slug'      => 'js_composer', // The plugin slug (typically the folder name)
      'source'      => 'http://themes.webdevia.com/plugins/js_composer.zip', // The plugin source
      'required'      => false, // If false, the plugin is only 'recommended' instead of required
      'version'     => '6.0.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'    => '', // If set, overrides default API URL and points to an external URL
    ),
    array(
      'name'      => 'Essential Grid', // The plugin name
      'slug'      => 'essential-grid', // The plugin slug (typically the folder name)
      'source'      => get_stylesheet_directory() . '/inc/plugins/lib/essential-grid.zip', // The plugin source
      'required'      => false, // If false, the plugin is only 'recommended' instead of required
      'version'     => '2.0.9', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'    => '', // If set, overrides default API URL and points to an external URL
    ),
    array(
      'name'      => 'Revolution Slider', // The plugin name
      'slug'      => 'revslider', // The plugin slug (typically the folder name)
      'source'      => 'http://themes.webdevia.com/plugins/revslider.zip', // The plugin source
      'required'      => false, // If false, the plugin is only 'recommended' instead of required
      'version'     => '6.1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
      'force_activation'    => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
      'force_deactivation'  => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
      'external_url'    => '', // If set, overrides default API URL and points to an external URL
    ),
    
     array(
    
      'name'    => 'contact form7',
      'slug'    => 'contact-form-7',
      'required'  => false,
      'force_activation'    => false,
    ),
    
  );

  $config = array(
  	'id'           => 'webdevia',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path'    => '',                          // Default absolute path to pre-packaged plugins
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'menu'            => 'install-required-plugins',  // Menu slug
    'has_notices'       => true,                        // Show admin notices or not
    'is_automatic'      => false,             // Automatically activate plugins after installation or not
    'message'       => '',              // Message to output right before the plugins table
    'strings'         => array(
      'page_title'                            => esc_html__( 'Install Required Plugins', 'phonerepair' ),
      'menu_title'                            => esc_html__( 'Install Plugins', 'phonerepair' ),
      'installing'                            => esc_html__( 'Installing Plugin: %s', 'phonerepair' ), // %1$s = plugin name
      'oops'                                  => esc_html__( 'Something went wrong with the plugin API.', 'phonerepair' ),
      'notice_can_install_required'           => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.','phonerepair' ), // %1$s = plugin name(s)
      'notice_can_install_recommended'      => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','phonerepair' ), // %1$s = plugin name(s)
      'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','phonerepair' ), // %1$s = plugin name(s)
      'notice_can_activate_required'          => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','phonerepair' ), // %1$s = plugin name(s)
      'notice_can_activate_recommended'     => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','phonerepair' ), // %1$s = plugin name(s)
      'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ,'phonerepair'), // %1$s = plugin name(s)
      'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','phonerepair' ), // %1$s = plugin name(s)
      'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ,'phonerepair'), // %1$s = plugin name(s)
      'install_link'                  => _n_noop( 'Begin installing plugin', 'Begin installing plugins','phonerepair' ),
      'activate_link'                 => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ,'phonerepair'),
      'return'                                => esc_html__( 'Return to Required Plugins Installer', 'phonerepair' ),
      'plugin_activated'                      => esc_html__( 'Plugin activated successfully.', 'phonerepair' ),
      'complete'                  => esc_html__( 'All plugins installed and activated successfully. %s', 'phonerepair' ), // %1$s = dashboard link
      'nag_type'                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
    )
  );

  tgmpa( $plugins, $config );
}