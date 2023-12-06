@include('pages.partials.__adminBar');
<script>
    Fancybox.bind('[data-fancybox="berita"]', {
        Carousel: {
            transition: "classic",
        },
    });
</script>
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
        <div class="relative top-[0px] md:top-[50px] right-0">
            <a href="{{route('peraturan-baru')}}" class="flex justify-center w-20 h-auto bg-blue-500 rounded-lg drop-shadow-md text-white font-semibold py-1">NEW+</a>
        </div>
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400">
            <h1 class="text-4xl font-bold  text-sky-600">PERATURAN</h1>
        </div>
        <div class="flex items-center justify-center h-auto rounded bg-gray-50">
            <div class="relative overflow-x-auto sm:rounded-lg w-full">
                @foreach ($peraturan as $per)
                    <div class=" py-2 px-4 flex flex-col flex-wrap justify-start bg-none hover:bg-sky-300/10 transition-all duration-200 ease-in">
                        <div class="flex flex-col flex-wrap justify-start items-start sticky left-0">
                            <div class="sticky left-2 min-w-[74vw]">
                                <div class="relative right-0 md:-mb-6 mb-0 flex flex-row md:justify-end justify-start align-start items-start">
                                    <a href="{{route('edit-peraturan/', ['id' => $per->id ])}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                    <a href="{{route('proses-delete-peraturan', ['id' => $per->id])}}" class="font-medium text-red-600 hover:underline ms-3">Remove</a>
                                </div>
                                <div class="flex flex-col flex-wrap justify-start items-start">
                                    <h6 class="text-yellow-600 font-semibold text-xs">
                                        <span style="color: #696969;">{{ strtoupper($per->jenis_peraturan)}}</span> 
                                        {{-- CONDITION JIKA TAHUN SUDAH BERADA DI DALAM NOMOR PERATURAN --}}
                                        {{ strpos((string)$per->nomor_peraturan, (string)$per->tahun_peraturan) !== false ? strtoupper("NOMOR {$per->nomor_peraturan}") : strtoupper("NOMOR {$per->nomor_peraturan} TAHUN {$per->tahun_peraturan}") }}
                                    </h6>
                                    <h1 class="judul-peraturan-admin text-sky-700 lg:max-w-[77vw] md:max-w-[60vw] max-w-[50vw]">{{$per->judul_peraturan}}</h1>
                                </div>
                            </div>
                            <div class="overflow-x-auto w-[150%]">
                                <table class="mt-1 border-b-4 border-blue-800/50 w-full">
                                    <thead>
                                        <tr class="border-b-2 border-slate-400/50">
                                            <th class="px-10 border-x-2 border-slate-400/50">Tipe dokumen</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Nama pengarang</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Tipe pengarang</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Jenis pengarang</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Tempat penetapan</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Tanggal penetapan</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Tanggal pengundangan</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Sumber</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Subjek</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Tipe subjek</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Jenis subjek</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Status peraturan</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Catatan</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Bahasa</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Dilihat</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">Diunduh</th>
                                            <th class="px-10 border-x-2 border-slate-400/50">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tipe_dokumen}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->nama_pengarang}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tipe_pengarang}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->jenis_pengarang}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tempat_penetapan}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tanggal_penetapan}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tanggal_pengundangan}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->sumber}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->subjek}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tipe_subjek}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->jenis_subjek}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->status_peraturan}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->catatan}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->bahasa}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->view}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->download}}</td>
                                        <td class="px-1 border-x-2 border-slate-400/50">{{$per->file}}</td>
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{$peraturan->links()}}
    </div>
</div>

{{-- <table class="mt-1">
    <thead>
        <tr class="border-b-2 border-slate-400/50">
            <th class="px-10 border-x-2 border-slate-400/50">Jenis peraturan</th>
            <th class="px-14 border-x-2 border-slate-400/50">Subjek</th>
            <th class="px-1 border-x-2 border-slate-400/50">Status peraturan</th>
            <th class="px-2 border-x-2 border-slate-400/50">Tanggal penetapan</th>
            <th class="px-40 border-x-2 border-slate-400/50">Tajuk entri</th>
            <th class="px-1 border-x-2 border-slate-400/50">Tipe dokumen</th>
            <th class="px-1 border-x-2 border-slate-400/50">Tempat penetapan</th>
            <th class="px-2 border-x-2 border-slate-400/50">Tanggal penetapan</th>
            <th class="px-1 border-x-2 border-slate-400/50">Tanggal pengundangan</th>
            <th class="px-1 border-x-2 border-slate-400/50">Sumber</th>
            <th class="px-1 border-x-2 border-slate-400/50">Detail status</th>
            <th class="px-1 border-x-2 border-slate-400/50">Bahasa</th>
            <th class="px-1 border-x-2 border-slate-400/50">Lokasi</th>
            <th class="px-1 border-x-2 border-slate-400/50">Bidang hukum</th>
            <th class="px-1 border-x-2 border-slate-400/50">Dilihat</th>
            <th class="px-1 border-x-2 border-slate-400/50">Diunduh</th>
            <th class="px-1 border-x-2 border-slate-400/50">Catatan</th>
            <th class="px-1 border-x-2 border-slate-400/50">Nama pengarang</th>
            <th class="px-1 border-x-2 border-slate-400/50">Jenis pengarang</th>
            <th class="px-1 border-x-2 border-slate-400/50">Tipe pengarang</th>
            <th class="px-1 border-x-2 border-slate-400/50">Tipe subjek</th>
            <th class="px-1 border-x-2 border-slate-400/50">Jenis subjek</th>
            <th class="px-1 border-x-2 border-slate-400/50">File</th>
        </tr>
    </thead>
    <tbody>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->jenis_peraturan}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->subjek}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->status_peraturan}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tanggal_penetapan}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tajuk_entri_pertama}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tipe_dokumen}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tempat_penetapan}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tgl_penetapan}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tanggal_pengundangan}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->sumber}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->detail_status}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->bahasa}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->lokasi}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->bidang_hukum}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->view}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->download}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->catatan}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->nama_pengarang}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->jenis_pengarang}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tipe_pengarang}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->tipe_subjek}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->jenis_subjek}}</td>
        <td class="px-1 border-x-2 border-slate-400/50">{{$per->file}}</td>
    </tbody>
</table> --}}