
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

    // UNTUK FILTER SEARCH !!!!!!!!!!!!!!
    document.getElementById("filter-button").addEventListener('click', function () {
        const targetModal = document.getElementById("filter-options");
    
        if (targetModal.classList.contains("block")) {
            hideModalFilter();
        } else {
            showModalFilter();
        }
    });

    // SHOW MODAL FOR FILTERING
    function showModalFilter(){
        let Beruang = document.getElementById("beruangMaduImg");
        let banner = document.getElementById("banner-position");
        let funButt = document.getElementById("filter-button");
        let targetModal = document.getElementById("filter-options");
        setTimeout(() => {
            funButt.classList.add('-mt-[4rem]');
            targetModal.classList.remove('hidden');
            targetModal.classList.add("block");
            if (window.innerWidth <= 768) {
                banner.classList.remove('sticky');
            }else{
                banner.classList.add('z-50');
            }
            Beruang.classList.remove('md:z-[45]');
            // banner.classList.add("block");
        }, 20);
    }
    function hideModalFilter(){
        let Beruang = document.getElementById("beruangMaduImg");
        let banner = document.getElementById("banner-position");
        let funButt = document.getElementById("filter-button");
        let targetModal = document.getElementById("filter-options");
        setTimeout(() => {
            funButt.classList.remove('-mt-[4rem]');
            targetModal.classList.add('hidden');
            targetModal.classList.remove("block");
            if (!banner.classList.contains('sticky')) {
                banner.classList.add('sticky');
            }else if(banner.classList.contains('z-50')){
                banner.classList.remove('z-50');
            }
            Beruang.classList.add('md:z-[45]');
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
