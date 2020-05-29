<?php
/**
 * Template Tags Brand
 *
 * @package      MJP
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/


/**
 * IMAGE - BRAND_LOGO
 * 
 */

function mjp_image_brand_logo( $size = 'thumbnail_medium' ) {
    
    //$brand_site = mjp_link_validation( get_post_meta( get_the_ID(), "brand_site", TRUE ), get_the_ID() );
    $brand_site = get_post_meta( get_the_ID(), "brand_site", TRUE );
    
	echo '<a class="item image link brand_logo" href="' . $brand_site . '" tabindex="-1" aria-hidden="true">' . wp_get_attachment_image( get_post_meta( get_the_ID(), "brand_logo", TRUE ), $size, "", ["class" => "item img"] ) . '</a>';

}
function mjp_image_brand_logo_nolink( $size = 'thumbnail_medium' ) {
	echo wp_get_attachment_image( get_post_meta( get_the_ID(), "brand_logo", TRUE ), $size, "", ["class" => "item img"] );
}
function mjp_image_brand_logo_jake( $size = 'thumbnail_medium', $pid = FALSE ) {
    
    if( $pid ) {
        $post_id = $pid;
    } else {
        $post_id = get_the_ID();
    }
    
    $brand_site = get_post_meta( $post_id, "brand_site", TRUE );
    
	echo '<a class="item image link brand_logo" href="' . $brand_site . '" tabindex="-1" aria-hidden="true">' . wp_get_attachment_image( get_post_meta( $post_id, "brand_logo", TRUE ), $size, "", ["class" => "item img"] ) . '</a>';
}

/**
 * Entry Image ID
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
	//$brand_site = mjp_link_validation( get_post_meta( get_the_ID(), "brand_site", TRUE ), get_the_ID() );
	$brand_site = get_post_meta( get_the_ID(), "brand_site", TRUE );
    echo '<div class="item title link brand_name"><a href="' . $brand_site . '" tabindex="-1" aria-hidden="true">' . get_post_meta( get_the_ID(), "brand_name", TRUE ) . '</a></div>';
}
function mjp_title_brand_name_nolink() {
	echo '<div class="item title brand_name">' . get_post_meta( get_the_ID(), "brand_name", TRUE ) . '</div>';
}


/**
 * LINK | VALIDATION
 * 
 */
/*
if( !function_exists( 'mjp_link_validation' ) ) {
    
    function mjp_link_validation( $url, $pid ) {
        
    	// validate press_link
    	if( $url && mjp_link_validation_curl( $url ) ) {
    	    return $url;
    	} else {
    	    return get_the_permalink( $pid );
    	}
        
    }
    
}
if( !function_exists( 'mjp_link_validation_curl' ) ) {
    
    function mjp_link_validation_curl( $url ) {
          
        // Use curl_init() function to initialize a cURL session 
        $curl = curl_init( $url ); 
          
        // Use curl_setopt() to set an option for cURL transfer 
        curl_setopt( $curl, CURLOPT_NOBODY, true); 
          
        // Use curl_exec() to perform cURL session 
        $result = curl_exec( $curl ); 

        // Use curl_getinfo() to get information 
        // regarding a specific transfer 
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
        
        if ($statusCode == 404) { 
            //echo "URL Doesn't Exist"; 
            return FALSE;
        } else { 
            //echo "URL Exist"; 
            return TRUE;
        }
        
    }
}
*/