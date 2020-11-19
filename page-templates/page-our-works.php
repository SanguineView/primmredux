<?php
    /**
    * Template Name: Our Work 2020
    * Description: Template for a about page
    */

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Display our loop
add_action( 'genesis_loop', 'prm_content_loop' );

function prm_content_loop() {

    ?>



    <section class="contentSection work-display">

        <div class="work-display-filter">
            <a data-filter="all">Show all</a>
            <a data-toggle=".aa">Category A</a>
            <a data-toggle=".bb">Category B</a>
            <a data-toggle=".cc">Category C</a>
        </div>
        
        <div id="ow__container" class="ow__container">
            <div class="ow__block mix aa">
            <a href="<?php echo get_site_url(); ?>/atomic-case-study/" class="ow_link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-atomic.jpg" alt="" class="ow_image ow__coverImg">
            <div class="ow__overlay"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-atomic.png">
                <p class="link">Category A</p></div></a>
            </div>
            <div class="ow__block mix aa">
            <a href="<?php echo get_site_url(); ?>/chesapeake-fence-case-study/" class="ow_link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-cf.jpg" alt="" class="ow_image ow__coverImg">
            <div class="ow__overlay dark-blue"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-cf.png">
                <p class="link">Category A</p></div></a>
            </div>
            <div class="ow__block mix bb">
            <a href="<?php echo get_site_url(); ?>/barton-off-road-case-study/" class="ow_link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-bor.jpg" alt="" class="ow_image ow__coverImg">
            <div class="ow__overlay orange"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/logo-bor.png">
                <p class="link">Category B</p></div></a>
            </div>
            <div class="ow__block mix cc">
            <a href="<?php echo get_site_url(); ?>/barton-off-road-case-study/" class="ow_link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-bor.jpg" alt="" class="ow_image ow__coverImg">
            <div class="ow__overlay orange"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/logo-bor.png">
                <p class="link">Category C</p></div></a>
            </div>
            <div class="ow__block mix bb">
            <a href="<?php echo get_site_url(); ?>/barton-off-road-case-study/" class="ow_link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-bor.jpg" alt="" class="ow_image ow__coverImg">
            <div class="ow__overlay orange"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/01/logo-bor.png">
                <p class="link">Category B</p></div></a>
            </div>
            <div class="ow__block mix cc">
            <a href="<?php echo get_site_url(); ?>/atomic-case-study/" class="ow_link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tpc/images/cs-bg-atomic.jpg" alt="" class="ow_image ow__coverImg">
            <div class="ow__overlay"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/logo-atomic.png">
                <p class="link">Category A</p></div></a>
            </div>
        </div>

    </section>


 
    <script type="text/javascript">
      $(function () {

          $(' #ow__container > div ').each( function() { $(this).hoverdir();})

          var containerEl = document.querySelector('.ow__container');

          var mixer = mixitup(containerEl);

      });
    </script>
    <?php
 
}

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

genesis();