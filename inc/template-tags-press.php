<?php
/**
 * Template Tags Press
 *
 * @package      MJP
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/


/**
 * TITLE - PRESS_HEADLINE
 * 
 */

function mjp_title_press_headline() {
    
	//$press_link = mjp_link_validation( get_post_meta( get_the_ID(), "press_link", TRUE ), get_the_ID() );
	$press_link = get_post_meta( get_the_ID(), "press_link", TRUE );
	echo '<div class="item title link press_headline"><a href="' . $press_link . '" tabindex="-1" aria-hidden="true">' . get_post_meta( get_the_ID(), "press_headline", TRUE ) . '</a></div>';
	
}
function mjp_title_press_headline_nolink() {
	echo '<div class="item title press_headline">' . get_post_meta( get_the_ID(), "press_headline", TRUE ) . '</div>';
}


/**
 * DATE
 *
 */

	/**
	 * DATE (Jan 3, 2020)
	 *
	 */
	function mjp_date_press_date_mdy() {
		
		$get_this_time = get_post_meta( get_the_ID(), "press_date", TRUE );
		if( $get_this_time ) {
		    echo '<div class="item date">' . date( 'M j, Y', strtotime( $get_this_time ) ) . '</div>';
		} else {
		    // echo 'uncomment this line and replace this with your message if date is empty';
		}
		
	}
	/**
	 * MONTH |  DATE (Oct | Jan 3, 2020)
	 *
	 */
	function mjp_date_press_date_weekday_mdy() {
		
		$get_this_time = get_post_meta( get_the_ID(), "press_date", TRUE );
		if( $get_this_time ) {
		    echo '<div class="item date">' . date( 'D | M j, Y', strtotime( $get_this_time ) ) . '</div>';
		} else {
		    // echo 'uncomment this line and replace this with your message if date is empty';
		}
		
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