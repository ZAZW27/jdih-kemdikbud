// console.log('main js siap digunakan')

// =================================================================================================
// +++++++++++++ MENAMBAHKAN / MENGHILANGKAN AOS +++++++++++++++++++++++++++++++++++++++
// =================================================================================================
/* menambahkan data aos jika orientasi / screen adalah landsccape 
dan menghapusnya jika portrait / mobile */
// function addAOS() {
//     // Load AOS stylesheet dynamically
//     var aosStylesheet = document.createElement('link');
//     aosStylesheet.rel = 'stylesheet';
//     aosStylesheet.href = 'https://unpkg.com/aos@2.3.1/dist/aos.css';
//     document.head.appendChild(aosStylesheet);

//     // Load AOS library dynamically
//     var aosScript = document.createElement('script');
//     aosScript.src = 'https://unpkg.com/aos@2.3.1/dist/aos.js';
//     aosScript.onload = function () {
//         // AOS script is loaded, now initialize AOS
//         AOS.init({
//             once: true
//         });
//     };
//     document.head.appendChild(aosScript);
// }

// // Function to remove AOS script and stylesheet
// function removeAOS() {
//     // Remove AOS stylesheet
//     var existingStylesheet = document.querySelector('link[href="https://unpkg.com/aos@2.3.1/dist/aos.css"]');
//     existingStylesheet && existingStylesheet.remove(); 

//     // Remove AOS script
//     var existingScript = document.querySelector('script[src="https://unpkg.com/aos@2.3.1/dist/aos.js"]');
//     existingScript && existingScript.remove();
// }

// // Check screen size and orientation on page load
// (window.innerWidth > 765 && window.innerHeight < window.innerWidth) && addAOS();

// window.addEventListener('resize', () => (window.innerWidth > 765 && window.innerHeight < window.innerWidth) ? addAOS() : removeAOS());  

// =================================================================================================
// +++++++++++++ FIRST POP UP MODAL +++++++++++++++++++++++++++++++++++++++
// =================================================================================================
/* Membuat pop up modal saat baru load pada page 
dan membuat fungsi menghilangkan pop up itu */

// document.addEventListener('DOMContentLoaded', function(){
//     var modal = document.getElementById('notifModal');
//     var whiteBox = modal.querySelector('.modal');

//     modal.classList.remove('z-[0]', 'opacity-0')
//     modal.classList.add('z-[999]', 'opacity-1');
//     setTimeout(() => {
//         modal.classList.remove('-mt-12');
//     }, 300);

//     function destroyModal() {
//         // Remove notifModal from its parent
//         var parentElement = modal.parentNode;
//         parentElement.removeChild(modal);

//         // Add your desired actions after destroying the modal
//     }

//     // Add click event listener to the notifModal
//     modal.addEventListener('click', function(e) {
//         if (e.target === modal) {
//             modal.classList.add('opacity-0', '-mt-64');
//             modal.classList.remove('opacity-1');
//             setTimeout(() => {
//                 destroyModal();
//             }, 300);
//         }
//     });
//     whiteBox.addEventListener('click', function(e) {
//         e.stopPropagation();
//     });
// });