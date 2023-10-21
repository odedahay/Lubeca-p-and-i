<?php get_header(); ?>
    <div id="main-wrapper" class="mt-5">        
        <div class="container">
            <div class="row">
                <div class="col-8 off-2 col-12-medium inner-header-top">
                    <div class="button-wrapper">
                        <a href="<?php echo site_url('/news'); ?>" class="back-home"><i class="fi ti-angle-left"></i> Back to home</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 off-2 col-12-medium">
                    
                    <div id="content">                
                        <!-- Content -->
                        <article>
                            <h2 class="single-heading"><?php the_title(); ?></h2>
                            <div class="single-date-inner"><?php the_time('d F Y'); ?></div>
                            
                            <?php if(has_post_thumbnail()){?>
                                <div class="banner-news-list-img">
                                    <?php  the_post_thumbnail('banner_news_detail'); ?>
                                </div>
                            <?php } ?>

                           <!-- <?php //} else { ?>
                                <div class="page-inner-banner" style="background: url(<?php //echo get_theme_file_uri('images/default-banner-detail.jpg');?>) center center/cover no-repeat local;"></div>
                            <?php //} ?> -->
                           

                            <?php the_content(); ?>
                        </article>                           
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
