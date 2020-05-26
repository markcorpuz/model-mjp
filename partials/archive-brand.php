<?php
/**
 * Archive partial - BRAND
 *
 * @package      SETUP-BE
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '<article class="module brand post_summary">';

    // FEATURED IMAGE
    //setup_be_image();
    //setup_be_image_nolink();

    echo '<div class="items info">';
        
        // TITLE
        setup_be_title();
        //setup_be_title_nolink();

        // EXCERPT
        //setup_be_excerpt();
        //setup_be_excerpt_maxwords();

    echo '</div>';

    // IMAGE - BRAND_LOGO
    //mjp_image_brand_logo();
    //mjp_image_nolink_brand_logo();

echo '</article>';

/**
 * To demonstrate the output code in it's basic form, here's what it could look like
 * 
 */

/*
<div class="module brand post_summary">
    <a class="item image post_thumbnail"><img></a>
    <div class="items info">
        <div class="item title brand_name"><a class="item brand_url">Nike</a></div>
        <a class="item permalink">EDIT</a>
    </div>
    <a class="item image brand_logo"><img></a>
</div>
*/