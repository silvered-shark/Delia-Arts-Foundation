<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KJG3TW3M');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delia Arts Foundation - Nonprofit changing lives through music in Palestine (Gaza and West Bank), Congo, North Africa, the Middle East, Brazil, and beyond.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/project-slider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/journey-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJG3TW3M"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php if (is_front_page()) : ?>
        <header>
            <div class="container">
                <div class="home-head">
                    <div class="home-head-header">
                        <div class="home-head-header-link">
                            <ul>
                                <li class="about">
                                    <a href="<?php echo esc_url(home_url('/about/')); ?>">about us</a>
                                </li>
                                <li class="journey">
                                    <a href="<?php echo esc_url(home_url('/journey/')); ?>">our journey</a>
                                </li>
                                <li class="project">
                                    <a href="<?php echo esc_url(home_url('/projects/')); ?>">our projects</a>
                                </li>
                                <li class="news">
                                    <a href="<?php echo esc_url(home_url('/news/')); ?>">news</a>
                                </li>
                                <li class="support">
                                    <a href="<?php echo esc_url(home_url('/support/')); ?>">support us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="home-head-mobile">
                    <div class="home-head-mobile-hamburger">
                        <div class="hamburger hamburger--emphatic">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="home-head-mobile-navbar">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">about us</a></li>
                            <li><a href="<?php echo esc_url(home_url('/journey/')); ?>">our journey</a></li>
                            <li><a href="<?php echo esc_url(home_url('/projects/')); ?>">our projects</a></li>
                            <li><a href="<?php echo esc_url(home_url('/news/')); ?>">news</a></li>
                            <li><a href="<?php echo esc_url(home_url('/support/')); ?>">support us</a></li>
                        </ul>
                    </div>
                    <div class="home-head-mobile-circle"></div>
                </div>
            </div>
        </header>
    <?php else : ?>
        <header>
            <div class="container">
                <div class="general-head">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="general-head-header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Delia-Logo.png" alt="logo" width="100%">
                    </a>
                    <div class="general-head-header">
                        <div class="general-head-header-link">
                            <ul>
                                <li class="home">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">home</a>
                                </li>
                                <li class="about">
                                    <a href="<?php echo esc_url(home_url('/about/')); ?>">about us</a>
                                </li>
                                <li class="journey">
                                    <a href="<?php echo esc_url(home_url('/journey/')); ?>">our journey</a>
                                </li>
                                <li class="project">
                                    <a href="<?php echo esc_url(home_url('/projects/')); ?>">our projects</a>
                                </li>
                                <li class="news">
                                    <a href="<?php echo esc_url(home_url('/news/')); ?>">news</a>
                                </li>
                                <li class="support">
                                    <a href="<?php echo esc_url(home_url('/support/')); ?>">support us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="general-head-mobile">
                    <div class="general-head-mobile-hamburger">
                        <div class="hamburger hamburger--emphatic">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="general-head-mobile-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Delia-Logo.png" alt="logo" width="100%">
                    </a>
                    <div class="general-head-mobile-navbar">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">about us</a></li>
                            <li><a href="<?php echo esc_url(home_url('/journey/')); ?>">our journey</a></li>
                            <li><a href="<?php echo esc_url(home_url('/projects/')); ?>">our projects</a></li>
                            <li><a href="<?php echo esc_url(home_url('/news/')); ?>">news</a></li>
                            <li><a href="<?php echo esc_url(home_url('/support/')); ?>">support us</a></li>
                        </ul>
                    </div>
                    <div class="general-head-mobile-circle"></div>
                </div>
            </div>
        </header>
    <?php endif; ?>