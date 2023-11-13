
@include('pages.partials.__header')
@include('charts.survey')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Faq</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Hasil Survey</h1>
                    {{-- <p></p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center pb-10 overflow-hidden" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== SURVEY ========================== -->
                    <div class="card row-span-3 col-span-12 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-start pt-5 md:-ml-[8rem] -ml-[3rem]">
                                <h1 class=" md:ml-[8rem] ml-[3rem] text-blue-800 font-bold text-2xl">Apakah tampilan website jdih.kemdikbud.go.id mudah dipahami <span class="text-yellow-600">(user friendly)?</span> </h1>
                                <div id="survey_ui" class="md:w-[115%] w-[120%] -mt-8"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== SURVEY ========================== -->
                    <div class="card row-span-3 col-span-12 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-start pt-5 md:-ml-[8rem] -ml-[3rem]">
                                <h1 class=" md:ml-[8rem] ml-[3rem] text-blue-800 font-bold text-2xl">Apakah Akses pencarian pada jdih.kemdikbud.go.id <span class="text-yellow-600">mudah digunakan ?</span> </h1>
                                <div id="search_ux" class="md:w-[115%] w-[120%] -mt-8"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== SURVEY ========================== -->
                    <div class="card row-span-3 col-span-12 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-start pt-5 md:-ml-[8rem] -ml-[3rem]">
                                <h1 class=" md:ml-[8rem] ml-[3rem] text-blue-800 font-bold text-2xl">Dokumen atau informasi hukum yang ada di jdih.kemdikbud.go.id <span class="text-yellow-600">lengkap ?</span> </h1>
                                <div id="kelengkapan_dokumen" class="md:w-[115%] w-[120%] -mt-8"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== SURVEY ========================== -->
                    <div class="card row-span-3 col-span-12 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-start pt-5 md:-ml-[8rem] -ml-[3rem]">
                                <h1 class=" md:ml-[8rem] ml-[3rem] text-blue-800 font-bold text-2xl">Dokumen atau informasi hukum yang ada di jdih.kemdikbud.go.id <span class="text-yellow-600">otentik/valid ?</span> </h1>
                                <div id="validaded_dokumen" class="md:w-[115%] w-[120%] -mt-8"></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')