@include('pages.partials.__adminBar');



<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
        <div class="relative md:-bottom-12 bottom-0">
            <a href="{{route('getGaleri.data')}}" class="flex justify-center w-20 h-auto bg-blue-500 rounded-lg drop-shadow-md text-white font-semibold py-1">Go Back!</a>
        </div>
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400">
            <h1 class="text-4xl font-bold text-sky-600">GALERI BARU</h1>
        </div>
        
        <div class="flex items-center justify-center h-auto py-2 px-4 rounded bg-gray-50">
            <div class="relative overflow-x-auto sm:rounded-lg py-4 w-full px-6">
                <form action="{{route('proses-insert-galeri')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="relative z-0 w-full mb-2 group">
                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Gambar Galeri</label>
                        <input name="gambar" type="file" class="block w-full text-sm text-slate-900 border border-slate-600 rounded-lg cursor-pointer bg-white shadow focus:outline-none" aria-describedby="user_avatar_help" id="user_avatar" required>
                        <div class="mt-1 text-sm text-gray-500 " id="user_avatar_help">Gambar untuk galeri yang akan dipasang</div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">                        
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Jduul Galeri</label>
                        <textarea name="judul" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-slate-800 focus:ring-none focus:border-none" placeholder="Beri judul pada galeri yang akan dibuat..." required></textarea>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">                        
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Exerpt Galeri</label>
                        <textarea name="exerpt" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-slate-800 focus:ring-none focus:border-none" placeholder="Beri exerpt pada galeri..." required></textarea>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    <button type="reset" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>