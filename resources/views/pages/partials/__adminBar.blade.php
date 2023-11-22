
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'JDIH Balikpapan' }}</title>
    <link href="{{ asset('assets/css/root.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/TutWuriHandayani.png') }}">
    {{-- TAILWIND CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- FLOWBITE CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css">
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    {{-- FANCY APPS --}}
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    {{-- google charts --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> 

    {{-- MY JS --}}
    <script src="{{asset('assets/js/main/main.js')}}"></script>
</head>
<body style="background-color: #dee5f1;">
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-lg" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 navbar">
            <ul class="flex flex-row justify-center border-b-4 border-b-yellow-500 pb-3">
                <li>
                    <a href="">
                        <img src="{{ asset('assets/img/logo/logo_jdih_globe.png') }}" class="h-16 mr-3" alt="Flowbite Logo" />
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('assets/img/logo/logo_kota_balikpapan.svg') }}" class="h-16 mr-3" alt="Flowbite Logo" />
                    </a>
                </li>
            </ul>
            <div class="flex flex-col justify-between h-[79vh] mt-3">
                <ul class="space-y-2 font-medium navlink">
                    <li class="">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap slide-link">Dashboard</span>
                        </a>
                    </li>
                    <li class="active-nav">
                        <a href="{{route('getBerita.data')}}" class="flex items-center p-2 text-gray-900 rounded-lg ">
                            <svg fill="#000000" height="26px" width="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.00 512.00" xml:space="preserve" stroke="#000000" stroke-width="0.00512"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="6.144"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M474.411,10.667H120.704c-20.742,0-35.371,14.629-35.371,35.371V224h-64C9.551,224,0,233.551,0,245.333v192 c0,34.899,27.915,63.24,62.64,63.966c0.446,0.022,0.899,0.034,1.36,0.034h410.411c20.763,0,37.589-16.826,37.589-37.589V48.256 C512,27.493,495.174,10.667,474.411,10.667z M42.667,266.667h42.667v170.667c0,0.481-0.041,0.951-0.072,1.423 c-0.862,9.603-10.235,18.977-19.838,19.838c-0.473,0.031-0.943,0.072-1.423,0.072c-11.791,0-21.333-9.542-21.333-21.333V266.667z M469.333,458.667H124.346c2.056-5.817,3.297-12.017,3.582-18.469c0.047-0.951,0.072-1.906,0.072-2.864v-192v-192h341.333 V458.667z"></path> <path d="M341.333,416h64c11.782,0,21.333-9.551,21.333-21.333c0-11.782-9.551-21.333-21.333-21.333h-64 c-11.782,0-21.333,9.551-21.333,21.333C320,406.449,329.551,416,341.333,416z"></path> <path d="M341.333,138.667h64c11.782,0,21.333-9.551,21.333-21.333c0-11.782-9.551-21.333-21.333-21.333h-64 C329.551,96,320,105.551,320,117.333C320,129.115,329.551,138.667,341.333,138.667z"></path> <path d="M341.333,202.667h64c11.782,0,21.333-9.551,21.333-21.333c0-11.782-9.551-21.333-21.333-21.333h-64 C329.551,160,320,169.551,320,181.333C320,193.115,329.551,202.667,341.333,202.667z"></path> <path d="M192,416h64c11.782,0,21.333-9.551,21.333-21.333c0-11.782-9.551-21.333-21.333-21.333h-64 c-11.782,0-21.333,9.551-21.333,21.333C170.667,406.449,180.218,416,192,416z"></path> <path d="M192,352h64c11.782,0,21.333-9.551,21.333-21.333V117.333C277.333,105.551,267.782,96,256,96h-64 c-11.782,0-21.333,9.551-21.333,21.333v213.333C170.667,342.449,180.218,352,192,352z M213.333,138.667h21.333v170.667h-21.333 V138.667z"></path> <path d="M341.333,352h64c11.782,0,21.333-9.551,21.333-21.333v-85.333c0-11.782-9.551-21.333-21.333-21.333h-64 C329.551,224,320,233.551,320,245.333v85.333C320,342.449,329.551,352,341.333,352z M362.667,266.667H384v42.667h-21.333V266.667 z"></path> </g> </g> </g> </g></svg>
                            <span class="flex-1 ms-3 whitespace-nowrap slide-link">Berita</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('getBerita.data')}}" class="flex items-center p-2 text-gray-900 rounded-lg ">
                            <svg fill="#1a1a1a" width="26px" height="26px" viewBox="0 0 24 24" id="gallery-collections-left" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color" stroke="#1a1a1a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M3,8V19a1,1,0,0,0,1,1H19" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary" d="M16.24,8.68,21,13.44V15a1,1,0,0,1-1,1H16.59l-3.83-3.83ZM7,12.26V15a1,1,0,0,0,1,1h8.59L9.92,9.33ZM21,5V15a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V5A1,1,0,0,1,8,4H20A1,1,0,0,1,21,5Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg>
                            <span class="flex-1 ms-3 whitespace-nowrap slide-link">Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                            <svg width="26px" height="26px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>law-scale</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="Q3_icons" data-name="Q3 icons"> <path d="M46,25,38,5.7h0A38.3,38.3,0,0,0,24,3,38.3,38.3,0,0,0,10,5.7h0L2,25H2v2a8,8,0,0,0,16,0V25h0L11.6,10l.3-.8A34.3,34.3,0,0,1,22,7.1V41H15a2,2,0,0,0,0,4H33a2,2,0,0,0,0-4H26V7.1A34.3,34.3,0,0,1,36.1,9.2l.3.8L30,25h0v2a8,8,0,0,0,16,0V25ZM14.2,25h-9L10,14.3ZM38,14.3,42.2,25h-9Z"></path> </g> </g> </g></svg>
                            <span class="flex-1 ms-3 whitespace-nowrap slide-link ">Peraturan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg ">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap slide-link ">Products</span>
                        </a>
                    </li>
                </ul>
                <ul class="bottom-sidebar h-[20vh] flex flex-col justify-center rounded-lg">
                    <li>
                        <a href="/" class="flex items-center justify-center align-center p-2 text-cyan-50 rounded-lg">
                            {{-- SVG HERE --}}
                            <svg fill="#ffffff" height="25px" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-50.05 -50.05 485.07 485.07" xml:space="preserve" stroke="#ffffff" stroke-width="38.4971"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="Sign_Out"> <path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03 C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03 C192.485,366.299,187.095,360.91,180.455,360.91z"></path> <path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279 c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179 c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
                            <span class="flex-1 ms-3 whitespace-nowrap slide-link  text-cyan-50 font-bold">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </aside>
    