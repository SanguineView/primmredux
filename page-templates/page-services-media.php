<?php
    /**
    * Template Name: Media
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>

    <section class="contentSection contentSection--blueGradient">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/broadcast-3.png" class="algincenter">
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary text--white">RIGHT <span>AUDIENCE</span>. RIGHT <span>TIME</span>. RIGHT <span>MESSAGE.</span></h2>
                    <p class="text--white">Media planning means finding the right media platform to advertise your product. We determine when, where, and how often a message should be placed on those platforms as well. Our goal is to reach the right audience at the right time with the right message to generate business within the designated budget.</p>
                    <p class="text--white">Clearly, media planning can be a challenging role, involving multiple areas of expertise. Our media planning team must always keep in mind audience, timing, message, and desired response—all while staying on top of new platforms and methods as they emerge.</p>
                    <button class="button" id="trigger-overlay" type="button">Get In Touch</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection">
        <div class="contentSection--wrap1280 contentSection--flexColumn">
            <h2 class="heading-primary">Evaluation. <span>Implementation.</span> Reconciliation.</h2>
            <p>From initial research and buying to post-buy analysis and reporting we provide all the services you need under one roof. We invest in the right tools to do the best job for you including subscribing to STRATA Media software and Nielsen tv and radio ratings for an unbiased view of the current market.</p>
            <p>We seamlessly combine elements from our traditional media team with deep local roots and experience covering broadcast television and radio, cable television, print, and with our digital media advertising to create a unified brand across all media.</p>
            <p>With 40 years of experience in Norfolk and Hampton Roads, we have the knowledge and the practice in delivering your content consistently across multiple platforms. Your message is important to us and we intend to treat it with the care and respect it deserves.</p>
        </div>
    </div>

    <section class="contentSection contentSection--greyAngle">
        <div class="contentSection--wrap1280 contentSection--flexColumn">
            <h2 class="heading-primary">So Why <span>Choose Us?</span></h2>
            <p>Longevity in the market – 40 years of media buying means established relationships, and that means you may get special rates and added value on your ads. And as part of our buying repertoire you will see more air time for your money. In media buying when you buy more, you tend to get more, so no matter what your budget is, large or small, you will benefit from the amount of media dollars already purchased before you became “one of the team.”</p>
            <p>Proven Strategies – years of experience placing successful media schedules means you are not paying for guess work, but tried and true strategies that have brought the type of ROI that can be quantified. Just ask us and we’ll show you.</p>
            <p>Creativity is not just for the art department – we don’t usually buy what the stations are selling as much as we create what we want and sell it to them. We think out of the “media rep box,” we know what we want and we push hard to get it, on your behalf.</p>
        </div>
    </div>
    

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();