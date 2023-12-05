
document.addEventListener('DOMContentLoaded', function () {
    // Initial call to set classes based on the initial screen size
    bannerToggleScreen();
    
    // Event listener for window resize
    window.addEventListener('resize', bannerToggleScreen);
});

function setOpacity(bppText, scrollPosition, topOps, minHeight) {
    // Calculate the opacity based on the scroll position
    var opacity = topOps - Math.min(scrollPosition / minHeight, 1); // Adjust the divisor for a faster/slower fade

    // Check if the opacity is above 20%
    bppText.style.opacity = opacity > 0.2 ? opacity : bppText.style.opacity;
}


function bannerToggleScreen() {
    // console.log('the resize function is always ready to got ')  
    const banner = document.getElementById('banner-position');
    const bppText = document.getElementById('text-bpp');

    // VARIABLES FOR NAV SCROLL
    // const nav = document.getElementById('navbar')
    // var navScrollPosition = window.scrollY || window.pageYOffset;
    // const scrollThreshold = 500;

    if (window.innerWidth <= 768) { // Adjust the breakpoint as needed
        console.log('MainJs mobile mode ready to go')
        // console.log(window.innerWidth)
        bppText.classList.remove('text-bpp');
        bppText.classList.add('text-white');
        bppText.style.transition = 'opacity 0.3s ease';
        bppText.style.opacity = 0.80
        if (!banner.classList.contains('z-60')) {
            banner.classList.remove('z-60')
            hideModalFilter()
        }
        window.addEventListener('scroll', function () {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;
            setOpacity(bppText, scrollPosition, 0.80, 400);
        });
    } else {
        console.log('MainJs landscape    mode ready to go')

        bppText.classList.add('text-bpp');
        bppText.classList.remove('text-white');
        bppText.style.opacity = 1;
        if (!banner.classList.contains('sticky')) {
            banner.classList.add('sticky');
            hideModalFilter()
        }
        window.addEventListener('scroll', function () {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;
            setOpacity(bppText, scrollPosition, 1, 400);
        });
    }
}
