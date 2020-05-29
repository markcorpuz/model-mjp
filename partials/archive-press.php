<?php
/**
 * Archive partial - PRESS
 *
 * @package      SETUP-BE
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '<article class="module press post-summary">';

	// FEATURED IMAGE
	//setup_be_image();
	setup_be_image_nolink();

    // CONNECT
    echo '<div class="item connect">'.do_shortcode( '[setup-relationships template="model-mjp-press"][/setup-relationships]' ).'</div>';

	echo '<div class="items info">';

		// OVERLINE
		//setup_be_overline();
		//setup_be_overline_nolink();
		
		// TITLE
		//setup_be_title();
		//setup_be_title_nolink();

		// DATE
		mjp_date_press_date_mdy();
		//mjp_date_press_date_weekday_mdy();

		// TITLE - PRESS HEADLINE
		mjp_title_press_headline();
		//mjp_title_press_headline_nolink();

		// EXCERPT
		setup_be_excerpt();
		//setup_be_excerpt_maxwords();

		// AUTHOR
		//setup_be_author_name();
		//setup_be_author_by_name();
		//setup_be_author_gravatar_by_name();
		//setup_be_author_gravatar();
		
		// DATE
		//setup_be_date_mdy();
		//setup_be_date_weekday_mdy();

		// DATE & AUTHOR
		//setup_be_date_vbar_author_name();
		//setup_be_date_by_author_name();

	echo '</div>';

    // ADMIN
    setup_be_edit();

echo '</article>';