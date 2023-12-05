document.addEventListener('DOMContentLoaded', function() {
    var bppImg = document.getElementById('bpp-img');
    var input = document.getElementById('search-input');

    bppImg.addEventListener('click', function () {
        input.focus();
    });
});