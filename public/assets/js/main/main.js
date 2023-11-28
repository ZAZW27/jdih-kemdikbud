
// document.addEventListener('DOMContentLoaded', function () {
//     console.log('ready to make chanegs')
//     var navbar = document.getElementById('navbar');

//     // Define the height at which you want to change the background color
//     var scrollHeightThreshold = 200;

//     // Listen for the scroll event
//     window.addEventListener('scroll', function () {
//         // Get the current scroll position
//         var scrollY = window.scrollY || window.pageYOffset;

//         // Check if the scroll position is beyond the threshold
//         if (scrollY > scrollHeightThreshold) {
//             // Add a class to change the background color
//             navbar.classList.add('scrolled');
//         } else {
//             // Remove the class to revert to the original background color
//             navbar.classList.remove('scrolled');
//         }
//     });
// });
// Function to check screen size and toggle classes
function bannerToggleScreen() {
    const banner = document.getElementById('banner-position');
    const bppText = document.getElementById('text-bpp');
    if (window.innerWidth <= 768) { // Adjust the breakpoint as needed
        bppText.classList.remove('text-bpp');
        bppText.classList.add('text-white');
        console.log('Change to white');
    } else {
        bppText.classList.add('text-bpp');
        bppText.classList.remove('text-white');
        if (!banner.classList.contains('sticky')) {
            banner.classList.add('sticky');
        }
    }
}

// Initial call to set classes based on the initial screen size
bannerToggleScreen();

// Event listener for window resize
window.addEventListener('resize', bannerToggleScreen);