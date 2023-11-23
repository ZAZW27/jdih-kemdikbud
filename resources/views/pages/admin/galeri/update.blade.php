@include('pages.partials.__adminBar');



<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
        <div class="relative md:-bottom-12 bottom-0">
            <a href="{{route('getGaleri.data')}}" class="flex justify-center w-20 h-auto bg-blue-500 rounded-lg drop-shadow-md text-white font-semibold py-1">Go Back!</a>
        </div>
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400">
            <h1 class="text-4xl font-bold text-sky-600">UPDATE BERITA <span class="text-amber-500 font-normal">|</span><span class="font-normal"> ID: {{$data->id}}</span></h1>
        </div>
        <div class="flex items-center justify-center h-auto py-2 px-4 rounded bg-gray-50">
            <div class="relative overflow-x-auto sm:rounded-lg py-4 w-full px-6">
                <form action="{{route('proses-update-galeri')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$data->id}}" name="id" hidden>
                    {{-- <div class="relative z-0 w-full mb-2 group">
                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Gambar berita</label>
                        <input name="gambar" value="{{$data->gambar_berita}}" class="block w-full text-sm text-slate-900 border border-slate-600 rounded-lg cursor-pointer bg-white shadow focus:outline-none" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        <div class="mt-1 text-sm text-gray-500 " id="user_avatar_help">Gambar untuk bertia yang akan di publish</div>
                    </div> --}}
                    <div class="flex flex-wrap  w-full">
                        <div class="relative z-0 mb-6 group">
                            <img class="md:w-60 md:h-60 w-24 h-24" src="{{ asset('assets/img/galeri/'.$data->gambar) }}" alt="">
                        </div>
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Gambar berita</label>
                            <input name="gambar" value="{{$data->gambar}}" class="block w-full text-sm text-slate-900 border border-slate-600 rounded-lg cursor-pointer bg-white shadow focus:outline-none" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            <div class="mt-1 text-sm text-gray-500 " id="user_avatar_help">Gambar untuk bertia yang akan di publish</div>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">                        
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Isi Berita</label>
                        <textarea name="judul" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-slate-800 focus:ring-none focus:border-none" placeholder="beri isi pada berita">{{$data->judul}}</textarea>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">                        
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Isi Berita</label>
                        <textarea name="exerpt" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-slate-800 focus:ring-none focus:border-none" placeholder="beri exerpt pada berita">{{$data->exerpt}}</textarea>
                    </div>
                    
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    <button type="reset" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center">Reset</button>
                </form>
            </div>
        </div>
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