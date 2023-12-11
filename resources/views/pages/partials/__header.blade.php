<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'JDIH Balikpapan' }}</title>
    <link href="{{ asset('assets/css/root.css') }}" rel="stylesheet">
    {{-- My Scripts --}}
    <script defer src="{{asset('assets/js/main/modals.js')}}"></script>
    <script async src="{{asset('assets/js/main/main.js')}}"></script>
    <script async src="{{asset('assets/js/main/resize.js')}}"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/TutWuriHandayani.png') }}">
    {{-- TAILWIND CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Load Flowbite and Alpine.js from CDN -->           
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <!-- Load the latest version of Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/l10n/de.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css"/>
    {{-- Tiny slider --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    {{-- google charts --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body style="background-color: #F1F4FA;">
    <nav class="md:bg-white md:border-gray-200 bg-slate-800/30 shadow-lg fixed top-0 w-full lg:h-[6rem] sm:h-[5rem] backdrop-blur-sm transition-all duration-200 ease-in" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center navbar-logos">
                <img src="{{ asset('assets/img/logo/logo_jdih_globe.png') }}" class="h-16 mr-3" alt="Logo kemdikbud" loading="lazy" />
                <img src="{{ asset('assets/img/logo/logo_kota_balikpapan.svg') }}" class="h-16 -ml-3" alt="Logo Balikpapan" loading="lazy" />
                <img src="{{ asset('assets/img/logo/helarctos-malayanus.png') }}" class="h-16 -ml-2" alt="Beruang" loading="lazy" />
            </a>
            <button id="collapse-nav-btn" data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-blue-800 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-200 transition-all duration-100 ease-linear" aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:w-auto md:h-auto md:flex md:items-center md:mx-auto lg:mx-0" id="navbar-multi-level">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-0 md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="/" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:px-3 lg:py-4 md:py-1">
                            BERANDA
                        </a>
                    </li>
                    <li class="group inline-block">
                        <button class="outline-none focus:outline-non rounded-sm flex items-center min-w-1 py-2 text-gray-900 hover:bg-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:px-3 lg:py-4 md:py-1">
                            <span class="text-sm font-semibold flex-1">PROFIL</span>
                        </button>
                        <ul class="bg-white border shadow-lg rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 z-50">
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/tentang" >
                                    tentang kami
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/visi-misi" >
                                    Visi dan Misi
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/struktur-organisasi" >
                                    Struktur Organisas
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/prasyarat" >
                                    Prasyarat
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/faq " >
                                    Faq
                                </a>
                            </li>

                            <li>
                                <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
                                    Lainnya
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                </button>
                                <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44">
                                    <ul class="py-2 text-sm text-black " aria-labelledby="doubleDropdownButton">
                                        <li>
                                            <a href="/bpp-sejarah-balikpapan" class="block px-4 py-2 hover:bg-gray-100">Sejarah Balikpapan</a>
                                        </li>
                                        <li>
                                            <a href="/bpp-profil-jdih" class="block px-4 py-2 hover:bg-gray-100">Profil JDIH</a>
                                        </li>
                                        <li>
                                            <a href="/bpp-visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi dan Misi</a>
                                        </li>
                                        <li>
                                            <a href="/bpp-tugas-pokok-fungsi" class="block px-4 py-2 hover:bg-gray-100">Tugas Pokok</a>
                                        </li>
                                        <li>
                                            <a href="/bpp-sop" class="block px-4 py-2 hover:bg-gray-100">SOP</a>
                                        </li>
                                        <li>
                                            <a href="/bpp-sambutan-kabag-hukum" class="block px-4 py-2 hover:bg-gray-100">Sambutan Kabag Hukum</a>
                                        </li>
                                        <li>
                                            <a href="/bpp-struktur-organisasi" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
                                        </li>
                                        <li>
                                            <a href="{{route('bpp-pengelola-jdih')}}" class="block px-4 py-2 hover:bg-gray-100">Pengelola JDIH</a>
                                        </li>
                                        <li>
                                            <a href="/bpp-sk-tim-teknis" class="block px-4 py-2 hover:bg-gray-100">SK Tim Teknis</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="group inline-block">
                        <button class="outline-none focus:outline-non rounded-sm flex items-center min-w-1 py-2 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:px-3 lg:py-4 md:py-1">
                            <span class="text-sm font-semibold flex-1">DOKUMEN DAN HUKUM</span>
                        </button>
                        <ul class="bg-white border shadow-lg rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 z-50">
                            <div class="flex h-3 mt-2 flex-row items-center align-center pl-1 pr-6">
                                <p class="mr-3 text-gray-400 font-semibold text-sm" style="user-select: none;">Hukum</p>
                                <hr class="mt-10 h-[2px] my-8 bg-gray-500 bg-opacity-50 rounded-lg border-0 w-[100%]">
                            </div>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan?jenis-peraturan=16" >
                                    Peraturan Daerah (PERDA)
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan?jenis-peraturan=22">
                                    Rancangan Peraturan Daerah (RAPERDA)
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan?jenis-peraturan=17" >
                                    Peraturan Walli Kota
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan?jenis-peraturan=23" >
                                    Rancangan Peraturan Wali Kota
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan?jenis-peraturan=18" >
                                    Surat Edaran Wali Kota
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan?jenis-peraturan=21" >
                                    Instruksi Wali Kota
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan?jenis-peraturan=20" >
                                    MOU
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/show_peraturan" >
                                    Lainnya
                                </a>
                            </li>
                            <div class="flex h-3 flex-row items-center align-center py-2 pl-1 pr-6">
                                <p class="mr-3 text-gray-400 font-semibold text-sm" style="user-select: none;">Dokumen</p>
                                <hr class="mt-10 h-[2px] my-8 bg-gray-500 bg-opacity-50 rounded-lg border-0 w-[100%]">
                            </div>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="{{route('dokumen.data')}}" >
                                    Penelusuran Dokumen
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="group inline-block">
                        <button class="outline-none focus:outline-non rounded-sm flex items-center min-w-1 py-2 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:px-3 lg:py-4 md:py-1">
                            <span class="text-sm font-semibold flex-1">PUBLIKASI</span>
                        </button>
                        <ul class="bg-white border shadow-lg rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 z-50">
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/layanan" >
                                    Layanan
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="{{Route('getPublikasi.data')}}" >
                                    Inventarisasi
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="group inline-block">
                        <button class="outline-none focus:outline-non rounded-sm flex items-center min-w-1 py-2 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:px-3 lg:py-4 md:py-1">
                            <span class="text-sm font-semibold flex-1">INFORMASI</span>
                        </button>
                        <ul class="bg-white border shadow-lg rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 z-50">
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="{{ Route('berita.data') }}" >
                                    Berita
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="{{route('getGaleri.public')}}" >
                                    Galeri
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="{{ Route('berita.data') }}" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:px-3 lg:py-4 md:py-1">
                            INFORMASI
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a href="/kontak" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                            KONTAK
                        </a>
                    </li> --}}
                    <li class="group inline-block">
                        <button class="outline-none focus:outline-non rounded-sm flex items-center min-w-1 py-2 text-gray-900 hover:bg-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:px-3 lg:py-4 md:py-1">
                            <span class="text-sm font-semibold flex-1">LAINNYA</span>
                        </button>
                        <ul class="bg-white border shadow-lg rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 z-50">
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100" >
                                <a id="toKontak" href="/kontak" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                                    KONTAK
                                </a>
                            </li>
                            <li>
                                <button id="surveydownButton" data-dropdown-toggle="surveydown" data-dropdown-placement="left-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 md:px-3 lg:py-4 md:py-1">
                                    SURVEY
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                </button>
                                <div id="surveydown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44">
                                    <ul class="py-2 text-sm text-black " aria-labelledby="surveydownButton">
                                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                            <a href="/survey" >
                                                Survey
                                            </a>
                                        </li>
                                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                            <a href="{{route('show_survey.data')}}" >
                                                Hasil Survey
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="relative block md:-right-4 md:-top-2 lg:-top-0">
                        @guest
                            <a href="{{ route('login') }}" class="text-sm block py-2 text-slate-50 hover:text-slate-500 rounded-xl md:font-bold font-semibold hover:font-semibold hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-sky-700 md:p-0 md:px-3 md:py-3 bg-blue-500  transition-all duration-300 ease-in-out">
                                LOGIN
                            </a>
                        @else
                            <!-- You can customize this part to show different content for logged-in users -->
                            <a href="{{ url('/admin') }}" class="text-sm block py-2 text-slate-50 hover:text-slate-500 rounded-xl md:font-bold font-semibold hover:font-semibold hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-sky-700 md:p-0 md:px-3 md:py-3 bg-blue-500  transition-all duration-300 ease-in-out">
                                {{ Auth::user()->name }}
                            </a>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        $(document).ready(function() {
            var pageTitle = "{{ isset($title) ? $title : 'JDIH Balikpapan' }}";
            // Function to update navbar styles based on scroll position
            function updateNavbarStyles() {
                var scrollPosition = $(window).scrollTop();

                // Define the scroll threshold for color change
                var scrollThreshold = pageTitle.toLowerCase().includes('main') ? 627 : 200;

                // meet requirement
                var FooterSection = $('#footer-section').offset().top - 90;
                // Check if the viewport width is less than or equal to 768 pixels (mobile view)
                if ($(window).width() <= 768) {
                    if (scrollPosition > scrollThreshold && scrollPosition < FooterSection) {
                        // If scrolled beyond the threshold but not to the footer section, change styles
                        $('#navbar').removeClass('bg-slate-800/30').addClass('bg-white');
                        $('#collapse-nav-btn').removeClass('text-white').addClass('text-blue-800');
                    } else if (scrollPosition >= FooterSection) {
                        // If scrolled to or beyond the footer section, change styles accordingly
                        $('#navbar').addClass('bg-slate-800/30').removeClass('bg-white');
                        $('#collapse-nav-btn').addClass('text-white').removeClass('text-blue-800');
                    } else {
                        // If not scrolled beyond the threshold or to the footer section, revert to the original styles
                        $('#navbar').removeClass('bg-white').addClass('bg-slate-800/30');
                        $('#collapse-nav-btn').removeClass('text-blue-800').addClass('text-white');
                    }

                    // BOTTOM FUNCTION
                } else {
                // If not in mobile view, revert to the original styles
                $('#navbar').removeClass('bg-white').addClass('bg-slate-800/30');
                }
            }
        
            // Attach the updateNavbarStyles function to the scroll event
            $(window).scroll(updateNavbarStyles);
        
            // Attach the updateNavbarStyles function to the window resize event
            $(window).resize(updateNavbarStyles);
        });
    </script>
    