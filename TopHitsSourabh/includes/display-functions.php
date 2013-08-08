<?php
/*****************
*Display Functions
******************/


function mfwp_add_content($content){
	global $mfwp_options;

	if(is_single() && $mfwp_options['enable'] == true){
		$extra_content = '<p class="twitter-message ' . $mfwp_options['theme'] . '">Follow me on <a href="' . $mfwp_options['twitter_url'] . '">Twitteratti</a></p>';
		$content .= $extra_content;
	}
	return $content;

}
add_filter('the_content','mfwp_add_content');
?>