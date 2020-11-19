<?php
    /**
    * Template Name: Who We Are
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>
    <div class="contentSection">
        <div class="contentSection--wrap contentSection--flexColumn">
            <h2 class="heading-primary text--center">Who we <span>Are</span></h2>
            <p>Primm Advertising is an award-winning, full-service marketing and advertising agency supporting Virginia area businesses for over 40 years. Our solutions include video production, search engine optimization, social media management, brand strategy, media planning, and website design.</p>
            <button class="button" href="/contact/" alt="Contact Primm Advertising">Get In Touch</button>
        </div>
    </div>
    <div class="contentSection contentSection--blueGradient">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <div class="video-player-responsive">
                        <iframe src="https://player.vimeo.com/video/348203154" width="1060" height="596" frameborder="0" allow="fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary text--white"><span>More</span> Than the Sum of Our Parts</h2>
                    <p class="text--white">We offer a one-phone-call solution to any business with challenges and budgets big and small. Let us walk with you to craft a plan, a campaign or a project that will take you to the next level. You can handle your entire advertising strategy with Primm and be assured that your campaign is executed in a creative, consistent manner, with one voice and one vision. </p>
                    <a class="button" href="/contact/" alt="Contact Primm Advertising">Let's Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contentSection">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left half__container--flexColumn">
                    <h2 class="heading-primary"><span>Why</span> Primm Advertising?</h2>
                    <p>You’re busy running your business. Let us do what we do best so that you can do what you do best. In 40 years, we’ve seen it all – we’ve helped thousands of companies and we know what works – and what works even better.</p>
                    <p>We have the history, the success rate, the people and process to get you more phone calls, form fills, clients, and customers. We’ve stood head to head with the big guys and won. More often than not, we are working with budgets much less than our competitors, with better results.</p>
                    <p>Make Primm part of your next project – big or small.</p>
                </div>
                <div class="half__container--right">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/Primm-Circles.png" class="algincenter">
                </div>
            </div>
        </div>
    </div>
    

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();