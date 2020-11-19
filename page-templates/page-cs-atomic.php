<?php
    /**
    * Template Name: CS - Atomic Plumbing
    * Description: Template for a about page
    */
    add_action( 'wp_enqueue_scripts', 'tpc_home_scripts' );
    function tpc_home_scripts() {
      wp_enqueue_style( 'pa-fa-icons','//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array());
      wp_enqueue_style( 'pa-slick-css','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array());
      wp_enqueue_style( 'pa-slick-css-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array());
      wp_enqueue_script( 'pa-slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', [] );
      wp_enqueue_script( 'pa-lazy-load-script', 'https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js', [] );
      
    }
// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>
    
    

<div class="entry-content">
    <section class="cast-study-indiv">
        <div class="case-study-detail case-study-atomic">
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
    </section>
</div>

 
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

//* Remove the post info function
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

//* Remove the post meta function
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
add_filter( 'genesis_markup_content', '__return_null' );


genesis();
