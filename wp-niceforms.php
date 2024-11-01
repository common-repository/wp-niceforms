<?php
/*
Plugin Name: WP-Niceforms
Version: 1.0.1
Plugin URI: http://ajaydsouza.com/wordpress/plugins/wp-niceforms/
Description: <a href="http://www.emblematiq.com/projects/niceforms/">Niceforms</a> is a script that will replace the most commonly used form elements with custom designed ones. You can either use the default theme that is provided or you can even develop your own look with minimal effort. 
Author: Ajay D'Souza 
Author URI: http://ajaydsouza.com/
*/

if (!defined('ABSPATH')) die("Aren't you supposed to come here via WP-Admin?");

define('ALD_NICEFORMS', dirname(__FILE__));

// Pre-2.6 compatibility
if ( !defined('WP_CONTENT_URL') )
	define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
if ( !defined('WP_CONTENT_DIR') )
	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
// Guess the location
$niceforms_path = WP_CONTENT_DIR.'/plugins/'.plugin_basename(dirname(__FILE__));
$niceforms_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));


function ald_niceforms()
{
	global $ald_blog_url;
	global $niceforms_path;
	global $niceforms_url;
?>
<script type="text/javascript">
<!--
var imagesPath = "<?php echo $niceforms_url ?>/niceforms/img/";
-->
</script>
<script type="text/javascript" src="<?php echo $niceforms_url ?>/niceforms/niceforms.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $niceforms_url ?>/niceforms/niceforms-default.css" />
<?php
}

//add action when the head is written
add_action('wp_head', 'ald_niceforms');
?>