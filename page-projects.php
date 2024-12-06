<?php get_header();?> 
<div class="project-page">
    <div class="container">
        <section class="project-description">
            <h3 class="project-description-title">THESE <br> ARE OUR PROJECTS</h3>
            <p class="project-description-subtitle">Scroll and check them all out.</p>
            <p class="project-description-subscribe">Stay up to date with our latest <br> projects by subscribing to our <br> newsletter.</p>
            <!-- <input class="project-description-input" type="text">
            <br>
            <a class="project-description-btn" href="">SUBSCRIBE ME!</a>             -->
            <div class="project-description-form">
                <?php echo do_shortcode('[mc4wp_form id=432]'); ?>
            </div>
        </section>
        <section id="fullscreen-carousel" class="splide" aria-label="Beautiful Images">                   
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'Projects-blogs',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'paged' => $paged
                        );
                        $news = new WP_Query($args);

                        if ($news->have_posts()) :
                            while ($news->have_posts()) :
                                $news->the_post();
                    ?>
                        <li class="splide__slide">                                
                            <a class="slider" href="<?php the_permalink();?>">
                                <div class="slider-image">
                                    <?php if ( has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="slider-description">
                                    <h6><?php the_title();?></h6>                                        
                                    <?php the_content(); ?>
                                </div>
                            </a>
                        </li>
                    <?php
                        endwhile;
                        else :
                        echo '<p></p>';
                        wp_reset_postdata();
                        endif;
                    ?>
                </ul>
            </div>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev">
                    <div class="slider-image-btn-prev">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/journey-left-arrow.png" alt="slider-prev-button">
                    </div>
                </button>
                <!-- <div id="splide-title"> -->
                <p class="see-more-text">see more</p>
                <!-- </div> -->
                <button class="splide__arrow splide__arrow--next">
                    <div class="slider-image-btn-prev">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/journey-right-arrow.png" alt="slider-next-button">
                    </div>
                </button>
            </div>         
        </section>
    </div>
</div>
<div class="project-page-mobile">
    <div class="container">    
        <h3 class="project-page-mobile-title">THESE <br> ARE OUR PROJECTS</h3>
        <p class="project-page-mobile-subtitle">Scroll and check them all out.</p>
        <ul class="project-page-mobile-carousel">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'Projects-blogs',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'paged' => $paged
                );
                $news = new WP_Query($args);

                if ($news->have_posts()) :
                    while ($news->have_posts()) :
                        $news->the_post();
            ?>
                <li class="project-page-mobile-carousel-item">                                
                    <a href="<?php the_permalink();?>">
                        <div class="project-page-mobile-carousel-item-image">
                            <?php if ( has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="project-page-mobile-carousel-item-description">
                            <h6><?php the_title();?></h6>                                        
                            <?php the_content(); ?>
                        </div>
                    </a>
                    <a class="project-page-mobile-carousel-item-btn" href="<?php the_permalink();?>"> 
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/plus.png" alt="slider-next-button">
                    </a>
                </li>
            <?php
                endwhile;
                else :
                echo '<p></p>';
                wp_reset_postdata();
                endif;
            ?>
        </ul>
        <div class="project-page-mobile-next" id="newsletterTrigger">                
            <p>SUBSCRIBE TO OUR NEWSLETTER TO STAY UP TO DATE WITH THEM ALL</p>
        </div>
        
        <!-- Add Modal HTML -->
        <div id="newsletterModal" class="newsletter-modal">
            <div class="newsletter-modal-content">
                <div class="newsletter-modal-content-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Delia-Logo.png" alt="newsletter-image">
                </div>
                <span class="close-modal">&times;</span>
                <h3>Subscribe to Our Newsletter</h3>
                <?php echo do_shortcode('[mc4wp_form id=432]'); ?>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('newsletterModal');
        const trigger = document.getElementById('newsletterTrigger');
        const closeBtn = document.querySelector('.close-modal');
        const modalContent = document.querySelector('.newsletter-modal-content');

        function openModal() {
            modal.style.display = 'block';
            // Force a reflow before adding the 'show' class
            modal.offsetHeight;
            modal.classList.add('show');
            window.history.replaceState({}, '', '?showModal=true');
        }

        function closeModal() {
            modal.classList.remove('show');
            // Wait for the transition to complete before hiding the modal
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300); // This should match the transition duration in CSS
            window.history.replaceState({}, '', window.location.pathname);
        }

        // Check URL parameters on page load
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('showModal') === 'true') {
            openModal();
        }

        trigger.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);

        // Modify the form to include the showModal parameter
        const form = modal.querySelector('form');
        if (form) {
            form.addEventListener('submit', function() {
                const currentAction = this.action;
                this.action = currentAction + (currentAction.includes('?') ? '&' : '?') + 'showModal=true';
            });
        }

        window.addEventListener('click', function(event) {
            if (event.target == modal && !modalContent.contains(event.target)) {
                closeModal();
            }
        });

        modalContent.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });
</script>
<?php get_footer();?>
