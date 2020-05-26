<?php
/**
 * Template Tags Brand
 *
 * @package      MJP
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/


// NATIVE | ID
$pid = get_the_ID();


/**
 * IMAGE - BRAND_LOGO
 * 
 */

function mjp_image_brand_logo( $size = 'thumbnail_medium' ) {
	$brand_site = get_post_meta( get_the_ID(), "brand_site", TRUE );
	echo '<a class="item image link brand_logo" href="' . $brand_site . '" tabindex="-1" aria-hidden="true">' . wp_get_attachment_image( get_post_meta( get_the_ID(), "brand_logo", TRUE ), 'thumbnail_medium' ) . '</a>';
}
function mjp_image_brand_logo_nolink( $size = 'thumbnail_medium' ) {
	echo wp_get_attachment_image( get_post_meta( get_the_ID(), "brand_logo", TRUE ), 'thumbnail_medium' );
}

/**
 * NOTE: The code below came from Bill Erickson which I presume does a job of pulling the post_thumbnail
 * Perhaps we can use the same thing for CPT?
 * I kinda want to explore our options too in this regard for instance, if I wanted to pull the image coming from a different post_type
 * 
 */
if (!function_exists('ea_entry_image_id')) {
	function ea_entry_image_id() {
		return has_post_thumbnail() ? get_post_thumbnail_id() : get_option( 'options_ea_default_image' );
	}
}


/**
 * TITLE - BRAND_NAME
 * 
 */

function mjp_title_brand_name() {
	$brand_site = get_post_meta( get_the_ID(), "brand_site", TRUE );
	echo '<a class="item image link brand_logo" href="' . $brand_site . '" tabindex="-1" aria-hidden="true">' . get_post_meta( get_the_ID(), "brand_name", TRUE ) . '</a>';
}
function mjp_title_brand_name_nolink() {
	echo get_post_meta( get_the_ID(), "brand_name", TRUE );
}


/**
 * PERMALINK - BRAND
 * 
 */

function mjp_permalink_brand() {
	// Sometimes, there's just no point trying to display a whole article title just to edit information on what is already visibly obvious
	// In this case, we're simply putting an Edit link (probably at the bottom)
	// We need to add a condition where this will be displayed only on the admin area
	//echo '<a class="item permalink" href="' . get_permalink() . '" tabindex="-1" aria-hidden="true">Edit</a>';
}