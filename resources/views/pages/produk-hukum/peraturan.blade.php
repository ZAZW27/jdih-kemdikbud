
@include('pages.partials.__header') 
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Produk hukum / 
                <div class="text-blue-500">Peraturan</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>PERATURAN PERUNDANG-UNDANGAN</h1>
                    <p>peraturan perundang-undangan bidang pendidikan, kebudayaan, riset, dan teknologi</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:pt-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="card row-span-3 col-span-12 ">
                    <form class="domain-form" action="cari_peraturan" method="post">
                        <div class="md:flex md:items-center md:space-x-4 tutup">
                            <input type="text" name="judul" id="judul" class="search-peraturan-search-box rounded-lg focus:outline-none focus:border-white lg:-mb-4" placeholder="Masukkan judul atau kata kunci peraturan">
                            <div class="absolute right-10 flex lg:mt-7">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-l focus:outline-none focus:ring focus:border-blue-300 hover:bg-red-500 transition duration-300 ease-in-out">
                                    <div class="flex ">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="22px" fill="#fff"><g><path d="M0,0h24v24H0V0z" fill="none"></path></g><g><path d="M7,9H2V7h5V9z M7,12H2v2h5V12z M20.59,19l-3.83-3.83C15.96,15.69,15.02,16,14,16c-2.76,0-5-2.24-5-5s2.24-5,5-5s5,2.24,5,5 c0,1.02-0.31,1.96-0.83,2.75L22,17.59L20.59,19z M17,11c0-1.65-1.35-3-3-3s-3,1.35-3,3s1.35,3,3,3S17,12.65,17,11z M2,19h10v-2H2 V19z"></path></g>CARI</svg>
                                        CARI
                                    </div>
                                </button>
                                <a class="bg-yellow-500 text-slate-800 px-4 py-4 rounded-r focus:outline-none focus:ring focus:border-yellow-300" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    <div class="flex ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="18px" fill="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path></svg>
                                        FILTER
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="pb-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== ISI ========================== -->
                    <div class="card row-span-3 col-span-12 ">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <div class="pt-5">
                                    @foreach ($peraturanData as $p)
                                        <div class="perundangan text-sm">
                                            <div class="row">
                                                <div class="lg:mx-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><rect fill="none" height="24" width="24"></rect><path d="M19,5v9l-5,0l0,5H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h10l6-6V5C21,3.9,20.1,3,19,3z M12,14H7v-2h5V14z M17,10H7V8h10V10z"></path></svg>
                                                </div>
                                                <div class="col-lg-11 col-md-11 col-sm-12">
                                                    <div class="perundangan-content">
                                                        <a href="detail-peraturan">
                                                            @php
                                                                $first_data = '40/er/2023';
                                                                $second_data = '2023'
                                                            @endphp
                                                            {{-- <p>{{strpos($p->getNomor->nomor, $p->tahun) !== false ? strtoupper("NOMOR $p->nomor") : strtoupper("NOMOR $p->getNomor->nomor TAHUN $p->tahun");}}</p> --}}
                                                            <h6 class="text-start lg:text-sm md:text-sm sm:text-xs">{{ $p->jenis_peraturan }}<span class="text-yellow-600"> NOMOR {{$p->getNomor->nomor}} TAHUN 2023</span></h6>
                                                            <h1 class="hover:text-purple-900 transition duration-150 ease-in-out ">Surat Edaran Menteri Nomor 5 Tahun 2023 tentang Pembayaran Tunjangan Kinerja Pegawai di Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi</h1>
                                                        </a>
                                                        <div class="flex justify-between">
                                                            <div class="font-semibold text-gray-500">13 Oktober 2023 </div>
                                                            <div class="flex view-info">
                                                                <a href="#" class="views">
                                                                    <svg style="margin-top:-3px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 6.5c3.79 0 7.17 2.13 8.82 5.5-1.65 3.37-5.02 5.5-8.82 5.5S4.83 15.37 3.18 12C4.83 8.63 8.21 6.5 12 6.5m0-2C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 5c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5-2.5-1.12-2.5-2.5 1.12-2.5 2.5-2.5m0-2c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5 4.5-2.02 4.5-4.5-2.02-4.5-4.5-4.5z"></path></svg>
                                                                    743 | 
                                                                </a>
                                                                <a href="#" class="downloads">
                                                                    <svg style="margin-top:-3px; margin-right:5px;" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><g><rect fill="none" height="24" width="24"></rect></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M17,11l-1.41-1.41L13,12.17V4h-2v8.17L8.41,9.59L7,11l5,5 L17,11z"></path></g></svg>
                                                                    421
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="border my-6"></div>
                                                    </div>
                                                </div>
                                            </div><!--row-->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('pages.partials.__footer')