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
	// Will need to pull the brand_logo image but I'm not quite sure how it works on CPT
	// 
	echo '<a class="item image link brand_logo" href="' . get_permalink() . '" tabindex="-1" aria-hidden="true">' . wp_get_attachment_image( ea_entry_image_id(), $size ) . '</a>';
}
function mjp_image_nolink_brand_logo( $size = 'thumbnail_medium' ) {
	// Will need to pull the brand_logo image but I'm not quite sure how it works on CPT
	echo wp_get_attachment_image( ea_entry_image_id(), $size );
}

/**
 * NOTE: The code below came from Bill Erickson which I presume does a job of pulling the post_thumbnail
 * Perhaps we can use the same thing for CPT?
 * I kinda want to explore our options too in this regard for instance, if I wanted to pull the image coming from a different post_type
 * 
 */

function ea_entry_image_id() {
	return has_post_thumbnail() ? get_post_thumbnail_id() : get_option( 'options_ea_default_image' );
}


/**
 * TITLE - BRAND_NAME
 * 
 */

function mjp_title_brand_name() {
	// Will act like it's pulling the title but it would show the brand_name instead
	global $wp_query;
	$tag = ( is_singular() || -1 === $wp_query->current_post ) ? 'h3' : 'h2';
	echo '<' . $tag . ' class="item title brand_name"><a href="' . get_permalink() . '">' . get_the_title() . '</a></' . $tag . '>';
}
function mjp_title_nolink_brand_name() {
	global $wp_query;
	$tag = ( is_singular() || -1 === $wp_query->current_post ) ? 'h3' : 'h2';
	echo '<' . $tag . ' class="item title brand_name">' . get_the_title() . '</' . $tag . '>';
}


/**
 * LINK - BRAND_SITE
 * 
 */

function mjp_link_brand_site() {
	// This simply shows the URL
	echo '<a class="item link brand_site">Get the URL from BRAND_SITE</a>';
}



/**
 * PERMALINK - BRAND
 * 
 */

function mjp_permalink_brand {
	// Sometimes, there's just no point trying to display a whole article title just to edit information on what is already visibly obvious
	// In this case, we're simply putting an Edit link (probably at the bottom)
	// We need to add a condition where this will be displayed only on the admin area
	echo '<a class="item permalink" href="' . get_permalink() . '" tabindex="-1" aria-hidden="true">Edit</a>';
}

/**
 * To demonstrate the output code in it's basic form, here's what it could look like
 * 
 */
?>
<div class="module brand post_summary">
	<a class="item image post_thumbnail"><img></a>
	<div class="items info">
		<div class="item title brand_name"><a class="item brand_url">Nike</a></div>
		<a class="item permalink">EDIT</a>
	</div>
	<a class="item image brand_logo"><img></a>
</div>
<?php 