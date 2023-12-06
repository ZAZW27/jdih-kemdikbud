@include('pages.partials.__adminBar');



<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
        <div class="relative md:-bottom-12 bottom-0">
            <a href="{{route('getDokumen.data')}}" class="flex justify-center w-20 h-auto bg-blue-500 rounded-lg drop-shadow-md text-white font-semibold py-1">Go Back!</a>
        </div>
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400">
            <h1 class="text-4xl font-bold text-sky-600">UPDATE BERITA <span class="text-amber-500 font-normal">|</span><span class="font-normal"> ID: {{$data->id}}</span></h1>
        </div>
        
        <div class="flex items-center justify-center h-auto py-2 px-4 rounded bg-gray-50">
            <div class="relative overflow-x-auto sm:rounded-lg py-4 w-full px-6">
                <form action="{{route('proses-update-peraturan')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" class="hidden" name="id" value="{{$data->id}}">
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative col-span-2 z-0 mb-2 w-full group">                        
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                            <input value="{{$data->judul}}" placeholder="Judul dokumen yang akan dibuat" name="judul" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tipe Dokumen</label>
                            <input value="{{$data->tipe_dokumen}}" placeholder="Judul dokumen yang akan dibuat" name="tipe_dok" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Subjek peraturan</label>
                            <input value="{{$data->subjek}}" placeholder="Subjek peraturan" name="subjek" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tipe Subjek</label>
                            <input value="{{$data->tipe_subjek}}" placeholder="Tipe subjek" name="tipe_subjek" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Jenis Subjek</label>
                            <input value="{{$data->jenis_subjek}}" placeholder="Jenis subjek" name="jenis_subjek" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama Pengarang</label>
                            <input value="{{$data->nama_pengarang}}" placeholder="Nama Pengarang peraturan" name="nama_peng" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">TIpe Pengarang</label>
                            <input value="{{$data->tipe_pengarang}}" placeholder="Tipe Pengarang peraturan" name="tipe_peng" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Jenis Pengarang</label>
                            <input value="{{$data->jenis_pengarang}}" placeholder="Jenis Pengarang peraturan" name="jenis_peng" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nomor Peratuan</label>
                            <input value="{{$data->nomor_peraturan}}" placeholder="Nomor pEraturan" name="nomor_per" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Jenis Peraturan</label>
                            <select name="jenis_per" id="" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                                <option value="">Pilih Jenis</option>
                                @foreach ($groupJenis as $id => $name)
                                    @if ($data->id_jenis_peraturan == $id)
                                        <option selected value="{{$id}}">{{$name}}</option>
                                    @endif
                                        <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tahun Peraturan</label>
                            <select name="tahun_per" id="" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                                <option value="">Pilih Tahun</option>
                                @foreach ($groupTahun as $item)
                                    @if ($data->id_tahun_peraturan = $id)
                                        
                                    <option selected value="{{$item->id}}">{{$item->tahun}}</option>
                                    @endif
                                    <option value="{{$item->id}}">{{$item->tahun}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tempat Penetapan</label>
                            <input value="{{$data->tempat_penetapan}}" placeholder="Tempat Penetapan Peraturan" name="tempat_penetapan" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Penetapan</label>
                            <input value="{{$data->tanggal_penetapan}}" placeholder="Tipe Pengarang peraturan" name="tanggal_penetapan" type="date" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pengundangan</label>
                            <input value="{{$data->tanggal_pengundangan}}" placeholder="Jenis Pengarang peraturan" name="tanggal_pengundangan" type="date" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" >
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Status Peraturan</label>
                            <select name="status" id="" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                                <option value="">Pilih Status</option>
                                @foreach ($groupStatus as $item)
                                    @if ($data->id_status_peraturan == $item->id)
                                        <option selected value="{{$item->id}}">{{$item->status}}</option>
                                    @endif
                                        <option value="{{$item->id}}">{{$item->status}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-2 group"></div>
                        <div class="relative z-0 w-full mb-2 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Bahasa</label>
                            <select name="bahasa" id="" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                                <option value="Bahasa Indonesia" <?php echo ($data->bahasa === 'Bahasa Indonesia') ? 'selected' : ''; ?>>Indonesia</option>
                                <option value="English" <?php echo ($data->bahasa === 'English') ? 'selected' : ''; ?>>English</option>
                            </select>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-2 group">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Sumber Peraturan</label>
                        <input value="{{$data->sumber}}" placeholder="Sumber peraturan" name="sumber" type="text" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" >
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <textarea class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" name="catatan" id="" cols="30" rows="10" placeholder="Beri catatan pada peraturan (Tidak wajib)">{{$data->catatan}}</textarea>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    <button type="reset" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>