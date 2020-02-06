<?php

if ( ! function_exists( 'phonerepair_dsm' ) ) {

	function phonerepair_dsm( $var ) {

		print "<pre>" . print_r( $var, true ) . "</pre>";

	}

}


function phonerepair_is_blog() {

	global $post;

	$posttype = get_post_type( $post );

	return ( ( ( is_archive() ) || ( is_author() ) || ( is_category() ) || ( is_home() ) || ( is_single() ) || ( is_tag() ) ) && ( $posttype == 'post' ) ) ? true : false;

}


/*------------image size------------*/

function phonerepair_image_resize( $url, $width, $height = null, $crop = null, $single = true ) {


//validate inputs

	if ( ! $url OR ! $width ) {
		return false;
	}


//define upload path & dir

	$upload_info = wp_upload_dir();

	$upload_dir = $upload_info['basedir'];

	$upload_url = $upload_info['baseurl'];


//check if $img_url is local

	if ( strpos( $url, $upload_url ) === false ) {
		return false;
	}


//define path of image

	$rel_path = str_replace( $upload_url, '', $url );

	$img_path = $upload_dir . $rel_path;


//check if img path exists, and is an image indeed

	if ( ! file_exists( $img_path ) OR ! getimagesize( $img_path ) ) {
		return false;
	}


//get image info

	$info = pathinfo( $img_path );

	$ext = $info['extension'];

	list( $orig_w, $orig_h ) = getimagesize( $img_path );


//get image size after cropping

	$dims = image_resize_dimensions( $orig_w, $orig_h, $width, $height, $crop );

	$dst_w = $dims[4];

	$dst_h = $dims[5];


//use this to check if cropped image already exists, so we can return that instead

	$suffix = "{$dst_w}x{$dst_h}";

	$dst_rel_path = str_replace( '.' . $ext, '', $rel_path );

	$destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";


	if ( ! $dst_h ) {

//can't resize, so return original url

		$img_url = $url;

		$dst_w = $orig_w;

		$dst_h = $orig_h;

	} //else check if cache exists

	elseif ( file_exists( $destfilename ) && getimagesize( $destfilename ) ) {

		$img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";

	} //else, we resize the image and return the new resized image url

	else {


// Note: pre-3.5 fallback check

		if ( function_exists( 'wp_get_image_editor' ) ) {


			$editor = wp_get_image_editor( $img_path );


			if ( is_wp_error( $editor ) || is_wp_error( $editor->resize( $width, $height, $crop ) ) ) {
				return false;
			}


			$resized_file = $editor->save();


			if ( ! is_wp_error( $resized_file ) ) {

				$resized_rel_path = str_replace( $upload_dir, '', $resized_file['path'] );

				$img_url = $upload_url . $resized_rel_path;

			} else {

				return false;

			}

		} else {


			$resized_img_path = wp_get_image_editor( $img_path, $width, $height, $crop );

			if ( ! is_wp_error( $resized_img_path ) ) {

				$resized_rel_path = str_replace( $upload_dir, '', $resized_img_path );

				$img_url = $upload_url . $resized_rel_path;

			} else {

				return false;

			}

		}

	}


//return the output

	if ( $single ) {

//str return

		$image = $img_url;

	} else {

//array return

		$image = array(

			0 => $img_url,

			1 => $dst_w,

			2 => $dst_h

		);

	}


	return $image;

}

/*----------------------------breadcrumb------------------------------*/


