
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">SOP</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>SOP</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center pb-10">
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative grid grid-cols-1 gap-4">
            <!-- ==================== LIST PROFILS ========================== -->
            <div class="col-span-1">
                <div class="card animate-slide-up">
                    <div class="content rounded-border-content">
                        <div>
                            <div class="mb-2 flex flex-col md:flex-row md:justify-center items-start">
                                <a class="py-1 px-5 hover:font-semibold" href="/tentang">Tentang Kami</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/visi-misi">Visi dan Misi</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/struktur-organisasi">Struktur Organisasi</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/prasyarat">Prasyarat</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/faq">Faq</a>
                            </div>
                        </div>
                        <div>
                            <div class="flex h-8 flex-row items-center align-center justify-start md:justify-center">
                                <p class="mr-3 text-gray-400 font-semibold" style="user-select: none;">Lainnya</p>
                                <hr class="mt-10 h-[4px] my-8 bg-blue-900 bg-opacity-50 rounded-lg border-0 w-[100%]">
                            </div>
                            <div class="flex flex-col md:flex-row md:justify-center flex-wrap items-start ">
                                <a class="py-1 px-5 hover:font-semibold" href="/bpp-sejarah-balikpapan">Sejarah Balikpapan</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/bpp-profil-jdih">Profil JDIH</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/bpp-visi-misi">Visi dan Misi</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/bpp-tugas-pokok-fungsi">Tugas Pokok dan Fungsi</a>
                                <a class="py-1 px-5 hover:font-semibold active" href="/bpp-sop">SOP</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/bpp-sambutan-kabag-hukum">Sambutan Kabag Hukum</a>
                                <a class="py-1 px-5 hover:font-semibold" href="/bpp-struktur-organisasi">Struktur Organisasi</a>
                                <a class="py-1 px-5 hover:font-semibold" href="{{route('bpp-pengelola-jdih')}}">Pengelola JDIH</a>
                                <a class="py-1 px-5 border-l-4 border-yellow-500 text-black font-bold" href="/bpp-sk-tim-teknis">SK Tim Teknis</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- ==================== ISI ========================== -->
                <div class="col-span-1 ">
                    <div class="card reverse-pad">
                        <div class="px-2 rounded-border-content">
                            <div class="layout text-justify pt-5 isi-profil ">
                                <section class="pb-10 h-[40rem]">
                                    <div class="px-4 pb-4">

                                        <h1>SK Tim Teknis</h1>
                                        <ul class="text-blue-500">
                                            <li>
                                                <a href="https://jdih.balikpapan.go.id/assets/sk-tim-teknis.pdf" target="_newtab" class="btn-link">SK Tim Teknis</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-full h-full rounded-lg">
                                        <embed 
                                            src="{{asset('assets/file/sk-tim-teknis.pdf')}}" 
                                            type="application/pdf"
                                            width="100%"
                                            height="94%"
                                        >
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    @include('pages.partials.__footer')