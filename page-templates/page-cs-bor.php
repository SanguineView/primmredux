<?php
    /**
    * Template Name: CS - BOR
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
            <div class="case-study-detail case-study-bor">
                <div class="case-study-details-body">
                    <div class="case-study-panel orange-border-bot">
                        <div class="wrap">
                            <h3 class="bold-span">
                                <span>THE</span> CHALLENGE
                            </h3>
                            <p>Recognizing the potential in a growing customer base for their high performance line-up, Beach Ford and Barton Ford came to us with the goal of creating an off-road vehicle outfitting sector of their business. We knew we needed to achieve a strong brand identity that would make a lasting first impression in a big way, and get the word out to the audiences that mattered most: potential and existing off-road enthusiasts.</p>
                            <div class="frow gutters">
                                <div class="col-md-2-3">
                                    <h3 class="bold-span">
                                        <span>THE</span> SOLUTION
                                    </h3>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                                        <defs>
                                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                                <path d="M0 150h150V0H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 200)">
                                                            <path d="M83.3 49.2c3-1.2 6-2.5 8.9-3.7-1.7-1.8-3.4-3.5-5.1-5.3-1.3.6-2.6 1.1-3.9 1.6 0 2.5 0 4.9.1 7.4m38.4-17H84.4l12.1 12.4c.2 0 .4.1.6.1h.2c.4.2.7.5.9 1 8 19.1 15.9 38.2 23.9 57.3 1.1 2.7 2.3 5.4 3.4 8.1.1.2.1.3.2.5 1.6 5.1-.5 10.8-5.7 12.9-5.2 2.1-11.3-.4-13.4-5.5-8-19.1-15.9-38.2-23.9-57.3-1.1-2.7-2.3-5.4-3.4-8.1-.3-.7-.1-1.4.4-2 0-1.5-.1-3.1-.1-4.6v-2.2c-.1-4.2-.1-8.4-.2-12.7H25.9c-2.6 0-2.6-5.1 0-5.1h95.9c2.6.1 2.6 5.2-.1 5.2" fill="#333"></path>
                                                            <path d="M106.6 109.5c.9 2.1 1.8 4.3 2.7 6.4 4-1.7 8.1-3.4 12.1-5-7.7-18.5-15.4-37.1-23.2-55.6-.9-2.1-1.8-4.3-2.7-6.4-4 1.7-8.1 3.4-12.1 5 7.7 18.6 15.5 37.1 23.2 55.6" fill="#faa433"></path>
                                                            <path d="M122.5 114.5c-3.9 1.6-7.7 3.2-11.6 4.8 3.7 4.9 12.1 1.4 11.6-4.8" fill="#2eaee4"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-2-3">
                                                    <h3 class="bold-span">
                                                        <span>GRAPHIC</span> DESIGN
                                                    </h3> </div>
                                            </div>
                                            <div class="frow row-center">
                                                <div class="col-sm-1-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                                        <defs>
                                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                                <path d="M0 150h150V0H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 200)">
                                                            <path d="M75 123.5c-20.2 0-36.6-16.4-36.6-36.5 0-15.5 9.7-28.8 23.3-34.1.9 4.6 4.9 8.1 9.7 8.1h7.1c4.8 0 8.8-3.5 9.7-8.1 13.6 5.3 23.3 18.6 23.3 34.1 0 20.1-16.3 36.5-36.5 36.5" fill="#faa433"></path>
                                                            <path d="M77.3 71.4c-.1 0-.1 0 0 0h-4.5c-2.4 0-4.6.9-6.2 2.6-1.7 1.7-2.6 3.9-2.6 6.3h4.4c0-1.2.5-2.3 1.3-3.2.9-.8 2-1.3 3.2-1.3h4.5c1.2 0 2.4.5 3.2 1.3.8.8 1.3 2 1.3 3.2 0 1.2-.5 2.3-1.3 3.2-.8.8-2 1.3-3.2 1.3h-4.5c-2.4 0-4.6.9-6.3 2.6-1.7 1.7-2.6 3.9-2.6 6.3s.9 4.6 2.6 6.3c1.7 1.7 3.9 2.6 6.3 2.6h4.5c2.4 0 4.6-.9 6.3-2.6 1.7-1.7 2.6-3.9 2.6-6.3h-4.4c0 1.2-.5 2.3-1.3 3.2-.8.8-2 1.3-3.2 1.3h-4.5c-1.2 0-2.3-.5-3.2-1.3-.8-.8-1.3-2-1.3-3.2 0-1.2.5-2.3 1.3-3.2.9-.9 2-1.3 3.2-1.3h4.5c2.4 0 4.6-.9 6.3-2.6 1.7-1.7 2.6-4 2.6-6.3s-.9-4.5-2.6-6.2c-1.9-1.8-4.1-2.7-6.4-2.7" fill="#fff"></path>
                                                            <path d="M72.8 105.7h4.4v-5.3h-4.4zM72.8 73.6h4.4v-5.3h-4.4z" fill="#fff"></path>
                                                            <path d="M71.4 58.8c-4.2 0-7.7-3.4-7.7-7.7v-26c0-4.2 3.4-7.7 7.7-7.7h7.1c4.2 0 7.7 3.4 7.7 7.7v26c0 4.2-3.4 7.7-7.7 7.7zm7.2-45.7h-7.1c-6.6 0-12 5.4-12 12v26c0 6.6 5.4 12 12 12h7.1c6.6 0 12-5.4 12-12v-26c0-6.7-5.4-12-12-12" fill="#333"></path>
                                                            <path d="M78 50.6c0-1.7-1.4-3.1-3.1-3.1-1.7 0-3 1.4-3 3.1 0 1.7 1.4 3.1 3 3.1 1.8 0 3.1-1.4 3.1-3.1" fill="#2eaee4"></path>
                                                            <path d="M51.1 45.4c-1.3.8-2.6 1.6-3.8 2.5l2.5 3.5c1.1-.8 2.3-1.6 3.5-2.2zM99 45.5l-2.2 3.8c1.2.7 2.4 1.4 3.5 2.2l2.5-3.5c-1.2-.9-2.5-1.8-3.8-2.5M43.7 50.7c-1.1 1-2.2 2.1-3.3 3.1l3.1 3c.9-1 2-1.9 3-2.8zM106.4 50.8l-2.9 3.3c1 .9 2 1.9 3 2.9l3.1-3c-1-1.2-2.1-2.2-3.2-3.2M37.4 57.3c-.9 1.2-1.8 2.4-2.6 3.7l3.6 2.4c.8-1.2 1.6-2.3 2.4-3.4zM112.6 57.4l-3.4 2.7c.9 1.1 1.6 2.2 2.4 3.4l3.7-2.3c-.8-1.4-1.7-2.7-2.7-3.8M32.5 64.9c-.7 1.3-1.3 2.7-1.9 4.1l4 1.6c.5-1.3 1.1-2.5 1.7-3.8zM117.6 65l-3.9 2c.6 1.2 1.2 2.5 1.7 3.8l4-1.6c-.5-1.4-1.1-2.9-1.8-4.2M29.1 73.4c-.4 1.4-.8 2.9-1.1 4.4l4.3.8c.3-1.3.6-2.7 1-4zM120.9 73.5l-4.2 1.2c.4 1.3.7 2.7 1 4l4.3-.8c-.3-1.5-.6-3-1.1-4.4M27.4 82.3c-.1 1.5-.2 3-.2 4.5h4.4c0-1.4.1-2.8.2-4.1zM122.7 82.4l-4.3.4c.1 1.4.2 2.8.2 4.1v.2h4.3v-.2c0-1.5-.1-3-.2-4.5M31.7 91l-4.3.4c.1 1.5.4 3 .6 4.5l4.3-.8c-.3-1.4-.5-2.8-.6-4.1M118.3 91.2c-.1 1.4-.3 2.7-.6 4.1l4.3.8c.3-1.5.5-3 .7-4.5zM33.2 99.1l-4.2 1.2c.4 1.5.9 2.9 1.5 4.3l4-1.6c-.5-1.3-.9-2.6-1.3-3.9M116.7 99.4c-.4 1.3-.9 2.6-1.4 3.9l4 1.6c.6-1.4 1.1-2.8 1.5-4.3zM36.3 106.8l-3.9 2c.7 1.3 1.5 2.7 2.3 4l3.7-2.3c-.8-1.3-1.5-2.5-2.1-3.7M113.6 107c-.6 1.2-1.3 2.4-2.1 3.6l3.6 2.4c.8-1.3 1.6-2.6 2.3-3.9zM40.7 113.8l-3.4 2.7c.9 1.2 1.9 2.4 3 3.5l3.1-3c-.9-1.1-1.8-2.2-2.7-3.2M109.1 114c-.9 1.1-1.8 2.1-2.7 3.1l3.1 3c1.1-1.1 2.1-2.3 3-3.4zM46.4 119.8l-2.8 3.2c1.1 1 2.3 1.9 3.6 2.8l2.5-3.5c-1.2-.8-2.2-1.7-3.3-2.5M103.4 119.9c-1 .9-2.1 1.8-3.3 2.5l2.5 3.5c1.2-.9 2.4-1.8 3.6-2.8zM53.1 124.6l-2.1 3.7c1.3.8 2.7 1.5 4 2.1l1.8-4c-1.2-.5-2.5-1.1-3.7-1.8M96.6 124.7c-1.2.7-2.4 1.3-3.7 1.9l1.8 4c1.4-.6 2.7-1.3 4.1-2.1zM60.7 128l-1.4 4.1c1.4.5 2.9.9 4.4 1.3l1-4.2c-1.4-.3-2.7-.7-4-1.2M89.1 128.1c-1.3.4-2.6.8-4 1.1l1 4.2c1.5-.4 2.9-.8 4.4-1.3zM68.7 130l-.7 4.3c1.5.2 3 .4 4.5.4l.2-4.3c-1.3-.1-2.7-.2-4-.4M81.1 130c-1.4.2-2.7.3-4.1.4l.2 4.3c1.5-.1 3-.2 4.5-.4z" fill="#333"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-2-3">
                                                    <h3 class="bold-span">
                                                        <span>DIGITAL</span> MARKETING
                                                    </h3> </div>
                                            </div>
                                            <div class="frow row-center">
                                                <div class="col-sm-1-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                                        <defs>
                                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                                <path d="M0 150h150V0H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <path d="M175.066 121.6h-1.333l-15.865-10V81.2l15.865-10h1.333z" fill="#2eaee4"></path>
                                                        <path d="M175.066 121.6h-1.198l-16-10V81.2l16-10h1.198zM172.4 66.267l-17.734 11.067h-10.4v4.933h8.534v28.267h-8.534v4.932h10.4l17.734 11.068h7.6V66.267z" fill="#333"></path>
                                                        <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 200)">
                                                            <path d="M30.2 103.2c-1.7 0-3.1-1.4-3.1-3.1V55.3c0-1.7 1.4-3.1 3.1-3.1h73.1c1.7 0 3.1 1.4 3.1 3.1v44.8c0 1.7-1.4 3.1-3.1 3.1zm73-54.8h-73c-3.8 0-6.9 3.1-6.9 6.8v44.9c0 3.8 3.1 6.8 6.9 6.8h73.1c3.8 0 6.9-3.1 6.9-6.8V55.3c-.1-3.8-3.2-6.9-7-6.9" fill="#333"></path>
                                                            <path d="M101.8 40.1H31.6v10.2h3.7v-6.4H98v6.4h3.8zM35.3 105.1h-3.7v4.6c0 3.5 1.4 6.8 3.8 9.2 2.4 2.4 5.8 3.8 9.2 3.8h22V119h-22c-2.5 0-4.8-1-6.6-2.7-1.8-1.8-2.7-4.1-2.7-6.6z" fill="#333"></path>
                                                            <path d="M70.8 123.2c-1.3 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3h12.5c1.3 0 2.3 1 2.3 2.3 0 1.3-1 2.3-2.3 2.3zm12.5-8.3H70.8c-3.3 0-6 2.7-6 6s2.7 6 6 6h12.5c3.3 0 6-2.7 6-6s-2.7-6-6-6M23.5 76.9l-8.5 17v6.4h10.2v-3.7h-6.5v-1.9l8.1-16.2z" fill="#333"></path>
                                                            <path d="M41.7 91.9c-1.2 0-2.1-.8-2.1-1.7V65.3c0-.9.9-1.7 2.1-1.7h49.9c1.2 0 2.1.8 2.1 1.7v24.9c0 1-.9 1.7-2.1 1.7z" fill="#faa433"></path>
                                                            <path d="M41.6 65.6h50.1v24.3H41.6zm50-4H41.7c-2.3 0-4.1 1.7-4.1 3.7v24.9c0 2.1 1.9 3.7 4.1 3.7h49.9c2.3 0 4.1-1.7 4.1-3.7V65.3c.1-2-1.8-3.7-4.1-3.7" fill="#333"></path>
                                                            <path d="M63.4 41.9L53.3 23.1M68.6 41.9l10.1-18.8" fill="none" stroke="#333" stroke-width="4" stroke-miterlimit="10"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-2-3">
                                                    <h3 class="bold-span">
                                                        <span>VIDEO</span> PRODUCTION
                                                    </h3> </div>
                                            </div>
                                            <div class="frow row-center">
                                                <div class="col-sm-1-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                                        <path d="M89.867 145.733L26.4 114V86l63.467-31.734z" fill="#faa433"></path>
                                                        <path d="M17.333 112.133h6V87.867h-6zm12.134 6.267h-18.4V81.6h18.4zM92.933 145.733h6V54.267h-6zM105.2 152H86.667V48h18.4v104z" fill="#333"></path>
                                                        <path d="M114 81.066l-4.4-4.4L138.267 48h11.6v6.266H140.8zM149.867 152h-11.6l-28.666-28.667 4.4-4.4 26.798 26.8h9.068zM111.867 96.933H150v6.267h-38.133z" fill="#252e3c"></path>
                                                        <path d="M156 132.4h32.933v32.933H156z" fill="#2eaee4"></path>
                                                        <path d="M163.867 139.733h17.066V146h-17.066zM163.867 151.6h17.066v6.267h-17.066z" fill="#fff"></path>
                                                        <path d="M156 34.667h32.933V67.6H156z" fill="#2eaee4"></path>
                                                        <path d="M163.867 42.133h17.066V48.4h-17.066zM163.867 54h17.066v6.267h-17.066z" fill="#fff"></path>
                                                        <path d="M156 83.467h32.933V116.4H156z" fill="#2eaee4"></path>
                                                        <path d="M163.867 90.933h17.066V97.2h-17.066zM163.867 102.8h17.066v6.267h-17.066z" fill="#fff"></path>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-2-3">
                                                    <h3 class="bold-span">
                                                        <span>MEDIA</span> PLANNING
                                                    </h3> </div>
                                            </div>
                                            <div class="frow row-center">
                                                <div class="col-sm-1-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                                        <defs>
                                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                                <path d="M0 150h150V0H0z"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 200)">
                                                            <path d="M75 93.1c9.996 0 18.1-8.104 18.1-18.1 0-9.996-8.104-18.1-18.1-18.1-9.997 0-18.1 8.104-18.1 18.1 0 9.996 8.103 18.1 18.1 18.1" fill="#faa433"></path>
                                                            <path d="M84 65H66v3.2c0 1.3.5 2.7 1.5 3.7s2.4 1.5 3.7 1.5h7.5c1.3 0 2.7-.5 3.7-1.5s1.5-2.4 1.5-3.7V65zM80.5 81c0-3-2.4-5.5-5.4-5.5-3 0-5.4 2.4-5.4 5.5 0 3 2.4 5.4 5.4 5.4 2.9 0 5.4-2.4 5.4-5.4" fill="#fff"></path>
                                                            <path d="M73.2 104h3.6v-8.6h-3.6zM75 121.4c-3.2 0-5.8-2.6-5.8-5.8 0-3.2 2.6-5.8 5.8-5.8 3.2 0 5.8 2.6 5.8 5.8-.1 3.2-2.6 5.8-5.8 5.8m0-15c-5.1 0-9.3 4.2-9.3 9.3 0 5.1 4.2 9.3 9.3 9.3 5.1 0 9.3-4.2 9.3-9.3 0-5.2-4.2-9.3-9.3-9.3M48.943 87.989l1.8 3.118 7.448-4.3-1.8-3.117zM39.8 101.1c-2.1 0-4-1.1-5-2.9-.8-1.3-1-2.9-.6-4.4.4-1.5 1.4-2.7 2.7-3.5.9-.5 1.9-.8 2.9-.8 2.1 0 4 1.1 5 2.9 1.6 2.8.6 6.3-2.1 7.8-.9.6-1.9.9-2.9.9m0-15.1c-1.6 0-3.2.4-4.6 1.2-2.2 1.2-3.7 3.2-4.3 5.7-.6 2.4-.3 4.9.9 7.1 1.7 2.9 4.8 4.7 8.1 4.7 1.6 0 3.2-.4 4.6-1.2 4.4-2.6 6-8.3 3.4-12.7-1.7-3-4.8-4.8-8.1-4.8M48.996 62.024l7.447 4.3 1.801-3.117-7.448-4.3zM39.8 60.4c-1 0-2-.3-2.9-.8-2.7-1.6-3.7-5.1-2.1-7.8 1-1.8 2.9-2.9 5-2.9 1 0 2 .3 2.9.8 2.7 1.6 3.7 5.1 2.1 7.8-1.1 1.8-3 2.9-5 2.9m0-15.1c-3.3 0-6.4 1.8-8.1 4.7-2.6 4.4-1 10.2 3.4 12.7 1.4.8 3 1.2 4.6 1.2 3.3 0 6.4-1.8 8.1-4.7 2.6-4.4 1-10.2-3.4-12.7-1.4-.7-3-1.2-4.6-1.2M73.2 54.6h3.6V46h-3.6zM75 40.1c-3.2 0-5.8-2.6-5.8-5.8 0-3.2 2.6-5.8 5.8-5.8 1.5 0 3 .6 4.1 1.7 1.1 1.1 1.7 2.5 1.7 4.1-.1 3.2-2.6 5.8-5.8 5.8M75 25c-5.1 0-9.3 4.2-9.3 9.3 0 5.1 4.2 9.3 9.3 9.3 5.1 0 9.3-4.2 9.3-9.3 0-2.5-1-4.8-2.7-6.6C79.8 26 77.5 25 75 25M91.807 63.207l1.8 3.118 7.448-4.3-1.8-3.118zM110.2 60.4c-2.1 0-4-1.1-5-2.9-1.6-2.8-.6-6.3 2.1-7.8.9-.5 1.9-.8 2.9-.8 2.1 0 4 1.1 5 2.9.8 1.3 1 2.9.6 4.4-.4 1.5-1.4 2.7-2.7 3.5-.9.4-1.9.7-2.9.7m0-15.1c-1.6 0-3.2.4-4.6 1.2-4.4 2.6-6 8.3-3.4 12.7 1.7 2.9 4.8 4.7 8.1 4.7 1.6 0 3.2-.4 4.6-1.2 2.2-1.2 3.7-3.2 4.3-5.7.6-2.4.3-4.9-.9-7.1-1.7-2.8-4.8-4.6-8.1-4.6" fill="#333"></path>
                                                            <path d="M91.767 86.798l7.447 4.3 1.8-3.117-7.447-4.301zM110.2 101.1c-1 0-2-.3-2.9-.8-2.7-1.6-3.7-5.1-2.1-7.8 1-1.8 2.9-2.9 5-2.9 1 0 2 .3 2.9.8 1.3.8 2.3 2 2.7 3.5.4 1.5.2 3-.6 4.4-1 1.7-2.9 2.8-5 2.8m0-15.1c-3.3 0-6.4 1.8-8.1 4.7-2.6 4.4-1 10.2 3.4 12.7 1.4.8 3 1.2 4.6 1.2 3.3 0 6.4-1.8 8.1-4.7 1.2-2.2 1.6-4.7.9-7.1-.6-2.4-2.2-4.4-4.3-5.7-1.3-.7-2.9-1.1-4.6-1.1" fill="#2eaee4"></path>
                                                            <path d="M33.7 65.2c-.8 3.2-1.1 6.5-1.1 9.8 0 3.3.4 6.6 1.1 9.8l3.5-.8c-.7-2.9-1-5.9-1-8.9s.4-6.1 1-8.9zM87.2 34.3l-1 3.4c5.7 1.7 11.1 4.8 15.5 8.9l2.4-2.6c-4.8-4.4-10.6-7.8-16.9-9.7M101.7 103.3c-4.4 4.1-9.7 7.2-15.5 9l1 3.4c6.3-1.9 12.1-5.3 16.9-9.8zM116.3 65.2l-3.5.8c.7 2.9 1 5.9 1 8.9s-.4 6.1-1 8.9l3.5.8c.8-3.2 1.1-6.5 1.1-9.8.1-3.1-.3-6.4-1.1-9.6M62.8 34.3c-6.3 1.9-12.1 5.3-16.9 9.8l2.4 2.6c4.4-4.1 9.7-7.2 15.5-8.9zM48.3 103.3l-2.4 2.6c4.8 4.5 10.6 7.9 16.9 9.8l1-3.4c-5.7-1.8-11.1-4.9-15.5-9" fill="#333"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col-sm-2-3">
                                                    <h3 class="bold-span">
                                                        <span>SOCIAL</span> MEDIA
                                                    </h3> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-panel gray3bg">
                        <div class="wrap">
                            <h3 class="bold-span">
                                <span>THE</span> RESULTS
                            </h3>
                            <p>Barton Off-Road has become a ubiquitous symbol of off-roading in the Hampton Roads area. Logos spotted in the wild serve as a badge of membership to enthusiasts while would-be customers are enticed to learn more through digital channels.</p>
                            <div class="slider-bor-results slick-container wrap-1160">
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-1.jpg"> </div>
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-2.jpg"> </div>
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-3.jpg"> </div>
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-4.jpg"> </div>
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-5.jpg"> </div>
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-7.jpg"> </div>
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-6.jpg"> </div>
                                <div> <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-results-4.jpg"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-panel-collapse" id="bor-secondar-panel">
                        <div class="head c3 collapseBtn p-40"> <a class="accordion button">See How We Did It 
                            <i class="fa fa-eye"></i>
                            </a> </div>
                        <div class="panel">
                            <div class="wrap p-10 mt-40 mb-30">
                                <h3 class="bold-span deliverables">
                                    <span>THE</span> DELIVERABLES.
                                </h3> </div>
                            <div class="wrap p-10 mb-30">
                                <div class="frow gutters row-start nowrap">
                                    <div class="col-1-12"> <span class="blue-dot">&nbsp;</span> </div>
                                    <div class="col-11-12">
                                        <h3 class="bold-span pl-10">
                                            <span>DESIGNED A</span> BRAND IDENTITY 
                                            <span>TO INTRODUCE BARTON OFF-ROAD TO THE HAMPTON ROADS COMMUNITIES AS AN OFF-ROAD OUTFITTING COMPANY THAT EMBRACES ADVENTURE.</span>
                                        </h3> </div>
                                </div>
                            </div>
                            <div class="wrap p-10 mb-30" "=" ">
                                <img class="lazy aligncenter " data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-1.jpg"> </div>
                            <div class="wrap left-border mobile-hide py-80 mb-30">&nbsp;</div>
                            <div class="wrap p-10 mb-30">
                                <div class="frow gutters row-start nowrap">
                                    <div class="col-1-12"> <span class="blue-dot">&nbsp;</span> </div>
                                    <div class="col-11-12">
                                        <h3 class="bold-span pl-10">
                                            <span>PROMOTIONAL MATERIALS</span> BRANDED WITH THE LOGO TO 
                                            <span>INCREASE BRAND RECOGNITION</span> AND 
                                            <span>DRIVE CONSUMERS TO BOR</span>.
                                        </h3> </div>
                                </div>
                            </div>
                            <div class="wrap p-10 mb-30"> <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-2.jpg"> </div>
                            <div class="wrap p-10 mb-30"> <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-3.jpg"> </div>
                            <div class="wrap left-border mobile-hide py-80 mb-30">&nbsp;</div>
                            <div class="wrap p-10 mb-30">
                                <div class="frow gutters row-start nowrap">
                                    <div class="col-1-12"> <span class="blue-dot">&nbsp;</span> </div>
                                    <div class="col-11-12">
                                        <h3 class="bold-span pl-10">
                                            <span>INDOOR SIGNAGE</span> BRANDED 
                                            <span>WITH THE LOGO TO</span> REINFORCE THE BRAND.
                                        </h3> </div>
                                </div>
                            </div>
                            <div class="wrap p-10 mb-30"> <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-4.jpg"> </div>
                            <div class="wrap p-10 mb-30"> <img class="lazy aligncenter" data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-deliv-5.jpg"> </div>
                            <div class="wrap left-border mobile-hide py-80 mb-30">&nbsp;</div>
                            <div class="wrap p-10 mb-30">
                                <div class="frow gutters row-start nowrap">
                                    <div class="col-1-12"> <span class="blue-dot">&nbsp;</span> </div>
                                    <div class="col-11-12">
                                        <h3 class="bold-span pl-10">
                                            <span>STRATEGICALLY PLACED</span> BRAND INTRODUCTORY VIDEO 
                                            <span>TO HELP</span> IMPROVE AWARENESS 
                                            <span>AND RESONATE WITH OFF-ROAD ENTHUSIASTS</span>.
                                        </h3> </div>
                                </div>
                            </div>
                            <div class="wrap-960 p-10 mb-30">
                                <div class="slider-bor-video slick-container">
                                    <div> <a data-lity-desc="Barton Off Road - Video Production" data-lity="" href="//vimeo.com/386817609?autoplay=1">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/bor-video-b-1.jpg">
                                        </a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-panel lets-talk">
                        <div class="wrap">
                            <h3 class="bold-span">
                                <span>ARE</span> YOU 
                                <span>LOOKING TO</span> BUILD YOUR BRAND 
                                <span>LIKE BARTON OFF-ROAD</span>
                            </h3> <a href="/contact/" class="button ghost-white center">Let's Talk</a> </div>
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
