
    console.log("DOMContentLoaded");
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
    document.addEventListener('click', function (event) {
        const targetModal = document.getElementById("filter-options");
    
        // Check if the target modal has the "block" class and the click target is not inside the modal
        if (targetModal.classList.contains("block") && !targetModal.contains(event.target)) {
            hideModalFilter(); // Call your hide modal function
        }
    });
    function showModalFilter(){
        
        let funButt = document.getElementById("filter-button");
        let targetModal = document.getElementById("filter-options");
        setTimeout(() => {
            funButt.classList.add('-mt-[4rem]');
            targetModal.classList.remove('hidden');
            targetModal.classList.add("block");
        }, 20);
    }
    function hideModalFilter(){
        let funButt = document.getElementById("filter-button");
        let targetModal = document.getElementById("filter-options");
        setTimeout(() => {
            funButt.classList.remove('-mt-[4rem]');
            targetModal.classList.add('hidden');
            targetModal.classList.remove("block");
        }, 20);
    }