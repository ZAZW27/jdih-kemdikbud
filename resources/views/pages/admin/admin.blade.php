@include('pages.partials.__adminBar');

<script>
    Fancybox.bind('[data-fancybox="berita"], [data-fancybox="galeri"]', {
        Carousel: {
            transition: "classic",
        },
    });
</script>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400">
            <a href="{{route('getBerita.data')}}">
                <h1 class="text-4xl font-bold text-sky-600 hover:text-sky-700 transition-all duration-500 ease-">BERITA</h1>
            </a>
        </div>
        <div class="flex items-center justify-center h-auto pt-2 px-4 rounded">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm shadow-md text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-sky-50 uppercase bg-blue-900">
                        <tr>
                            <th scope="col" class="p-4 px-6">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tema
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Isi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dilihat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Updated at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $q)
                            <tr class="bg-white border-b hover:bg-sky-50">
                                <td class="w-4 p-4">
                                    <a href="{{asset('assets/img/berita/'.$q->gambar_berita)}}" class="overflow-hidden" data-fancybox="berita" data-caption="{{$q->judul}}">
                                        <img src="{{asset('assets/img/berita/'.$q->gambar_berita)}}" alt="">
                                    </a>
                                </td>
                                <th scope="row" class="px-6 py-4">
                                    {{ Illuminate\Support\Str::limit($q->judul, $limit = 100, $end = '. . .') }}
                                </th>
                                <td class="px-6 py-4">
                                    {{$q->tema}}
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->tanggal}}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Illuminate\Support\Str::limit($q->isi, $limit = 100, $end = '. . .') }}
                                </td>
                                <td class="px-6 py-4">
                                    120
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->created_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->updated_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    <div class="flex flex-row justify-center align-center items-center px-2 py-4">
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-red-600 hover:underline ms-3">Remove</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$berita->links()}}
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400 mt-6">
            <a href="{{route('getGaleri.data')}}">
                <h1 class="text-4xl font-bold text-sky-600 hover:text-sky-700 transition-all duration-500 ease-out">GALERI</h1>
            </a>
        </div>
        <div class="flex items-center justify-center h-auto pt-2 px-4 rounded">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm shadow-md text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-sky-50 uppercase bg-blue-900">
                        <tr>
                            <th scope="col" class="p-4 px-6">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                excerpt
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Updated at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeri as $q)
                            <tr class="bg-white border-b hover:bg-sky-50">
                                <td class="w-4 p-4">
                                    <a href="{{asset('assets/img/galeri/'.$q->gambar)}}" class="overflow-hidden" data-fancybox="galeri" data-caption="{{$q->judul}}">
                                        <img src="{{asset('assets/img/galeri/'.$q->gambar)}}" alt="">
                                    </a>
                                    {{-- <img src="{{asset('assets/img/galeri/'.$q->gambar)}}" alt=""> --}}
                                </td>
                                <th scope="row" class="px-6 py-4">
                                    {{ Illuminate\Support\Str::limit($q->judul, $limit = 100, $end = '. . .') }}
                                </th>
                                <td class="px-6 py-4">
                                    {{$q->exerpt}}
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->created_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->updated_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    <div class="flex flex-row justify-center align-center items-center px-2 py-4">
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-red-600 hover:underline ms-3">Remove</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$galeri->links()}}

        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400 mt-6">
            <a href="{{route('getPeraturan.data')}}">
                <h1 class="text-4xl font-bold text-sky-600 hover:text-sky-700 transition-all duration-500 ease-out">PERATURAN</h1>
            </a>
        </div>
        <div class="flex items-center justify-center h-auto pt-2 px-4 rounded">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm shadow-md text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-sky-50 uppercase bg-blue-900">
                        <tr>
                            <th scope="col" class="p-4 px-6" style="width: 300px !important;">
                                Judul Peraturan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor dan Tahun Peraturan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Peraturan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Subjek
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Penetapan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tajuk Entri Pertama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                tipe dokumen
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tempat Penetapan
                            </th>
                            <!-- Add similar width attributes for the other <th> elements as needed -->
                            <th scope="col" class="px-6 py-3">
                                Tanggal Penetapan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sumber
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bahasa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lokasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bidang Hukum
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dilihat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Diunduh
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Catatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengarang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Pengarang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tipe Pengarang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tiper Subjek
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Subjek
                            </th>
                            <th scope="col" class="px-6 py-3">
                                File
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Updated 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($peraturan as $per)
                            <tr class="bg-white border-b hover:bg-sky-50">
                                <th scope="row" class="px-6 py-4" style="width: 300px !important;" > {{-- Judul --}}
                                    {{ Illuminate\Support\Str::limit($per->judul_peraturan, $limit = 100, $end = '. . .') }}
                                </th>
                                <td class="px-6 py-4"> {{-- Nomor dan tahun --}}
                                    {{ strpos((string)$per->nomor_peraturan, (string)$per->tahun_peraturan) !== false ? strtoupper("NOMOR {$per->nomor_peraturan}") : strtoupper("NOMOR {$per->nomor_peraturan} TAHUN {$per->tahun_peraturan}") }}
                                </td>
                                <td class="px-6 py-4"> {{-- jenis peraturan --}}
                                    {{$per->jenis_peraturan}}
                                </td>
                                <td class="px-6 py-4"> {{-- subjek --}}
                                    {{$per->subjek}}
                                </td>
                                <td class="px-6 py-4"> {{-- status --}}
                                    {{$per->status_peraturan}}
                                </td>
                                <td class="px-6 py-4"> {{-- tanggal penetapan --}}
                                    {{$per->tanggal_penetapan}}
                                </td>
                                <td class="px-6 py-4"> {{-- tajuk entri pertama --}}
                                    {{$per->tajuk_entri_pertama}}
                                </td>
                                <td class="px-6 py-4"> {{-- tipe_dokumen --}}
                                    {{$per->tipe_dokumen}}
                                </td>
                                <td class="px-6 py-4"> {{-- tempat penetapan --}}
                                    {{$per->tempat_penetapan}}
                                </td>
                                <td class="px-6 py-4"> {{-- tanggal penetapan --}}
                                    {{$per->tgl_penetapan}}
                                </td>
                                <td class="px-6 py-4"> {{-- sumber --}}
                                    {{$per->sumber}}
                                </td>
                                <td class="px-6 py-4"> {{-- bahasa --}}
                                    {{$per->bahasa}}
                                </td>
                                <td class="px-6 py-4"> {{-- lokasi --}}
                                    {{$per->lokasi}}
                                </td>
                                <td class="px-6 py-4"> {{-- bdidang hukum --}}
                                    {{$per->bidang_hukum}}
                                </td>
                                <td class="px-6 py-4"> {{-- dilihat --}}
                                    {{$per->view}}
                                </td>
                                <td class="px-6 py-4"> {{-- diunduh --}}
                                    {{$per->download}}
                                </td>
                                <td class="px-6 py-4"> {{-- catatan --}}
                                    {{$per->catatan}}
                                </td>
                                <td class="px-6 py-4"> {{-- nama pengarang --}}
                                    {{$per->nama_pengarang}}
                                </td>
                                <td class="px-6 py-4"> {{-- jenis pengarang --}}
                                    {{$per->jenis_pengarang}}
                                </td>
                                <td class="px-6 py-4"> {{-- Judul --}}
                                    {{$per->tipe_pengarang}}
                                </td>
                                <td class="px-6 py-4"> {{-- tipe subjek --}}
                                    {{$per->tipe_subjek}}
                                </td>
                                <td class="px-6 py-4"> {{-- jenis subjek --}}
                                    {{$per->jenis_subjek}}
                                </td>
                                <td class="px-6 py-4"> {{-- file --}}
                                    {{$per->file}}
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->created_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->updated_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    <div class="flex flex-row justify-center align-center items-center px-2 py-4">
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-red-600 hover:underline ms-3">Remove</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$peraturan->links()}}

        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400 mt-6">
            <a href="{{route('getDokumen.data')}}">
                <h1 class="text-4xl font-bold text-sky-600 hover:text-sky-700 transition-all duration-500 ease-out">DOKUMEN</h1>
            </a>
        </div>
        <div class="flex items-center justify-center h-auto pt-2 px-4 rounded">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm shadow-md text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-sky-50 uppercase bg-blue-900">
                        <tr>
                            <th scope="col" class="p-4 px-6">
                                OPD
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peraturan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Updated at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokumen as $q)
                            <tr class="bg-white border-b hover:bg-sky-50">
                                <td class="px-6 py-4">
                                    {{$q->OPD}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$q->peraturan}}
                                </td>
                                <th scope="row" class="px-6 py-4">
                                    {{ Illuminate\Support\Str::limit($q->judul_dok, $limit = 100, $end = '. . .') }}
                                </th>
                                <td class="px-1 py-4">
                                    {{$q->status_dok}}
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->keterangan_dok}}   
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->created_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    {{$q->updated_at}}   
                                </td>
                                <td class="px-1 py-4">
                                    <div class="flex flex-row justify-center align-center items-center px-2 py-4">
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-red-600 hover:underline ms-3">Remove</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$dokumen->links()}}
    </div>
</div>





{{-- COMPONENT SIAPA TAU PERLU --}}
{{-- <div class="grid grid-cols-2 gap-4 mb-4">
    <div class="flex items-center justify-center rounded bg-gray-50 h-28">
        <p class="text-2xl text-gray-400 ">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </p>
    </div>
    <div class="flex items-center justify-center rounded bg-gray-50 h-28">
        <p class="text-2xl text-gray-400 ">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </p>
    </div>
    <div class="flex items-center justify-center rounded bg-gray-50 h-28">
        <p class="text-2xl text-gray-400 ">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </p>
    </div>
    <div class="flex items-center justify-center rounded bg-gray-50 h-28">
        <p class="text-2xl text-gray-400 ">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </p>
    </div>
</div> --}}