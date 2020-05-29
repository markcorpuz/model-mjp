<?php
/**
 * Archive partial - BRAND
 *
 * @package      SETUP-BE
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '<article class="module brand post-summary">';

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

        // IMAGE - BRAND_LOGO
        mjp_image_brand_logo('medium');
        //mjp_image_brand_logo_nolink('medium');

        // EXCERPT
        setup_be_excerpt();
        //setup_be_excerpt_maxwords();

    echo '</div>';
    
    // ADMIN
    setup_be_edit();

echo '</article>';