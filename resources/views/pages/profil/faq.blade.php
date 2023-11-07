
@include('pages.partials.__header')
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
                    <h1>Frequently Asked Question</h1>
                    <p>pertanyaan yang sering ditanyakan seputar penggunaan jaringan dokumentasi dan informasi hukum</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== LIST PROFILS ========================== -->
                    <div class="card row-span-1 col-span-4 animate-slide-up lg:sticky md:sticky top-[8rem]" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="content rounded-border-content">
                            <div class="profil-info">   
                                <a class="py-3 px-6 " href="/tentang">Tentang Kami</a>         
                                <a class="py-3 px-6 " href="/visi-misi">Visi dan Misi</a>         
                                <a class="py-3 px-6 " href="/struktur-organisasi">Struktur Organisasi</a>         
                                <a class="py-3 px-6 " href="/prasyarat">Prasyarat</a>         
                                <a class="py-3 px-6 active" href="#">Faq</a>         
                            </div> 
                        </div>
                    </div>
                    <!-- ==================== ISI ========================== -->
                    <div class="card row-span-3 col-span-8 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <section class="pb-10">
                                    <h1>FREQUENTLY ASKED QUESTION (FAQ)</h1>
                                    <p class="pb-4">Berikut adalah beberapa pertanyaan yang sering diajukan terkait laman JDIH Kemendikbudristek beserta jawabannya.</p>
                                    <div class="font-semibold">Bagaimana cara mencari dokumen produk hukum?</div>
                                    <p class="pb-4">Pengunjung dapat melakukan pencarian dokumen produk hukum dapat dilakukan dengan nomor/judul/kata kunci pada kolom pencarian atau melalui pencarian lanjutan (filter) dengan menggunakan indikator yang telah disediakan.</p>                                    
                                    <div class="font-semibold">Bagaimana jika dokumen produk hukum tidak dapat ditemukan?</div>
                                    <p class="pb-4">Sebagian besar Keputusan Menteri merupakan produk hukum yang bersifat menetapkan (beschikking) dan hanya disampaikan kepada para penerima salinan yang tercantum dalam Keputusan Menteri tersebut.</p>
                                    <div class="font-semibold">Mengapa dokumen Keputusan Menteri tidak lengkap di laman ini?</div>
                                    <p class="pb-4">Dampak dari perkembangan teknologi informasi adalah timbulnya virus komputer baru di Internet, maka kami memperingatkan Anda tentang bahaya yang ditimbulkan oleh virus tersebut terhadap sistem Anda. Merupakan tanggung jawab Anda untuk mendeteksi semua materi yang di-download dari Internet. Kami tidak bertanggung jawab terhadap segala bahaya atau kerusakan yang ditimbulkan oleh virus tersebut.</p>
                                    <div class="font-semibold">Bagaimana saya bisa mendapatkan Peraturan terkait Unit Eselon I ?</div>
                                    <p class="pb-4">Pengunjung dapat melakukan pencarian pada laman, jika tidak ditemukan pengunjung dapat menghubungi Unit Eselon I terkait untuk mendapatkan Peraturan yang dibutuhkan.</p>
                                    <div class="font-semibold">Bagaimana cara mengunduh dokumen produk hukum?</div>
                                    <p class="pb-4">Pengunjung masuk ke tautan detail dokumen produk yang dibutuhkan, lalu tekan tombol Salinan.</p>
                                    <div class="font-semibold">Bagaimana memberikan saran dan pertanyaan seputar dokumen produk hukum yang di laman ini?</div>
                                    <p class="pb-4">Pengunjung dapat mengakses menu Kontak dan mengisi kotak saran dan pertanyaan yang tersedia.</p>                                   
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')