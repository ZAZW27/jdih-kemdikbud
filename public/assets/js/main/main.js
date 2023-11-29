function bannerToggleScreen() {
    const banner = document.getElementById('banner-position');
    const bppText = document.getElementById('text-bpp');
    if (window.innerWidth <= 768) { // Adjust the breakpoint as needed
        bppText.classList.remove('text-bpp');
        bppText.classList.add('text-white');
        bppText.style.transition = 'opacity 0.3s ease';
        bppText.style.opacity = 0.80
        if (banner.classList.contains('z-50')) {
            banner.classList.remove('z-50')
            hideModalFilter()
        }
        window.addEventListener('scroll', function () {
             // Get the current scroll position
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;

            // Calculate the opacity based on the scroll position
            var opacity = 0.80 - Math.min(scrollPosition / 300, 1); // Adjust the divisor for a faster/slower fade

            // Check if the opacity is above 20%
            bppText.style.opacity = opacity > 0.1 ? opacity : bppText.style.opacity;
        });
        
    } else {
        bppText.classList.add('text-bpp');
        bppText.classList.remove('text-white');
        if (!banner.classList.contains('sticky')) {
            banner.classList.add('sticky');
            hideModalFilter()
        }
    }
}

// Initial call to set classes based on the initial screen size
bannerToggleScreen();

// Event listener for window resize
window.addEventListener('resize', bannerToggleScreen);