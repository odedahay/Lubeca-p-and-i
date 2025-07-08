
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
                                   
                                    <div class="entry-details">
                                        
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                        <div class="entry-meta">
                                            <div class="date"><?php the_time('d F Y'); ?></div>
                                            <div class="tags"><?php echo get_the_category_list(', '); ?></div>
                                        </div>
                                        <div class="entry-media">
                                        <?php 
                                        if( has_post_thumbnail() ) { ?>
                                            <div class="banner-news-list-img">
                                                <?php the_post_thumbnail('banner_news_list'); ?>
                                            </div>
                                            
                                        <?php } else { ?>
                                            <img src="<?php echo get_theme_file_uri('/images/default-banner-list.jpg'); ?>" alt="<?php the_title(); ?>" >
                                        <?php } ?>
                            
                                    </div>
                                       
                                        <p><?php echo wp_trim_words(get_the_content(), 24); ?></p>
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
                              <form class="search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
                                <div>
                                    <input id="search-field" type="search" name="s" placeholder="What are you looking for?">
                                    <button type="submit" id="submit-btn"><i class="ti-search"></i></button>
                                    <div class="error-message" style="display:none">Sorry you're looking for something?</div>
                                </div>
                            </form>
                            <script>
                               // Get the search form, the search field, and the error message
                                const searchForm = document.querySelector('.search-form');
                                const searchFieldRed = document.getElementById('search-field');
                                const searchField = searchForm.querySelector('input[type="search"]');
                                const errorMessage = searchForm.querySelector('.error-message');

                                // Add an event listener to the search form for submit events
                                searchForm.addEventListener('submit', (event) => {
                                // Prevent form submission if the search field is empty and show an error message
                                if (searchField.value.trim() === '') {
                                    event.preventDefault();
                                    errorMessage.style.display = 'block';
                                    searchFieldRed.style.border ='1px solid red'
                                } else {
                                    errorMessage.style.display = 'none';
                                    searchFieldRed.style.border ='none'
                                }
                                });
                            </script>
                          </div>
                          <div class="widget category-widget">
                             
                                <ul class="category-list">
                                    <?php
                                    $args = array(
                                        'orderby' => 'name',
                                        'show_count' => true,
                                        'hide_empty' => true,
                                        'title_li'   => __( '<h3>Categories</h3>' ),
                                    );
                                    $categories = wp_list_categories( $args );
                                    $categories = str_replace('</a> (', '</a><span class="count">(', $categories);
                                    $categories = str_replace(')', ')</span>', $categories);
                                    echo $categories;
                                    ?>
                                </ul>
                          
                            
                          </div>
                          <div class="widget recent-post-widget">
                              <h3>Recent post</h3>
                              <div class="posts">
                                <?php 
                                    $recentPostNews = new WP_Query(array(
                                        'posts_per_page' => 3
                                    ));

                                    while( $recentPostNews->have_posts() ){
                                        $recentPostNews->the_post(); ?>
                                        <div class="post">
                                            <div class="details">
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                                <span class="date"><?php the_time('d F Y'); ?></span>
                                            </div>
                                        </div>

                                <?php } wp_reset_postdata(); ?>
                                  
                                  <!-- <div class="post">
                                      <div class="img-holder">
                                          <img src="https://products.wp-ts.com/merito/html-live/assets/images/recent-posts/img-3.jpg" alt="">
                                      </div>
                                      <div class="details">
                                          <h4><a href="news-page.html">Philippine Retirement Authority, Dept. of Labor and Employment and Bureau of Immigration announcements
                                          </a></h4>
                                          <span class="date">March 25, 2023</span>
                                      </div>
                                  </div> -->
                              </div>
                          </div>
                          <!-- <div class="widget tag-widget">
                              <h3>Tags</h3>
                              <ul>
                                  <li><a href="#">Organization</a></li>
                                  <li><a href="#">Consulting</a></li>
                                  <li><a href="#">Ideal</a></li>
                                  <li><a href="#">Agents</a></li>
                                  <li><a href="#">Dater</a></li>
                              </ul>
                          </div> -->
                      </div>
                  </div>
              </div>
          </div> <!-- end container -->
  		</section>
       

<?php  get_footer(); ?>
