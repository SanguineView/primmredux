<?php
    /**
    * Template Name: Digital
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>
    <div class="contentSection contentSection--blueGradient contentSection--clipAngle">
        <div class="contentSection--wrap  contentSection--flexColumn">
            <h2 class="heading-primary heading-primary--center heading-primary--white">An Online Advertising <span>AGENCY</span></h2>
            <p class="paragraph--white">Not sure which Google Ads options are right for your business? We can help. As a Google Partner Agency, we’re experts in using Google Ads to drive customers to your business. We can do this through several campaign types commonly referred to as Search, Display, and YouTube. In addition to traditional Google Advertising, Programmatic advertising is also one of our capabilities in regards to display ads.</p>
            <button class="button" href="/contact/" alt="Contact Primm Advertising">Get In Touch</button>
        </div>
    </div>
    <div class="contentSection contentSection--aboveBefore">

    <img src="https://theprimmcompany.com/wp-content/themes/tpc/images/google-partner.png" class="aligncenter">
    </div>
    
    

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();