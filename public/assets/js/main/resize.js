document.addEventListener('DOMContentLoaded', function(){
    ResizeToggleContents();
    handleScroll();

    var BppInitSize = 170;
    var BppInitPosition = 20

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', ResizeToggleContents);
});

function handleScroll() {
    var contentWidth = window.innerWidth;
    var logoBanner = document.getElementById('logo-balikpapan-banner');
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (contentWidth <= 768) {
        // Apply the scrolling effect only when the window is in mobile view
        var newSize = Math.max(initialSize - scrollPosition * 0.1, 50);
        var newBottom = Math.max(initialBottom - scrollPosition * 0.05, 0);

        logoBanner.style.width = newSize + 'px';
        logoBanner.style.bottom = newBottom + 'px';
    } else {
        // Handle any additional actions when in desktop view
        // Reset styles or perform other actions as needed
        logoBanner.style.width = initialSize + 'px';
        logoBanner.style.bottom = initialBottom + 'px';
    }
}

function ResizeToggleContents(){
    var contentWidth = window.innerWidth;
    var logoBanner = document.getElementById('logo-balikpapan-banner');
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;

    
    if (contentWidth <= 768) {
        // Portrait orientation
        console.log('Portrait orientation');
    } else {
        // Landscape orientation
        console.log('Landscape orientation');
    }
    hideModalFilter();
}
