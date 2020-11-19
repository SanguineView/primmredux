<?php
    /**
    * Template Name: Contact
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>
    
    <section class="contentSection contentSection--greyAngle">
        <div class="contentSection--wrap1280">
            <div class="contentSection--contact">
                <div class="contentSection--flexColumn">
                    <div class="contentSection--contactDetails">
                    <p>You’ve seen us around a lot, isn’t it time we see you?<br/>Contact us today for all of your advertising solutions. Our team is ready to tackle your next big project.</p>
                    <p class="text--center"><i class="icon ion-compass"></i><a href="https://www.google.com/maps/place/The+Primm+Company/@36.8503817,-76.2932953,17z/data=!3m1!4b1!4m5!3m4!1s0x89ba980d9ec37ffb:0xeb8b25817bd7ff34!8m2!3d36.8503774!4d-76.2911066">112 College Place, Norfolk, VA 23510</a></p>
                    <p class="text--center"><i class="icon ion-ios-telephone"></i><a href="tel:17576236234">757.623.6234</a></p>
                    <p class="text--center"><i class="icon ion-ios-telephone-outline"></i><a href="tel:18002920299">1-800-292-0299</a></p>
                    <ul class="social text--center">
                        <li><a href="https://www.facebook.com/PrimmAdvertising/"><i class="icon ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/theprimmcompany"><i class="icon ion-social-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/primmadvertising/"><i class="icon ion-social-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/user/Primmco/feed"><i class="icon ion-social-youtube"></i></a></li>
                        <li><a href="http://www.linkedin.com/company/the-primm-company"><i class="icon ion-social-linkedin"></i></a></li>
                    </ul>
                    </div>
                </div>
                <div class="contentSection--flexColumn">
                    <div class="contentSection--contactForm form"><?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?></div>
                </div>
                <div class="contentSection--contactMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.6693179984272!2d-76.29329478438052!3d36.850394972571564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ba980d9ee86ff1%3A0x4417d53a8decb3e3!2s112+College+Pl%2C+Norfolk%2C+VA+23510!5e0!3m2!1sen!2sus!4v1539328255048" width="3200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>  
    </section>

    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();