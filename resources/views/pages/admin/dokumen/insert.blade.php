@include('pages.partials.__adminBar');



<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
        <div class="relative md:-bottom-12 bottom-0">
            <a href="{{route('getDokumen.data')}}" class="flex justify-center w-20 h-auto bg-blue-500 rounded-lg drop-shadow-md text-white font-semibold py-1">Go Back!</a>
        </div>
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400">
            <h1 class="text-4xl font-bold text-sky-600">DOKUMEN BARU</h1>
        </div>
        
        <div class="flex items-center justify-center h-auto py-2 px-4 rounded bg-gray-50">
            <div class="relative overflow-x-auto sm:rounded-lg py-4 w-full px-6">
                <form action="{{route('proses-insert-dokumen')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col justify-center flex-wrap">
                        <div class="relative z-0 mb-2 w-full group">                        
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                            <input placeholder="Judul dokumen yang akan dibuat" name="judul" type="text" id="email" aria-describedby="helper-text-explanation" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-4 group flex flex-wrap">
                            <label for="status-dok" class="block text-sm font-medium text-gray-900">Apakaha dokumen sudah di paraf?</label>
                            <input id="status-dok" name="status" class="shadow ml-2 w-12 bg-white border border-slate-500 text-green-500 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block  p-2.5  transition-all duration-200 ease-out" type="checkbox" id="email" aria-describedby="helper-text-explanation">
                        </div>  
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Peraturan</label>
                            <input placeholder="Jenis peraturan apa dokumen yang akan dibuat?" name="peraturan" type="text" id="email" aria-describedby="helper-text-explanation" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">OPD</label>
                            <input placeholder="OPD. . ." name="opd" type="text" id="email" aria-describedby="helper-text-explanation" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">                        
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">keterangan</label>
                        <input placeholder="keterangan dokumen " name="keterangan" type="text" id="email" aria-describedby="helper-text-explanation" class="shadow bg-white border border-slate-500 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-sky-800 block w-full p-2.5  transition-all duration-200 ease-out" required>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    <button type="reset" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>