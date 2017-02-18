<?php

/**
 * The public-specific functionality of the plugin.
 *
 * @link       http://jeanbaptisteaudras.com
 * @since      1.0.0
 *
 * @package    ssmp
 * @subpackage ssmp/public
 */

/**
 * The public-specific functionality of the plugin.
 *
 * @package    ssmp
 * @subpackage ssmp/admin
 * @author     audrasjb <audrasjb@gmail.com>
 */

add_filter( 'the_content', 'ssmp_display_sitemap', 100 );
function ssmp_display_sitemap( $content ) {
	if ( get_option( 'ssmp_settings' ) ) {
		$options = get_option('ssmp_settings');
		if (isset($options['ssmp_page'])) {
			$optionPage = $options['ssmp_page'];
			$newContent = $content;
			$newContent .= wp_nav_menu(
				array(
					'echo' => false,
					'menu_class' => 'ssmp simple-site-map',
					'theme_location' => 'ssmp',
				)
			);
			return $newContent;
		}
	}
}