if ( ! function_exists( "phonerepair_breadcrumb" ) ) {

	function phonerepair_breadcrumb() {

		global $post;

		echo '<ul class="breadcrumbs">';

		if ( ! is_home() ) {

			echo '<li><a href="';

			echo esc_url( home_url( '/' ) );

			echo '">';

			echo esc_html__('Home','phonerepair');

			echo '</a></li>';

			if ( is_single() ) {


				if ( is_single() ) {

					echo '</li><li>';

					the_title();

					echo '</li>';

				}

			} elseif ( is_page() ) {

				if ( $post->post_parent ) {

					$anc = get_post_ancestors( $post->ID );

					$title = get_the_title();

					foreach ( $anc as $ancestor ) {

						$output = '<li><a href="' . esc_url( get_permalink( $ancestor ) ) . '" title="' . get_the_title( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a></li>';

					}

					echo html_entity_decode( $output );

					echo '<strong title="' . esc_attr($title) . '"> ' . esc_html($title) . '</strong>';

				} else {

					echo '<li><strong> ' . get_the_title() . '</strong></li>';

				}

			}

		} elseif ( is_tag() ) {
			single_tag_title();
		} elseif ( is_day() ) {
			echo "<li>".esc_html__('Archive','phonerepair')." </li>";
		} elseif ( is_month() ) {
			echo "<li>".esc_html__('Archive for','phonerepair')." </li>";
		} elseif ( is_year() ) {
			echo "<li>".esc_html__('Archive for','phonerepair')." </li>";
		} elseif ( is_author() ) {
			echo "<li>".esc_html__('Author Archive','phonerepair')." </li>";
		} elseif ( isset( $_GET['paged'] ) && ! empty( $_GET['paged'] ) ) {
			echo "<li>".esc_html__('Blog Archives','phonerepair')." </li>";
		} elseif ( is_search() ) {
			echo "<li>".esc_html__('Search Results','phonerepair')." </li>";
		}

		echo '</ul>';

	}

}

if ( ! function_exists( "phonerepair_social_icons" ) ) {
	function phonerepair_social_icons() {
		$phonerepair_protocol = is_ssl() ? 'https' : 'http';
		?>
		<ul class="social-icons accent inline-list">
			<?php if (phonerepair_get_option('flickr','') != ""): ?>
				<li class="flickr">
					<a href="<?php echo esc_url('www.flickr.com/' . esc_attr(phonerepair_get_option('flickr','')), $phonerepair_protocol); ?>"><i class="fa fa-flickr"></i></a>
				</li>
			<?php endif ?>
			<?php if (phonerepair_get_option('facebook', '') != ""): ?>
				<li class="facebook">
					<a href="<?php echo esc_url('www.facebook.com/' . esc_attr(phonerepair_get_option('facebook', '')), $phonerepair_protocol); ?>"><i class="fa fa-facebook"></i></a>
				</li>
			<?php endif ?>
			<?php if (phonerepair_get_option('twitter' ,'') != ""): ?>
				<li class="twitter">
					<a href="<?php echo esc_url('www.twitter.com/' . esc_attr(phonerepair_get_option('twitter' ,'')), $phonerepair_protocol); ?>"><i class="fa fa-twitter"></i></a>
				</li>
			<?php endif ?>
			<?php if (phonerepair_get_option('vimeo', '') != ""): ?>
				<li class="vimeo">
					<a href="<?php echo esc_url('www.vimeo.com/' . esc_attr(phonerepair_get_option('vimeo', '')), $phonerepair_protocol); ?>"><i class="fa fa-vimeo-square"></i></a>
				</li>
			<?php endif ?>
			<?php if (phonerepair_get_option('instagrame', '') != ""): ?>
				<li class="instagrame">
					<a href="<?php echo esc_url('www.instagram.com/' . esc_attr(phonerepair_get_option('instagram', '')), $phonerepair_protocol); ?>"><i class="fa fa-instagram"></i></a>
				</li>
			<?php endif ?>
			<?php if (phonerepair_get_option('plus-google', '') != ""): ?>
				<li class="plus-google">
					<a href="<?php echo esc_url('www.plus.google.com/' . esc_attr(phonerepair_get_option('plus-google','')), $phonerepair_protocol); ?>"><i class="fa fa-google-plus"></i></a>
				</li>
			<?php endif ?>
		</ul>
		<?php
	}
}