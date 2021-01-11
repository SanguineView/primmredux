<?php
    /**
    * Template Name: Video
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>

    <section class="contentSection contentSection--videoFeel">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/video-4.png" class="aligncenter">
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary text--white">Video Production<br/><span>With A National Feel</span></h2>
                    <p class="text--white">We can give your video stunning visuals with a national feel thanks to years of patience, practice, and local know-how. Thanks to our state-of-the-art equipment, we are prepared for any situation and have the capability to give your video a national-quality production level with hometown flavor and spirit. Your customers will not only see your video campaign, they will remember it and mention it for years to come.</p>
                    <button class="button" href="/contact/" alt="Contact Primm Advertising">Get In Touch</button>
                </div>
            </div>
        </div>
    </section>



    <section class="contentSection contentSection--digitalSearch">
        <div class="contentSection--wrap">
            <div class="half__container half__container--vStart">
                <div class="half__container--left">
                    <h2 class="heading-primary">From The TV<br/><span>To The Smartphone</span></h2>
                    <p>It’s safe to say that video advertising has changed dramatically in the last 10 years. New platforms have come and gone such as Vine and Vessel, and others have shown to have real staying power like YouTube, Facebook, and Instagram.</p>
                    <p>YouTube averages six billion hits every day, making it the second largest search engine as well as an essential marketing tool online. It takes a keen eye to shoot video that is compelling AND deliver it to the right audience. One thing is undeniable, now is the time for your business to get set, and take action in online video.</p>
                    <p>Our 40 years of experience in TV and radio and our talented digital team allow us to combine efforts and provide outstanding cross-channel advertising in a way few others in our industry can. In addition to traditional radio and TV platforms, we utilize digital delivery methods like Pandora, Spotify, YouTube, and Facebook advertising to ensure your message remains consistent wherever your audience finds you.</p>
                </div>
                <div class="half__container--right">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/broadcast-2.png" class="algincenter">
                </div>
            </div>
        </div>
    </section>


    <div class="jarallax video" data-speed="0" data-video-src="mp4:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/demo-beach-ford-video.mp4,webm:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/demo-beach-ford-video.webm">
    </div>

    <section class="contentSection">
        <div class="contentSection--wrap">
            <div class="half__container">
                <div class="half__container--left">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/09/calendar.png" class="algincenter">
                </div>
                <div class="half__container--right">
                    <h2 class="heading-primary"><span>Planning & Prep</span><br/>Makes The Production</h2>
                    <p>This isn’t our first time doing this. With over 40 years experience in video production, we know what is needed to follow through from concept to commercial. We will work with you to develop a quality script and message that is targeted to your desired market. After that, we’ll use our local contacts to secure a location, makeup artists, local talent, and everything else that makes up the action behind-the-scenes.</p>
                    <p>When it is finally time to shoot your video, you can be confident that we have prepared everything you can think of and made the day of production as simple and smooth as possible.</p>
                </div>
            </div>
        </div>
    </section>
    
    <div class="jarallax video" data-speed="0" data-video-src="mp4:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/primm-vid-bg-ex-1.mp4,webm:<?php echo get_home_url(); ?>/wp-content/themes/tpc/videos/primm-vid-bg-ex-1.webm">
    </div>

    <section class="contentSection">
        <div class="contentSection--wrap contentSection--flexColumn">
            <h2 class="heading-primary"><span>A Title-Screen To</span><br/>End Credits Process</h2>
            <p class="text--center">We know that online advertising can be a daunting endeavor with so many options available, but our digital marketing team is well-equipped to walk you through the process and craft a campaign that satisfies key performance areas for your business.</p>
            <a class="button center" href="https://theprimmcompany.com/our-work/">View More Work Examples</a>
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