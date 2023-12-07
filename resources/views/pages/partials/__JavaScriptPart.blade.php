
{{-- 
=================================================================================================
+++++++++++++ MENAMBAHKAN / MENGHILANGKAN AOS +++++++++++++++++++++++++++++++++++++++
=================================================================================================
/* menambahkan data aos jika orientasi / screen adalah landsccape 
dan menghapusnya jika portrait / mobile */ 
--}}

<script>
    // Function to add AOS script and stylesheet
    function addAOS() {
        // Load AOS stylesheet dynamically
        var aosStylesheet = document.createElement('link');
        aosStylesheet.rel = 'stylesheet';
        aosStylesheet.href = 'https://unpkg.com/aos@2.3.1/dist/aos.css';
        document.head.appendChild(aosStylesheet);

        // Load AOS library dynamically
        var aosScript = document.createElement('script');
        aosScript.src = 'https://unpkg.com/aos@2.3.1/dist/aos.js';
        aosScript.onload = function () {
            // AOS script is loaded, now initialize AOS
            AOS.init({
                once: true
            });
        };
        document.head.appendChild(aosScript);
    }

    // Function to remove AOS script and stylesheet
    function removeAOS() {
        // Remove AOS stylesheet
        var existingStylesheet = document.querySelector('link[href="https://unpkg.com/aos@2.3.1/dist/aos.css"]');
        existingStylesheet && existingStylesheet.remove(); 

        // Remove AOS script
        var existingScript = document.querySelector('script[src="https://unpkg.com/aos@2.3.1/dist/aos.js"]');
        existingScript && existingScript.remove();
    }

    // Check screen size and orientation on page load
    (window.innerWidth > 765 && window.innerHeight < window.innerWidth) && addAOS();

    window.addEventListener('resize', () => (window.innerWidth > 765 && window.innerHeight < window.innerWidth) ? addAOS() : removeAOS());  
</script>

{{-- 
=================================================================================================
+++++++++++++ LOAD MODAL POP UP +++++++++++++++++++++++++++++++++++++++
=================================================================================================
/* Memberi lihat modal saat dokumen sudah siap
dan memilki function untuk menghancurkan modal */ 
--}}
<script defer>
        
    document.addEventListener('DOMContentLoaded', function(){
        var modal = document.getElementById('notifModal');
        var childModal = modal.querySelector('.modal');

        modal.classList.remove('z-[0]', 'opacity-0')
        modal.classList.add('z-[999]', 'opacity-1');
        setTimeout(() => {
            modal.classList.remove('-mt-12');
        }, 300);

        function destroyModal() {
            // Remove notifModal from its parent
            var parentModal = modal.parentNode;
            parentModal.removeChild(modal);

            // Add your desired actions after destroying the modal
        }

        // Add click event listener to the notifModal
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.add('opacity-0', '-mt-64');
                modal.classList.remove('opacity-1');
                setTimeout(() => {
                    destroyModal();
                }, 300);
            }
        });
        childModal.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
</script>

{{-- 
=================================================================================================
+++++++++++++ LOAD AFTER DOC READ +++++++++++++++++++++++++++++++++++++++
=================================================================================================
/* Memberi gambar saat dokumen sudah selesai load */ 
--}}

<script>
    window.addEventListener('load', function () {
        var logoBalikpapan = document.getElementById('logoBanner');
        var input = document.getElementById('search-input');

        // Add a click event listener to the image
        logoBalikpapan.addEventListener('click', function() {
            // Set focus on the input when the image is clicked
            input.focus();
        });

        var imageElement = document.createElement('img');
        imageElement.src = "{{ asset('assets/img/media/walikota.JPEG') }}";

        imageElement.classList.add('opacity-0', 'transition-opacity', 'duration-700', 'ease-in-out', 'object-cover', 'w-full', 'h-full', 'rounded-full', 'hoveringAnimation');
        logoBalikpapan.appendChild(imageElement);

        // Set a timeout to remove the fade-in classes after a delay
        setTimeout(function () {
            imageElement.classList.remove('opacity-0');
        }, 200); // Adjust the delay (in milliseconds) as needed
    });
</script>

<script>
    window.addEventListener('load', function () {
        var beruangBottomLogo = document.getElementById('beruangBottomLogo');
        var imageElementBeruang = document.createElement('img');

        imageElementBeruang.src = "{{ asset('assets/img/logo/helarctos-malayanus.png') }}";
        imageElementBeruang.classList.add('opacity-0', 'transition-opacity');
        beruangBottomLogo.appendChild(imageElementBeruang);

        // Set a timeout to remove the fade-in classes after a delay
        setTimeout(function () {
            imageElementBeruang.classList.remove('opacity-0');
        }, 200); // Adjust the delay (in milliseconds) as needed
    });
</script>