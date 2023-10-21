<?php get_header(); ?>

<!-- Banner -->
<section class="page-title header-top" style="background: url(<?php echo get_theme_file_uri('images/hero-3-pic.jpg')?>) center center/cover no-repeat local;">
    <div class="page-title-container">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <h2>Contact us</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
    <div class="glass-effect2"></div>
</section>
<!-- Main -->
<section class="contact-section contact-pg-section section-padding-v2" >
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="contact-info">
                    <ul>
                        <li>
                            <i class="pe-7s-map-2"></i>
                            <h4>Office Address</h4>
                            <p>Suite 205 Marbella 1 Bldg. <br>2223 Roxas Blvd., <br>Pasay City 1300<br> Philippines</p>
                        </li>
                        <li>
                            <i class="pe-7s-call"></i>
                            <h4>Telephone Numbers</h4>
                            <p>+63 2 8832-9447<br>
                                +63 2 8832-9448
                            </p>
                            
                        </li>
                        <li>
                            <i class="pe-7s-phone"></i>
                            <h4>Mobile Number</h4>
                            <p>+63 917 822-8852</p>
                        </li>
                        <li>
                            <i class="pe-7s-mail"></i>
                            <h4>Email Address</h4>
                            <p>lubpi@crewclaims-lubpi.com</p>
                        </li>
                        <!-- <li>
                            <i class="pe-7s-portfolio"></i>
                            <h4>AOH Number</h4>
                            <p>Jaymie Cruz<br>
                                Claims Manager<br>
                                63.917.822-88-52</p>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-wrapper"  class="contact-section contact-pg-section section-padding">
    <div class="container">
        <div class="row contact-area">
            <div class="col-6 col-12-medium ps-0">
                <div class="map">
                    <h2 class="hidden">Contact map</h2>
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d1930.9559888327212!2d120.991455!3d14.547026!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m3!3m2!1d14.547219!2d120.991171!4m0!5e0!3m2!1sfil!2ssg!4v1680232906126!5m2!1sfil!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> 
                </div>  
            </div>
            <div class="col-6 col-12-medium ps-0">
                <div class="contact-form-col">
                    <h2>Get in touch</h2>
                    <div class="contact-form">
                        <?php 
                            while( have_posts() ){
                                the_post(); ?>

                            <?php the_content(); ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>