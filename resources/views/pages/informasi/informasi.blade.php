
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Informasi / 
                <div class="text-blue-500">Berita</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>BERITA</h1>
                    <p>berita dan informasi seputar biro hukum dan kementerian</p>
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center pb-10 mt-[4rem]">
        <div class="pt-[2rem] lg:px-[4rem] px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-[3rem] animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-3 grid-forms md:grid-row gap-3 pb-12">
                    <div class="card berita-container col-span-1 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="berita-pic w-full h-[220px] overflow-hidden">
                            <img src="{{asset('assets/img/media/berita-14.jpg')}}" alt="" >
                        </div>
                        <div class="content berita-card">
                            <div class="information lg:-mx-5 ">
                                <p class="text-start text-[22px] font-semibold">Kemendikbudristek terbitkan Permendikbudristek tentang Penjaminan Mutu Pendidikan Tinggi</p>
                                <div class="detail-info flex justify-between mt-4 text-[14px]">
                                    <p>Umum</p>
                                    <p class="date-berita text-yellow-600">31 Agustus 2023</p>
                                </div>
                            </div>
                            <a href="/detail_berita" class="rounded bg-blue-700 text-white px-2 py-2 w-[20rem] mt-3 lg:-mx-5 -mx-2 hover:bg-blue-800">Selengkapnya</a>
                        </div>
                    </div>                                            
                    <div class="card berita-container col-span-1 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="berita-pic w-full h-[220px] overflow-hidden">
                            <img src="{{asset('assets/img/media/berita-14.jpg')}}" alt="" >
                        </div>
                        <div class="content berita-card">
                            <div class="information lg:-mx-5 ">
                                <p class="text-start text-[22px] font-semibold">Kemendikbudristek terbitkan Permendikbudristek tentang Penjaminan Mutu Pendidikan Tinggi</p>
                                <div class="detail-info flex justify-between mt-4 text-[14px]">
                                    <p>Umum</p>
                                    <p class="date-berita text-yellow-600">31 Agustus 2023</p>
                                </div>
                            </div>
                            <a href="/detail_berita" class="rounded bg-blue-700 text-white px-2 py-2 w-[20rem] mt-3 lg:-mx-5 -mx-2 hover:bg-blue-800">Selengkapnya</a>
                        </div>
                    </div>                                            
                    <div class="card berita-container col-span-1 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="berita-pic w-full h-[220px] overflow-hidden">
                            <img src="{{asset('assets/img/media/berita-14.jpg')}}" alt="" >
                        </div>
                        <div class="content berita-card">
                            <div class="information lg:-mx-5 ">
                                <p class="text-start text-[22px] font-semibold">Kemendikbudristek terbitkan Permendikbudristek tentang Penjaminan Mutu Pendidikan Tinggi</p>
                                <div class="detail-info flex justify-between mt-4 text-[14px]">
                                    <p>Umum</p>
                                    <p class="date-berita text-yellow-600">31 Agustus 2023</p>
                                </div>
                            </div>
                            <a href="/detail_berita" class="rounded bg-blue-700 text-white px-2 py-2 w-[20rem] mt-3 -mx-5-mx-2 hover:bg-blue-800">Selengkapnya</a>
                        </div>
                    </div>                                            
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')