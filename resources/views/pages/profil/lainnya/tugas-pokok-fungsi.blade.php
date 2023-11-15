
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">TUPOKSI</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Tugas Pokok dan Fungsi</h1>
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
                                <a class="py-1 px-5 " href="/bpp-visi-misi">Visi dan Misi</a>         
                                <a class="py-1 px-5 active" href="/bpp-tugas-pokok-fungsi">Tugas Pokok dan Fungsi</a>         
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
                                <section class="container mb-3">
                                    <h1 class="-mb-4"><strong>TUGAS POKOK DAN FUNGSI</strong></h1>
                                        <p style="text-align: justify;" >
                                            Sesuai dengan Peraturan Wali Kota Balikpapan Nomor 1 Tahun 2022 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Perangkat Daerah, Bagian Hukum berada dipimpin oleh Kepala Bagian yang berada di bawah dan bertanggung jawab kepada Sekretaris Daerah melalui Asisten Tata Pemerintahan.
                                        </p>
                                        <p style="text-align: justify;" class="mt-3">
                                        Bagian Hukum membawahkan Kelompok Jabatan Fungsional  mempunyai tugas melaksanakan penyiapan perumusan kebijakan Daerah, pengoordinasian perumusan kebijakan Daerah, pengoordinasian pelaksanaan tugas Perangkat Daerah, pelaksanaan pemantauan dan evaluasi di bidang perundang-undangan, bantuan hukum dan dokumentasi dan informasi.
                                        </p>
                                        <h4 class="mt-4 text-xl">Dalam melaksanakan tugas Bagian Hukum mempunyai fungsi:</h4>
                                            <ol type="a" class="ml-6">
                                                <li>Penyiapan bahan perumusan kebijakan daerah di bidang perundang-undangan, bantuan hukum serta dokumentasi dan informasi;</li>
                                                <li>Penyiapan bahan pengoordinasian perumusan kebijakan daerah di bidang perundang-undangan, bantuan hukum serta dokumentasi dan informasi;</li>
                                                <li>Penyiapan bahan pengoordinasian pelaksanaan tugas Perangkat Daerah di bidang perundang-undangan, bantuan hukum serta dokumentasi dan informasi;</li>
                                                <li>Penyiapan bahan pelaksanaan pemantauan dan evaluasi di bidang perundang-undangan, bantuan hukum serta dokumentasi dan informasi; dan</li>
                                                <li>Pelaksanaan fungsi lain yang diberikan oleh Asisten Pemerintahan dan Kesejahteraan Rakyat yang berkaitan dengan tugasnya.   </li>
                                            </ol>
                                            <h4 class="mt-4 text-xl">Pengelompokan subtansi Bagian Hukum menyelenggarakan uraian tugas yang terdiri atas:</h4>
                                            <ol class="ml-6">
                                                <li>Subtansi Bantuan Hukum, mempunyai tugas:
                                                    <ol type="a">
                                                        <li>Menyusun program dan kegiatan Subtansi Bantuan Hukum;</li>
                                                        <li>Melaksanakan koordinasi permasalahan hukum dalam penyelenggaraan Pemerintahan Daerah;</li>
                                                        <li>Melaksanakan fasilitasi bantuan hukum, konsultasi hukum dan pertimbangan hukum serta perlindungan hukum bagi unsur Pemerintah Daerah dalam sengketa hukum baik di dalam maupun di luar pengadilan;</li>
                                                        <li>Melaksanakan koordinasi dan fasilitasi kerja sama dalam penanganan perkara hukum;</li>
                                                        <li>Melaksanakan koordinasi dan evaluasi penegakan dan perlindungan hak asasi manusia;</li>
                                                        <li>Menyiapkan bahan penyusunan pendapat hukum (legal opinion);</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan terhadap hasil penanganan perkara sengketa hukum;</li>
                                                        <li>Melaksanakan koordinasi dengan unit kerja/instansi terkait dalam rangka konsultasi hukum dan penyelesaian sengketa;</li>
                                                        <li>Melaksanakan koordinasi rencana aksi nasional hak asasi manusia;</li>
                                                        <li>Melaksanakan penyelesaian perkara perdata dan tata usaha negara di dalam maupun luar pengadilan menyangkut bidang tugas Pemerintah Daerah; </li>
                                                        <li>Melaksanakan fasilitasi penyelesaian permasalahan pelaksanaan tugas aparatur sipil negara di lingkungan Pemerintah Daerah;  </li>
                                                        <li>Mewakili Pemerintah Daerah dalam penyelesaian perkara perdata dan tata usaha negara di pengadilan;</li>
                                                        <li>Melaksanakan pemantauan, evaluasi dan inventarisasi permasalahan hukum yang berhubungan dengan Pemerintah Daerah;  </li>
                                                        <li>Menyiapkan bahan pembinaan teknis dan mengoordinasikan pelaksanaan tugas penyidik pegawai negeri sipil; </li>
                                                        <li>Melaksanakan evaluasi dan pelaporan terhadap hasil penanganan perkara sengketa hukum; </li>
                                                        <li>Melaksanakan pemantauan, evaluasi, pengendalian dan pelaporan pertanggungjawaban pelaksanaan tugas; dan </li>
                                                        <li>Melaksanakan tugas lain yang diberikan oleh pimpinan/atasan terkait dengan bidang tugasnya.</li>
                                                    </ol>
                                                </li>
                                                <li>Substansi Peraturan Perundang-undangan, mempunyai tugas:
                                                    <ol type="a">
                                                        <li>Menyusun program dan kegiatan Substansi Peraturan Perundang-undangan;</li>
                                                        <li>Menyiapkan bahan penyusunan produk hukum Daerah;</li>
                                                        <li>Melaksanakan harmonisasi dan sinkronisasi produk hukum daerah dengan produk hukum lainnya dan peraturan perundang-undangan yang lebih tinggi;</li>
                                                        <li>Menyiapkan bahan penjelasan Wali Kota dalam proses penetapan Peraturan Daerah;</li>
                                                        <li>Menyiapkan bahan analisa dan kajian produk hukum Daerah; </li>
                                                        <li>Melaksanakan pembinaan penyusunan produk hukum Daerah;</li>
                                                        <li>Menyiapkan bahan administrasi pengundangan dan autentifikasi produk hukum daerah;</li>
                                                        <li>Melaksanakan pemantauan dan evaluasi pelaksanaan produk hukum daerah;</li>
                                                        <li>Melaksanakan analisa, fasilitasi, kajian dan evaluasi proses penyusunan dan penetapan produk hukum Daerah dan kebijakan Daerah;</li>
                                                        <li>Melaksanakan fasilitasi dan koordinasi proses pengesahan produk hukum Daerah;</li>
                                                        <li>Melaksanakan pembulatan dan pemantapan konsepsi produk hukum Daerah;</li>
                                                        <li>Melaksanakan pemantauan, evaluasi, pengendalian dan pelaporan pertanggungjawaban pelaksanaan tugas; dan </li>
                                                        <li>Melaksanakan tugas lain yang diberikan oleh pimpinan/atasan terkait dengan bidang tugasnya.</li>
                                                    </ol>
                                                </li>
                                                <li>Substansi Dokumentasi Hukum, mempunyai tugas:
                                                    <ol type="a">
                                                        <li>Mengoordinasikan penyusunan program dan kegiatan Bagian;</li>
                                                        <li>Menyusun program dan kegiatan substansi dokumentasi hukum; </li>
                                                        <li>Melaksanakan inventarisasi dan dokumentasi produk hukum Daerah dan peraturan perundang-undangan lainnya;</li>
                                                        <li>Menghimpun serta mengolah data dan informasi sebagai bahan dalam rangka pembentukan kebijakan daerah; </li>
                                                        <li>Melaksanakan pengelolaan dan pengembangan jaringan dokumentasi dan informasi hukum;  </li>
                                                        <li>Memberikan pelayanan administrasi informasi produk hukum, meliputi administrasi, pengarsipan dan pemeliharaan; </li>
                                                        <li>Melaksanakan sosialisasi, penyuluhan dan diseminasi produk hukum Daerah maupun peraturan perundang-undangan lainnya; </li>
                                                        <li>Melaksanakan evaluasi dan pelaporan terhadap dokumentas dan informasi produk hukum daerah; </li>
                                                        <li>Mengumpulkan, mendokumentasikan dan memelihara dokumen perkara; </li>
                                                        <li>Melaksanakan penomoran dan autentifikasi produk hukum daerah; </li>
                                                        <li>Menyiapkan bahan penerbitan Lembaran Daerah dan Berita Daerah; </li>
                                                        <li>Mempublikasikan dan menyebarluaskan produk hukum Daerah;  </li>
                                                        <li>Melaksanakan penyuluhan dan/atau pembinaan keluarga sadar hukum; </li>
                                                        <li>Melaksanakan evaluasi penerapan produk hukum Daerah;</li>
                                                        <li>Mengoordinasikan dan menyiapkan bahan penyusunan dokumen akuntabilitas kinerja pemerintah; </li>
                                                        <li>Melaksanakan ketatausahaan Bagian; </li>
                                                        <li>Mengoordinasikan penyusunan laporan kegiatan Bagian; </li>
                                                        <li>Melaksanakan pemantauan, evaluasi, pengendalian dan pelaporan pertanggungjawaban pelaksanaan tugas; dan   </li>
                                                        <li>Melaksanakan tugas lain yang diberikan oleh pimpinan/atasan terkait dengan bidang tugasnya. </li>
                                                    </ol>
                                                </li>

                                            </ol>
                                        <p></p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')