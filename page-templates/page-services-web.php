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

    <section class="jarallax contentSection contentSection--webBanner web" data-speed="0" data-video-src="mp4:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/web-design-bg.mp4,webm:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/web-design-bg.webm">
        <div class="contentSection--webvidbg wrap contentSection--flexColumn">
            <h1 class="heading-primary text--white">WEB DESIGN</h1>
            <h3 class="heading-secondary text--white">WITH YOU IN MIND</h3>
            <p class="text--white">Your website is your best salesman. It works 24 hours a day, 7 days a week and is often the first interaction potential customers will ever have with your business.</p>
            <a class="button" href="<?php echo get_home_url(); ?>/contact/">Let's Get Started</a>
        </div>
        <div class="blueOverlay"></div>
    </section>

    <section class="contentSection contentSection--greyAngle">
        <div class="contentSection--wrap">
            <div class="web-ex-container">
                <div class="web-ex-block" data-aos="fade-up" data-aos-delay="150">
                <a href="https://pariserderm.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Pariser-MockUp.jpg" class="aligncenter"></a>
                </div>
                <div class="web-ex-block" data-aos="fade-up" data-aos-delay="300">
                <a href="https://edmarc.org/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Edmarc-Mock-Up.jpg" class="aligncenter"></a>
                </div>
                <div class="web-ex-block" data-aos="fade-up" data-aos-delay="450">
                <a href="https://petedecker.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Decker-MockUp.jpg" class="aligncenter"></a>
                </div>
                <div class="web-ex-block" data-aos="fade-up" data-aos-delay="150">
                <a href="http://comfortsystemsva.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/ComfortSystems-MockUp.jpg" class="aligncenter"></a>
                </div>
                <div class="web-ex-block" data-aos="fade-up" data-aos-delay="300">
                <a href="http://baydiesel.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/Bay-Diesel-Mock-Up.jpg" class="aligncenter"></a>
                </div>
                <div class="web-ex-block" data-aos="fade-up" data-aos-delay="450">
                <a href="http://greenlawn-memorial.com/"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/greenlawn-web.jpg" class="aligncenter"></a>
                </div>
                <a class="button aos-init aos-animate" data-aos="fade-up" data-aos-delay="450" href="https://theprimmcompany.com/our-work/">View More Work Examples</a>
            </div>
        </div>  
    </section>

    <section class="contentSection contentSection--blueGradient">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <a href="//www.youtube.com/embed/o2ep_D2FyHo" data-lity>
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/11/web-video.png" class="algincenter">
                    </a>
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary text--white">What Should Your Website Do For You?</h2>
                    <p class="text--white">There’s no “one size fits all.” We’re proud to say that every site is tailor-made for your specific needs and offerings. We have a full-time in-house web development team that builds your site from the ground up using the WordPress content management system. We’ll work with you to create a site that is responsive, beautiful, SEO compliant, and user-friendly.</p>
                    <a class="button" href="<?php echo get_home_url(); ?>/contact/">Let's Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection contentSection--bgNumbers">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <h2 class="heading-primary">Custom-built<br/><span>Web Design and Development</span></h2>
                    <h3 class="heading-third text--blue"></h3>
                    <p class="small">We create websites that marry technology and design to create an engaging experience for your customer. From font to photo choice and color to copy points, we craft your site to match your brand voice and goals. Your website could be your only chance to make a good first impression. We can make sure that you make a lasting impression.</p>
                    <h3 class="heading-third text--blue">We don’t just make pretty sites</h3>
                    <p class="small">Our in-house web developers use the latest in technology to ensure that your site is future-proofed for years to come. Our sites are responsive, meaning they can be read on any device. Each site is custom built using a content management system to quickly make content changes. We take extreme measures to ensure the safety of your data and the data of your customers.</p>
                    <h3 class="heading-third text--blue">We make sites that convert</h3>
                    <p class="small">Once your website is complete,  we design a sales funnel to direct your inbound customers from online ads and searches to contact pages, form fills, and phone calls. We track and report on your site for months following the launch of your site. We give you data and analysis on the progress of your goals. We then use that data to tweak the user experience and optimize the return on your new website.</p>
                    <h3 class="heading-third text--blue">Tailored for growth</h3>
                    <p class="small">Your site users are seamlessly guided directly to a call to action where they make the transition from user to customer. Stop missing out on new business.</p>
                    <a class="button" href="<?php echo get_home_url(); ?>/contact/">Let's Get Started</a>
                </div>
                <div class="half__container--right">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/web-2.png" class="algincenter">
                </div>
            </div>
        </div>
    </section>


    <section class="contentSection">
        <div class="contentSection--wrap">
            <h2 class="heading-primary text--center" data-aos="fade-up">You're Only<br/><span>3</span> Steps Away</h2>
            <div class="third__container">
                <div class="third__block">
                    <h3 class="number--lrg text--center text--blue text--underlineBlue">1</h3>
                    <h4 class="heading-secondary text--center text--blue">Request</h4>
                    <p class="text--center">Work with us to solidify your new website’s unique design and functionality to ensure that it fits your vision and mission perfectly.</p>
                </div>
                <div class="third__block">
                    <h3 class="number--lrg text--center text--blue text--underlineBlue">2</h3>
                    <h4 class="heading-secondary text--center text--blue">Relax</h4>
                    <p class="text--center">Our team will build or refine a customized website to your specifications and will keep you in the loop along the way as much or as little as you choose.</p>
                </div>
                <div class="third__block">
                    <h3 class="number--lrg text--center text--blue text--underlineBlue">3</h3>
                    <h4 class="heading-secondary text--center text--blue">See The Return</h4>
                    <p class="text--center">Receive reports on website performance in key areas you specify and customer interactions that lead to conversions after your site goes live.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contentSection contentSection--blueGradient">
        <div class="contentSection--wrap">
            <p class="text--white text--center">When you choose us, you choose 40 years of advertising experience to be on your side in the digital age.<br/>When you recruit us, you don’t just get a website, you get a partner.</p>
            <div class="half__container">
                <div class="half__container--left contentSection--flexColumn">
                    <a class="button" href="<?php echo get_home_url(); ?>/contact/">Get Started</a>
                </div>
                <div class="half__container--right contentSection--flexColumn">
                    <a class="button" href="<?php echo get_home_url(); ?>/online-advertising/">Learn More</a>
                </div>
            </div>
        </div>
    </section>

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