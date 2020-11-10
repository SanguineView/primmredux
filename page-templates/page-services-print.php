<?php
    /**
    * Template Name: Print
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
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/mag.png" class="algincenter">
                </div>
                <div class="half__container--right">
                    <h2  class="heading-primary heading-primary--white">PRINT MEDIA IS OUR<br/><span>FIRST LOVE</span></h2>
                    <p class="paragraph--white">Print is where it all started for Primm Advertising. We opened our doors over 40 years ago, and we’ve been creating high-quality print ads ever since. Even before Primm Advertising existed, our founder, Ron Primm, began his career as a popular illustrator for the Virginian-Pilot newspaper. Trust us. We’re really good at this.</p>
                    <p class="paragraph--white">At Primm Advertising, we get to know you, your company, your market, your corporate “personality,” and consumer benefits before we formulate creative concepts. There’s not a “Primm style” as a result – what we do is a direct reflection of who you are.</p>
                    <p class="paragraph--white">Our designs are built from the ground up with your product, brand, and customer in mind. With striking visual elements, compelling copy points, and well-researched placements we know that we can leave your customer with a lasting impression of your company because we’ve done it time and time again for years.</p>
                    <button class="button" href="/contact/" alt="Contact Primm Advertising">Get In Touch</button>
                </div>
            </div>
        </div>
    </section>

    <div class="contentSection">
        <div class="contentSection--wrap contentSection--flexColumn">
            <h2 class="heading-primary"><span>A DIFFERENCE YOU CAN</span><br/>SEE AND FEEL</h2>
            <p>We know that online advertising can be a daunting endeavor with so many options available, but our digital marketing team is well-equipped to walk you through the process and craft a campaign that satisfies key performance areas for your business.</p>
        </div>
    </div>



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