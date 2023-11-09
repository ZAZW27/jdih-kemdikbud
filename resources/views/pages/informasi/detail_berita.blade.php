
@include('pages.partials.__header')
    <div class="containers banner-small relative top-4 z-0">
        <div class="page-routes">
            <a href="/">
                Beranda / Informasi / 
                <div class="text-blue-500">Berita</div>
            </a>
        </div>
    </div>
    
    <div class="containers bg-center pb-10 -mt-[12rem]">
        <div class=" lg:px-[10rem] px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-[3rem] animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-1 grid-forms md:grid-row gap-3 pb-12">
                    <div class="berita-container col-span-1 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="berita-bannerpic w-[100%] lg:h-[70rem]  ">
                            <img class="w-[100%] rounded-lg shadow-xl sticky top-[7rem]" src="{{asset('assets/img/berita/'.$berita->gambar_berita)}}" alt="" >
                        </div>
                        <div class="card shadow-xl pb-12 pt-2 content berita-card lg:mx-12 relative lg:-top-[40rem] ">
                            <div class="lg:px-[40px] md:px-[30px] py-[15px] rounded-border-content ">
                                <div class="text-justify">
                                    <div class="pt-4 mx-auto">
                                        <div class="w-full detail-berita-content">
                                            <div class="w-full">
                                                <h1 class="text-3xl font-semibold font-sans text-start">{{$berita->judul}}</h1>
                                                <div class="flex justify-between mt-4">
                                                    <div class="font-bold text-yellow-600 ">{{$berita->tema}} | {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}</div>
                                                    <div class="flex view-info ">
                                                        <p class="views">
                                                            <svg style="margin-top:-3px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 6.5c3.79 0 7.17 2.13 8.82 5.5-1.65 3.37-5.02 5.5-8.82 5.5S4.83 15.37 3.18 12C4.83 8.63 8.21 6.5 12 6.5m0-2C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 5c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5-2.5-1.12-2.5-2.5 1.12-2.5 2.5-2.5m0-2c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5 4.5-2.02 4.5-4.5-2.02-4.5-4.5-4.5z"></path></svg>
                                                            {{$berita->dilihat}} X
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="border mb-6 m-3 border-gray-300"></div>
                                                <div class="berita-paragraph">
                                                    
                                                        
                                                    <p>{{$berita->isi}}</p>
                                                    
                                                    {{-- <p> <span class="font-bold">Jakarta</span> - Seiring dengan semakin membaiknya situasi pandemi Covid-19, Sekretaris Jenderal Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) Suharti menjelaskan bahwa pelaksanaan Pembelajaran Tatap Muka (PTM) Terbatas pada satuan pendidikan kembali mengikuti ketentuan dalam Keputusan Bersama Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi, Menteri Agama, Menteri Kesehatan, dan Menteri Dalam Negeri Republik Indonesia Nomor 06/KB/2021, Nomor 1347 Tahun 2021, Nomor HK.01.08/MENKES/6678/2021, Nomor 443-5847 Tahun 2021 tentang Panduan Penyelenggaraan Pembelajaran di Masa Pandemi Covid-19.</p>
                                                    <p class="pt-5">“Tentunya menjadi harapan kita semua bahwa kondisi pandemi Covid-19 terus membaik. Tetapi, masih sangat penting bagi dinas pendidikan dan sekolah untuk tetap memastikan pembelajaran bagi seluruh peserta didik bisa berlangsung dengan aman, nyaman, dan menyenangkan. Sehingga pelaksanaan PTM Terbatas kembali mengikuti panduan di dalam SKB Empat Menteri yang terakhir,” demikian penjelasan Suharti di Jakarta, Kamis (24/3/2022).</p>
                                                    <p class="pt-5">Melalui Surat Edaran Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi (Mendikbudristek) Nomor 3 Tahun 2022, PTM Terbatas pada satuan pendidikan mengikuti ketentuan yang sudah diatur di dalam Keputusan Bersama Empat Menteri. Selain itu di dalam Surat Edaran ini juga dijelaskan bahwa orang tua/wali peserta didik diberikan pilihan untuk mengizinkan anaknya mengikuti PTM Terbatas atau Pembelajaran Jarak Jauh (PJJ).</p>
                                                    <p class="pt-5">Kemudian juga dijelaskan kembali peranan pemerintah daerah untuk melakukan pengawasan dan memberikan pembinaan terhadap penyelenggaraan PTM Terbatas, utamanya dalam hal sosialisasi penyelenggaraan PTM Terbatas yang aman kepada orang tua/wali peserta didik. Kemudian juga memastikan penerapan protokol kesehatan secara ketat oleh satuan pendidikan, dan pelaksanaan survei perilaku kepatuhan terhadap protokol kesehatan serta surveilans epidemiologis di satuan pendidikan.</p>
                                                    <p class="pt-5">Tidak hanya itu, pemerintah daerah juga berperan dalam percepatan vaksinasi Covid-19 bagi pendidik, tenaga kependidikan, dan peserta didik. Lalu juga memastikan penanganan temuan kasus konfirmasi Covid-19 di satuan pendidikan, begitu pula memastikan penghentian sementara PTM Terbatas berdasarkan hasil surveilans epidemiologis sesuai ketentuan dalam SKB Empat Menteri.</p>
                                                    <p class="pt-5">Kemudian dengan berlakunya surat edaran terbaru ini, maka Surat Edaran Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 2 Tahun 2022 tentang Diskresi Pelaksanaan Keputusan Bersama 4 (Empat) Menteri tentang Panduan Penyelenggaraan Pembelajaran di Masa Pandemi Coronavirus Disease 2019 (Covid-19) dinyatakan tidak berlaku.</p>
                                                    <p class="pt-5">“Harapan Kemendikbudristek agar seluruh pihak bisa bergotong royong dalam upaya pemulihan pembelajaran sehingga hak belajar siswa kita bisa terpenuhi, sehingga menjadi tanggung jawab kita bersama juga agar PTM Terbatas dapat terlaksana dengan aman dan nyaman bagi anak-anak kita.” tutup Suharti. [Kemdikbudristek]</p>
                                                    <p class="pt-5">-----</p>
                                                    <p class="pt-5">Unduh: <span class="font-semibold">Surat Edaran Mendikbudristek Nomor 3 Tahun 2022</span></p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--row-->
                                </div>
                            </div>
                        </div>
                        
                    </div>                                                      
                </div>
            </div>
        </div>
        
        @if ($berita_terkait != null)
            <div class="lg:-mt-[40rem]  lg:px-[6rem] px-4 mx-auto max-w-screen-xl text-center z-10 relative">
                <div class="w-full flex justify-start">
                    <h1 class="text-2xl font-semibold">Berita Terkait</h1>
                    {{-- {{$berita_terkait->group_id}} --}}
                </div>
                <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-6 animate__animated animate__fadeInUp" id="detail_peraturan">
                    <div class="grid grid-cols-3 grid-forms md:grid-row gap-3 pb-12">
                        @foreach ($berita_terkait as $bt)
                            <div class="p-4 card col-span-1">
                                <div class="berita-pic w-full overflow-hidden rounded-md">
                                    <img src="{{ asset('assets/img/berita/'.$bt->gambar_berita) }}" alt="">
                                </div>
                                <div class="berita-card p-4">
                                    <div class="information">
                                        <a href="{{route('detail_berita.data', ['id'=> $bt->id])}}" class="hover:text-blue-800">
                                            <p class="text-start text-[22px] font-semibold">{{ $bt->judul }}</p>
                                        </a>
                                        <div class="detail-info flex justify-between mt-4 text-[14px]">
                                            <p>{{$bt->tema}}</p>
                                            <p class="date-berita text-yellow-600">{{ \Carbon\Carbon::parse($bt->tanggal)->format('d F Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>   
        @else
        <div class="lg:-mt-[24rem]  lg:px-[6rem] px-4 mx-auto max-w-screen-xl text-center z-10 relative">
        </div>
        @endif
    </div>
    @include('pages.partials.__footer')