<?php
/**
 
 * This file adds the front page to the theme.
  ***********************  
    SECTION - WELCOME
  *********************** 
 *
 */

add_action( 'wp_enqueue_scripts', 'tpc_home_scripts' );
 function tpc_home_scripts() {
   wp_enqueue_style( 'pa-fa-icons','//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array() );
   wp_enqueue_style( 'pa-slick-css','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array() );
   wp_enqueue_style( 'pa-slick-css-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', array() );
   wp_enqueue_script( 'pa-slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', [], '1.1.0', true );
   wp_enqueue_script( 'pa-lazy-load-script', 'https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js', [], '1.1.0', true );
   
 }



// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'our_loop' );

function our_loop() {
    ?>

    <?php // SECTION - WELCOME ?>

    <section class="emergency-message">
      <div class="wrap">
        <h3>Covid-19 Update - We’d Like to Lend a Helping Hand &nbsp;</h3>
        <a href="<?php echo get_site_url(); ?>/what-your-customers-need-to-hear-from-you/" class="button white">View Update</a>
      </div>
    </section>

    <?php // SECTION - VIDEO BANNER ?>

    <section class="front-page-video jarallax" data-speed="0" data-video-src="mp4:<?php echo get_stylesheet_directory_uri(); ?>/videos/home-welcome-2019.mp4,webm:<?php echo get_stylesheet_directory_uri(); ?>/videos/home-welcome-2019.webm">
      <div class="front-page-video__bg wrap whiteCopy">
          <h1 class="large">See How Primm Advertising Can Help You</h1>
          <!--<div class="container">
            <a class="pulse-button button fa fa-arrow-down fa-2x scroll" href="#howWeCanHelp"></a>
            </div> -->
      </div>
      <div class="blueOverlayGradient"></div>
    </section>

    <script type="text/javascript">

      jarallax(document.querySelectorAll('.jarallax'), {
          speed: 0.5,
          disableVideo: /iPad|iPhone|iPod|Android/,
          imgSrc: '<?php echo get_stylesheet_directory_uri(); ?>/images/home-head-bg.png'
      });

    </script>

    <?php // SECTION - MESSAGE ?>

    <section class="home-msg">
      <div class="wrap">
          <h3>WE’RE AN AWARD-WINNING AGENCY WITH OVER 45 YEARS OF DATA-DRIVEN MARKETING SOLUTIONS PROVEN TO GROW YOUR BUSINESS</h3>
      </div>
    </section>

    <?php // SECTION - SKILL CARDS ?>

    <section class="skill-card" id="howWeCanHelp">
      <div class="skill-card__card marketing" id="marketing-card">
        <header class="skill-card__header">
            <?php get_template_part( 'svg-digital' ); ?>
            <h3><span>Digital</span> Marketing</h3>
            <button class="fa fa-chevron-down fa-2x"></button>
        </header>
        <section class="skill-card__body">
            <p>Digital marketing provides your brand the means to increase visibility and impact. We work with you to create strategies and design experiences that help your business achieve its overall goal. As a Google Partner Agency, we make use of Google technologies and other relevant platforms to identify your target audience and deliver content to help your business rank higher in search engines when prospective customers are looking for services like yours.</p>
            <a href="/online-advertising/">Get Started <i class="icon ion-android-arrow-dropright-circle"></i></a>
        </section>
      </div>
      <div class="skill-card__card video" id="video-card">
        <header class="skill-card__header">
            <?php get_template_part( 'svg-video' ); ?>
            <h3><span>Video</span> Production</h3>
            <button class="fa fa-chevron-down fa-2x"></button>
        </header>
        <section class="skill-card__body">
            <p>Integrating video into your marketing helps engage your audience more than written content. We produce video content that can significantly increase your web traffic and click-through rates on your site. Many web users are looking for a more visual interaction with your brand, and video is the ideal solution to capture prospective customers’ attention. Video production can be used across platforms to enhance your users’ experience.</p>
            <a href="/video-production/">Get Started <i class="icon ion-android-arrow-dropright-circle"></i></a>
        </section>
      </div>
      <div class="skill-card__card brand" id="graphic-card">
        <header class="skill-card__header">
            <?php get_template_part( 'svg-graphic' ); ?>
            <h3><span>Graphic</span> Design</h3>
            <button class="fa fa-chevron-down fa-2x"></button>
        </header>
        <section class="skill-card__body">
            <p>Graphic Design is in everything we do. Your brand and culture provide the framework for the creative deliverables like your website, promotional materials, and print or digital ads. Once we have an understanding of your business, our design services are strategically implemented to ensure your brand is relatable and compelling to your preferred audience. Having both beautifully and functionally designed creative can help bring your brand to life.</p>
            <a href="/print/">Get Started <i class="icon ion-android-arrow-dropright-circle"></i></a>
        </section>
      </div>
      <div class="skill-card__card design" id="web-card">
        <header class="skill-card__header">
            <?php get_template_part( 'svg-web' ); ?>
            <h3><span>Web</span> Design</h3>
            <button class="fa fa-chevron-down fa-2x"></button>
        </header>
        <section class="skill-card__body">
            <p>Your website is your best salesman. It works around the clock and is often the first interaction potential customers will ever have with your business. We tailor your website design to your brand and business objectives marrying technology with design to create the ultimate user experience for visitors. Our in-house web developers use the latest in technology to ensure that your site is future-proofed for years to come.</p>
            <a href="/web-design/">Get Started <i class="icon ion-android-arrow-dropright-circle"></i></a>
        </section>
      </div>
      <div class="skill-card__card social" id="social-card">
        <header class="skill-card__header">
            <?php get_template_part( 'svg-social' ); ?>
            <h3><span>Social</span> Media</h3>
            <button class="fa fa-chevron-down fa-2x"></button>
        </header>
        <section class="skill-card__body">
            <p>Social media is a crucial part of your digital marketing. Properly managing your social media allows you to engage in conversation and build powerful relationships with your customer. We help you to deliver and manage your message across the web and connect you with real people primed for your services. We have social media marketing down to a science of data. We optimize for your goals and returns in engagement, awareness, and conversions.</p>
            <a href="/social-media/">Get Started <i class="icon ion-android-arrow-dropright-circle"></i></a>
        </section>
      </div>
      <div class="skill-card__card media" id="media-card">
        <header class="skill-card__header">
            <?php get_template_part( 'svg-media' ); ?>
            <h3><span>Media</span> Planning</h3>
            <button class="fa fa-chevron-down fa-2x"></button>
        </header>
        <section class="skill-card__body">
            <p>With media planning it is all about place and time. We take your goals and budget to determine when, where, and how often your message should be placed on platforms that are sure to reach your target audience. Our media buyers will strategize with you to deliver a brand message that will resonate with your potential customers. This will encourage purchasing from you over your competition.</p>
            <a href="/media-planning/">Get Started <i class="icon ion-android-arrow-dropright-circle"></i></a>
        </section>
      </div>
    </section>

    <?php // SECTION - MESSAGE ?>

    <section class="home-msg--grey">
      <div class="wrap">
          <h3>See How Primm Works</h3>
          <p>Everyday we look forward to helping businesses grow. Our clients believe in our ideas as much as we believe in their success. Check out some of our case studies below.</p>
      </div>
    </section>

    <?php // SECTION - CASE STUDIES ?>

    <section class="case-studies">
      <div class="case-study-grid thirds">
          <!-- actual grid of case-studys + details -->
          <div class="case-study case-study-atomic lazy" data-bg="url(<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-atomic.jpg)">
            <a class="case-study-button">
              <div class="case-study-content-overlay"></div>
              <div class="case-study-content-details">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-atomic.png">
                <p>We helped Atomic Plumbing & Drain Cleaning expand their business in the plumbing market using video production and timely media placements.</p>
                <p class="link">Read The Whole Story</p>
              </div>
            </a>
          </div>
          <div class="case-study-details case-study-atomic">
            <div class="case-study-details-body">
                <div class="case-study-panel orange-border-bot">
                  <div class="wrap">
                    <h3 class="bold-span"><span>THE</span> CHALLENGE</h3>
                    <p>Atomic Plumbing’s sales were down - they needed more, calls, customers and more profit to reach the goal of adding 6 trucks to their lineup of 4.  With a long history of solid business but no advertising strategy, Atomic needed fast and effective solutions to compete against two of the area’s top advertisers in the category.</p>
                    <div class="frow gutters">
                        <div class="col-md-2-3">
                          <h3 class="bold-span"><span>THE</span> SOLUTION</h3>
                          <p>After developing the messaging, voice and style of the Atomic Plumbing brand we began TV advertising with a relatively small budget. Almost immediately we started to gain traction growing revenue and the number of employees.</p>
                          <p>It wasn’t long before we increased the TV advertising budget in order to garner more frequency across the greater Hampton Roads area. We then began search engine marketing with Google & Bing to further solidify our brand awareness and generate leads as users actively searched for plumbing help online.</p>
                        </div>
                        <div class="col-md-1-3">
                          <div class="case-study-serv-table frow centered-column">
                              <div class="case-study-serv-table-head">
                                <p>SERVICES TO ACCOMPLISH THE GOAL</p>
                              </div>
                              <div class="case-study-serv-table-body">
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-videoStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>VIDEO</span> PRODUCTION</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-mediaStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>MEDIA</span> PLANNING</h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="case-study-panel gray3bg">
                  <div class="wrap">
                    <h3 class="bold-span"><span>THE</span> RESULTS</h3>
                    <p>Since Atomic Plumbing began working with Primm, they have seen their weekly calls increase 130%. Their top-line revenue is up 33%, and their total online conversions are up 225%. All of this has helped them to grow from 4 trucks to 14, allowing them to better serve their community. At Primm it isn’t about achieving empty impressions – it’s about creating real growth for your business.</p>
                    <div class="frow row-between gutters centered">
                        <div class="col-md-1-3">
                          <div class="frow column-center">
                              <div class="bg-orange case-study-info-box">
                                <h3>130%</h3>
                                <p>INCREASE IN CALL VOLUME</p>
                              </div>
                              <div class="bg-light-blue case-study-info-box">
                                <h3>+10</h3>
                                <p>WORK VEHICLES</p>
                              </div>
                              <div class="bg-blue case-study-info-box">
                                <h3>33%</h3>
                                <p>INCREASE IN REVENUE</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-2-3">
                          <div class="device device-imac-pro">
                            <div class="device-frame">
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/atomic-report.jpg">
                            </div>
                            <div class="device-stripe"></div>
                            <div class="device-header"></div>
                            <div class="device-sensors"></div>
                            <div class="device-btns"></div>
                            <div class="device-power"></div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="case-study-panel-collapse" id="atomic-panel">
                  <div class="head c3 collapseBtn p-40">
                          <a class="accordion button">See How We Did It <i class="fa fa-eye"></i></a>
                  </div>
                  <div class="panel">
                      <div class="wrap p-10 mt-40 mb-50">
                        <h3 class="bold-span deliverables"><span>THE</span> DELIVERABLES.</h3>
                      </div>
                      <div class="wrap-960 p-10 mb-30">
                        <div class="slider-atomic-video slick-container">
                            <div>
                              <a data-lity-desc="Atomic Plumbing Video Production" data-lity href="//vimeo.com/348196225?autoplay=1">
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/atomic-cs-vid-1.jpg">
                              </a>
                            </div>
                            <div>
                              <a data-lity-desc="Atomic Plumbing Video Production" data-lity href="//vimeo.com/348196782?autoplay=1">
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/atomic-cs-vid-2.jpg">
                              </a>
                            </div>
                            <div>
                              <a data-lity-desc="Atomic Plumbing Video Production" data-lity href="//vimeo.com/376909856?autoplay=1">
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/atomic-cs-vid-3.jpg">
                              </a>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="case-study-panel testimonial">
                  <h3 class="bold-span line-after txt-white"><span>Client </span> Testimonial</h3>
                  <div class="frow gutters txt-white centered">
                    <div class="col-md-3-5">
                        <p>“We have used Primm to do our TV marketing for more than 7 years and they have done a fantastic job. They just started doing our digital work and are doing just as good on that. They have consistently increased call count month after month. They are very easy to work with and they keep me up to date with everything that is going on. I highly recommend you give them a call.”</p>
                        <p>-Jim Steinle (Owner)</p>
                    </div>
                    <div class="col-md-2-5">
                      <img class="lazy" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/atomic-van-sm.jpg" class="aligncenter">
                    </div>
                  </div>
                </div>
                <div class="case-study-panel lets-talk">
                  <div class="wrap">
                    <h3 class="bold-span"><span>ARE</span> YOU <span>LOOKING TO</span> GROW YOUR BUSINESS <span>AND</span> EXPAND YOUR PRESENCE <span>LIKE ATOMIC PLUMBING?</span></h3>
                    <a href="/contact/" class="button ghost-white center">Let's Talk</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="case-study case-study-ches-fence lazy" data-bg="url(<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-cf.jpg)">
            <a class="case-study-button">
              <div class="case-study-content-overlay"></div>
              <div class="case-study-content-details">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-cf.png">
                <p>Chesapeake Fence came to us with one specific goal-to grow their business by expanding their digital presence within their market.</p>
                <p class="link">Read The Whole Story</p>
              </div>
            </a>
          </div>
          <div class="case-study-details case-study-ches-fence">
            <div class="case-study-details-body">
              <div class="case-study-panel orange-border-bot">
                  <div class="wrap">
                    <h3 class="bold-span"><span>THE</span> CHALLENGE</h3>
                    <p>When Chesapeake Fence first approached us in 2015, we helped them establish some tangible goals. The first was to increase their leads and exposure, the second to establish a new website that coincides with their new brand standards, new online objectives, and company offerings. Lastly, we made a goal to optimize their Google Ads search & display campaigns to target the Hampton Roads area.</p>
                    <div class="frow gutters">
                        <div class="col-md-2-3">
                          <h3 class="bold-span"><span>THE</span> SOLUTION</h3>
                          <p>After baselining their SEO visibility, website analytics, business model, local presence, and pay per click campaigns (PPC), we determined that an entire website revamp was necessary to achieve their objectives. Google Ad campaigns, and video campaigns were also necessary for increasing their visibility in the fencing and home improvement markets.</p>
                          <p>Prior to our revamp of the Chesapeake Fence website, they were relying heavily on a static homepage with very few links. This website was unable to render properly on desktop, mobile, and tablet devices. In addition to not being a “responsive” or “dynamic” website, there was hardly enough content available for Google to rank them so they could be found by users in their immediate geographic area.</p>
                        </div>
                        <div class="col-md-1-3">
                          <div class="case-study-serv-table frow centered-column">
                              <div class="case-study-serv-table-head">
                                <p>SERVICES TO ACCOMPLISH THE GOAL</p>
                              </div>
                              <div class="case-study-serv-table-body">
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg', 'webStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>WEB</span> DESIGN</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-digitalStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>DIGITAL</span> MARKETING</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-videoStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>VIDEO</span> PRODUCTION</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-mediaStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>MEDIA</span> PLANNING</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-socialStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>SOCIAL</span> MEDIA</h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="case-study-panel gray3bg">
                <div class="wrap">
                  <h3 class="bold-span"><span>THE</span> RESULTS</h3>
                  <p>Since the website overhaul, we have seen rapid and consistent growth in users, sessions, and pageviews. When comparing 2017 to 2016, mobile, tablet and desktop traffic increased as well. Once we restructured the Google Ad campaigns and removed low-performing keywords, we used our competitive intelligence tools to bid for low-competition keywords with high volume, added bid adjustments, created ad extensions and targeted more relevant audiences.</p>
                  <div class="frow row-between gutters centered" id="slide-compare">
                      <div class="col-md-1-3">
                        <div class="frow column-center">
                            <div class="bg-orange case-study-info-box">
                              <h3>256%</h3>
                              <p>INCREASE IN SITE USERS</p>
                            </div>
                            <div class="bg-light-blue case-study-info-box">
                              <h3>361%</h3>
                              <p>SESSIONS</p>
                            </div>
                            <div class="bg-blue case-study-info-box">
                              <h3>180%</h3>
                              <p>PAGEVIEWS</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-2-3">
                        <div class="device device-imac-pro">
                          <div class="device-frame">
                            <div id="compare-container-cf" class="twentytwenty-container">
                              <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/cf-before.jpg">
                              <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/cf-after.jpg">
                            </div>
                          </div>
                          <div class="device-stripe"></div>
                          <div class="device-header"></div>
                          <div class="device-sensors"></div>
                          <div class="device-btns"></div>
                          <div class="device-power"></div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="case-study-panel-collapse" id="cf-panel">
                <div class="head c3 collapseBtn p-40">
                      <a class="accordion button">See How We Did It <i class="fa fa-eye"></i></a>
                </div>
                <div class="panel">
                    <div class="wrap p-10 mt-40 mb-30">
                      <h3 class="bold-span deliverables"><span>THE</span> DELIVERABLES.</h3>
                    </div>
                    <div class="wrap p-10 mb-30">
                      <div class="frow gutters row-start nowrap">
                        <div class="col-1-12"><span class="blue-dot">&nbsp;</span></div>
                        <div class="col-11-12"><h3 class="bold-span pl-10"><span>RE-BUILT</span> RESPONSIVE  <span>WEBSITE TO HELP</span> INCREASE CONVERSIONS.</h3></div>
                      </div>
                    </div>
                    <div class="wrap p-10 mb-30 left-border">
                        <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/cf-responsive.jpg">
                    </div>
                    <div class="wrap p-10 mb-30">
                      <div class="frow gutters row-start nowrap">
                        <div class="col-1-12"><span class="blue-dot">&nbsp;</span></div>
                        <div class="col-11-12"><h3 class="bold-span pl-10">STRATEGICALLY PLACED <span>VIDEO</span> AND PLANNED <span>MEDIA BUYS</span> TO HELP IMPROVE <span>BRAND AWARENESS</span>.<h3></div>
                      </div>
                    </div>
                    <div class="wrap-960 p-10 mb-30">
                      <div class="slider-cf-video slick-container">
                          <div>
                              <a data-lity-desc="Chesapeake Fence - Video Production" data-lity href="//vimeo.com/348210131?autoplay=1">
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/02/ches-fence-vid-cover-1.jpg">
                              </a>
                          </div>
                          <div>
                              <a data-lity-desc="Chesapeake Fence - Video Production" data-lity href="//vimeo.com/348445153?autoplay=1">
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/02/ches-fence-vid-cover-2.jpg">
                              </a>
                          </div>
                      </div>
                    </div>
                    <div class="wrap left-border mobile-hide px-10 py-80 mb-30">&nbsp;</div>
                    <div class="wrap p-10 mb-30">
                      <div class="frow gutters row-start nowrap">
                        <div class="col-1-12"><span class="blue-dot">&nbsp;</span></div>
                        <div class="col-11-12">
                          <h3 class="bold-span pl-10"><span>PROPERLY MANAGED</span> SOCIAL MEDIA <span>TO</span> PROMOTE BRAND LOYALTY <span>AND</span> INCREASE CUSTOMER ENGAGEMENT.</h3>
                        </div>
                      </div>
                    </div>
                    <div class="wrap-750 p-10 mb-30">
                      <div class="slider-cf-social slick-container" style="max-width:750px;">
                          <div>
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/cf-social-demo-2.jpg">
                          </div>
                          <div>
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/cf-social-demo.jpg">
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="case-study-panel banner-image-txt banner-image-cf">
                <div class="wrap">
                  <p>CHESAPEAKE FENCE HAS BEEN ABLE TO HIRE MORE QUALIFIED STAFF, EXPAND ON THEIR TYPES OF FENCING JOBS, AND IMPROVE THE EXTERIOR OF THEIR BUSINESS WITH NEW SIGNAGE.</p>
                </div>
              </div>
              <div class="case-study-panel testimonial">
                <div class="wrap">
                <h3 class="bold-span line-after txt-white"><span>CLIENT</span> TESTIMONIAL</h3>
                  <p>“The Primm Advertising team is very knowledgeable, efficient and friendly. They designed our company website,  created our TV commercials, and handle all of our digital and social media advertising. Our company is so very happy to have Primm as our partner to help us continue to grow our business.”</p>
                  <p>-Sharon Shanker (Owner)</p>
                </div>
              </div>
              <div class="case-study-panel lets-talk">
                <div class="wrap">
                  <h3 class="bold-span"><span>ARE</span> YOU <span>LOOKING TO</span> INCREASE WEBSITE TRAFFIC <span>AND</span> GROW YOUR BUSINESS <span>LIKE CHESAPEAKE FENCE?</span></h3>
                  <a href="/contact/" class="button ghost-white center">Let's Talk</a>
                </div>
              </div>
            </div>
          </div>
          <div class="case-study case-study-bor lazy" data-bg="url(<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-bor.jpg)">
            <a class="case-study-button" id="bor-panel">
              <div class="case-study-content-overlay"></div>
              <div class="case-study-content-details">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/logo-bor.png">
                <p>In an integrated branding initiative, we positioned Barton Off-Road as the ultimate choice for outfitting off-road vehicles in the Hampton Roads area.</p>
                <p class="link">Read The Whole Story</p>
              </div>
            </a>
          </div>
          <div class="case-study-details case-study-bor">
            <div class="case-study-details-body">
              <div class="case-study-panel orange-border-bot">
                  <div class="wrap">
                    <h3 class="bold-span"><span>THE</span> CHALLENGE</h3>
                    <p>Recognizing the potential in a growing customer base for their high performance line-up, Beach Ford and Barton Ford came to us with the goal of creating an off-road vehicle outfitting sector of their business. We knew we needed to achieve a strong brand identity that would make a lasting first impression in a big way, and get the word out to the audiences that mattered most: potential and existing off-road enthusiasts.</p>
                    <div class="frow gutters">
                        <div class="col-md-2-3">
                          <h3 class="bold-span"><span>THE</span> SOLUTION</h3>
                          <p>After extensive research and planning, we rolled up our sleeves and got muddy. First, we designed a logo and brand image that speaks to an audience that lives and drives for adventure.</p>
                          <p>Next, we identified prominent placement opportunities that even included the trucks themselves. While “Barton Off-Road” introduced customers to a concise definition of the brand, the acronym “BOR” quickly came to evoke the spirit of being in the wild, unafraid to dig-in and get dirty.</p>
                          <p>Tapping into the enthusiasm of the off-roading community, we circulated promotional materials such as emblems, shirts, hats, bumper stickers, and windshield vinyls to give customers the opportunity to wear their BOR gear loud and proud. </p>
                          <p>A BOR landing page was built into the existing Ford websites and a digital marketing initiative was also integrated.</p>
                          <p>We launched an immersive Facebook experience that put viewers in the driver seat of a BOR vehicle with an interactive 360° view of an environment of their choosing.</p>
                        </div>
                        <div class="col-md-1-3">
                          <div class="case-study-serv-table frow centered-column">
                              <div class="case-study-serv-table-head">
                                <p>SERVICES TO ACCOMPLISH THE GOAL</p>
                              </div>
                              <div class="case-study-serv-table-body">

                              <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg', 'graphicStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>GRAPHIC</span> DESIGN</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-digitalStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>DIGITAL</span> MARKETING</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-videoStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>VIDEO</span> PRODUCTION</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-mediaStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>MEDIA</span> PLANNING</h3>
                                      </div>
                                  </div>
                                  <div class="frow row-center">
                                      <div class="col-sm-1-3">
                                          <?php get_template_part( 'svg-socialStatic' ); ?>
                                      </div>
                                      <div class="col-sm-2-3">
                                          <h3 class="bold-span"><span>SOCIAL</span> MEDIA</h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="case-study-panel gray3bg">
                <div class="wrap">
                  <h3 class="bold-span"><span>THE</span> RESULTS</h3>
                  <p>Barton Off-Road has become a ubiquitous symbol of off-roading in the Hampton Roads area. Logos spotted in the wild serve as a badge of membership to enthusiasts while would-be customers are enticed to learn more through digital channels.</p>
                  <div class="slider-bor-results slick-container wrap-1160">
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-1.jpg">
                    </div>
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-2.jpg">
                    </div>
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-3.jpg">
                    </div>
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-4.jpg">
                    </div>
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-5.jpg">
                    </div>
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-7.jpg">
                    </div>
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-6.jpg">
                    </div>
                    <div>
                      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-4.jpg">
                    </div>
                  </div>
                </div>
              </div>
              <div class="case-study-panel-collapse" id="bor-secondar-panel">
                <div class="head c3 collapseBtn p-40">
                      <a class="accordion button">See How We Did It <i class="fa fa-eye"></i></a>
                </div>
                <div class="panel">
                    <div class="wrap p-10 mt-40 mb-30">
                      <h3 class="bold-span deliverables"><span>THE</span> DELIVERABLES.</h3>
                    </div>
                    <div class="wrap p-10 mb-30">
                      <div class="frow gutters row-start nowrap">
                        <div class="col-1-12"><span class="blue-dot">&nbsp;</span></div>
                        <div class="col-11-12">
                          <h3 class="bold-span pl-10"><span>DESIGNED A</span> BRAND IDENTITY <span>TO INTRODUCE BARTON OFF-ROAD TO THE HAMPTON ROADS COMMUNITIES AS AN OFF-ROAD OUTFITTING COMPANY THAT EMBRACES ADVENTURE.</span></h3>
                        </div>
                      </div>
                    </div>
                    <div class="wrap p-10 mb-30"">
                      <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-1.jpg">
                    </div>
                    <div class="wrap left-border mobile-hide py-80 mb-30">&nbsp;</div>
                    <div class="wrap p-10 mb-30">
                      <div class="frow gutters row-start nowrap">
                        <div class="col-1-12"><span class="blue-dot">&nbsp;</span></div>
                        <div class="col-11-12">
                            <h3 class="bold-span pl-10"><span>PROMOTIONAL MATERIALS</span> BRANDED WITH THE LOGO TO <span>INCREASE BRAND RECOGNITION</span> AND <span>DRIVE CONSUMERS TO BOR</span>.</h3>
                        </div>
                      </div>
                    </div>
                    <div class="wrap p-10 mb-30">
                      <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-2.jpg">
                    </div>
                    <div class="wrap p-10 mb-30">
                      <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-3.jpg">
                    </div>
                    <div class="wrap left-border mobile-hide py-80 mb-30">&nbsp;</div>
                    <div class="wrap p-10 mb-30">
                      <div class="frow gutters row-start nowrap">
                        <div class="col-1-12">
                          <span class="blue-dot">&nbsp;</span>
                        </div>
                        <div class="col-11-12">
                          <h3 class="bold-span pl-10"><span>INDOOR SIGNAGE</span> BRANDED <span>WITH THE LOGO TO</span> REINFORCE THE BRAND.</h3>
                        </div>
                      </div>
                    </div>
                    <div class="wrap p-10 mb-30">
                      <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-4.jpg">
                    </div>
                    <div class="wrap p-10 mb-30">
                      <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-5.jpg">
                    </div>
                    <div class="wrap left-border mobile-hide py-80 mb-30">&nbsp;</div>
                    <div class="wrap p-10 mb-30">
                      <div class="frow gutters row-start nowrap">
                        <div class="col-1-12"><span class="blue-dot">&nbsp;</span></div>
                        <div class="col-11-12">
                          <h3 class="bold-span pl-10"><span>STRATEGICALLY PLACED</span> BRAND INTRODUCTORY VIDEO <span>TO HELP</span> IMPROVE AWARENESS <span>AND RESONATE WITH OFF-ROAD ENTHUSIASTS</span>.</h3>
                        </div>
                      </div>
                    </div>
                    <div class="wrap-960 p-10 mb-30">
                      <div class="slider-bor-video slick-container">
                          <div>
                            <a data-lity-desc="Barton Off Road - Video Production" data-lity href="//vimeo.com/386817609?autoplay=1">
                              <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-video-b-1.jpg">
                            </a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="case-study-panel lets-talk">
                <div class="wrap">
                  <h3 class="bold-span"><span>ARE</span> YOU <span>LOOKING TO</span> BUILD YOUR BRAND <span>LIKE BARTON OFF-ROAD</span></h3>
                  <a href="/contact/" class="button ghost-white center">Let's Talk</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <?php // SECTION - LOGO DISPLAY ?>

    <section class="logo-display">
      <div class="wrap">
          <h3>SOME OF OUR SUCCESSFUL CLIENTS</h3>
          <div class="logo-display__container">
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-barton.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-pariser.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/Eggleston.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/Hart-Electric.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/UAT.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/Decker.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-abnb.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-smoc.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-carolina.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-ski.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-cf.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-bay.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-cupron.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-beach.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-atomic.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-crofton.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-host.png">
            </div>
            <div class="logo-display__item">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/07/Propeller-Club-Norfolk.png">
            </div>
          </div>
      </div>
    </section>

    <?php //SECTION - SCHEDULE APPT ?>

    <section class="home-msg--lightGrey" id="appointment">
      <div class="wrap">
          <h3 class="text-uppercase">Schedule <span>A Time To</span> Talk <span>About Your</span> Marketing</h3>
          <?php // echo do_shortcode('ameliabooking category=6'); ?>
      </div>
    </section>

    <?php // SECTION - ?>

    <section class="partners">
      <div class="wrap">
          <div class="partners__container">
            <div class="partners__item">
                <img class="lazy" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/08/COVABIZ-BOB-AWARD-LOGO-003.jpg">
            </div>
            <div class="partners__item">
              <a href="https://www.expertise.com/va/norfolk/advertising-agencies" style="display:inline-block; border:0;"><img style="width:200px; display:block;" src="//cdn.expertise.com/awards/va_norfolk_advertising-agencies_2020_transparent.svg" alt="Best Advertising Agencies in Norfolk" /></a>
            </div>
            <div class="partners__item">
                <img class="lazy" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/google-partner.png">
            </div>
            <div class="partners__item">
                <img class="lazy" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/liquid-web.png">
            </div>
            <div class="partners__item">
                <img class="lazy" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/agency-spotter.png">
            </div>
            <div class="partners__item">
                <img class="lazy" data-src="https://www.alignable.com/assets/badge/alignable-r3.png">
            </div>
          </div>
      </div>
    </section>
        

    <script type="text/javascript">


  $(window).ready(function(){

    var lazyLoadInstance = new LazyLoad({
      elements_selector: ".lazy"
    });

    var acc = document.getElementsByClassName("head");
    var panel = document.getElementsByClassName('panel');

    for (var i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
          
          this.classList.toggle("active");

          this.nextElementSibling.classList.toggle("show");
        }
    } 

    var borPanel = document.getElementById('bor-panel');

    borPanel.onclick = function() {
      $(window).trigger('resize');
      $('.slider-bor-results').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        arrows: true,
        dots: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          }
        ]
      });
      $('.slider-bor-results').resize();
      return;
    }

    var borSecondaryPanel = document.getElementById('bor-secondar-panel');

    borSecondaryPanel.onclick = function() {
      $(window).trigger('resize');
      $('.slider-bor-video').slick({
            lazyLoad: 'ondemand',
            respondTo: 'window',
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            fade: true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false
                }
              }
            ]
          });
      $('.slider-bor-video').resize();
      return;
    }


    $('#compare-container-cf').twentytwenty({ default_offset_pct: 0.5 });

    $(window).scroll(function() {
      var top_of_element = $("#compare-container-cf").offset().top;
      var bottom_of_element = $("#compare-container-cf").offset().top + $("#compare-container-cf").outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();

      if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        $(window).trigger('resize');
      }
    });

    var cfPanel = document.getElementById('cf-panel');

    cfPanel.onclick = function() {
      $(window).trigger('resize');
      $('.slider-cf-video').slick({
            lazyLoad: 'ondemand',
            respondTo: 'window',
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            fade: true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false
                }
              }
            ]
      });
      $('.slider-cf-social').slick({
        lazyLoad: 'ondemand',
        respondTo: 'window',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        dots: true,
        fade: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false
            }
          }
        ]
      });
      $('.slider-cf-video').resize();
      $('.slider-cf-social').resize();
      return;
    }

    var atomicPanel = document.getElementById('atomic-panel');

    atomicPanel.onclick = function() {
      $(window).trigger('resize');
      $('.slider-atomic-video').slick({
            lazyLoad: 'ondemand',
            respondTo: 'window',
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            fade: true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false
                }
              }
            ]
          });
      $('.slider-bor-video').resize();
      return;
    }

  });

</script>


    <?php
}

add_filter( 'body_class', 'genesis_sample_landing_body_class' );
/**
 * Adds landing page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function genesis_sample_landing_body_class( $classes ) {

	$classes[] = 'home-page';
	return $classes;

}

// Removes Skip Links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );

add_action( 'wp_enqueue_scripts', 'genesis_sample_dequeue_skip_links' );
/**
 * Dequeues Skip Links Script.
 *
 * @since 1.0.0
 */
function genesis_sample_dequeue_skip_links() {

    wp_dequeue_script( 'skip-links' );
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );



// Runs the Genesis loop.
genesis();
