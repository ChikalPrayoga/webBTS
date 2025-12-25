document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-content')) {
            navLinks.classList.remove('active');
        }
    });
    
    // Back to top
    const backToTop = document.getElementById('backToTop');
    if(backToTop) {
        window.addEventListener('scroll', () => {
             if (window.scrollY > 300) {
                 backToTop.classList.add('visible');
             } else {
                 backToTop.classList.remove('visible');
             }
        });
        
        backToTop.addEventListener('click', () => {
             window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
