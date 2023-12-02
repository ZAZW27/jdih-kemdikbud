
document.addEventListener('DOMContentLoaded', function () {
    function setOpacity(bppText, scrollPosition, topOps, minHeight) {
        // Calculate the opacity based on the scroll position
        var opacity = topOps - Math.min(scrollPosition / 300, 1); // Adjust the divisor for a faster/slower fade

        // Check if the opacity is above 20%
        bppText.style.opacity = opacity > 0.2 ? opacity : bppText.style.opacity;
    }


    function bannerToggleScreen() {    
        const banner = document.getElementById('banner-position');
        const bppText = document.getElementById('text-bpp');

        // VARIABLES FOR NAV SCROLL
        // const nav = document.getElementById('navbar')
        // var navScrollPosition = window.scrollY || window.pageYOffset;
        // const scrollThreshold = 500;

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
                var scrollPosition = window.scrollY || document.documentElement.scrollTop;
                setOpacity(bppText, scrollPosition, 0.80, 300);
            });

            // if (navScrollPosition > scrollThreshold) {
            //     navbar.classList.remove('bg-slate-800/30');
            //     navbar.classList.add('bg-white');
            //     console.log('does it change ?')
            // } else {
            //     navbar.classList.remove('bg-white');
            //     navbar.classList.add('bg-slate-800/30');
            //     console.log('change it please')
            // }
        } else {
            bppText.classList.add('text-bpp');
            bppText.classList.remove('text-white');
            bppText.style.opacity = 1;
            if (!banner.classList.contains('sticky')) {
                banner.classList.add('sticky');
                hideModalFilter()
            }
            window.addEventListener('scroll', function () {
                var scrollPosition = window.scrollY || document.documentElement.scrollTop;
                setOpacity(bppText, scrollPosition, 1, 900);
            });
        }
    }

    // Initial call to set classes based on the initial screen size
    bannerToggleScreen();

    // Event listener for window resize
    window.addEventListener('resize', bannerToggleScreen);
});