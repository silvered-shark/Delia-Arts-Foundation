document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#fullscreen-carousel', {
        type   : 'loop', 
        // drag   : 'free',
        // focus  : 'center',                
        // perPage: 1,
        pagination: false,
        autoScroll: {
            speed: 1,
        },
    } ).mount();
} );

document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#mobilescreen-carousel', {
        type   : 'loop', 
        // drag   : 'free',
        // focus  : 'center',                
        // perPage: 1,
        pagination: false,
        autoScroll: {
            speed: 1,
        },
    } ).mount();
} );