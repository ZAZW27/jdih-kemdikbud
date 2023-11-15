@php $nullRecord = "Tidak Ada" @endphp
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda /  
                <div class="text-blue-500">Peraturan</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <b class="text-yellow-500 font-semibold">Keputusan Menteri nomor 258/P/2023</b>
                    <h1 class="text-start">Penerima Dana Bantuan Operasional Sekolah Kinerja bagi Sekolah yang Melaksanakan Program Sekolah Penggerak dan Sekolah yang Memiliki Prestasi Tahun Anggaran 2023</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="pb-4 px-4 mt-8 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== ISI ========================== -->
                    <div class="card row-span-3 col-span-12 ">
                        <div class="content-detail-peraturan rounded-border-content">
                            <div class="text-justify pt-5 isi-profil ">
                                <div class="media-body">                                
                                    <div class="padd-judul">
                                        <div class="float-right">
                                            <form id="unduh" action="aksi" method="post">
                                                <input type="hidden" name="sp_aksi" value="3">
                                                <input type="hidden" name="id_peraturan" value="3315">
                                            </form>
                                            <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/dokumen/salinan/salinan_20230821_193259_SALINAN KEPMENDIKBUDRISTEK NOMOR 258_P_2023_JDIH.pdf"
                                                download="https://jdih.kemdikbud.go.id/sjdih/siperpu/dokumen/salinan/salinan_20230821_193259_SALINAN KEPMENDIKBUDRISTEK NOMOR 258_P_2023_JDIH.pdf"
                                                class="bg-blue-800 text-white text-sm ml-2 py-2 px-6 rounded-md"
                                                onclick="document.getElementById('unduh').submit()">
                                                Salinan
                                            </a>
                                            <a class="bg-red-500 text-white text-sm ml-2 py-2 px-6 rounded-md">Abstraksi</a>
                                        </div>  
                                        <br><br>
                                        @if ($model == 1)
                                            <table class="table" id="DataTable">
                                                <tbody >
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Tipe Dokumen</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4" style="border:none;">{{$per->tipe_dokumen}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Judul</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->judul_peraturan}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Tajuk Entri Utama</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tajuk_entri_pertama}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Nomor Peraturan</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->nomor_peraturan}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Tahun Peraturan</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tahun_peraturan}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Jenis Peraturan</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->jenis_peraturan}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Tempat Penetapan</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tempat_penetapan}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Tanggal Penetapan</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tanggal_penetapan}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Tanggal Pengundangan</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tanggal_pengundangan > 1 ?$per->tanggal_pengundangan : $nullRecord}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Sumber</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->sumber > 1 ? $per->sumber : $nullRecord}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Subjek</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">
                                                            <form id="subjek" action="cari_peraturan" method="post">
                                                                <input type="hidden" name="subjek" value="Bantuan/Pendanaan Pendidikan">
                                                                <button type="submit" class="bg-yellow-400 text-base text-black px-4 py-2 rounded-full hover:bg-yellow-500">
                                                                    {{$per->subjek > 1 ? $per->subjek : $nullRecord}}
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Status Peraturan</td>
                                                        {{-- <td class="lg:text-base md:text-sm sm:text-xs p-4">
                                                            <p class="bg-yellow-400 text-base text-black px-4 py-2 rounded-full hover:bg-yellow-500">Berlaku</p>
                                                        </td> --}}
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">
                                                            @if ($per->id_status === 1)
                                                                <button type="submit" class="bg-green-400 text-base text-black px-4 py-2 rounded-full hover:bg-green-500">
                                                                    Berlaku
                                                                </button>
                                                            @else
                                                                <button type="submit" class="bg-red-500 text-base text-white px-4 py-2 rounded-full hover:bg-red-600">
                                                                    Tidak Berlaku
                                                                </button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Detail Status</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">     
                                                            @if ($per->detail_status === "Baru")
                                                                <button class="bg-blue-300 hover:bg-blue-400 text-black text-base px-4 py-2 rounded-full">Baru</button>
                                                            @else
                                                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black text-base px-4 py-2 rounded-full">{{$per->detail_status}}</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Bahasa</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{strtoupper($per->bahasa)}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Lokasi</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->lokasi}}</td>
                                                    </tr>
                                                    <tr class="border-b-2 ">
                                                        <td class="lg:text-base md:text-sm sm:text-xs px-4 border-r-2 w-4">Bidang Hukum</td>
                                                        <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->bidang_hukum > 1 ? $per->bidang_hukum : $nullRecord}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        @else
                                        <table class="table" id="DataTable">
                                            <tbody >
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Tipe Dokumen</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4" style="border:none;">{{$per->tipe_dokumen}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Judul</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->judul_peraturan}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">T.E.U Badan / Pengarang</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">
                                                        <div class="border border-gray-300 flex justify-around transition duration-300 ease-in-out hover:border-sky-600 hover:drop-shadow-lg">
                                                            <div class="flex flex-col">
                                                                <div class="font-bold">Nama Pengarang</div>
                                                                <div class="mt-2">{{$per->nama_pengarang}}</div>
                                                            </div>
                                                            <div class="flex flex-col">
                                                                <div class="font-bold">Tipe Pengarang</div>
                                                                <div class="mt-2">{{$per->tipe_pengarang}}</div>
                                                            </div>
                                                            <div class="flex flex-col">
                                                                <div class="font-bold">Jenis Pengarang</div>
                                                                <div class="mt-2">{{$per->jenis_pengarang}}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Nomor Peraturan</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->nomor_peraturan}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Tahun Peraturan</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tahun_peraturan}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Jenis / Bentuk Peraturan</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4 flex flex-col">
                                                        {{$per->jenis_peraturan}}
                                                        <span class="text-gray-500 text-sx">
                                                            @if ($per->id_jenis == 16)
                                                                PERDA
                                                            @elseif($per->id_jenis == 17)
                                                                PERWALI
                                                            @elseif($per->id_jenis == 18)
                                                                SE
                                                            @elseif($per->id_jenis == 20)
                                                                MOU
                                                            @elseif($per->id_jenis == 21)
                                                                INSTRUKSI WALI
                                                            @elseif($per->id_jenis == 22)
                                                                RAPERDA
                                                            @elseif($per->id_jenis == 23)
                                                                RAWALI
                                                            @endif
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Tempat Penetapan</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tempat_penetapan}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Tanggal Penetapan</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tanggal_penetapan}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Tanggal Pengundangan</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->tanggal_pengundangan > 1 ?$per->tanggal_pengundangan : $nullRecord}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Sumber</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->sumber > 1 ? $per->sumber : $nullRecord}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Subjek</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">
                                                        <div class="border border-gray-300 flex justify-around transition duration-300 ease-in-out hover:border-sky-600 hover:drop-shadow-lg">
                                                            <div class="flex flex-col">
                                                                <div class="font-bold">SUBJEK</div>
                                                                <div class="mt-2">{{$per->subjek}}</div>
                                                            </div>
                                                            <div class="flex flex-col">
                                                                <div class="font-bold">Tipe</div>
                                                                <div class="mt-2">{{$per->tipe_subjek}}</div>
                                                            </div>
                                                            <div class="flex flex-col">
                                                                <div class="font-bold">Jenis</div>
                                                                <div class="mt-2">{{$per->jenis_subjek}}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Status Peraturan</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">
                                                        @if ($per->id_status === 1)
                                                            <a href="#" type="submit" class="bg-green-400 text-base font-semibold text-black px-4 py-2 rounded-full hover:bg-green-500">
                                                                Berlaku
                                                            </a>
                                                        @elseif($per->id_status === 2)
                                                            <a href="#" type="submit" class="bg-red-500 text-base font-semibold text-white px-4 py-2 rounded-full hover:bg-red-600">
                                                                Tidak Berlaku
                                                            </a>
                                                        @else
                                                            <a href="#" type="submit" class="bg-yellow-500 text-base font-semibold text-white px-4 py-2 rounded-full hover:bg-red-600">
                                                                
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Detail Status</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">     
                                                        @if ($per->detail_status === "Baru")
                                                            <button class="bg-blue-300 hover:bg-blue-400 text-black text-base px-4 py-2 rounded-full">Baru</button>
                                                        @else
                                                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black text-base px-4 py-2 rounded-full">{{$per->detail_status}}</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Bahasa</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{strtoupper($per->bahasa)}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Lokasi</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->lokasi}}</td>
                                                </tr>
                                                <tr class="border-b-2 ">
                                                    <td class="lg:text-base md:text-sm sm:text-xs px-4">Bidang Hukum</td>
                                                    <td class="lg:text-base md:text-sm sm:text-xs p-4">{{$per->bidang_hukum > 1 ? $per->bidang_hukum : $nullRecord}}</td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        @endif
                                        <br>
                                        <button onclick="window.history.back()" class="bg-blue-800 text-white text-sm ml-2 pr-3 mt-4 mb-3 rounded-lg px-8 py-2">
                                            <i class="fa-solid fa-home" style="color: #ffffff;"></i>
                                            Kembali
                                        </button>

                                    </div><!--paddjudul-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')