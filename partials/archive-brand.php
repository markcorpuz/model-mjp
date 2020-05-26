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
        //setup_be_title();
        //setup_be_title_nolink();

        // TITLE - BRAND_NAME
        mjp_title_brand_name();
        //mjp_title_brand_name_nolink();

        // EXCERPT
        //setup_be_excerpt();
        //setup_be_excerpt_maxwords();

    echo '</div>';

    // FEATURED IMAGE
    //setup_be_image();
    //setup_be_image_nolink();

    // IMAGE - BRAND_LOGO
    mjp_image_brand_logo();
    //mjp_image_brand_logo_nolink();
    
    // PERMALINK - BRAND
    mjp_permalink_brand();

echo '</article>';