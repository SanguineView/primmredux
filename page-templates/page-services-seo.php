<?php
    /**
    * Template Name: SEO
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>



    <section class="contentSection contentSection--seoVital">
        <div class="contentSection--seoLines">
            <div class="contentSection--wrap">
                <div class="half__container">
                    <div class="half__container--left">
                        <h1 class="heading-primary">Search Engine Optimization<br/><span>Is Vital To Your Website</span></h2>
                        <p>Search Engine Optimization or commonly referred to as “SEO” is the process by which web developers & content strategists actively optimize pre-existing content or create entirely new content on your website in an effort to generate more “Organic Traffic”. Organic Traffic is valuable in that it does not cost money (compared to pay-per-click campaigns) and usually accounts for 50-75% of your total website traffic.</p>
                        <p>Users are referred to any given website via Google’s search engine and keyword queries. When your website content is crawled and indexed, Google takes a number of signals on the page and off the page into account when serving it to users on the web using their search engine. These signals range from title and description all the way to how much visual content is on the page, how long users stay on said page and of course how many other websites on the web link to it.</p>
                        <p>Since your website is most likely competing with other websites within the same vertical both locally and nationally, ranking higher for competitive keywords used by them will only increase the monthly traffic to your website in addition to driving the bottom line via more sales & leads. Once Google begins to recognize your SEO efforts, it will then begin serving the pages located on your website to users searching for your products and services more and more. Here’s an example of one of our clients Google Console impressions reports after they began working with us to handle their ongoing SEO.</p>
                        <button class="button" id="trigger-overlay" type="button">Get In Touch</button>
                    </div>
                    <div class="half__container--right contentSection--flexColumn">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/tablet-2.png" class="algincenter">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection contentSection--seoLeads">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left contentSection--flexColumn">
                    <h2 class="heading-primary text--white">More <span>Leads.</span> More <span>Calls.</span> More <span>Form Fills.</span></h2>
                    <p class="text--white">Having a website that looks good and works well is not enough to increase revenue generated via your digital property. Search Engine Optimization allows your website to get more daily, weekly and monthly traffic by showing the pages to your site more prominently in search results.</p>
                    <p class="text--white">Primm Advertising has developed and refined its own SEO practices over the last 10 years. We can get you moving in the right direction regarding every aspect of search engine optimization. This includes but is not limited to:</p>
                    <ul class="text--white">
                        <li>Making sure your website is properly indexed</li>
                        <li>Reviewing your Google Analytics connections and queries to your site</li>
                        <li>Analyzing your backlink profile and building new links</li>
                        <li>Optimizing your current web pages</li>
                        <li>Generating new content to rank for additional keywords & backlinks</li>
                        <li>Researching what keywords drive form fills, calls and leads not only for you but for your closest competitors</li>
                    </ul>
                    <p class="text--white">Once your SEO is headed in the right direction your website visibility will start to increase. Your website’s visibility report shows the progress of your keywords as it relates to Google’s search engine results page (SERP). The higher your visibility – the higher your target keywords allow your pages to show up during a Google Search – the higher the clicks to your site & conversions go! See an example visibility report below.</p>
                </div>
                <div class="half__container--right contentSection--flexColumn">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/tablet-1.png" class="algincenter">
                </div>
            </div>
        </div>
    </section>


    <section class="contentSection contentSection--greyAngle">
        <div class="contentSection--wrap1280 contentSection--flexColumn">
            <h2 class="heading-secondary text--center text--blue">We Help <span>Deliver Results</span> That Affect Your Google Rankings</h2>
            <p>Before we start our work we’ll baseline your current keyword rankings so you’re able to accurately measure the value in having Primm Advertising handle your ongoing Search Engine Optimization. Each month you will receive a keyword ranking report so you are aware of how your rankings change as a function of SEO and Google’s endless algorithmic updates.</p>
            <p>We use SEMRush to track and manage your keyword reports, as it’s recognized by the digital marketing industry as being one of the best and most reliable services to use. Also, their platform updates daily to give you the best most accurate view of how your keywords are ranking. See an example keyword ranking report below.</p>
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/section-3.jpg" class="algincenter">
        </div>
    </section>

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();