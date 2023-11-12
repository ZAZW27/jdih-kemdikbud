
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Visi Misi BPP</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Visi dan Misi Balikpapan</h1>
                    <p>Menunjukkan apa saja visi dan misi kota Balikpapan</p>
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== LIST PROFILS ========================== -->
                    <div class="card row-span-1 col-span-4 animate-slide-up lg:sticky md:sticky top-[7rem]">
                        <div class="content rounded-border-content">
                            <div class="profil-info mb-2">   
                                <a class="py-1 px-5 " href="/tentang">Tentang Kami</a>         
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
                                <a class="py-1 px-5 active" href="/bpp-visi-misi">Visi dan Misi</a>         
                                <a class="py-1 px-5 " href="/bpp-tugas-pokok-fungsi">Tugas Pokok dan Fungsi</a>         
                                <a class="py-1 px-5 " href="/bpp-sop">SOP</a>         
                                <a class="py-1 px-5 " href="/bpp-sambutan-kabag-hukum">Sambutan Kabag Hukum</a>         
                                <a class="py-1 px-5 " href="/bpp-struktur-organisasi">Struktur Organisasi</a>         
                                <a class="py-1 px-5 " href="/bpp-pengelola-jdih">Pengelola JDIH</a>         
                                <a class="py-1 px-5 " href="/bpp-sk-tim-teknis">SK Tim Teknis</a>         
                            </div> 
                        </div>
                    </div>
                    
                    <!-- ==================== ISI ========================== -->
                    <div class="card row-span-3 col-span-8 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <section class="pb-10">
                                    <h1 class="-mb-6"><span class="text-yellow-600">VISI DAN MISI</span> SEKRETARIS DAERAH KOTA BALIKPAPAN </h1>
                                    <div class="entry-content">
                                        <p><span style="font-size: large;"><strong>Visi</strong></span></p>
                                        <p style="text-align: justify;">Terwujudnya Setdakota sebagai fasilitator dan advisor dalam rangka mewujudkan Kota Balikpapan sebagai kota terkemuka yang nyaman dihuni dan berkelanjutan menuju Madinatul Iman.</p>
        
                                        <p><span style="font-size: large;"><strong>Misi</strong></span></p>
                                        <ol>
                                            <li class="ml-6">1. Mengoptimalkan koordinasi perumusan kebijakan umum penyelenggaran Pemerintahan Daerah yang berorientasi pada peningkatan pelayanan publik.</li>
                                            <li class="ml-6">2. Mengembangkan Tata Kelola Pemerintahan yang baik (Good Governance) dan aparatur yang bersih dan baik (Good and Clean Government).</li>
                                            <li class="ml-6">3. Meningkatkan pelayanan administrasi Pemerintahan melalui pembinaan aparatur yang terprogram dan sinergis.</li>
                                        </ol>
                                    </div>                          
                                </section>
                                <section>
                                    <h1 class="-mb-6"><span class="text-yellow-600">VISI DAN MISI</span> JDIH KOTA BALIKPAPAN </h1>
                                    <div class="entry-content">
                                        <p><span style="font-size: large;"><strong>Visi</strong></span></p>
                                        <p style="text-align: justify;">Menyusun produk hukum yang berkualitas, sehingga tercipta masyarakat sadar hukum dengan ditunjang pelayanan prima serta sarana dan prasarana yang memadai</p>
        
                                        <p><span style="font-size: large;"><strong>Misi</strong></span></p>
                                        <ol>
                                            <li class="ml-6">1. Meningkatkan dan membangun kesadaran masyarakat terhadap hukum.</li>
                                            <li class="ml-6">2. Meningkatkan penegakan hukum dan disiplin terhadap peraturan daerah.</li>
                                            <li class="ml-6">3. Meningkatkan produk hukum daerah yang berkualitas.</li>
                                        </ol>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')