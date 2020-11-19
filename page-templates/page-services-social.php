<?php
    /**
    * Template Name: Social
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>

    
    <section class="contentSection contentSection--bgImage contentSection--bgImage-socialBanner">
        <div class="contentSection--flexColumn contentSection--bgImage-content">
            <h1 class="heading-primary text--white">Social Media</h1>
            <h3 class="heading-secondary text--white">Marketing</h3>
            <p class="text--white">Capture new audiences through social media marketing with Primm Advertising.</p>
            <a class="button" href="<?php echo get_home_url(); ?>/contact/">Get Started Today</a>
        </div>
        <div class="blueOverlay"></div>
    </section>

    <section class="contentSection">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <div class="video-container">
                        <div class="filter"></div>
                        <video autoplay loop muted playsinline class="fillWidth">
                            <source src="<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/social-2.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                            <source src="<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/social-2.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                        </video>
                    </div>
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary">WHY USE<br><span>SOCIAL MEDIA?</span></h2>
                    <h4 class="heading-fourth text--blue">Reach your target audience when they are paying attention the most.</h4>
                    <p>Social media is a crucial part of your online strategy.  Your social media platforms allow you to engage in conversation and build powerful relationships with your customer in their own home or office. We’re here to deliver and manage your message across the web and connect you with real people primed for your services.</p>
                </div>
            </div>
        </div>
    </section>
    


    <section class="contentSection contentSection--greyDark">
        <div class="contentSection--wrap">
            <div class="frow row-between column-between">
                <div class="col-md-2-3">
                    <h3 class="heading-primary text--white">We have a <span>full-time</span> team of <span>social media gurus</span> who are constantly generating <span>likable and engaging content.</span></h3>
                </div>
                <div class="col-md-1-3 contentSection--flexColumn">
                    <a class="button" href="http://v2.theprimmcompany.com/tpc/contact/">Get Started Today</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection contentSection--socialManagement">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <h2 class="heading-primary text--white">Social Media<br><span>Management</span></h2>
                    <p class="text--white">Stop screaming to an empty room. Start Engaging.</p>
                    <p class="text--white">The basics of a great social media presence come from a three-pronged approach: compelling content posted regularly, community conversation and involvement, and constant outreach to past and present customers. Simply having and not properly managing a social media account isn’t enough anymore.</p>
                </div>
                <div class="half__container--right">
                    <ul class="orange">
                    <li>Engage with your community and customers</li>
                    <li>Increase your brand awareness </li>
                    <li>Build trust within your market</li>
                    <li>Earn more return on your investment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <div class="video-container">
                        <div class="filter"></div>
                        <video autoplay loop muted playsinline>
                        <source src="<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/social-1.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                        <source src="<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/social-1.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                        </video>
                    </div>
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary">Social Media<br><span>Advertising</span></h2>
                    <h4 class="heading-fourth text--blue">Start Leading The Conversation </h4>
                    <p>Take it from us, social media is an essential tool required for your marketing strategy. Social networks are where people communicate, shop, and discover information about the world. Platforms like Facebook, Instagram, Twitter, Snapchat, LinkedIn, and Pinterest are the first places people visit before making their coffee and the last before drifting to sleep. Consider the possibilities when advertising with social media.</p>
                    <h4 class="heading-fourth text--blue">Now What?</h4>
                    <p>Let us buy you a coffee. Come sit down with us and we will review your social media efforts and create an effective monthly advertising strategy. Start connecting your products to your new customers.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection contentSection--blueGradient">
        <div class="contentSection--wrap contentSection--flexColumn">
            <h2 class="heading-primary text--center text--white">Don’t waste <span>valuable dollars<span> guessing.</h2>
            <p class="text--center text--white">Call your new Social Media Marketing team at Primm Advertising. </p>
            <a class="button" href="<?php echo get_home_url(); ?>/tpc/contact/">Start Getting Social</a>
        </div>
    </section>

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();