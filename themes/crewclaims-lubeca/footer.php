
    <!-- Footer -->
    <div id="footer-wrapper" class="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="col-6 col-6-medium col-12-small">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Recent News & Publication </h3>
                            <ul class="news-list">
                                <?php 
                                    $recentPostNews = new WP_Query(array(
                                        'posts_per_page' => 3
                                    ));
                                    while( $recentPostNews->have_posts() ){
                                        $recentPostNews->the_post(); ?>
                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php } wp_reset_postdata();
                                ?>
                            </ul>
                        </section>

                    </div>
                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Quick Links</h3>
                            <ul class="style2">
                                <li><a href="<?php echo site_url('/#our-services'); ?>">Our Services</a></li>
                                <li><a href="<?php echo site_url('/#about-us'); ?>">About Us</a></li>
                                <li><a href="<?php echo site_url('/news'); ?>">News & Publication</a></li>
                                <li><a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a></li>
                                <!-- <li><a href="#">Privacy</a></li> -->
                            </ul>
                        </section>
                    </div>
                
                    <div class="col-3 col-6-medium col-12-small">
                        <!-- Contact -->
                            <section class="widget contact last">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li><a href="https://www.facebook.com/lubpicrewclaims" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                    <!-- <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li> -->
                                </ul>
                                <p>Suite 205 Marbella 1 Bldg. 2223 Roxas Blvd., Pasay City 1300 Philippines</p>
                            </section>

                    </div>
                    <div class="col-12">
                        <div id="copyright">
                            <ul class="menu">
                                <li>&copy; <span id="footerYear"></span> Lubeca Protection & Indemnity (Lubeca P & I). All rights reserved</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</main>
    <script>
        document.getElementById("footerYear").innerHTML = new Date().getFullYear();
    </script>
    <?php wp_footer(); ?>
</body>
</html>