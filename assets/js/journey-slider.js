document.addEventListener( 'DOMContentLoaded', function () {
    var splide = new Splide( '#thumbnail-carousel', {
        type: 'slide',
        trimSpace: false,
        perPage: 1,
        start: 6,
        pagination: false,
        breakpoints: {
            640: {
                perPage: 1,
            },
            375: {
                start: 8
            },
        },
        drag: false,
    });

    const nextButton = document.querySelector('.splide__arrow--next');

    // Function to get max index based on screen width
    const getMaxIndex = () => window.innerWidth <= 375 ? 13 : 9;

    // Add click event listener to prevent default behavior
    nextButton.addEventListener('click', function(e) {
        const currentIndex = splide.index;
        if (currentIndex >= getMaxIndex()) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    }, true);

    splide.on('moved mount', function() {
        const currentIndex = splide.index;
        
        if (currentIndex >= getMaxIndex()) {
            nextButton.classList.add('is-disabled');
            nextButton.disabled = true;
            nextButton.setAttribute('disabled', 'true');
            splide.Components.Controller.disable();
        } else {
            nextButton.classList.remove('is-disabled');
            nextButton.disabled = false;
            nextButton.removeAttribute('disabled');
            splide.Components.Controller.enable();
        }
    });

    splide.mount();
});