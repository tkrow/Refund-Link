<?php
/**
 * @package Refund-Link
 * @version 1.0.0 */
/*
Plugin Name: Refund Link
Plugin URI: https://github.com/tkrow/Refund-Link.git
Description: Replaces every "refund" with a link to the refund page.
Author: Timothy Krow
Version: 1.0.1
*/

//*read description* I won't repeat myself
function replace_refund( $text ){
	$replace = array(
		'refund' => '<a style="color:red;" href="https://23.30.218.171/tkrow64/wordpress/refunds/">REFUND</a>'
	);
	$text = str_replace( array_keys($replace), $replace, $text);
	return $text;
}
add_filter('the_content', 'replace_refund');
add_filter('the_excerpt', 'replace_refund');