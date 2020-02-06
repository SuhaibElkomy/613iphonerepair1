<?php 

/* Add support for our built in mega menu system */

if ( !function_exists( 'phonerepair_add_mega_menu_support' ) ):

	function phonerepair_add_mega_menu_support() {



		



			add_filter( 'wp_setup_nav_menu_item', 'phonerepair_add_custom_nav_fields' );

			add_action( 'wp_update_nav_menu_item', 'phonerepair_update_custom_nav_fields', 10, 3 );

			add_filter( 'wp_edit_nav_menu_walker', 'phonerepair_edit_menu_walker', 10, 2 );

			//add_filter( 'nav_menu_css_class', 'phonerepair_add_class_to_menu', 10, 2 );

			

		

	}

endif;



add_action( 'init', 'phonerepair_add_mega_menu_support' );



/* Add custom fields to menu */

if ( !function_exists( 'phonerepair_add_custom_nav_fields' ) ):

	function phonerepair_add_custom_nav_fields( $menu_item ) {

		
		$menu_item->mega_menu_icon = get_post_meta( $menu_item->ID, '_phonerepair_mega_menu_icon', true )? get_post_meta( $menu_item->ID, '_phonerepair_mega_menu_icon', true ) : '';
		
		$menu_item->mega_menu_bg_image = get_post_meta( $menu_item->ID, '_phonerepair_mega_menu_bg_image', true )? get_post_meta( $menu_item->ID, '_phonerepair_mega_menu_bg_image', true ) : '';
		
		$menu_item->mega_menu = get_post_meta( $menu_item->ID, '_phonerepair_mega_menu', true ) ? 1 : 0;

		return $menu_item;

	}

endif;





/* Save custom fiedls to menu */

if ( !function_exists( 'phonerepair_update_custom_nav_fields' ) ):

	function phonerepair_update_custom_nav_fields( $menu_id, $menu_item_db_id, $args ) {


			$value = isset($_REQUEST['menu-item-mega-menu-icon'][$menu_item_db_id])? $_REQUEST['menu-item-mega-menu-icon'][$menu_item_db_id] : '' ;
			update_post_meta( $menu_item_db_id, '_phonerepair_mega_menu_icon', $value );
			
			
			$value = isset($_REQUEST['menu-item-mega-menu-bg-image'][$menu_item_db_id])? $_REQUEST['menu-item-mega-menu-bg-image'][$menu_item_db_id] : '' ;
			update_post_meta( $menu_item_db_id, '_phonerepair_mega_menu_bg_image', $value );
		

			$value = isset( $_REQUEST['menu-item-mega-menu'][$menu_item_db_id] ) ? 1 : 0;
			update_post_meta( $menu_item_db_id, '_phonerepair_mega_menu', $value );

		

	}

endif;







/* Edit nav menu walker */

