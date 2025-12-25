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
    // Throttle helper function
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    }

    if(backToTop) {
        window.addEventListener('scroll', throttle(() => {
             if (window.scrollY > 300) {
                 backToTop.classList.add('visible');
             } else {
                 backToTop.classList.remove('visible');
             }
        }, 100));
        
        backToTop.addEventListener('click', () => {
             window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
