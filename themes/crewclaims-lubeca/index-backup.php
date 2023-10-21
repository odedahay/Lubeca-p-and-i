
<?php  get_header();  ?>

    <!-- Banner -->
    <section class="page-title header-top" style="background: url(<?php echo get_theme_file_uri('images/hero-2-pic.jpg')?>) center center/cover no-repeat local;">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-12">
                            <h2>News & Publication</h2>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
        <div class="glass-effect2"></div>
    </section>
    <!-- Main -->
    <section class="blog-pg-section section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-9 col-12-medium">
                      <div class="blog-content">
                        <?php 
                            while( have_posts() ){
                                the_post(); ?>

                          <div class="post format-standard-image">
                              <div class="entry-media">
                                <?php 
                                if( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } else { ?>
                                    <img src="<?php echo get_theme_file_uri('/images/default-banner-list.jpg'); ?>" alt="<?php the_title(); ?>" >
                                <?php } ?>
                    
                              </div>
                              <div class="entry-details">
                                  <div class="entry-meta">
                                      <div class="date"><?php the_time('d F Y'); ?></div>
                                      <div class="tags"><?php echo get_the_category_list(', '); ?></div>
                                  </div>
                                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                  <?php echo wp_trim_words(get_the_content(), 24); ?>
                                  <br><br>
                                  <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fi ti-angle-right"></i></a>
                              </div>
                          </div>
                        
                        <?php } ?>

                        <?php echo paginate_links(); ?>
                        


                          <!-- <div class="pagination-wrapper pagination-wrapper-left">
                              <ul class="pg-pagination">
                                  <li>
                                      <a href="#" aria-label="Previous">
                                          <i class="fi ti-angle-left"></i>
                                      </a>
                                  </li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li>
                                      <a href="#" aria-label="Next">
                                          <i class="fi ti-angle-right"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div> -->
                      </div>
                  </div>
                  <div class="col-3 col-12-medium">
                      <div class="blog-sidebar">
                          <div class="widget search-widget">
                              <h3>Search</h3>
                              <form>
                                  <div>
                                      <input type="text" placeholder="Search Post..">
                                      <button type="submit"><i class="ti-search"></i></button>
                                  </div>
                              </form>
                          </div>
                          <div class="widget category-widget">
                              <h3>Categories</h3>
                              <ul>
                                  <li><a href="#">News <span>(2)</span></a></li>
                                  <li><a href="#">Publication<span>(7)</span></a></li>
                              </ul>
                          </div>
                          <div class="widget recent-post-widget">
                              <h3>Recent post</h3>
                              <div class="posts">
                                  <div class="post">
                                      <!-- <div class="img-holder">
                                          <img src="https://products.wp-ts.com/merito/html-live/assets/images/recent-posts/img-1.jpg" alt="">
                                      </div> -->
                                      <div class="details">
                                          <h4><a href="news-page.html">Maritime / Relevant Supreme Court decisions </a></h4>
                                          <span class="date">March 25, 2023</span>
                                      </div>
                                  </div>
                                  <div class="post">
                                      <!-- <div class="img-holder">
                                          <img src="https://products.wp-ts.com/merito/html-live/assets/images/recent-posts/img-2.jpg" alt="">
                                      </div> -->
                                      <div class="details">
                                          <h4><a href="news-page.html">SEC Announcements</a></h4>
                                          <span class="date">March 25, 2023</span>
                                      </div>
                                  </div>
                                  <div class="post">
                                      <!-- <div class="img-holder">
                                          <img src="https://products.wp-ts.com/merito/html-live/assets/images/recent-posts/img-3.jpg" alt="">
                                      </div> -->
                                      <div class="details">
                                          <h4><a href="news-page.html">Philippine Retirement Authority, Dept. of Labor and Employment and Bureau of Immigration announcements
                                          </a></h4>
                                          <span class="date">March 25, 2023</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="widget tag-widget">
                              <h3>Tags</h3>
                              <ul>
                                  <li><a href="#">Organization</a></li>
                                  <li><a href="#">Consulting</a></li>
                                  <li><a href="#">Ideal</a></li>
                                  <li><a href="#">Agents</a></li>
                                  <li><a href="#">Dater</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div> <!-- end container -->
  		</section>

<?php  get_footer(); ?>
