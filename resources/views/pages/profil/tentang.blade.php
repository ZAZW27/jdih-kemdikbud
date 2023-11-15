@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Tentang kami</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Tentang Kami</h1>
                    <p>tentang jaringan dokumentasi dari informasi hukum Kemendikbudristek</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12  grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: SUBJEK PERATURAN ========================== -->
                    <div class="card row-span-1 col-span-4 animate-slide-up lg:sticky md:sticky top-[7rem]">
                        <div class="content rounded-border-content">
                            <div class="profil-info mb-2">   
                                <a class="py-1 px-5 active" href="/tentang">Tentang Kami</a>         
                                <a class="py-1 px-5 " href="/visi-misi">Visi dan Misi</a>         
                                <a class="py-1 px-5 " href="/struktur-organisasi">Struktur Organisasi</a>         
                                <a class="py-1 px-5 " href="/prasyarat">Prasyarat</a>         
                                <a class="py-1 px-5 " href="/faq">Faq</a>         
                            </div> 
                            <div class="flex h-8 flex-row items-center align-center">
                                <p class="mr-3 text-gray-400 font-semibold" style="user-select: none;">Lainnya</p>
                                <hr class="mt-10 h-[4px] my-8 bg-blue-900 bg-opacity-50 rounded-lg border-0 w-[100%]">
                            </div>
                            <div class="profil-info">   
                                <a class="py-1 px-5 " href="/bpp-sejarah-balikpapan">Sejarah Balikpapan</a>         
                                <a class="py-1 px-5 " href="/bpp-profil-jdih">Profil JDIH</a>         
                                <a class="py-1 px-5 " href="/bpp-visi-misi">Visi dan Misi</a>         
                                <a class="py-1 px-5 " href="/bpp-tugas-pokok-fungsi">Tugas Pokok dan Fungsi</a>         
                                <a class="py-1 px-5 " href="/bpp-sop">SOP</a>         
                                <a class="py-1 px-5 " href="/bpp-sambutan-kabag-hukum">Sambutan Kabag Hukum</a>         
                                <a class="py-1 px-5 " href="/bpp-struktur-organisasi">Struktur Organisasi</a>         
                                <a class="py-1 px-5 " href="{{route('bpp-pengelola-jdih')}}">Pengelola JDIH</a>         
                                <a class="py-1 px-5 " href="/bpp-sk-tim-teknis">SK Tim Teknis</a>         
                            </div> 
                        </div>
                    </div>
                    <!-- ==================== CONTENT: LAYANAN ========================== -->
                    <div class="card row-span-3 col-span-8 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <section class="pb-10">
                                    <h1>TENTANG JDIH KEMENDIKBUDRISTEK</h1>
                                    <p>Jaringan Dokumentasi dan Informasi Hukum (JDIH) di Lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi yang selanjutnya disingkat JDIH Kemendikbudristek adalah wadah pendayagunaan bersama atas dokumen hukum bidang pendidikan, kebudayaan, riset, dan teknologi secara tertib, terpadu, dan berkesinambungan serta merupakan sarana pemberian pelayanan informasi hukum bidang pendidikan, kebudayaan, riset, dan teknologi secara lengkap, mudah, cepat, dan akurat. JDIH Kemendikbudristek merupakan sistem yang dibangun untuk melaksanakan sebagian tugas pokok dan fungsi Biro Hukum Sekretariat Jenderal Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi yaitu melaksanakan pendokumentasian dan penyebarluasan peraturan perundang-undangan bidang pendidikan dan kebudayaan serta produk hukum lainnya, khususnya yang berkaitan dengan tugas pokok dan fungsi Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                                </section>
                                <section>
                                    <h1>DASAR HUKUM</h1>
                                    <p>Landasan hukum yang menjadi latar belakang pembentukan JDIH Kemendikbudristek dapat diuraikan sebagai berikut:</p>
                                    <p>1. Peraturan Presiden Nomor 33 Tahun 2012 tentang Jaringan Dokumentasi Dan Informasi Hukum Nasional.</p>
                                    <p>2. Peraturan Menteri Hukum dan Hak Asasi Manusia Nomor 8 Tahun 2019 tentang Standar Pengelolaan Dokumen dan Informasi Hukum.</p>
                                </section>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('pages.partials.__footer')