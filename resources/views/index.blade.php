@include('pages.partials.__header')
{{-- <script src="{{asset('assets/js/google-charts/col-chart.js')}}"></script> --}}
@include('charts.col-chart')
@include('charts.donut-chart')
{{-- <script async>
    AOS.init({
        once: true
    });
</script> --}}

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
    <div class="containers md:h-[30rem] h-[120svh]">
        <div id="banner-position" class="sticky md:top-24 top-[0px] z-60">
            <div id="carousel-banner" class="relative w-full z-20" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden rounded-lg md:h-[30rem] h-[100svh]">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out bg-yellow-100" data-carousel-item>
                        <img class="w-full h-full object-cover object-right" src="{{asset('assets/img/bg/banner.jpeg')}}" alt="" loading="lazy">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out bg-yellow-200" data-carousel-item>
                        <img class="w-full h-full object-cover object-right" src="{{asset('assets/img/bg/background.jpg')}}" alt="" loading="lazy">
                    </div>
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out bg-yellow-100" data-carousel-item>
                        <img class="w-full h-full object-cover object-right" src="{{asset('assets/img/bg/banner.jpeg')}}" alt="" loading="lazy">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out bg-yellow-200" data-carousel-item>
                        <img class="w-full h-full object-cover object-right" src="{{asset('assets/img/bg/background.jpg')}}" alt="" loading="lazy">
                    </div>
                </div>
            </div>
            
            <div class="absolute top-0 flex justify-center w-full h-full">
                <div class="z-[21] absolute top-0 -left-[0rem] md:w-full w-full h-full banner-gradient"></div>
                <div class="relative w-full h-full py-4 px-4 mx-auto max-w-screen-xl text-center pt-16 ">
                    <div class="" id="detail_peraturan">
                        <div class="">
                            <div class="absolute md:flex lg:block justify-end top-0 -left-[0rem] md:w-full w-full h-full ">
                                <div class=" mt-[22vh] md:mt-0 lg:w-full md:w-full w-full flex flex-col items-center justify-start ">
                                    <div id="logo-balikpapan-banner" for="search-input" class="
                                        relative -bottom-20 w-[170px] z-[30] transition-all duration-500 ease-out
                                        md:absolute md:bottom-[11.8rem]  md:w-[8vw] md:left-[24vw]
                                        lg:bottom-[7.9rem]  lg:left-[10.4vw]  lg:w-[10.3vw]  ">
                                        <img src="{{ asset('assets/img/logo/logo_kota_balikpapan.svg') }}" alt="" style="filter: grayscale(10%);">
                                    </div>
                                    {{-- <div id="logo-balikpapan-banner" for="search-input" class="md:absolute md:bottom-[160px] lg:bottom-[66px] md:left-[37.8vw] lg:left-[17.4vw] md:z-[45] z-[22] md:w-[8rem] lg:w-[20rem] w-[90vw] hover:cursor-text">
                                        <img src="{{ asset('assets/img/logo/logo_kota_balikpapan.svg') }}" alt="" style="">
                                    </div> --}}
                                    {{-- <script>
                                        
                                        window.addEventListener('load', function () {
                                            var logoBalikpapan = document.getElementById('logo-balikpapan-banner');
                                            var input = document.getElementById('search-input');

                                            // Add a click event listener to the image
                                            logoBalikpapan.addEventListener('click', function() {
                                                // Set focus on the input when the image is clicked
                                                input.focus();
                                            });

                                            var imageElement = document.createElement('img');
                                            imageElement.src = "{{ asset('assets/img/logo/logo_kota_balikpapan.svg') }}";

                                            imageElement.classList.add('opacity-0', 'transition-opacity', 'duration-700', 'ease-in-out');
                                            logoBalikpapan.appendChild(imageElement);

                                            // Set a timeout to remove the fade-in classes after a delay
                                            setTimeout(function () {
                                                imageElement.classList.remove('opacity-0');
                                            }, 200); // Adjust the delay (in milliseconds) as needed
                                        });
                                    </script> --}}
                                    <div class="absolute top-4 h-[64vh] banner-title backgdrop-blur-md pointer-events-none" >
                                        <div id="bpp-img-container" class="
                                        sticky top-[17svh] w-[80vw] z-[29]
                                        md:relative md:top-[30.8svh] md:w-[25rem] md:ml-20 md:z-[47]
                                        lg:top-[9rem] lg:w-[40vw] lg:ml-0 ">
                                            <img id="bpp-img" class="pointer-events-none " src="{{asset('assets/img/logo/Logo Balikpapan Nyaman light.png')}}" alt="">
                                            <div id="Bppnyaman-logo" class="absolute z-[21] md:h-1  transition-all duration-500 ease-out 
                                                -bottom-10 w-[11rem] opacity-0 md:hidden
                                                md:opacity-1! md:top-0 md:w-[13rem] md:-right-12 md:-rotate-3 
                                                lg:top-2 lg:w-[14.5rem] lg:-right-14 lg:-rotate-6 " >
                                                <img src="{{asset('assets/img/logo/balikpapanNyaman.png')}}" alt="">
                                            </div>
                                            <div id="landscape-nyaman-text" class="absolute z-[21] md:h-1  transition-all duration-500 ease-out 
                                                -bottom-10 w-[11rem]  hidden md:block
                                                md:opacity-1! md:top-0 md:w-[13rem] md:-right-12 md:-rotate-3 
                                                lg:top-2 lg:w-[14.5vw] lg:-right-14 lg:-rotate-6 " >
                                                <img src="{{asset('assets/img/logo/balikpapanNyaman.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <form class="relative domain-form md:z-[46] z-[80]" action="{{route('get_peraturan.data')}}" method="post">
                                @csrf
                                <div class="relative flex justify-center items-center">
                                    <div class="relative md:w-[50%] w-[80%] flex flex-col justify-center md:items-center">
                                        
                                        <div class="flex justify-end items-end md:items-center md:space-x-4 tutup animate-slide-left mt-24 w-full  md:h-[20rem] h-[58svh]">
                                            <input name="search-peraturan" type="text" id="search-input" class="w-[100%] pl-2 pr-4 py-3 border-0 rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Cari peraturan dan dokumen disini">
                                            <div class="absolute z-[100] flex md:right-1 md:mb-0 mb-[50px] -right-4 justify-center items-center md:mt-0 transition-all duration-100 ease-linear opacity-0" id="filter-button">
                                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 mr-1 h-10 rounded-r focus:outline-none focus:ring focus:border-blue-300 hover:bg-red-500 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20"><path d="M0 0h24v24H0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                                                </button>
                                                <button type="reset" style="reset" class="bg-yellow-500 text-slate-800 px-2 py-3 h-10 focus:outline-none mx-auto flex items-center rounded-l rounded-xl focus:ring focus:border-yellow-300">
                                                    <b>SPESIFIK</b>
                                                </button>
                                            </div>
                                        </div>
                                        <marquee class="absolute -bottom-7 md:bottom-[15svh] bg-gray-50 drop-shadow-md px-2 rounded-sm">wowowoowowowoowowowoowowowoowowowoowowowoowowowoowowo</marquee>
                                    </div>
                                </div>
                                <div class="absolute w-full flex hidden md:justify-center justify-center md:-mt-14 md:top-[21.3rem] " id="filter-options" >
                                    <div class="bg-white shadow-lg w-[80%] pt-3 pb-1 px-2 rounded-lg">
                                        <div class="peraturan-filter flex flex-col sm:flex-row">
                                            <div class="flex-1 z-[56]">
                                                <section class="hidden" id="select-num" disabled>
                                                    <select class="custom-select sources" placeholder="Pilih Nomor" name="nomor-peraturan">
                                                        <option value="">Pilih Nomor</option>
                                                        @foreach ($groupNomor as $id => $name)
                                                            <option value="{{$name}}">{{$name}}</option>
                                                        @endforeach
                                                    </select>
                                                </section>
                                                <section class="" id="type-num">
                                                    <input type="text" name="nomor-peraturan" placeholder="Ketik Nomor Peraturan" class="custom-input w-full focus:ring-white">
                                                </section>
                                                <input id="change-num" type="checkbox" value="" class="absolute z-[9999] md:right-40 right-[20px] top-6 w-6 h-6 text-blue-600 bg-white border-gray-600 shadow-md rounded-xl focus:ring-blue-500 ">
                                            </div>
                                        </div>
                                        <div class="peraturan-filter flex flex-col sm:flex-row">
                                            <div class=" flex-1 z-[55]">
                                                <section>
                                                    <select class="custom-select sources" placeholder="Pilih Subjek" name="subjek-peraturan">
                                                        <option value="">Pilih Subjek</option>
                                                        @foreach ($groupSubjek as $id => $name)
                                                            <option value="{{$name}}">{{$name}}</option>
                                                        @endforeach
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="flex-1 z-[54]">
                                                <section>
                                                    <select class="custom-select sources" placeholder="Pilih Jenis" name="jenis-peraturan">
                                                        <option value="">Pilih Jenis</option>
                                                        @foreach ($groupJenis as $id => $name)
                                                            <option value="{{$id}}">{{$name}}</option>
                                                        @endforeach
                                                    </select>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="peraturan-filter flex flex-col sm:flex-row">
                                            <div class="flex-1 z-[53]">
                                                <section>
                                                    <select class="custom-select sources" placeholder="Pilih Tahun" name="tahun-peraturan">
                                                        <option value="">Pilih Tahun</option>
                                                        @foreach ($groupTahun as $id => $name)
                                                            <option value="{{$id}}">{{$name}}</option>
                                                        @endforeach
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="flex-1 z-[52]">
                                                <section>
                                                    <select class="custom-select sources" placeholder="Pilih Status" name="status-peraturan">
                                                        <option value="">Pilih Status</option>
                                                        @foreach ($groupStatus as $id => $name)
                                                            <option value="{{$id}}">{{$name}}</option>
                                                        @endforeach
                                                    </select>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 flex justify-center w-full h-full z-[100] bg-blue-500 hidden">
            <div class="relative w-[100svw] h-full py-4 px-4 mx-auto max-w-screen-xl text-center pt-16 bg-indigo-500/50">
                {{-- <div class="z-[11] absolute top-0 md:-left-[12rem] -left-[0rem] md:w-[130svw] w-[100svw] h-full banner-gradient"></div> --}}
                <div class="bg-white/60  absolute md:flex lg:block justify-end top-0 -left-[0rem] md:w-full w-full h-full">
                    <div class=" mt-[9rem] lg:w-full md:w-full w-full flex flex-col items-center justify-start ">
                        <div class="z-[45] absolute  top-4 h-[30rem] banner-title backgdrop-blur-md bg-red-600/50" >
                            {{-- <div id="text-bpp" class="sticky top-16 font-bold md:relative md:top-[13.5rem] lg:top-[10.5rem] text-[15vw] md:ml-[0rem] lg:ml-0 md:text-[6vw] lg:text-[6rem] text-bpp"> --}}
                            <div id="bpp-img" class="sticky md:relative md:top-[2rem] w-[50rem]">
                                <img src="{{asset('assets/img/logo/Logo Balikpapan Nyaman light.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center md:-mt-[0rem] -mt-[20svh] z-[50]">
        <div class="mt-[10.2svh] md:mt-0 md:py-4 py-0  px-4 mx-auto max-w-screen-xl text-center z-1 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-3 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: SUBJEK PERATURAN ========================== -->
                    <div class="card row-span-3 col-span-2" data-aos="fade-up" data-aos-duration="600">
                        <div class="top-banner w-full h-14 ">
                            <h2>SUBJEK PERATURAN</h2>
                            <div class="dots">
                                <a href="pages/produk-hukum/peraturan.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="flex flex-wrap justify-between">            
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="1">
                                        <div class="area-box">
                                            <button title="Administrasi"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 13h8v2H3zm0 4h8v2H3zm0-8h8v2H3zm0-4h8v2H3zm16 2v10h-4V7h4m2-2h-8v14h8V5z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">ADMINISTRASI</p>
                                        </div>
                                    </form>
                                </div>
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="2">
                                        <div class="area-box">
                                            <button title="Bahasa"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12.87 15.07l-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">BAHASA</p>
                                        </div>
                                    </form>
                                </div>
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="3">
                                        <div class="area-box">
                                            <button title="Bantuan/Pendanaan Pendidikan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"></path><circle cx="16" cy="12" r="1.5"></circle></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">BANTUAN</p>
                                        </div>
                                    </form>
                                </div>
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="4">
                                        <div class="area-box">
                                            <button title="Buku"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7zm12-4h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">BUKU</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="5">
                                        <div class="area-box">
                                            <button title="Kebudayaan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M14 6l-1-2H5v17h2v-7h5l1 2h7V6h-6zm4 8h-4l-1-2H7V6h5l1 2h5v6z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">KEBUDAYAAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="6">
                                        <div class="area-box">
                                            <button title="Organisasi"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="24" width="24"></rect><path d="M22,11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3H22z M7,9H4V5h3V9z M17,15h3v4h-3V15z M17,5h3v4h-3V5z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">ORGANISASI</p>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="7">
                                        <div class="area-box">
                                            <button title="Pengawasan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12zm-2-9H8v2h11V8zm0 4H8v2h11v-2zM7 8H5v2h2V8zm0 4H5v2h2v-2z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PENGAWASAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="8">
                                        <div class="area-box">
                                            <button title="Pengelolaan Satuan Pendidikan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M18.36 9l.6 3H5.04l.6-3h12.72M20 4H4v2h16V4zm0 3H4l-1 5v2h1v6h10v-6h4v6h2v-6h1v-2l-1-5zM6 18v-4h6v4H6z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">SATUAN PENDIDIKAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="9">
                                        <div class="area-box">
                                            <button title="Pendidik dan Tenaga Kependidikan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm.05 10H4.77c.99-.5 2.7-1 4.23-1 .11 0 .23.01.34.01.34-.73.93-1.33 1.64-1.81-.73-.13-1.42-.2-1.98-.2-2.34 0-7 1.17-7 3.5V19h7v-1.5c0-.17.02-.34.05-.5zm7.45-2.5c-1.84 0-5.5 1.01-5.5 3V19h11v-1.5c0-1.99-3.66-3-5.5-3zm1.21-1.82c.76-.43 1.29-1.24 1.29-2.18C19 9.12 17.88 8 16.5 8S14 9.12 14 10.5c0 .94.53 1.75 1.29 2.18.36.2.77.32 1.21.32s.85-.12 1.21-.32z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PENDIDIK &amp; TENDIK</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="10">
                                        <div class="area-box">
                                            <button title="Pendidikan Tinggi"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="60" width="60"></rect><path d="M12,7V3H2v18h20V7H12z M10,19H4v-2h6V19z M10,15H4v-2h6V15z M10,11H4V9h6V11z M10,7H4V5h6V7z M20,19h-8V9h8V19z M18,11h-4v2 h4V11z M18,15h-4v2h4V15z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PENDIDIKAN TINGGI</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="11">
                                        <div class="area-box">
                                            <button title="Perizinan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PERIZINAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons" onclick="showModalSubjekPeraturan()">
                                    <div class="area-box">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:13px">LAINNYA</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- ==================== CONTENT: LAYANAN ========================== -->
                    <div class="card row-span-1 lg:row-span-3 col-span-2" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease">
                        <div class="top-banner w-full h-14 ">
                            <h2>LAYANAN</h2>
                            <div class="dots">
                                <a href="pages/publikasi/layanan.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="layout">
                                <div class="row pt-4">
                                    <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                        <a href="https://birohukum.kemdikbud.go.id/" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">PORTAL</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 fam-grid">
                                        <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="_blank">
                                          <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIPERPU</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-12 fam-grid">
                                        <a href="https://sibankum.kemdikbud.go.id/" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIBANKUM</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 fam-grid">
                                        <a href="https://sikma.kemdikbud.go.id/" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIKMA</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                        <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SJDIH</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 fam-grid">
                                        
                                        <button onclick="showModalLayanan()" data-toggle="modal" data-target=".bd-example1-modal-md">
                                            <div class="c-layanan1">LAINNYA <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"></path></svg></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide-content" class="py-4 px-4 mx-auto max-w-screen-xl text-center z-1 relative">
            <button id="prevBtn"
                class="prev bg-white border-2 border-amber-600/90 hover:border-yellow-500/50 group hover:bg-yellow-500/50 hover:backdrop-blur-lg duration-300 rounded-full w-12 h-12 flex items-center justify-center absolute left-4 md:left-12 top-1/2 transform -translate-y-1/2 z-50">
                <i class="fa fa-angle-left fa-2x text-yellow-500/90 group-hover:text-white"></i>
            </button>
            <div class="slider-container tns-layanan-slider flex space-x-4 text-center">
                <div
                    class="slider-item bg-white group hover:drop-shadow-2xl hover:border-2 hover:border-blue-600 hover:border-dashed active:border-solid duration-300 rounded-lg p-16 h-64">
                    <div
                        class="icon border-2 border-blue-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                        <i class="fa-regular fa-address-card fa-3x text-blue-600"></i>
                    </div>
                    <h1 class="text-xl font-bold mt-4 group-hover:text-blue-600">Pelayanan Kependudukan
                    </h1>
                </div>
                <div
                    class="slider-item bg-white group hover:drop-shadow-2xl hover:border-2 hover:border-blue-600 hover:border-dashed active:border-solid duration-300 rounded-lg p-16 h-64">
                    <div
                        class="icon border-2 border-blue-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                        <i class="fa-solid fa-notes-medical fa-3x text-blue-600"></i>
                    </div>
                    <h1 class="text-xl font-bold mt-4 group-hover:text-blue-600">Izin Kesehatan</h1>
                </div>
                <div
                    class="slider-item bg-white group hover:drop-shadow-2xl hover:border-2 hover:border-blue-600 hover:border-dashed active:border-solid duration-300 rounded-lg p-16 h-64">
                    <div
                        class="icon border-2 border-blue-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                        <i class="fa-solid fa-house-chimney-user fa-3x text-blue-600"></i>
                    </div>
                    <h1 class="text-xl font-bold mt-4 group-hover:text-blue-600">Pelayanan Kelurahan</h1>
                </div>
                <div
                    class="slider-item bg-white group hover:drop-shadow-2xl hover:border-2 hover:border-blue-600 hover:border-dashed active:border-solid duration-300 rounded-lg p-16 h-64">
                    <div
                        class="icon border-2 border-blue-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                        <i class="fa-solid fa-ellipsis fa-3x text-blue-600"></i>
                    </div>
                    <h1 class="text-xl font-bold mt-4 group-hover:text-blue-600">Lainnya</h1>
                </div>
            </div>
            <button id="nextBtn"
                class="next bg-white border-2 border-amber-600/90 hover:border-yellow-500/50 group hover:bg-yellow-500/50 hover:backdrop-blur-lg duration-300 rounded-full w-12 h-12 flex items-center justify-center absolute right-4 md:right-12 top-1/2 transform -translate-y-1/2 z-50">
                <i class="fa fa-angle-right fa-2x text-yellow-500/90 group-hover:text-white"></i>
            </button>
        </div>
        <script>
            var slider = tns({
                container: '.tns-layanan-slider',
                items: 2,
                nav: false,
                slideBy: 1,
                controlsPosition: 'bottom',
                mouseDrag: true,
                controlsContainer: '#slide-content',
                prevButton: '#prevBtn',
                nextButton: '#nextBtn',
                speed: 1000,
                autoplay: true,
                autoplayButtonOutput: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    910: {
                        items: 2,
                    },
                },
            });
        </script>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-3 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: PERATURAN TERBARU ========================== -->
                    <div class="card row-span-3 col-span-2 z-[1000]" data-aos="fade-up-left" data-aos-duration="600" data-aos-easing="ease">
                        <div class="top-banner w-full h-14 ">
                            <h2>PERATURAN TERBARU</h2>
                            <div class="dots">
                                <a href="pages/produk-hukum/peraturan.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="pt-5">
                                @php $countPeraturan = 0 @endphp
                                @foreach ($peraturan as $per)
                                    @if ($countPeraturan < 5)
                                        
                                        <div class="relative">
                                            <div class="flex items-center absolute bottom-0 right-0">
                                                <div class="flex items-center">
                                                    <span class="text-xs text-gray-500">{{$per->download}}</span>
                                                    <div class="flex justify-start ml-1 items-center transition-all duration-500 ease-in-out  w-10 h-10 rounded-2xl">
                                                        <a href="#" class="">
                                                            <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#4b3f3f"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M3 15C3 17.8284 3 19.2426 3.87868 20.1213C4.75736 21 6.17157 21 9 21H15C17.8284 21 19.2426 21 20.1213 20.1213C21 19.2426 21 17.8284 21 15" stroke="#1C274C" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 3V16M12 16L16 11.625M12 16L8 11.625" stroke="#1C274C" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <span class="text-xs text-gray-500">{{$per->view}}</span>
                                                    <div class="flex justify-start ml-1 items-center transition-all duration-500 ease-in-out  w-10 h-10 rounded-2xl">
                                                        <a href="#" class="">
                                                            <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{route('detail_peraturan.data', ['id' => $per->id, 'model' => $per->model])}}">
                                                <div class="peraturan">
                                                    <div class="lg:flex lg:flex-row flex-col">
                                                        <div class="col-lg-1 col-md-1 col-sm-12">
                                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><rect fill="none" height="24" width="24"></rect><path d="M19,5v9l-5,0l0,5H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h10l6-6V5C21,3.9,20.1,3,19,3z M12,14H7v-2h5V14z M17,10H7V8h10V10z"></path></svg>
                                                        </div>
                                                        <div class="col-lg-11 col-md-11 col-sm-12">
                                                            <div class="terbaru">
                                                                <div class="flex flex-row justify-between">
                                                                    <h6>
                                                                        <span style="color: #696969;">{{ strtoupper($per->jenis_peraturan)}}</span> 
                                                                        {{-- CONDITION JIKA TAHUN SUDAH BERADA DI DALAM NOMOR PERATURAN --}}
                                                                        {{ strpos((string)$per->nomor_peraturan, (string)$per->tahun_peraturan) !== false ? strtoupper("NOMOR {$per->nomor_peraturan}") : strtoupper("NOMOR {$per->nomor_peraturan} TAHUN {$per->tahun_peraturan}") }}
                                                                    </h6>
                                                                    
                                                                </div>
                                                                <h1 class="hover:text-blue-900 lg:text-start sm:text-justify">{{$per->judul_peraturan}}</h1>
                                                                <span class="tgl-terbit-peraturan">{{ \Carbon\Carbon::parse($per->tanggal_penetapan)->format('d F Y') }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!--row-->
                                                    <div class="bdr2 border-b-2 border-slate-200"></div>
                                                </div>
                                            </a>
                                        </div>
                                        @php $countPeraturan++ @endphp
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- ==================== CONTENT: TAUTAN   ========================== -->
                    <div class="card row-span-3 col-span-2" data-aos="fade-right" data-aos-duration="400" data-aos-delay="400" data-aos-easing="ease">
                        <div class="top-banner w-full h-14 ">
                            <h2>TAUTAN</h2>
                            <div class="dots">
                                <a>
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://www.kemdikbud.go.id/" target="blank">Kemendikbudristek</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12.36 6l.4 2H18v6h-3.36l-.4-2H7V6h5.36M14 4H5v17h2v-7h5.6l.4 2h7V6h-5.6L14 4z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://merdekabelajar.kemdikbud.go.id/" target="blank">Merdeka Belajar</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://beasiswaunggulan.kemdikbud.go.id/" target="blank">Beasiswa Unggulan</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><g><rect fill="none" height="24" width="24" x="0"></rect></g><g><path d="M22.47,5.2C22,4.96,21.51,4.76,21,4.59v12.03C19.86,16.21,18.69,16,17.5,16c-1.9,0-3.78,0.54-5.5,1.58V5.48 C10.38,4.55,8.51,4,6.5,4C4.71,4,3.02,4.44,1.53,5.2C1.2,5.36,1,5.71,1,6.08v12.08c0,0.58,0.47,0.99,1,0.99 c0.16,0,0.32-0.04,0.48-0.12C3.69,18.4,5.05,18,6.5,18c2.07,0,3.98,0.82,5.5,2c1.52-1.18,3.43-2,5.5-2c1.45,0,2.81,0.4,4.02,1.04 c0.16,0.08,0.32,0.12,0.48,0.12c0.52,0,1-0.41,1-0.99V6.08C23,5.71,22.8,5.36,22.47,5.2z M10,16.62C8.86,16.21,7.69,16,6.5,16 c-1.19,0-2.36,0.21-3.5,0.62V6.71C4.11,6.24,5.28,6,6.5,6C7.7,6,8.89,6.25,10,6.72V16.62z M19,0.5l-5,5V15l5-4.5V0.5z"></path></g></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://belajar.id/" target="blank">Belajar</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9 10v8l7-4zm12-4h-7.58l3.29-3.29L16 2l-4 4h-.03l-4-4-.69.71L10.56 6H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 14H3V8h18v12z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://kampusmerdeka.kemdikbud.go.id/" target="blank">Kampus Merdeka</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 19V4h-4V3H5v16H3v2h12V6h2v15h4v-2h-2zm-6 0H7V5h6v14zm-3-8h2v2h-2z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://perpustakaan.kemdikbud.go.id/" target="blank">Perpustakaan</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><rect fill="none" height="24" width="24"></rect><g><path d="M16,11V3H8v6H2v12h20V11H16z M10,5h4v14h-4V5z M4,11h4v8H4V11z M20,19h-4v-6h4V19z"></path></g></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://guru.kemdikbud.go.id/" target="blank">Merdeka Mengajar</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><rect fill="none" height="24" width="24"></rect><path d="M14.5,12.59l0.9,3.88L12,14.42l-3.4,2.05l0.9-3.87l-3-2.59l3.96-0.34L12,6.02l1.54,3.64L17.5,10L14.5,12.59z M12,3.19 l7,3.11V11c0,4.52-2.98,8.69-7,9.93C7.98,19.69,5,15.52,5,11V6.3L12,3.19 M12,1L3,5v6c0,5.55,3.84,10.74,9,12c5.16-1.26,9-6.45,9-12 V5L12,1L12,1z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://wkmb.kemdikbud.go.id/" target="blank">Wiyata Kinarya</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: PENGUMUMAN ========================== -->
                    <div class="card row-span-2 col-span-4" data-aos="fade-left" data-aos-duration="600" data-aos-delay="400">
                        <div class="top-banner w-full h-14 ">
                            <h2>PENGUMUMAN</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="pt-5">
                                @php $countPengumuman = 0 @endphp
                                @foreach ($pengumuman as $p)
                                    @if ($countPengumuman < 4 )
                                        <div class="pengumuman">
                                            <h1 class="text-base tujuan-link">
                                                <a href="{{ route('detail_pengumuman.data', ['id' => $p->id])}}">{{$p->judul}}</a>
                                            </h1>
                                            <div class="my-3 tujuan">
                                                <p class="text-yellow-500 font-semibold start">{{$p->tema}}</p>
                                            </div>
                                            <div class="border"></div>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="pengumuman">
                                    <h1 class="text-base tujuan-link">
                                        <a href="/statistika-peraturan">Statistik Peraturan Perundang-undangan</a>
                                    </h1>
                                    <div class="my-3 tujuan">
                                        <p class="text-yellow-500 font-semibold start">Peraturan</p>
                                    </div>
                                    <div class="border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==================== CONTENT: BERITA TERBARU ========================== -->
                    <div class="card row-span-3 col-span-8" data-aos="fade-down" data-aos-duration="600">
                        <div class="top-banner w-full h-14">
                            <h2>BERITA TERBARU</h2>
                            <div class="dots">
                                <a href="pages/informasi/informasi.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="py-4">
                                <div class="berita">
                                    {{-- menghitung berapa banyak count, jika lebih dari 3 akan berhenti --}}
                                    @php $count = 0 @endphp 
                                    @foreach ($berita as $b)
                                        @if ($count < 3)
                                        <div class="berita-containers">
                                            
                                            <div class="berita-img">
                                                <img class="berita-image" src="{{ asset('assets/img/berita/'.$b->gambar_berita)}}" alt="" loading="lazy">
                                            </div>
                                            <div class="berita-content">
                                                <div class="berita-text px-4 py-1">
                                                    <a href="{{route('detail_berita.data', ['id' => $b->id])}}">
                                                        <h2>{{$b->judul}}</h2>
                                                    </a>
                                                    <div class="berita-info mt-4">
                                                        <div class="">
                                                            <span style="color:gray;font-weight:bold;">{{$b->tema}}</span>
                                                        </div>
                                                        <div class="">
                                                            <p style="color:#C58529;font-weight:bold;">14 September 2023</p>
                                                        </div>
                                                    </div>
                                                    <div class="border-dark "></div>
                                                </div>
                                            </div>
                                        </div>
                                            @php $count++ @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[10rem] overflow-hidden rounded-lg md:h-[40rem]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <iframe class="kemdikbud-vid-yt" width="100%" height="100%" src="https://www.youtube.com/embed/M9S3yezU6Bo?si=MOIL3T0NuSyoVVYb" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <iframe class="kemdikbud-vid-yt" width="100%" height="100%" src="https://www.youtube.com/embed/M9S3yezU6Bo?si=MOIL3T0NuSyoVVYb" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <iframe class="kemdikbud-vid-yt" width="100%" height="100%" src="https://www.youtube.com/embed/M9S3yezU6Bo?si=MOIL3T0NuSyoVVYb" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <iframe class="kemdikbud-vid-yt" width="100%" height="100%" src="https://www.youtube.com/embed/M9S3yezU6Bo?si=MOIL3T0NuSyoVVYb" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <iframe class="kemdikbud-vid-yt" width="100%" height="100%" src="https://www.youtube.com/embed/M9S3yezU6Bo?si=MOIL3T0NuSyoVVYb" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-12 h-12 rounded-full transition-all duration-700 ease-out group-hover:bg-sky-400/50 group-focus:ring-4 group-focus:ring-amber-500 group-focus:outline-none">
                        <svg class="w-8 h-8 text-amber-50 hover:text-slate-50 transition-all ease-out duration-700 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-12 h-12 rounded-full transition-all duration-700 ease-out group-hover:bg-sky-400/50 group-focus:ring-4 group-focus:ring-amber-500 group-focus:outline-none">
                        <svg class="w-8 h-8 text-amber-50 hover:text-slate-50 transition-all ease-out duration-700 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-rows-2 grid-forms md:grid-row gap-4 pb-4">
                    <div class="card row-span-2 col-span-8 z-[1000]" style="padding-bottom: -50px;" data-aos="fade-right" data-aos-duration="500">
                        <div class="top-banner w-full h-14 ">
                            <h2>STATISTIKA PERATURAN</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content" id="graphic-container">
                            <div class="graphic-container">
                                <div class="select-year">
                                    <select name="" id="">
                                        <option value="">2023</option>
                                        <option value="">2022</option>
                                        <option value="">2021</option>
                                        <option value="">2020</option>
                                        <option value="">2019</option>
                                        <option value="">2018</option>
                                        <option value="">2017</option>
                                        <option value="">2016</option>
                                    </select>
                                </div>
                                <div id="peraturan-chart" class="peraturan-charts">
                                    <div class="chart-container-col">
                                        <div id="peraturan-chart" style="width: 900px; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card row-span-1 col-span-4 z-[500]" data-aos="fade-right" data-aos-duration="400" data-aos-delay="200" data-aos-easing="ease-in-out">
                        <div class="top-banner w-full h-14 ">
                            <h2>PENGUNJUNG</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content" style="overflow: hidden;">
                            <div class="graphic-container mt-3">
                                <div class="pengunjung-charts">
                                    <div class="chart-container">
                                        <div id="pengunjung-chart" style="width: 100%; height: 380px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card row-span-1 col-span-4 mt-3" data-aos="fade-down" data-aos-duration="400" data-aos-delay="200" data-aos-easing="ease-in-out">
                        <div class="top-banner w-full h-14 ">
                            <h2>SURVEY KEPUASAN</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="py-4">
                                <div class="feedbacks">
                                    <p>Penilaian anda sangat bermanfaat untuk perbaikan dalam rangka peningkatan kualitas layanan untuk lebih baik lagi.</p>
                                    <a href="https://bit.ly/ikmjdih" target="_blank" class="hover:bg-blue-800">BERI PENILAIAN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========================================================================================================================== 
        =============================== CONTENT: MODAL MODAL MODAL MODAL MODAL MODAL==============================================
        ============================================ START START =================================================================-->
    <div id="modal-base" class="p-0 m-0 fixed right-[0] top-0 bg-black bg-opacity-50 w-[100%] h-screen z-[100000] justify-center items-center flex-col opacity-0 hidden transition-opacity duration-500">
        <!-- MODAL UNTUK SUBJECT PERAATURAN -->
        <div id="modalSubjekPeraturan" class="hidden rounded-3xl overflow-hidden justify-center items-center flex-col lg:w-[27rem] md:w-[60%] sm:w-[90%] xs:w-[90%] mt-[6rem]">
            <div class="top-banner h-14 w-full">
                <h2>SUBJEK PERATURAN</h2>
                <div class="dots">
                    <button onclick="hideModalSubjekPeraturan()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-8 w-full h-[30rem] overflow-y-scroll">
                <!-- ==================== MODAL: SUBJEK PERATURAN ========================== -->
                <div class="" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    
                    <div class="content">
                        <div class="flex flex-wrap justify-center">            
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="1">
                                    <div class="area-box">
                                        <button title="Administrasi"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 13h8v2H3zm0 4h8v2H3zm0-8h8v2H3zm0-4h8v2H3zm16 2v10h-4V7h4m2-2h-8v14h8V5z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">ADMINISTRASI</p>
                                    </div>
                                </form>
                            </div>
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="2">
                                    <div class="area-box">
                                        <button title="Bahasa"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12.87 15.07l-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">BAHASA</p>
                                    </div>
                                </form>
                            </div>
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="3">
                                    <div class="area-box">
                                        <button title="Bantuan/Pendanaan Pendidikan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"></path><circle cx="16" cy="12" r="1.5"></circle></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">BANTUAN</p>
                                    </div>
                                </form>
                            </div>
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="4">
                                    <div class="area-box">
                                        <button title="Buku"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7zm12-4h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">BUKU</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="5">
                                    <div class="area-box">
                                        <button title="Kebudayaan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M14 6l-1-2H5v17h2v-7h5l1 2h7V6h-6zm4 8h-4l-1-2H7V6h5l1 2h5v6z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">KEBUDAYAAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="6">
                                    <div class="area-box">
                                        <button title="Organisasi"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="24" width="24"></rect><path d="M22,11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3H22z M7,9H4V5h3V9z M17,15h3v4h-3V15z M17,5h3v4h-3V5z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">ORGANISASI</p>
                                    </div>
                                </form>
                            </div>
                            
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="7">
                                    <div class="area-box">
                                        <button title="Pengawasan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12zm-2-9H8v2h11V8zm0 4H8v2h11v-2zM7 8H5v2h2V8zm0 4H5v2h2v-2z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PENGAWASAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="8">
                                    <div class="area-box">
                                        <button title="Pengelolaan Satuan Pendidikan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M18.36 9l.6 3H5.04l.6-3h12.72M20 4H4v2h16V4zm0 3H4l-1 5v2h1v6h10v-6h4v6h2v-6h1v-2l-1-5zM6 18v-4h6v4H6z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">SATUAN PENDIDIKAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="9">
                                    <div class="area-box">
                                        <button title="Pendidik dan Tenaga Kependidikan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm.05 10H4.77c.99-.5 2.7-1 4.23-1 .11 0 .23.01.34.01.34-.73.93-1.33 1.64-1.81-.73-.13-1.42-.2-1.98-.2-2.34 0-7 1.17-7 3.5V19h7v-1.5c0-.17.02-.34.05-.5zm7.45-2.5c-1.84 0-5.5 1.01-5.5 3V19h11v-1.5c0-1.99-3.66-3-5.5-3zm1.21-1.82c.76-.43 1.29-1.24 1.29-2.18C19 9.12 17.88 8 16.5 8S14 9.12 14 10.5c0 .94.53 1.75 1.29 2.18.36.2.77.32 1.21.32s.85-.12 1.21-.32z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PENDIDIK &amp; TENDIK</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="10">
                                    <div class="area-box">
                                        <button title="Pendidikan Tinggi"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="60" width="60"></rect><path d="M12,7V3H2v18h20V7H12z M10,19H4v-2h6V19z M10,15H4v-2h6V15z M10,11H4V9h6V11z M10,7H4V5h6V7z M20,19h-8V9h8V19z M18,11h-4v2 h4V11z M18,15h-4v2h4V15z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PENDIDIKAN TINGGI</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="11">
                                    <div class="area-box">
                                        <button title="Perizinan"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PERIZINAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <a href="peraturan" data-toggle="modal" data-target=".bd-example-modal-md">
                                    <div class="area-box">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0z" fill="none"></path><path d="M17 15h2v2h-2zM17 11h2v2h-2zM17 7h2v2h-2zM13.74 7l1.26.84V7z"></path><path d="M10 3v1.51l2 1.33V5h9v14h-4v2h6V3z"></path><path d="M8.17 5.7L15 10.25V21H1V10.48L8.17 5.7zM10 19h3v-7.84L8.17 8.09 3 11.38V19h3v-6h4v6z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">LAINNYA</p>
                                    </div>
                                </a>
                            </div>
                                <div class=" subject-icons">
                                <a href="peraturan" data-toggle="modal" data-target=".bd-example-modal-md">
                                    <div class="area-box">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39s-4.66 1.97-4.66 4.39c0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94s3.08 1.32 3.08 2.94c0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">LAINNYA</p>
                                    </div>
                                </a>
                            </div>

                            <div class=" subject-icons">
                                <a href="peraturan" data-toggle="modal" data-target=".bd-example-modal-md">
                                    <div class="area-box">
                                        <button><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="36px" viewBox="0 0 20 20" width="36px" fill="#000000"><rect fill="none" height="20" width="20"></rect><path d="M4.5,14h6v1.5h-6V14z M13.5,8c0,2.09-1.07,3.93-2.69,5H4.19C2.57,11.93,1.5,10.09,1.5,8c0-3.31,2.69-6,6-6S13.5,4.69,13.5,8 z M12,8c0-2.48-2.02-4.5-4.5-4.5S3,5.52,3,8c0,1.37,0.62,2.65,1.67,3.5h5.65C11.38,10.65,12,9.37,12,8z M7.5,18 C8.33,18,9,17.33,9,16.5H6C6,17.33,6.67,18,7.5,18z M18.5,8l0.47-1.03L20,6.5l-1.03-0.47L18.5,5l-0.47,1.03L17,6.5l1.03,0.47L18.5,8 z M15.5,5l0.78-1.72L18,2.5l-1.72-0.78L15.5,0l-0.78,1.72L13,2.5l1.72,0.78L15.5,5z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">LAINNYA</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL UNTUK LAYANAN -->
        <div id="modalLayanan" class="hidden rounded-3xl overflow-hidden justify-center items-center flex-col lg:w-[27rem] md:w-[60%] sm:w-[90%] xs:w-[90%] mt-[6rem]" >

            <div class="top-banner h-14 w-full">
                <h2>LAYANAN</h2>
                <div class="dots">
                    <button onclick="hideModalLayanan()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </butto>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-8 w-full h-[30rem] ">
                <div class="content">
                    <div class="layout">
                        <div class="row pt-4 -mr-8 overflow-x-hidden">
                            <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                <a href="https://birohukum.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">PORTAL</div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 fam-grid">
                                <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="_blank">
                                  <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIPERPU</div>
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 fam-grid">
                                <a href="https://sibankum.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIBANKUM</div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 fam-grid">
                                <a href="https://sikma.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIKMA</div>
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SJDIH</div>
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                <a href="http://simapel.birohukum.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIMAPEL</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========================================================================================================================== 
        =============================== CONTENT: MODAL MODAL MODAL MODAL MODAL MODAL==============================================
        ============================================ END END =================================================================-->

    <!--========================================================================================================================== 
        =============================== CONTENT: FOOTER FOOTER FOOTER FOOTER ==============================================
        ============================================ END END =================================================================-->

    <section class="footer-section" id="footer-section">
        <div id="link-terkait-slide" class=" px-2 md:mx-auto mx-8 rounded-xl max-w-screen-md h-[7.8rem] bg-gray-100 text-center z-1 relative left-0">
            <button id="prevLinkTerkait" 
                class="prev  bg-white border-2 border-amber-600/90 hover:border-yellow-500/50 group hover:bg-yellow-500/50 hover:backdrop-blur-lg duration-300 rounded-full w-12 h-12 flex hidden items-center justify-center absolute left-4 md:left-12 top-1/2 transform -translate-y-1/2  z-50">
                <i class="fa fa-angle-left fa-2x text-yellow-500/90 group-hover:text-white"></i>
            </button>
            <div id="footer-link-terkait" class="slider-container tns-layanan-slider flex space-x-4 rounded-lg text-center">
                <div
                    class="slider-item bg-white transition-all ease group hover:drop-shadow-2xl hover:border-2 duration-300 rounded-lg p-2 h-[7.6rem] flex items-center flex-col justify-center m-auto">
                    <a href="#" class="flex items-center justify-center h-full">
                        <img class=" h-full object-contain flex-grow" src="{{asset('assets/img/logo/pemerintahanKotaBalikpapan.png')}}" alt="">
                    </a>
                </div>
                <div
                    class="slider-item bg-white transition-all ease group hover:drop-shadow-2xl hover:border-2 duration-300 rounded-lg p-2 h-[7.6rem] flex items-center flex-col justify-center m-auto">
                    <a href="#" class="flex items-center justify-center h-full">
                        <img class=" h-full object-contain flex-grow" src="{{asset('assets/img/logo/jdihkaltim.png')}}" alt="">
                    </a>
                </div>
                <div
                    class="slider-item bg-white transition-all ease group hover:drop-shadow-2xl hover:border-2 duration-300 rounded-lg p-2 h-[7.6rem] flex items flex-col-center justify-center m-auto">
                    <a href="#" class="flex items-center justify-center h-full">
                        <img class=" h-full object-contain flex-grow" src="{{asset('assets/img/logo/logo_jdih_globe.png')}}" alt="">
                    </a>
                </div>
                <div
                    class="slider-item bg-white transition-all ease group hover:drop-shadow-2xl hover:border-2 duration-300 rounded-lg p-2 h-[7.6rem] flex flex-col items-center justify-center m-auto">
                    <a href="#" class="flex items-center justify-center h-full">
                        <img class=" h-full object-contain flex-grow" src="{{asset('assets/img/logo/BPHNExtended.png')}}" alt="">
                    </a>
                </div>
                <div
                    class="slider-item bg-white transition-all ease group hover:drop-shadow-2xl hover:border-2 duration-300 rounded-lg p-2 h-[7.6rem] flex flex-col items-center justify-center m-auto">
                    <a href="#" class="flex items-center justify-center h-full">
                        <img class=" h-full object-contain flex-grow" src="{{asset('assets/img/logo/kementrian dalam negeri.png')}}" alt="">
                    </a>
                </div>
                <div
                    class="slider-item bg-white transition-all ease group hover:drop-shadow-2xl hover:border-2 duration-300 rounded-lg p-2 h-[7.6rem] flex flex-col items-center justify-center m-auto">
                    <a href="#" class="flex items-center justify-center h-full">
                        <img class=" h-full object-contain flex-grow" src="{{asset('assets/img/logo/kemenkumham_jdih.png')}}" alt="">
                    </a>
                </div>
            </div>
            <button id="nextLinkTerkait"
                class="next bg-white border-2 border-amber-600/90 hover:border-yellow-500/50 group hover:bg-yellow-500/50 hover:backdrop-blur-lg duration-300 rounded-full w-12 h-12 flex hidden items-center justify-center absolute right-4 md:right-12 top-1/2 transform -translate-y-1/2 z-50">
                <i class="fa fa-angle-right fa-2x text-yellow-500/90 group-hover:text-white"></i>
            </button>
            <div class="inset-shadow"></div>
        </div>
        <script>
            var slider = tns({
                container: '#footer-link-terkait',
                items: 3,
                nav: false,
                slideBy: 3,
                controlsPosition: 'bottom',
                mouseDrag: true,
                controlsContainer: '#link-terkait-slide',
                speed: 1000,
                autoplay: true,
                autoplayButtonOutput: false,
                prevButton: '#prevLinkTerkait', 
                nextButton: '#nextLinkTerkait',
                responsive: {
                    0: {
                        items: 1,
                    },
                    910: {
                        items: 3,
                    },
                },
            });
        </script>
        <footer class="footer-content">
            <div class="footer-29 pt-5">
                <div class="container ">
                    <div class="grid grid-cols-1 lg:grid-cols34 md:grid-cols-3 sm:grid-cols-3 gap-4">
                        <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                            <ul id="komponen">
                            <li><a href="{{ asset('pages/produk-hukum/peraturan.php') }}">Peraturan</a></li>
                            <li><a href="#">Putusan Pengadilan</a></li>
                            <li><a href="#">Naskah Kerja Sama</a></li>
                            <li><a href="{{ asset('pages/publikasi/inventarisasi.php') }}">Inventarisasi</a></li>
                            <li><a href="{{ asset('pages/pengumuman/statistika.php') }}">Statistik</a></li>
                            </ul>
                        </div>
                        <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                            <ul id="komponen">
                            <li><a href="{{ asset('pages/profil/tentang.php') }}">Tentang</a></li>
                            <li><a href="{{ asset('pages/profil/visi-misi.php') }}">Visi dan Misi</a></li>
                            <li><a href="{{ asset('pages/profil/struktur-organisasi.php') }}">Struktur Organisasi</a></li>
                            <li><a href="pengumuman">Pengumuman</a></li>
                            <li><a href="{{ asset('pages/publikasi/layanan.php') }}">Layanan</a></li>
                            <li><a href="{{ asset('pages/informasi/informasi.php') }}">Berita</a></li>
                            </ul>
                        </div>
                        {{-- <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1 footer-media" > --}}
                        <div class="sub-footer flex flex-col items-start justify-start   my-4" >
                            <h5 class="font-bold text-yellow-400 text-lg" style="margin: -10px 0px 0 -10px;">Media Sosial</h5>
                            <div class="flex gap-2 media-link-footer">
                                <a href="" target="_blank">
                                    <img src="{{asset('assets/img/media/envelope.png')}}" alt="Email" style="width: 24px;" loading="lazy">
                                </a>
                                <a href="" target="_blank">
                                    <img src="{{asset('assets/img/media/facebook.png')}}" alt="Facebook" style="width: 24px;" loading="lazy">
                                </a>
                                <a href="https://twitter.com/birohukumdikbud" target="_blank">
                                    <img src="{{asset('assets/img/media/twitter.png')}}" alt="Twitter" style="width: 24px;" loading="lazy">
                                </a>
                                <a href="https://www.instagram.com/birohukumdikbud/" target="_blank">
                                    <img src="{{asset('assets/img/media/instagram-outline.png')}}" alt="Instagram" style="width: 24px;" loading="lazy">
                                </a>
                                <a href="https://www.youtube.com/channel/UC_teqno_MCTrSKHwfdstXYw" target="_blank">
                                    <img src="{{asset('assets/img/media/youtube.png')}}" alt="Youtube" style="width: 24px;" loading="lazy">
                                </a>
                            </div>
                            <a class="-ml-6 mt-4" href="https://play.google.com/store/apps/details?id=com.bsw_rn" target="_blank">
                                <img src="{{asset('assets/img/logo/gplay.png')}}" style="width: 180px;" loading="lazy">
                            </a>
                        </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3 gap-4 mb-3">
                            <div class="kontak-group md:col-span-2 flex items-center justify-start mt-2">
                                <svg height="48px" width="48px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <polygon class="st0" points="434.162,293.382 434.162,493.862 308.321,493.862 308.321,368.583 203.682,368.583 203.682,493.862 77.841,493.862 77.841,293.382 256.002,153.862 "></polygon> <polygon class="st0" points="0,242.682 256,38.93 512,242.682 482.21,285.764 256,105.722 29.79,285.764 "></polygon> <polygon class="st0" points="439.853,18.138 439.853,148.538 376.573,98.138 376.573,18.138 "></polygon> </g> </g></svg>
                                <p class="ml-2 text-sm"> Bagian Hukum Sekretariat Daerah Kantor Wali Kota Balikpapan Jalan Jenderal Sudirman No. 1 RT.13 Kelurahan Klandasan Ulu Kecamatan Balikpapan Kota
                                Kota Balikpapan Provinsi Kalimantan Timur Kode Pos 76100</p>  
                            </div>
                            <div class="kontak-group flex items-center justify-start mt-2">
                                <svg width="17px" height="17px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#ffffff" transform="rotate(90)" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>phone</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-258.000000, -309.000000)" fill="#ffffff"> <path d="M289.073,313.433 L286.195,310.563 C285.401,309.77 284.112,309.77 283.317,310.563 L279,316.303 C278.341,317.274 278.206,318.38 279,319.173 L280.762,320.93 C279.456,322.68 277.888,324.588 276.123,326.348 C274.127,328.338 271.907,330.147 269.911,331.633 L268.208,329.936 C267.414,329.143 266.305,329.277 265.33,329.936 L259.574,334.241 C258.609,334.906 258.779,336.318 259.574,337.111 L262.452,339.98 C264.042,341.566 266.109,341.058 268.208,339.98 C268.208,339.98 274.561,336.424 280,331 C285.116,325.898 289.073,319.173 289.073,319.173 C289.898,316.91 290.663,315.018 289.073,313.433" id="phone" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                                <div class="text flex flex-col">
                                    <p class="ml-2 text-sm"> Telp. 0542-421500, 421600, 734115</p>  
                                    <p class="ml-2 text-sm"> HP. +62 813 5033 0453</p>  
                                </div>
                            </div>
                            <div class="kontak-group flex items-center justify-start mt-2">
                                <svg fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="26px" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="7935ec95c421cee6d86eb22ecd12600d"> <path style="display: inline;" d="M170.591,239.406L1.584,429.263c-0.433-1.911-1.084-3.759-1.084-5.852V88.589 c0-2.541,0.71-4.837,1.356-7.144L170.591,239.406z M493.987,65.524c-1.238-0.277-2.424-0.876-3.79-0.876H21.819 c-1.297,0-2.456,0.599-3.769,0.876l237.961,222.734L493.987,65.524z M262.808,313.021c-1.954,1.869-4.372,2.777-6.797,2.777 c-2.419,0-4.842-0.908-6.775-2.777l-62.21-58.217L16.656,446.145c1.698,0.523,3.364,1.207,5.163,1.207h468.378 c1.89,0,3.534-0.684,5.243-1.207L325.082,254.804L262.808,313.021z M341.494,239.406l168.98,189.836 c0.459-1.911,1.025-3.759,1.025-5.831V88.589c0-2.499-0.62-4.837-1.26-7.133L341.494,239.406z"> </path> </g> </g></svg>
                                <p class="ml-2 text-sm"> jdihbalikpapan@gmail.com, bagian.hukum@balikpapan.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- copyright -->
            <section class="w3l-copyright text-center ">
                <div class="container">
                    <hr class="copyright-border">
                    <p class="copy-footer-29 mt-4" style="font-size: 15px;">
                        2023 © <a href="https://birohukum.kemdikbud.go.id" target="_blank">Biro Hukum.</a>
                    <a href="https://kemdikbud.go.id" target="_blank"> Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</a>
                    </p>
                </div>
                <div id="beruangBottomLogo" class="fixed md:left-4 md:bottom-4 right-0 bottom-[4.3rem] lg:w-24 w-20 sway-animate z-[50]">
                    {{-- <img src="{{asset('assets/img/logo/helarctos-malayanus.png')}}" alt="gambar beruang"> --}}
                </div>
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
                <button id="toTopBtn" title="Go to top" class="move-to-top-btn shadow-md z-50">
                    ^
                </button>
            </section>
            <!-- //copyright -->
        </footer>
    </section>
    
    <script>
        const carouselElement: HTMLElement = document.getElementById('carousel-banner');
    </script>
    @include('pages.partials.__jqueries')
    <!-- AOS CODES -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
    