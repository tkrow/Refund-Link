<?php
/**
 * @package Refund-Link
 * @version 1.0.1 */
/*
Plugin Name: Refund Link
Plugin URI: https://github.com/tkrow/Refund-Link.git
Description: Replaces every "refund" with a link to the refund page.
Author: Timothy Krow
Version: 1.0.1
*/

//*read description* I won't repeat myself
function replace_refund($text){
	$text = str_replace('REFUND', '<a style="color:red;" href="https://23.30.218.171/tkrow64/wordpress/refund>REFUND</a>', $text);
	$text = str_replace('refund', '<a style="color:red;" href="https://23.30.218.171/tkrow64/wordpress/refund>REFUND</a>', $text);
	return ($text);
}
add_filter('the_content', 'replace_refund');