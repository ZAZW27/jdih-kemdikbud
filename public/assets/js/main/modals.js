
// UNTUK SUBJECT PERATURAN !!!!!!!!!!!!!!!!
function showModalSubjekPeraturan(){
    let modal = document.getElementById("modal-base");
    let targetModal = document.getElementById("modalSubjekPeraturan");
    modal.classList.remove('hidden');
    modal.classList.add("flex");
    setTimeout(() => {
        targetModal.classList.remove('hidden');
        targetModal.classList.add("flex");
        modal.classList.add("opacity-100");
    }, 20);
}
function hideModalSubjekPeraturan(){
    let modal = document.getElementById("modal-base");
    let targetModal = document.getElementById("modalSubjekPeraturan");
    modal.classList.add("opacity-0");
    modal.classList.remove("opacity-100");
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove("flex");
        targetModal.classList.add('hidden');
        targetModal.classList.remove("flex");
    }, 500);
}

// UNTUK LAYANAN !!!!!!!!!!!!!!!!
function showModalLayanan(){
    let modal = document.getElementById("modal-base");
    let targetModal = document.getElementById("modalLayanan");
    modal.classList.remove('hidden');
    modal.classList.add("flex");
    setTimeout(() => {
        targetModal.classList.remove('hidden');
        targetModal.classList.add("flex");
        modal.classList.add("opacity-100");
    }, 20);
}
function hideModalLayanan(){
    let modal = document.getElementById("modal-base");
    let targetModal = document.getElementById("modalLayanan");
    modal.classList.add("opacity-0");
    modal.classList.remove("opacity-100");
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove("flex");
        targetModal.classList.add('hidden');
        targetModal.classList.remove("flex");
    }, 500);
}


// SHOW MODAL FOR FILTERING
function showModalFilter(){
    let banner = document.getElementById("banner-position");
    let funButt = document.getElementById("filter-button");
    let targetModal = document.getElementById("filter-options");
    setTimeout(() => {
        funButt.classList.add('-mt-[4rem]');
        targetModal.classList.remove('hidden');
        targetModal.classList.add("block");

        if (banner) {
            if (window.innerWidth <= 768) {
                banner.classList.contains("sticky") ? banner.classList.remove('sticky') : null;
            }else{
                banner.classList.contains('z-50') ? banner.classList.add('z-50') : null;
            }
        }
        // banner.classList.add("block");
    }, 20);
}
function hideModalFilter(){
    let banner = document.getElementById("banner-position");
    let funButt = document.getElementById("filter-button");
    let targetModal = document.getElementById("filter-options");
    setTimeout(() => {
        funButt.classList.remove('-mt-[4rem]');
        targetModal.classList.add('hidden');
        targetModal.classList.remove("block");

        if (banner) {
            if (!banner.classList.contains('sticky')) {
                banner.classList.contains('sticky') ? banner.classList.add('sticky') : null;
            }else if(banner.classList.contains('z-50')){
                banner.classList.contains('z-50') ? banner.classList.remove('z-50') : null;
            }
        }
    }, 20);
}

// SELECT NUM WHETHER ITS FOR SELECT OPTION OR WITH INPUTS
document.getElementById("change-num").addEventListener("change", function () {
    const selectSection = document.getElementById("select-num");
    const inputSection = document.getElementById("type-num");

    if (this.checked) {
        // Checkbox is checked, show the select section and disable its elements
        selectSection.classList.remove("hidden");
        selectSection.querySelectorAll("select, input").forEach(function (element) {
            element.removeAttribute("disabled");
        });

        // Hide the input section and disable its elements
        inputSection.classList.add("hidden");
        inputSection.querySelector("input").setAttribute("disabled", "disabled");
    } else {
        // Checkbox is not checked, show the input section and disable its elements
        inputSection.classList.remove("hidden");
        inputSection.querySelector("input").removeAttribute("disabled");

        // Hide the select section and disable its elements
        selectSection.classList.add("hidden");
        selectSection.querySelectorAll("select, input").forEach(function (element) {
            element.setAttribute("disabled", "disabled");
        });
    }
});

console.log('modal siap digunakan')

document.addEventListener('DOMContentLoaded', function(){
    // UNTUK FILTER SEARCH !!!!!!!!!!!!!!
    console.log("all modal's ready");
    var filterBtn = document.getElementById('filter-button')

    filterBtn.classList.remove('opacity-0');
    filterBtn.classList.add('opacity-1');

    document.getElementById("filter-button").addEventListener('click', function () {
        // console.log('aksi ambil filtering')
        const targetModal = document.getElementById("filter-options");
    
        if (targetModal.classList.contains("block")) {
            hideModalFilter();
        } else {
            showModalFilter();
        }
    });
    
})
