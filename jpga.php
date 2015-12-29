<?php
/**
 * Plugin Name: Jetpack Shares as Google Analytics Social Interactions
 * Description: Track Jetpack social shares as Google Analytics Social Interactions
 * Author: Gregory Foster
 * Author URI: https://github.com/gregoryfoster/jetpack-shares-google-analytics
 * Version: 0.1
 */
defined('ABSPATH') or die('No script kiddies please!');

add_action('wp_footer', 'jpga_javascript', 20);
function jpga_javascript(){
  echo('<script src="' . plugin_dir_url( __FILE__ ) . 'analytics-jetpack_shares.js' . '"></script>');
}
?>
