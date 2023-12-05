document.addEventListener('DOMContentLoaded', function(){
    ResizeToggleContents();

    window.addEventListener('resize', ResizeToggleContents);
});

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
