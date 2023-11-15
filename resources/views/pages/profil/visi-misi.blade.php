
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Visi dan Misi</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Visi dan Misi</h1>
                    <p>visi dan misi pembentukan jaringan dokumentasi dan informasi hukum</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: SUBJEK PERATURAN ========================== -->
                    <div class="card row-span-1 col-span-4 animate-slide-up lg:sticky md:sticky top-[7rem]">
                        <div class="content rounded-border-content">
                            <div class="profil-info mb-2">   
                                <a class="py-1 px-5 " href="/tentang">Tentang Kami</a>         
                                <a class="py-1 px-5 active" href="/visi-misi">Visi dan Misi</a>         
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
                    <div class="card row-span-3 col-span-8 reverse-pad ">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <section class="pb-10">
                                    <h1>VISI DAN MISI</h1>
                                    <p class="pb-5">Dalam rangka pembentukan JDIH Kemendikbudristek, Biro Hukum mempunyai visi sebagai berikut: Terwujudnya peningkatan layanan prima dalam penyediaan informasi hukum di bidang pendidikan, kebudayaan, riset, dan teknologi yang lengkap dan akurat.</p>
                                    <p class="pb-1">Dalam mewujudkan visi tersebut, JDIH Kemendikbudristek mempunyai misi yang dapat diuraikan sebagai berikut:</p>
                                    <p class="pb-1">1. Mengoptimalkan pengolahan dan penyajian dalam rangka penyebarluasan peraturan perundang-undangan di bidang pendidikan, kebudayaan, riset, dan teknologi yang terpadu dan terpusat untuk dikelola dan dimanfaatkan bersama.</p>
                                    <p class="pb-1">2. Meningkatkan pelayanan dan memberikan kemudahan akses kepada pimpinan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi pada khususnya dan publik pada umumnya untuk mendapatkan informasi peraturan perundang-undangan di bidang pendidikan, kebudayaan, riset, dan teknologi dalam rangka mendukung terwujudnya e-Goverment.</p>
                                    <p class="pb-1">3. Memperluas dan mengefektifkan jaringan kerja dengan Pusat JDIH Nasional dan antar Anggota JDIH Nasional, dalam rangka meningkatkan kinerja JDIH di bidang pendidikan, kebudayaan, riset, dan teknologi.</p>
                                </section>
                                <section>
                                    <h1>MAKSUD DAN TUJUAN</h1>
                                    <p class="pb-1">Maksud dan tujuan dari pembentukan JDIH Kemendikbudristek dapat diuraikan sebagai berikut:</p>
                                    <p class="pb-1">1. Menjamin terciptanya pengelolaan dokumentasi dan informasi hukum bidang pendidikan, kebudayaan, riset, dan teknologi yang terpadu dan terintegrasi di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                                    <p class="pb-1">2. Menjamin ketersediaan dokumentasi dan informasi hukum bidang pendidikan, kebudayaan, riset, dan teknologi yang lengkap dan akurat serta dapat diakses secara cepat dan mudah.</p>
                                    <p class="pb-1">3. Mengembangkan kerja sama yang efektif antara Pusat JDIH dan Anggota JDIH serta antar sesama Anggota JDIH dalam rangka penyediaan dokumentasi dan informasi hukum bidang pendidikan, kebudayaan, riset, dan teknologi.</p>
                                    <p >4. Meningkatkan kualitas pembangunan hukum bidang pendidikan, kebudayaan, riset, dan teknologi pada khususnya dan hukum nasional pada umumnya serta pelayanan kepada publik sebagai salah satu wujud ketatapemerintahan yang baik, transparan, efektif, efisien, dan bertanggung jawab.</p>
                                </section>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')