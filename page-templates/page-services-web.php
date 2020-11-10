<?php
    /**
    * Template Name: Web
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>

    <section class="jarallax web" data-speed="0" data-video-src="mp4:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/web-design-bg.mp4,webm:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/web-design-bg.webm">
        <div class="webvidbg wrap whiteCopy">
            <h1 class="heading-primary heading-primary--white">WEB DESIGN</h1>
            <h3 clas="heading-secondary heading-primary--white">WITH YOU IN MIND</h3>
            <p style="text-align:center;">Your website is your best salesman. It works 24 hours a day, 7 days a week and is often the first interaction potential customers will ever have with your business.</p>
            <a class="button" href="<?php echo get_home_url(); ?>/contact/">Let's Get Started</a>
        </div>
        <div class="blueOverlay"></div>
    </section>


    <section class="contentSection contentSection--greyAngle">
        <div class="contentSection--wrap">
            <div class="web-ex-container">
                <div class="block" data-aos="fade-up" data-aos-delay="150">
                <a href="https://pariserderm.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Pariser-MockUp.jpg" class="aligncenter"></a>
                </div>
                <div class="block" data-aos="fade-up" data-aos-delay="300">
                <a href="https://edmarc.org/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Edmarc-Mock-Up.jpg" class="aligncenter"></a>
                </div>
                <div class="block" data-aos="fade-up" data-aos-delay="450">
                <a href="https://petedecker.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Decker-MockUp.jpg" class="aligncenter"></a>
                </div>
                <div class="block" data-aos="fade-up" data-aos-delay="150">
                <a href="http://comfortsystemsva.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/ComfortSystems-MockUp.jpg" class="aligncenter"></a>
                </div>
                <div class="block" data-aos="fade-up" data-aos-delay="300">
                <a href="http://baydiesel.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Bay-Diesel-Mock-Up.jpg" class="aligncenter"></a>
                </div>
                <div class="block" data-aos="fade-up" data-aos-delay="450">
                <a href="http://greenlawn-memorial.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/greenlawn-web.jpg" class="aligncenter"></a>
                </div>
                <a class="button aos-init aos-animate" data-aos="fade-up" data-aos-delay="450" href="https://theprimmcompany.com/our-work/">View More Work Examples</a>
            </div>
        </div>  
    </section>



    <section class="contentSection contentSection--greyAngle">
        <div class="contentSection--wrap">
            <div class="print-ex-container">
                <div class="print-block print-1 jarallax" data-aos="fade-up">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/brochure.jpg" class="jarallax-img" data-speed="-0.2"/>
                </div>
                <div class="print-block print-2 jarallax" data-aos="fade-up">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/CFW-414-Vacation-1.jpg" class="jarallax-img" data-speed="-0.2"/>
                </div>
                <div class="print-block print-3 jarallax" data-aos="fade-up">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/print-preview-1.jpg" class="jarallax-img" data-speed="-0.2"/>
                </div>
                <div class="print-block print-4 jarallax" data-aos="fade-up">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/Beach-Ford-newspaper-1.jpg" class="jarallax-img" data-speed="-0.2"/>
                </div>
                <div class="print-block print-5 jarallax" data-aos="fade-up">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/10/Mode5-postcard.jpg" class="jarallax-img" data-speed="-0.2" width="500"/>
                </div>
            </div>
            <div class="contentSection--flexColumn" style="margin-top:45px;">
                <a class="button center" href="/our-work/">View More Work Examples</a>
            </div>
        </div>
    </section>

    <div class="contentSection">
        <div class="contentSection--wrap contentSection--flexColumn">
            <h2 class="heading-primary"><span>CONSISTENCY</span> IS KEY</h2>
            <p>Through our themes in both content and design, we convey a consistent message in your print ads, making you recognizable and familiar to your audience. But we don’t stop there, when you work with Primm Advertising you have the luxury of keeping all marketing materials in one place. The team that handles your print advertising will work with the digital, video production, and web development team to ensure that your business presents a consistent and compelling look wherever you encounter your customer.</p>
        </div>
    </div>

    <script type="text/javascript">
        jarallax(document.querySelectorAll('.jarallax'), {
        speed: 0.5
        });
    </script>


    
    

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();