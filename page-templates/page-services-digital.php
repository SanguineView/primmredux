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
        <div class="contentSection--wrap contentSection--flexColumn">
            <h2 class="heading-primary text--center text--white">An Online Advertising <span>AGENCY</span></h2>
            <p class="text--white">Not sure which Google Ads options are right for your business? We can help. As a Google Partner Agency, we’re experts in using Google Ads to drive customers to your business. We can do this through several campaign types commonly referred to as Search, Display, and YouTube. In addition to traditional Google Advertising, Programmatic advertising is also one of our capabilities in regards to display ads.</p>
            <button class="button" href="/contact/" alt="Contact Primm Advertising">Get In Touch</button>
        </div>
    </div>
    <div class="contentSection contentSection--aboveBefore">
        <img src="https://theprimmcompany.com/wp-content/themes/tpc/images/google-partner.png" class="aligncenter">
    </div>


    <section class="contentSection contentSection--digitalSearch">
        <div class="contentSection--wrap">
            <div class="half__container half__container--vStart">
                <div class="half__container--left">
                    <h2 class="heading-primary"><span>SEARCH</span></h2>
                    <p>These are the ads that appear at the very top and extreme bottom of the Google search results page based on your search query. These text ads can also appear in Google Shopping or Maps when someone searches your keywords.</p>
                    <p>There are many ways to target desired users, this includes but is not limited to keywords (what people are looking for), time of day, device, age, income, geographic location and gender. In addition to targeting, on each individual ad there are a variety of extensions that we can use to convey relevant information before the user decides to click. These extensions include price, phone number, reviews, call-to-action text and direct links to certain pages on your website.</p>
                </div>
                <div class="half__container--right">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/phone-1.png" class="aligncenter">
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection contentSection--digitalProductListing">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/phone-2.png" class="aligncenter">
                </div>
                <div class="half__container--right half__container--vStart">
                    <h2 class="heading-primary text--white"><span>Product Listing Ads</span></h2>
                    <p class="text--white">Product Listing Ads or PLAs are primarily used for e-commerce sites and are an ad format that includes an image, title, description, price and your business’s name. When a user searches for a product on Google, you have the opportunity to showcase your items directly in the search results alongside other businesses that offer that same product.</p>
                    <p class="text--white">The beauty of product listing ads is that you are not charged unless the user clicks your ad and lands on your site where their product of interest is. Primm Advertising is very familiar with configuring 3rd party data feeds within Google’s merchant center then connecting it to Google Ads & Analytics for continual optimization and reporting.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <h2 class="heading-primary"><span>Display</span></h2>
                    <p>Everyone is familiar with banner ads on news sites, forums, and blogs, but did you know that many of the banner ads you see are part of Google’s Display Network? And not just banner ads, but text ads and rich heading-primaryia ads too. Ads on the Google Display Network reach over 90% of global internet users across roughly 2 million websites—from small niche blogs to sites with millions of daily views.</p>
                    <p>One amazing feature the Display Network offers is remarketing. Remarketing shows ads to people who have visited your website before. When people leave your website without buying anything, remarketing helps you reconnect with them by showing relevant ads as they browse the web, as they use mobile apps, or as they search on Google.</p>
                </div>
                <div class="half__container--right">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/computer.png" class="aligncenter">
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection contentSection--digitalYoutube">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/youtube-pg.jpg" class="aligncenter">
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary"><span>Youtube</span></h2>
                    <p>YouTube advertising is technically considered part of the display network, but there are many types of advertising within YouTube, so we’re giving it its own section. As with all Google Ads advertising, these ads can be targeted to specific geographic areas. They can also be targeted to certain video topics.</p>
                    <ul>
                        <li>Display ads appear to the right of the feature video and above the video suggestions list. For larger players, this ad may appear below the player. These ads only show on desktop computers or laptops.</li>
                        <li>Skippable video ads (previously called TrueView in-stream ads, or sometimes called pre-roll) allow viewers to skip ads after 5 seconds, if they choose. They are inserted before, during, or after the main video. These ads show on mobile, desktop, SmartTVs, and game consoles</li>
                        <li>Non-skippable video ads and long, non-skippable video ads (formerly called non-skippable in-stream ads) must be watched before your video can be viewed. Long non-skippable video ads may be up to 30 seconds long. These ads can appear before, during, or after the main video and appear on mobile and desktop.</li>
                    </ul>
                    <p>While each type of ad has ideal applications, our favorite format is the “skippable video ad” because they display on all platforms.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <h2 class="heading-primary"><span>Gmail Ads</span></h2>
                    <p>Google Mail has over 1-Billion monthly active users across the globe. Each Gmail account is connected to an individual user. Google is able to track both the web browsing history attached to each user, and the businesses who have emailed them in the past. With Gmail advertising, we have the ability to target geographic location, in-market segments, keywords, remarketing lists, and even users who have visited your competitor’s website!</p>
                    <p>Gmail ads contextualize within Gmail’s interface both on mobile & desktop within the “Social” & “Promotions” tabs. This means that when users check their email (which happens many times per day) you have the capability to showcase beautiful full-screen display ads with text right above their emails! When it comes to branding, each touchpoint the user has with your business matters.</p>
                </div>
                <div class="half__container--right">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/monitor-1.png" class="aligncenter">
                </div>
            </div>
        </div>
    </section>

    <div class="contentSection contentSection--blue">
        <div class="contentSection--wrap contentSection--flexColumn">
            <h2 class="heading-primary text--white">We're <span>Here To Help</span></h2>
            <p class="text--white">We know that online advertising can be a daunting endeavor with so many options available, but our digital marketing team is well-equipped to walk you through the process and craft a campaign that satisfies key performance areas for your business.</p>
        </div>
    </div>



    
    

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();