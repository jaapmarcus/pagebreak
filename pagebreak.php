<?php
/*
Plugin Name: pagebreak
Plugin URI: https://eris.nu
Description:
Version: 1.0.0
Author: Jaap Marcus
Author URI:  https://eris.nu
Text Domain: -
*/

/* Add Next Page Button in First Row */
add_filter( 'mce_buttons', 'my_add_next_page_button', 1, 2 ); // 1st row
 
/**
 * Add Next Page/Page Break Button
 * in WordPress Visual Editor
 * 
 * @link https://shellcreeper.com/?p=889
 */
function my_add_next_page_button( $buttons, $id ){
 
		/* only add this for content editor */
		if ( 'content' != $id )
				return $buttons;
 
		/* add next page after more tag button */
		array_splice( $buttons, 13, 0, 'wp_page' );
 
		return $buttons;
}