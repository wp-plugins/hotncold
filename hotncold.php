<?php
/*
Plugin Name: Hot'n'Cold
Plugin URI: http://www.shambix.com/en/portfolio/wordpress-plugin-hotncold
Description: Hot'n'Cold shows a different colored badge for every post, depending if the post is "hot", "medium" or "cold", based on Jetpack post views<strong>Requires Jetpack</strong>.
Version: 1.0
Author: Shambix
Author URI: http://www.shambix.com/
*/
define ('HOTNCOLD_PLUGIN_BASENAME', 	plugin_basename(dirname(__FILE__)));
define ('HOTNCOLD_PLUGIN_PATH', 		WP_PLUGIN_DIR		."/".HOTNCOLD_PLUGIN_BASENAME);
define ('HOTNCOLD_PLUGIN_URL', 		WP_PLUGIN_URL		."/".HOTNCOLD_PLUGIN_BASENAME);

//Add the basic CSS for the buttons
function hotncoldcss() {
		echo '<link rel="stylesheet" type="text/css" href="'.HOTNCOLD_PLUGIN_URL.'/hotncold.css" />';
}

//Jetpack + Shambix HOT posts
function shambix_hotposts($hot='200',$med='100',$cold='50',$h=true,$m=true,$c=false) {
	$postid = get_the_ID();
	if ( function_exists('stats_get_csv') && $top_posts = stats_get_csv( 'postviews', "days=-1&limit=-1")) {
		foreach ($top_posts as $post) {
			if ($post['post_id'] == $postid) {
				$theviews = number_format_i18n( $post['views']);
				echo '<div class="hotncold">';
				if($h && $theviews > $hot) { echo '<span class="label label-important">HOT!</span>';
				} elseif ($m && $theviews < $hot && $theviews > $med) { echo ' <span class="label label-success">Popular</span> ';
				} elseif ($c && $theviews < $med && $theviews > $cold) { echo ' <span class="label label-info">Read Me!</span> ';
				} elseif ($theviews < $cold) { echo ''; }
				echo '</div>';
				// you can use $theviews in case you want to echo the post views number
			}
		}
	}
	add_action('wp_footer', 'hotncoldcss');
}

// Use the code below in your theme, in the Loop, and change parameters if you need to.
/*
	<?php shambix_hotposts(200,100,50,true,true,false); ?>
*/

?>