
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
                    <h1>GALERI FOTO</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center pb-10 mt-[4rem]">
        <div class="pt-[2rem] lg:px-[4rem] px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="px-4 col-span-12 md:col-span-12 sm:col-span-12 mt-[3rem] animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pb-12">
                    @foreach ($galeri as $b)
                        <div class="card berita-container col-span-1 animate-slide-up ">
                            <div class="berita-pic w-full h-auto overflow-hidden rounded-lg">
                                <a href="{{asset('assets/img/galeri/'.$b->gambar)}}" class="overflow-hidden" data-fancybox="galeri" data-caption="{{$b->judul}}">
                                    <img src="{{asset('assets/img/galeri/'.$b->gambar)}}" class="rounded-lg" alt="" >
                                </a>
                            </div>
                            <div class="content berita-card">
                                <div class="lg:-mx-5 ">
                                    <p class="text-start text-[20px] font-semibold">{{$b->judul}}</p>
                                    <p class="text-start text-[17px] font-semibold mt-4">{{$b->exerpt}}</p>
                                    <div class="detail-info flex justify-end mt-8 text-[14px]">
                                        <p class="date-berita text-yellow-600">{{ \Carbon\Carbon::parse($b->created_at)->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach                                        
                </div>
            </div>
        </div>
    </div>
    <script>
        Fancybox.bind('[data-fancybox="galeri"]', {
            Carousel: {
                transition: "classic",
            },
        });
    </script>
    @include('pages.partials.__footer')