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