if ( !function_exists( 'phonerepair_edit_menu_walker' ) ):

	function phonerepair_edit_menu_walker( $walker, $menu_id ) {



		class phonerepair_Walker_Nav_Menu_Edit extends Walker_Nav_Menu_Edit {



			public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

				$temp_output = '';

				$mega_menu_html = '';


  				$icons = 'a:370:{i:0;s:14:"---- None ----";s:9:"fa-adjust";s:9:"fa-adjust";s:6:"fa-adn";s:6:"fa-adn";s:15:"fa-align-center";s:15:"fa-align-center";s:16:"fa-align-justify";s:16:"fa-align-justify";s:13:"fa-align-left";s:13:"fa-align-left";s:14:"fa-align-right";s:14:"fa-align-right";s:12:"fa-ambulance";s:12:"fa-ambulance";s:9:"fa-anchor";s:9:"fa-anchor";s:10:"fa-android";s:10:"fa-android";s:20:"fa-angle-double-down";s:20:"fa-angle-double-down";s:20:"fa-angle-double-left";s:20:"fa-angle-double-left";s:21:"fa-angle-double-right";s:21:"fa-angle-double-right";s:18:"fa-angle-double-up";s:18:"fa-angle-double-up";s:13:"fa-angle-down";s:13:"fa-angle-down";s:13:"fa-angle-left";s:13:"fa-angle-left";s:14:"fa-angle-right";s:14:"fa-angle-right";s:11:"fa-angle-up";s:11:"fa-angle-up";s:8:"fa-apple";s:8:"fa-apple";s:10:"fa-archive";s:10:"fa-archive";s:20:"fa-arrow-circle-down";s:20:"fa-arrow-circle-down";s:20:"fa-arrow-circle-left";s:20:"fa-arrow-circle-left";s:22:"fa-arrow-circle-o-down";s:22:"fa-arrow-circle-o-down";s:22:"fa-arrow-circle-o-left";s:22:"fa-arrow-circle-o-left";s:23:"fa-arrow-circle-o-right";s:23:"fa-arrow-circle-o-right";s:20:"fa-arrow-circle-o-up";s:20:"fa-arrow-circle-o-up";s:21:"fa-arrow-circle-right";s:21:"fa-arrow-circle-right";s:18:"fa-arrow-circle-up";s:18:"fa-arrow-circle-up";s:13:"fa-arrow-down";s:13:"fa-arrow-down";s:13:"fa-arrow-left";s:13:"fa-arrow-left";s:14:"fa-arrow-right";s:14:"fa-arrow-right";s:11:"fa-arrow-up";s:11:"fa-arrow-up";s:9:"fa-arrows";s:9:"fa-arrows";s:13:"fa-arrows-alt";s:13:"fa-arrows-alt";s:11:"fa-arrows-h";s:11:"fa-arrows-h";s:11:"fa-arrows-v";s:11:"fa-arrows-v";s:11:"fa-asterisk";s:11:"fa-asterisk";s:11:"fa-backward";s:11:"fa-backward";s:6:"fa-ban";s:6:"fa-ban";s:14:"fa-bar-chart-o";s:14:"fa-bar-chart-o";s:10:"fa-barcode";s:10:"fa-barcode";s:7:"fa-bars";s:7:"fa-bars";s:7:"fa-beer";s:7:"fa-beer";s:7:"fa-bell";s:7:"fa-bell";s:9:"fa-bell-o";s:9:"fa-bell-o";s:12:"fa-bitbucket";s:12:"fa-bitbucket";s:19:"fa-bitbucket-square";s:19:"fa-bitbucket-square";s:7:"fa-bold";s:7:"fa-bold";s:7:"fa-bolt";s:7:"fa-bolt";s:7:"fa-book";s:7:"fa-book";s:11:"fa-bookmark";s:11:"fa-bookmark";s:13:"fa-bookmark-o";s:13:"fa-bookmark-o";s:12:"fa-briefcase";s:12:"fa-briefcase";s:6:"fa-btc";s:6:"fa-btc";s:6:"fa-bug";s:6:"fa-bug";s:13:"fa-building-o";s:13:"fa-building-o";s:11:"fa-bullhorn";s:11:"fa-bullhorn";s:11:"fa-bullseye";s:11:"fa-bullseye";s:11:"fa-calendar";s:11:"fa-calendar";s:13:"fa-calendar-o";s:13:"fa-calendar-o";s:9:"fa-camera";s:9:"fa-camera";s:15:"fa-camera-retro";s:15:"fa-camera-retro";s:13:"fa-caret-down";s:13:"fa-caret-down";s:13:"fa-caret-left";s:13:"fa-caret-left";s:14:"fa-caret-right";s:14:"fa-caret-right";s:22:"fa-caret-square-o-down";s:22:"fa-caret-square-o-down";s:22:"fa-caret-square-o-left";s:22:"fa-caret-square-o-left";s:23:"fa-caret-square-o-right";s:23:"fa-caret-square-o-right";s:20:"fa-caret-square-o-up";s:20:"fa-caret-square-o-up";s:11:"fa-caret-up";s:11:"fa-caret-up";s:14:"fa-certificate";s:14:"fa-certificate";s:15:"fa-chain-broken";s:15:"fa-chain-broken";s:8:"fa-check";s:8:"fa-check";s:15:"fa-check-circle";s:15:"fa-check-circle";s:17:"fa-check-circle-o";s:17:"fa-check-circle-o";s:15:"fa-check-square";s:15:"fa-check-square";s:17:"fa-check-square-o";s:17:"fa-check-square-o";s:22:"fa-chevron-circle-down";s:22:"fa-chevron-circle-down";s:22:"fa-chevron-circle-left";s:22:"fa-chevron-circle-left";s:23:"fa-chevron-circle-right";s:23:"fa-chevron-circle-right";s:20:"fa-chevron-circle-up";s:20:"fa-chevron-circle-up";s:15:"fa-chevron-down";s:15:"fa-chevron-down";s:15:"fa-chevron-left";s:15:"fa-chevron-left";s:16:"fa-chevron-right";s:16:"fa-chevron-right";s:13:"fa-chevron-up";s:13:"fa-chevron-up";s:9:"fa-circle";s:9:"fa-circle";s:11:"fa-circle-o";s:11:"fa-circle-o";s:12:"fa-clipboard";s:12:"fa-clipboard";s:10:"fa-clock-o";s:10:"fa-clock-o";s:8:"fa-cloud";s:8:"fa-cloud";s:17:"fa-cloud-download";s:17:"fa-cloud-download";s:15:"fa-cloud-upload";s:15:"fa-cloud-upload";s:7:"fa-code";s:7:"fa-code";s:12:"fa-code-fork";s:12:"fa-code-fork";s:9:"fa-coffee";s:9:"fa-coffee";s:6:"fa-cog";s:6:"fa-cog";s:7:"fa-cogs";s:7:"fa-cogs";s:10:"fa-columns";s:10:"fa-columns";s:10:"fa-comment";s:10:"fa-comment";s:12:"fa-comment-o";s:12:"fa-comment-o";s:11:"fa-comments";s:11:"fa-comments";s:13:"fa-comments-o";s:13:"fa-comments-o";s:10:"fa-compass";s:10:"fa-compass";s:11:"fa-compress";s:11:"fa-compress";s:14:"fa-credit-card";s:14:"fa-credit-card";s:7:"fa-crop";s:7:"fa-crop";s:13:"fa-crosshairs";s:13:"fa-crosshairs";s:7:"fa-css3";s:7:"fa-css3";s:10:"fa-cutlery";s:10:"fa-cutlery";s:10:"fa-desktop";s:10:"fa-desktop";s:15:"fa-dot-circle-o";s:15:"fa-dot-circle-o";s:11:"fa-download";s:11:"fa-download";s:11:"fa-dribbble";s:11:"fa-dribbble";s:10:"fa-dropbox";s:10:"fa-dropbox";s:8:"fa-eject";s:8:"fa-eject";s:13:"fa-ellipsis-h";s:13:"fa-ellipsis-h";s:13:"fa-ellipsis-v";s:13:"fa-ellipsis-v";s:11:"fa-envelope";s:11:"fa-envelope";s:13:"fa-envelope-o";s:13:"fa-envelope-o";s:9:"fa-eraser";s:9:"fa-eraser";s:6:"fa-eur";s:6:"fa-eur";s:11:"fa-exchange";s:11:"fa-exchange";s:14:"fa-exclamation";s:14:"fa-exclamation";s:21:"fa-exclamation-circle";s:21:"fa-exclamation-circle";s:23:"fa-exclamation-triangle";s:23:"fa-exclamation-triangle";s:9:"fa-expand";s:9:"fa-expand";s:16:"fa-external-link";s:16:"fa-external-link";s:23:"fa-external-link-square";s:23:"fa-external-link-square";s:6:"fa-eye";s:6:"fa-eye";s:12:"fa-eye-slash";s:12:"fa-eye-slash";s:11:"fa-facebook";s:11:"fa-facebook";s:18:"fa-facebook-square";s:18:"fa-facebook-square";s:16:"fa-fast-backward";s:16:"fa-fast-backward";s:15:"fa-fast-forward";s:15:"fa-fast-forward";s:9:"fa-female";s:9:"fa-female";s:14:"fa-fighter-jet";s:14:"fa-fighter-jet";s:7:"fa-file";s:7:"fa-file";s:9:"fa-file-o";s:9:"fa-file-o";s:12:"fa-file-text";s:12:"fa-file-text";s:14:"fa-file-text-o";s:14:"fa-file-text-o";s:10:"fa-files-o";s:10:"fa-files-o";s:7:"fa-film";s:7:"fa-film";s:9:"fa-filter";s:9:"fa-filter";s:7:"fa-fire";s:7:"fa-fire";s:20:"fa-fire-extinguisher";s:20:"fa-fire-extinguisher";s:7:"fa-flag";s:7:"fa-flag";s:17:"fa-flag-checkered";s:17:"fa-flag-checkered";s:9:"fa-flag-o";s:9:"fa-flag-o";s:8:"fa-flask";s:8:"fa-flask";s:9:"fa-flickr";s:9:"fa-flickr";s:11:"fa-floppy-o";s:11:"fa-floppy-o";s:9:"fa-folder";s:9:"fa-folder";s:11:"fa-folder-o";s:11:"fa-folder-o";s:14:"fa-folder-open";s:14:"fa-folder-open";s:16:"fa-folder-open-o";s:16:"fa-folder-open-o";s:7:"fa-font";s:7:"fa-font";s:10:"fa-forward";s:10:"fa-forward";s:13:"fa-foursquare";s:13:"fa-foursquare";s:10:"fa-frown-o";s:10:"fa-frown-o";s:10:"fa-gamepad";s:10:"fa-gamepad";s:8:"fa-gavel";s:8:"fa-gavel";s:6:"fa-gbp";s:6:"fa-gbp";s:7:"fa-gift";s:7:"fa-gift";s:9:"fa-github";s:9:"fa-github";s:13:"fa-github-alt";s:13:"fa-github-alt";s:16:"fa-github-square";s:16:"fa-github-square";s:9:"fa-gittip";s:9:"fa-gittip";s:8:"fa-glass";s:8:"fa-glass";s:8:"fa-globe";s:8:"fa-globe";s:14:"fa-google-plus";s:14:"fa-google-plus";s:21:"fa-google-plus-square";s:21:"fa-google-plus-square";s:11:"fa-h-square";s:11:"fa-h-square";s:14:"fa-hand-o-down";s:14:"fa-hand-o-down";s:14:"fa-hand-o-left";s:14:"fa-hand-o-left";s:15:"fa-hand-o-right";s:15:"fa-hand-o-right";s:12:"fa-hand-o-up";s:12:"fa-hand-o-up";s:8:"fa-hdd-o";s:8:"fa-hdd-o";s:13:"fa-headphones";s:13:"fa-headphones";s:8:"fa-heart";s:8:"fa-heart";s:10:"fa-heart-o";s:10:"fa-heart-o";s:7:"fa-home";s:7:"fa-home";s:13:"fa-hospital-o";s:13:"fa-hospital-o";s:8:"fa-html5";s:8:"fa-html5";s:8:"fa-inbox";s:8:"fa-inbox";s:9:"fa-indent";s:9:"fa-indent";s:7:"fa-info";s:7:"fa-info";s:14:"fa-info-circle";s:14:"fa-info-circle";s:6:"fa-inr";s:6:"fa-inr";s:12:"fa-instagram";s:12:"fa-instagram";s:9:"fa-italic";s:9:"fa-italic";s:6:"fa-jpy";s:6:"fa-jpy";s:6:"fa-key";s:6:"fa-key";s:13:"fa-keyboard-o";s:13:"fa-keyboard-o";s:6:"fa-krw";s:6:"fa-krw";s:9:"fa-laptop";s:9:"fa-laptop";s:7:"fa-leaf";s:7:"fa-leaf";s:10:"fa-lemon-o";s:10:"fa-lemon-o";s:13:"fa-level-down";s:13:"fa-level-down";s:11:"fa-level-up";s:11:"fa-level-up";s:14:"fa-lightbulb-o";s:14:"fa-lightbulb-o";s:7:"fa-link";s:7:"fa-link";s:11:"fa-linkedin";s:11:"fa-linkedin";s:18:"fa-linkedin-square";s:18:"fa-linkedin-square";s:8:"fa-linux";s:8:"fa-linux";s:7:"fa-list";s:7:"fa-list";s:11:"fa-list-alt";s:11:"fa-list-alt";s:10:"fa-list-ol";s:10:"fa-list-ol";s:10:"fa-list-ul";s:10:"fa-list-ul";s:17:"fa-location-arrow";s:17:"fa-location-arrow";s:7:"fa-lock";s:7:"fa-lock";s:18:"fa-long-arrow-down";s:18:"fa-long-arrow-down";s:18:"fa-long-arrow-left";s:18:"fa-long-arrow-left";s:19:"fa-long-arrow-right";s:19:"fa-long-arrow-right";s:16:"fa-long-arrow-up";s:16:"fa-long-arrow-up";s:8:"fa-magic";s:8:"fa-magic";s:9:"fa-magnet";s:9:"fa-magnet";s:17:"fa-mail-reply-all";s:17:"fa-mail-reply-all";s:7:"fa-male";s:7:"fa-male";s:13:"fa-map-marker";s:13:"fa-map-marker";s:9:"fa-maxcdn";s:9:"fa-maxcdn";s:9:"fa-medkit";s:9:"fa-medkit";s:8:"fa-meh-o";s:8:"fa-meh-o";s:13:"fa-microphone";s:13:"fa-microphone";s:19:"fa-microphone-slash";s:19:"fa-microphone-slash";s:8:"fa-minus";s:8:"fa-minus";s:15:"fa-minus-circle";s:15:"fa-minus-circle";s:15:"fa-minus-square";s:15:"fa-minus-square";s:17:"fa-minus-square-o";s:17:"fa-minus-square-o";s:9:"fa-mobile";s:9:"fa-mobile";s:8:"fa-money";s:8:"fa-money";s:9:"fa-moon-o";s:9:"fa-moon-o";s:8:"fa-music";s:8:"fa-music";s:10:"fa-outdent";s:10:"fa-outdent";s:12:"fa-pagelines";s:12:"fa-pagelines";s:12:"fa-paperclip";s:12:"fa-paperclip";s:8:"fa-pause";s:8:"fa-pause";s:9:"fa-pencil";s:9:"fa-pencil";s:16:"fa-pencil-square";s:16:"fa-pencil-square";s:18:"fa-pencil-square-o";s:18:"fa-pencil-square-o";s:8:"fa-phone";s:8:"fa-phone";s:15:"fa-phone-square";s:15:"fa-phone-square";s:12:"fa-picture-o";s:12:"fa-picture-o";s:12:"fa-pinterest";s:12:"fa-pinterest";s:19:"fa-pinterest-square";s:19:"fa-pinterest-square";s:8:"fa-plane";s:8:"fa-plane";s:7:"fa-play";s:7:"fa-play";s:14:"fa-play-circle";s:14:"fa-play-circle";s:16:"fa-play-circle-o";s:16:"fa-play-circle-o";s:7:"fa-plus";s:7:"fa-plus";s:14:"fa-plus-circle";s:14:"fa-plus-circle";s:14:"fa-plus-square";s:14:"fa-plus-square";s:16:"fa-plus-square-o";s:16:"fa-plus-square-o";s:12:"fa-power-off";s:12:"fa-power-off";s:8:"fa-print";s:8:"fa-print";s:15:"fa-puzzle-piece";s:15:"fa-puzzle-piece";s:9:"fa-qrcode";s:9:"fa-qrcode";s:11:"fa-question";s:11:"fa-question";s:18:"fa-question-circle";s:18:"fa-question-circle";s:13:"fa-quote-left";s:13:"fa-quote-left";s:14:"fa-quote-right";s:14:"fa-quote-right";s:9:"fa-random";s:9:"fa-random";s:10:"fa-refresh";s:10:"fa-refresh";s:9:"fa-renren";s:9:"fa-renren";s:9:"fa-repeat";s:9:"fa-repeat";s:8:"fa-reply";s:8:"fa-reply";s:12:"fa-reply-all";s:12:"fa-reply-all";s:10:"fa-retweet";s:10:"fa-retweet";s:7:"fa-road";s:7:"fa-road";s:9:"fa-rocket";s:9:"fa-rocket";s:6:"fa-rss";s:6:"fa-rss";s:13:"fa-rss-square";s:13:"fa-rss-square";s:6:"fa-rub";s:6:"fa-rub";s:11:"fa-scissors";s:11:"fa-scissors";s:9:"fa-search";s:9:"fa-search";s:15:"fa-search-minus";s:15:"fa-search-minus";s:14:"fa-search-plus";s:14:"fa-search-plus";s:8:"fa-share";s:8:"fa-share";s:15:"fa-share-square";s:15:"fa-share-square";s:17:"fa-share-square-o";s:17:"fa-share-square-o";s:9:"fa-shield";s:9:"fa-shield";s:16:"fa-shopping-cart";s:16:"fa-shopping-cart";s:10:"fa-sign-in";s:10:"fa-sign-in";s:11:"fa-sign-out";s:11:"fa-sign-out";s:9:"fa-signal";s:9:"fa-signal";s:10:"fa-sitemap";s:10:"fa-sitemap";s:8:"fa-skype";s:8:"fa-skype";s:10:"fa-smile-o";s:10:"fa-smile-o";s:7:"fa-sort";s:7:"fa-sort";s:17:"fa-sort-alpha-asc";s:17:"fa-sort-alpha-asc";s:18:"fa-sort-alpha-desc";s:18:"fa-sort-alpha-desc";s:18:"fa-sort-amount-asc";s:18:"fa-sort-amount-asc";s:19:"fa-sort-amount-desc";s:19:"fa-sort-amount-desc";s:11:"fa-sort-asc";s:11:"fa-sort-asc";s:12:"fa-sort-desc";s:12:"fa-sort-desc";s:19:"fa-sort-numeric-asc";s:19:"fa-sort-numeric-asc";s:20:"fa-sort-numeric-desc";s:20:"fa-sort-numeric-desc";s:10:"fa-spinner";s:10:"fa-spinner";s:9:"fa-square";s:9:"fa-square";s:11:"fa-square-o";s:11:"fa-square-o";s:17:"fa-stack-exchange";s:17:"fa-stack-exchange";s:17:"fa-stack-overflow";s:17:"fa-stack-overflow";s:7:"fa-star";s:7:"fa-star";s:12:"fa-star-half";s:12:"fa-star-half";s:14:"fa-star-half-o";s:14:"fa-star-half-o";s:9:"fa-star-o";s:9:"fa-star-o";s:16:"fa-step-backward";s:16:"fa-step-backward";s:15:"fa-step-forward";s:15:"fa-step-forward";s:14:"fa-stethoscope";s:14:"fa-stethoscope";s:7:"fa-stop";s:7:"fa-stop";s:16:"fa-strikethrough";s:16:"fa-strikethrough";s:12:"fa-subscript";s:12:"fa-subscript";s:11:"fa-suitcase";s:11:"fa-suitcase";s:8:"fa-sun-o";s:8:"fa-sun-o";s:14:"fa-superscript";s:14:"fa-superscript";s:8:"fa-table";s:8:"fa-table";s:9:"fa-tablet";s:9:"fa-tablet";s:13:"fa-tachometer";s:13:"fa-tachometer";s:6:"fa-tag";s:6:"fa-tag";s:7:"fa-tags";s:7:"fa-tags";s:8:"fa-tasks";s:8:"fa-tasks";s:11:"fa-terminal";s:11:"fa-terminal";s:14:"fa-text-height";s:14:"fa-text-height";s:13:"fa-text-width";s:13:"fa-text-width";s:5:"fa-th";s:5:"fa-th";s:11:"fa-th-large";s:11:"fa-th-large";s:10:"fa-th-list";s:10:"fa-th-list";s:13:"fa-thumb-tack";s:13:"fa-thumb-tack";s:14:"fa-thumbs-down";s:14:"fa-thumbs-down";s:16:"fa-thumbs-o-down";s:16:"fa-thumbs-o-down";s:14:"fa-thumbs-o-up";s:14:"fa-thumbs-o-up";s:12:"fa-thumbs-up";s:12:"fa-thumbs-up";s:9:"fa-ticket";s:9:"fa-ticket";s:8:"fa-times";s:8:"fa-times";s:15:"fa-times-circle";s:15:"fa-times-circle";s:17:"fa-times-circle-o";s:17:"fa-times-circle-o";s:7:"fa-tint";s:7:"fa-tint";s:10:"fa-trash-o";s:10:"fa-trash-o";s:9:"fa-trello";s:9:"fa-trello";s:9:"fa-trophy";s:9:"fa-trophy";s:8:"fa-truck";s:8:"fa-truck";s:6:"fa-try";s:6:"fa-try";s:9:"fa-tumblr";s:9:"fa-tumblr";s:16:"fa-tumblr-square";s:16:"fa-tumblr-square";s:10:"fa-twitter";s:10:"fa-twitter";s:17:"fa-twitter-square";s:17:"fa-twitter-square";s:11:"fa-umbrella";s:11:"fa-umbrella";s:12:"fa-underline";s:12:"fa-underline";s:7:"fa-undo";s:7:"fa-undo";s:9:"fa-unlock";s:9:"fa-unlock";s:13:"fa-unlock-alt";s:13:"fa-unlock-alt";s:9:"fa-upload";s:9:"fa-upload";s:6:"fa-usd";s:6:"fa-usd";s:7:"fa-user";s:7:"fa-user";s:10:"fa-user-md";s:10:"fa-user-md";s:8:"fa-users";s:8:"fa-users";s:15:"fa-video-camera";s:15:"fa-video-camera";s:15:"fa-vimeo-square";s:15:"fa-vimeo-square";s:5:"fa-vk";s:5:"fa-vk";s:14:"fa-volume-down";s:14:"fa-volume-down";s:13:"fa-volume-off";s:13:"fa-volume-off";s:12:"fa-volume-up";s:12:"fa-volume-up";s:8:"fa-weibo";s:8:"fa-weibo";s:13:"fa-wheelchair";s:13:"fa-wheelchair";s:10:"fa-windows";s:10:"fa-windows";s:9:"fa-wrench";s:9:"fa-wrench";s:7:"fa-xing";s:7:"fa-xing";s:14:"fa-xing-square";s:14:"fa-xing-square";s:10:"fa-youtube";s:10:"fa-youtube";s:15:"fa-youtube-play";s:15:"fa-youtube-play";s:17:"fa-youtube-square";s:17:"fa-youtube-square";}';
  				$icons = unserialize( $icons );
  


					$mega_menu_html .= '<p class="field-custom description description-wide">

		                <label for="edit-menu-item-mega-'.$item->db_id.'">

		        		
		        		<select id="edit-menu-item-mega-'.$item->db_id.'" name="menu-item-mega-menu-icon['.$item->db_id.']">';
		        		
		        		foreach ($icons as $key => $value) {
		        			
		        			if($item->mega_menu_icon==$value) {
		        				
		        				 $selected = "selected";
		        				 }else{
		        				 	$selected = '';
		        				 }
						$mega_menu_html .= "<option vlaue='".$value ."' ". $selected.">".$value."</option>";
						
						}
		        		
		        	$mega_menu_html .= '</select>

		                '.esc_html__( 'display icone', 'phonerepair' ).'</label>

		            </p>';
					

					$mega_menu_html .= '<p class="field-custom description description-wide">
	
			                <label for="edit-menu-item-mega-'.$item->db_id.'">
	
			        		<input type="text" id="edit-menu-item-mega-'.$item->db_id.'" class="widefat code edit-menu-item-custom" name="menu-item-mega-menu-bg-image['.$item->db_id.']" value="'.$item->mega_menu_bg_image.'"  />
						
			                '.esc_html__( 'Mega Menu (Background image)', 'phonerepair' ).'
	
			            </label></p>';


					$mega_menu_html .= '<p class="field-custom description description-wide">

		                <label for="edit-menu-item-mega-'.$item->db_id.'">

		        		<input type="checkbox" id="edit-menu-item-mega-'.$item->db_id.'" class="widefat code edit-menu-item-custom" name="menu-item-mega-menu['.$item->db_id.']" value="1" '.checked( $item->mega_menu, 1, false ). ' />
						
		                '.esc_html__( 'Mega Menu (classic)', 'phonerepair' ).'

		            </label></p>';

				


				parent::start_el( $temp_output, $item, $depth, $args, $id );



				$temp_output = preg_replace( '/(?=<div.*submitbox)/', $mega_menu_html, $temp_output );



				$output .= $temp_output;

			}



		}



		return 'phonerepair_Walker_Nav_Menu_Edit';

	}

endif;