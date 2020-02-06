<!doctype html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<?php if ( ! function_exists( 'has_site_icon' ) ) {
		if ( phonerepair_get_option( 'phonerepair_favicon', '' ) != '' ) { ?>
      <link rel="shortcut icon" href="<?php echo esc_url( phonerepair_get_option( 'phonerepair_favicon', '' ) ); ?>"/>
		<?php }
	} ?>
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<div class="corp">
  <div class="row">
    <section class="oops">
      <h2><?php echo esc_html__( 'Oops!!', 'phonerepair' ); ?></h2>
    </section>
    <section>
      <p class="message">
				<?php echo esc_html__( 'It looks like that page no longer exists. Would you like to go to ', 'phonerepair' ); ?>
        <a
          href="<?php echo esc_url( home_url( '/' ) ); ?>"><strong><?php echo esc_html__( 'Home page', 'phonerepair' ); ?></strong></a> <?php echo esc_html__( 'instead?', 'phonerepair' ); ?>
      </p>
    </section>
    <section class="large-6 columns">
      <form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="serch" method="get">
        <input type="text" class="text-input" id="s" name="s" value="Search" onfocus="this.value = '';"
               onblur="if (this.value == '') {this.value = 'Search';}">
        <input type="submit" class="submit-input" value="<?php echo esc_attr__('serch','phonerepair'); ?>">
      </form>
    </section>
  </div>
</div>
<div class="oops-footer">
	<?php phonerepair_social_icons(); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>