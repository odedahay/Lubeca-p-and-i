
<?php  get_header();  ?>

        <section class="hero-area-s2 header-top" style="background: url(<?php echo get_theme_file_uri('/images/hero-1-pic.jpg'); ?>) center center/cover no-repeat local;">
            <div class="glass-effect"></div>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="content-area">
                            <div class="hero-content">
                                <h2 class="long-text">Your reliable partner in risk assessment and risk management in the Philippines</h2>
                                <a href="<?php echo site_url('/contact-us'); ?>" class="theme-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container-fluid -->
        </section>
    <!-- Service-->
        <section id="our-services">
            <div id="features-wrapper" class="feature-section section-padding">
                <div class="glass-effect"></div>
                <div class="container">
                    <div class="row">
                        <div class="col col-12-medium">
                            <div class="section-title-s2">
                                <span>Our services</span>
                            </div>
                            <div class="features-grid">
                                <div class="grid">
                                    <?php $our_services_one = new WP_Query(array(
                                            'page_id' => '15'
                                        ));
                                    ?>
                                    <?php  while( $our_services_one->have_posts() ){
                                            $our_services_one->the_post(); ?>
                                        <div class="inner-icon-w-title">
                                            <i class="pe-7s-id"></i>
                                            <h2><?php the_title(); ?></h2>
                                        </div>
                                        <?php the_content(); ?>
                                    <?php } ?>
                                </div>
                                <div class="grid">
                                    <?php $our_services_one = new WP_Query(array(
                                            'page_id' => '13'
                                        ));
                                    ?>
                                     <?php while( $our_services_one->have_posts() ){
                                            $our_services_one->the_post(); ?>
                                        <div class="inner-icon-w-title">
                                            <i class="pe-7s-ribbon"></i>
                                            <h2><?php the_title(); ?></h2>
                                        </div>
                                        <?php the_content(); ?>
                                    <?php } wp_reset_postdata(); ?>
                                </div>
                                <!-- <div class="grid">
                                    <div class="inner-icon-w-title">
                                        <i class="pe-7s-note2"></i>
                                    <h2>Consultancy Services</h2>
                                    </div>
                                    <p>Your reliable partner in risk assessment and risk management in the Philippines</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Features -->
        
    <!-- Main -->
        <section id="about-us">
            <div id="main-wrapper" class="main-wrapper">
                <div class="container">
                    <div class="row gtr-200">
                        <div class="col col-12-medium imp-medium">
                            <div class="section-title-s2 mb-4">
                                <span>About Us</span>
                            </div>
                            <!-- Content -->
                                <div id="content">
                                  
                                    <?php $query_about_us = new WP_Query(array(
                                        'page_id' => '9'
                                    )); 

                                    while( $query_about_us->have_posts()){
                                        $query_about_us->the_post(); ?>

                                        <section class="last">
                                            <?php the_content(); ?>
                                        </section>
                                        
                                   <?php } wp_reset_postdata(); ?>
                                   
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="partner-section">
            <div id="main-wrapper" class="main-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-6 off-3 col-12-medium">
                            <h3 class="partner-heading">OUR PARTNERS</h3>
                            <div class="partner-section">
                                    <div>
                                        <a href="https://agilecrew.com/" class="partner-section-logo" target="_blank">
                                            <img src="<?php echo get_theme_file_uri('/images/agile-logo.jpg'); ?>" class="partner-img" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://www.connectandcareph.com/" class="partner-section-logo" target="_blank">
                                            <img src="<?php echo get_theme_file_uri('/images/cc-logo.jpg'); ?>" class="partner-img" />
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php  get_footer(); ?>
