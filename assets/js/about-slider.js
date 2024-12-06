document.addEventListener('DOMContentLoaded', function() {
    console.log('Script loaded');
    
    const homehamburger = document.querySelector('.home-head-mobile-hamburger');
    const homenavbar = document.querySelector('.home-head-mobile-navbar ul');
    const homecircle = document.querySelector('.home-head-mobile-circle');
    const hamburger = document.querySelector('.general-head-mobile-hamburger');
    const navbar = document.querySelector('.general-head-mobile-navbar ul');
    const circle = document.querySelector('.general-head-mobile-circle');
    const body = document.body;

    if (homehamburger) {
        homehamburger.addEventListener('click', function(e) {
            e.stopPropagation();
            homehamburger.classList.add('hidden');
            homenavbar.classList.add('active');
            homecircle.classList.add('active');
            body.classList.add('overlay');
        });
    }
    if (hamburger) {
        hamburger.addEventListener('click', function(e) {
            e.stopPropagation();
            hamburger.classList.add('hidden');
            navbar.classList.add('active');
            circle.classList.add('active');
            body.classList.add('overlay');
        });
    }
    
    document.addEventListener('click', function(e) {
        if (!homenavbar.contains(e.target) && !homecircle.contains(e.target)) {
            homehamburger.classList.remove('hidden');
            homenavbar.classList.remove('active');
            homecircle.classList.remove('active');
            body.classList.remove('overlay');
        }
    });

    document.addEventListener('click', function(e) {
        if (!navbar.contains(e.target) && !circle.contains(e.target)) {
            hamburger.classList.remove('hidden');
            navbar.classList.remove('active');
            circle.classList.remove('active');
            body.classList.remove('overlay');
        }
    });
    
    homenavbar.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    homecircle.addEventListener('click', function(e) {
        e.stopPropagation();
    });

    navbar.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    circle.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});

var $slider = $('.slideshow .slider'),
    maxItems = $('.item', $slider).length,
    tracking,
    isScrolling = false,
    rightTracking;

$slider.addClass('slideshow-left');
$('.slideshow-left').slick({
    vertical: true,
    verticalSwiping: true,
    arrows: false,
    infinite: false,
    dots: false,
    speed: 100,
    draggable: false,          
    swipe: false, 
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
}).on("mousewheel", function(event) {
    if (!isScrolling) {  
        isScrolling = true;
        if (event.deltaY < 0) {
            $(this).slick('slickNext'); 
        } else if (event.deltaY > 0) {
            $(this).slick('slickPrev'); 
        }
        setTimeout(function() {
            isScrolling = false;
        }, 500); 
    }
});



