<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMDIKBUD </title>
    <link href="{{ asset('assets/css/root.css') }}" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/TutWuriHandayani.png') }}">
    {{-- TAILWIND CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- FLOWBITE CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css">
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    {{-- google charts --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 

    {{-- MY JS --}}
    <script src="{{asset('assets/js/main/main.js')}}"></script>
</head>
<body style="background-color: #F1F4FA;">
    <nav class="bg-white border-gray-200 shadow-lg fixed top-0 w-full lg:h-[6rem] sm:h-[5rem]">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center navbar-logos">
                <img src="{{ asset('assets/img/logo/logo_jdih_globe.png') }}" class="h-16 mr-3" alt="Flowbite Logo" />
                <img src="{{ asset('assets/img/logo/logo_jdih_kemdikbud.png') }}" class="h-16 mr-3" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-blue-800 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-200" aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="/" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">
                            BERANDA
                        </a>
                    </li>
                    <li class="group inline-block">
                        <button class="outline-none focus:outline-non rounded-sm flex items-center min-w-1 py-2 text-gray-900 hover:bg-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">
                            <span class="text-sm pr-1 font-semibold flex-1">PROFIL</span>
                        </button>
                        <ul class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 z-50">
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
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sejarah Balikpapan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profil JDIH</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Tugas Dan Pokok Fungsi</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">SOP</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sambutan Kabag Hukum</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Pengelola JDIH</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">SK Tim Teknis</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/show_peraturan" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">
                            PRODUK HUKUM
                        </a>
                    </li>
                    <li class="group inline-block">
                        <button class="outline-none focus:outline-non rounded-sm flex items-center min-w-1 py-2 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">
                            <span class="text-sm pr-1 font-semibold flex-1">PUBLIKASI</span>
                            
                        </button>
                        <ul class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 z-50">
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/layanan" >
                                    Layanan
                                </a>
                            </li>
                            <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                <a href="/investasi" >
                                    Investasi
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ Route('berita.data') }}" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                            INFORMASI
                        </a>
                    </li>
                    <li>
                        <a href="/kontak" class="text-sm block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                            KONTAK
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    