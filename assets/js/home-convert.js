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