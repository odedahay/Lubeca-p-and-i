<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> class="homepage">
    <main>
    <div id="page-wrapper">
    <!-- Header -->
        <div id="header-wrapper" class="fixed-top header-wrapper-style">
            <header id="header" class="container">

                <!-- Logo -->
                    <div id="logo" class="logo-image">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo get_theme_file_uri('/images/lubeca-logo.png'); ?>" alt="LUBECA">
                        </a>
                    </div>

                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="/#our-services">Our Services</a></li>
                            <li><a href="/#about-us">About Us</a></li>
                            <li><a <?php if( get_post_type() == 'post') echo 'class="active"'; ?> href="/#new-section">News & Publication</a></li>
                            <li><a <?php if( is_page('contact-us') or wp_get_post_parent_id(0) == 10) echo 'class="active"'; ?> href="<?php echo site_url('/contact-us'); ?>">Contact Us</a></li>
                        </ul>
                    </nav>

            </header>
        </div>