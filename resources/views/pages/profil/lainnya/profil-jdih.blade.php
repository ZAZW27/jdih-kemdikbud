
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Profil JDIH</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Profil JDIH</h1>
                    <p>Informasi lebih lanjut terhadap JDIH</p>
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
                                <a class="py-1 px-5 active" href="/bpp-profil-jdih">Profil JDIH</a>         
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
                    
                    <!-- ==================== ISI ========================== -->
                    <div class="card row-span-3 col-span-8 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <section class="pb-10">
                                    <h1>PROFIL JDIH</h1>
                                    <p class="pb-4">Jaringan Dokumentasi dan Informasi Hukum yang selanjutnya disebut JDIH adalah wadah pendayagunaan bersama atas dokumen hukum secara tertib, terpadu, dan berkesinambungan, serta merupakan sarana pemberian pelayanan informasi hukum secara lengkap, akurat, mudah dan cepat.</p>
                                    <p class="pb-4">Dokumen Hukum adalah produk hukum yang berupa peraturan perundang-undangan atau produk hukum selain peraturan perundang-undangan yang meliputi namun tidak terbatas pada putusan pengadilan, yurisprudensi, monografi hukum, artikel majalah hukum, buku hukum, naskah akademis, dan rancangan peraturan perundang-undangan.</p>                                    
                                    <p class="pb-4">Peraturan Perundang-undangan adalah peraturan tertulis yang memuat norma hukum yang mengikat secara umum dan dibentuk atau ditetapkan oleh lembaga Negara atau pejabat yang berwenang melalui prosedur yang ditetapkan dalam peraturan perundang-undangan. Berdasarkan Peraturan Menteri Dalam Negeri Nomor 80 Tahun 2015 tentang Pembentukan Produk Hukum Daerah sebagaimana telah diubah dengan Peraturan menteri Dalam Negeri Nomor 120 Tahun 2018 tentang Perubahan Atas Peraturan Menteri Dalam Negeri Nomor 80 Tahun 2015 tentang Pembentukan Produk Hukum Daerah, yang termasuk produk hukum daerah berbentuk peraturan di Kota Balikpapan terdiri dari Peraturan Daerah Kota Balikpapan dan Peraturan Wali Kota Balikpapan.</p>                          
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')