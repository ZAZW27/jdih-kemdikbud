
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Pengelola</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Pengelola</h1>
                    <p>List nama dan jabatan pengelola JDIH</p>
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
                                <a class="py-1 px-5 active" href="/bpp-pengelola-jdih">Pengelola JDIH</a>         
                                <a class="py-1 px-5 " href="/bpp-sk-tim-teknis">SK Tim Teknis</a>         
                            </div> 
                        </div>
                    </div>
                    <!-- ==================== CONTENT: LAYANAN ========================== -->
                    <div class="card row-span-3 col-span-8 reverse-pad ">
                        <div class="content rounded-border-content text-start">
                            <div class="container">
                                <div class="row row--top-40">
                                    <div class="col-md-12">
                                        <h2 class="row__title">Tim Teknis Pengelola JDIH</h2>
                                    </div>
                                </div>
                                <div class="row--top-20">
                                    <div class="col-md-12">
                                        <div class="table-container">
                                        <table class="table w-full">
                                            <thead class="table__thead ">
                                                <tr>
                                                    <th class="table__th">No</th>
                                                    <th class="table__th">Nama</th>
                                                    <th class="table__th">Jabatan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table__tbody">
                                                @php
                                                    $no = 1
                                                @endphp
                                                @foreach ($ttp as $q)
                                                    <tr class="table-row table-row--chris">
                                                        <td class="table-row__td">
                                                            <p class="table-row__name">{{$no}}</p>
                                                        </td>
                                                        <td data-column="Nama"  class="table-row__td">
                                                            <div class="table-row__info">
                                                                <p class="table-row__name">{{$q->nama}}</p>
                                                                <span class="table-row__small">{{$q->jabatan_dlm_tim}}</span>
                                                            </div>
                                                        </td>
                                                        <td data-column="Jabatan" class="table-row__td">
                                                            <div class="">
                                                                <p class="table-row__policy">{{$q->jabatan}}</p>
                                                            </div>                
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $no++
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            </div>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')