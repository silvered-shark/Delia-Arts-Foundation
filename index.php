<?php get_header();?> 
    <section id="homePage" class="home-page">
        <video autoplay muted loop class="background-video pc-video">
            <source src="<?php echo get_template_directory_uri();?>/assets/img/site_bg.mp4" type="video/mp4">
        </video>
        <div class="container">            
            <div class="home-page-title">
                <h1>DELIA <br> ARTS</h1>
                <h3>FOUNDATION</h3>
            </div>
            <div class="home-page-description">
                <p>
                    Music as a catalyst of social transformation: From 
                    Palestine to Congo, Brazil, North Africa, and the 
                    Middle East, the Delia Arts Foundation empowers 
                    communities and fosters social, personal, and 
                    professional development through the arts. 
                </p>
            </div>            
            <div class="home-page-next">
                <h6>
                    <a href="<?php echo home_url('/about/'); ?>">
                        ABOUT THE FOUNDATION
                    </a>
                </h6>                
                <div class="home-page-next-image">
                    <a href="<?php echo home_url('/about/'); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/Group 1.png" alt="next-arrow" width="100%">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
        const homePage = document.getElementById('homePage');
        const scrollDistance = 10;
        const targetURL = "<?php echo home_url('/about/'); ?>"; 
        let totalScrollDistance = 0;
        let touchStartY = 0;

        // Mouse wheel event for desktop
        homePage.addEventListener('wheel', function(event) {
            if (event.deltaY > 0) {
                totalScrollDistance += event.deltaY;
                const scrollThreshold = 200; 
                if (totalScrollDistance >= scrollThreshold) {
                    window.location.href = targetURL;
                }
            }
        });

        // Touch events for mobile
        homePage.addEventListener('touchstart', function(event) {
            touchStartY = event.touches[0].clientY;
        });

        homePage.addEventListener('touchmove', function(event) {
            event.preventDefault(); // Prevent default scrolling
            const touchEndY = event.touches[0].clientY;
            const touchDiff = touchStartY - touchEndY;
            
            if (touchDiff > 0) { // Swiping up
                totalScrollDistance += touchDiff;
                const scrollThreshold = 500;
                if (totalScrollDistance >= scrollThreshold) {
                    window.location.href = targetURL;
                }
            }
        });

        // Reset touch position when touch ends
        homePage.addEventListener('touchend', function() {
            touchStartY = 0;
        });
    </script>
<?php get_footer();?>
