
@include('pages.partials.__header') 
<script async src="{{asset('assets/js/main/modals.js')}}"></script>
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Produk hukum / 
                <div class="text-blue-500">Peraturan</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>PERATURAN PERUNDANG-UNDANGAN</h1>
                    <p>peraturan perundang-undangan bidang pendidikan, kebudayaan, riset, dan teknologi</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:pt-16  relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="row-span-3 shadow-md col-span-12 ">
                    <form class="domain-form" action="{{route('get_peraturan.data')}}" method="post">
                        @csrf
                        <div class="md:flex md:items-center md:space-x-4 tutup animate-slide-left">
                            <input value="{{$searchInput}}" name="search-peraturan" type="text" id="judul" class="w-full px-4 py-6 border-0 rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Cari peraturan perundang-undangan bidang pendidikan, kebudayaan, riset, dan teknologi">
                            <div class="absolute right-6 flex md:mt-0" id="filter-button">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-l focus:outline-none focus:ring focus:border-blue-300 hover:bg-red-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                                </button>
                                <p onclick="showModalFilter()" class="bg-yellow-500 text-slate-800 px-4 py-4 rounded-r focus:outline-none focus:ring focus:border-yellow-300" style="user-select: none; cursor: pointer;">
                                    <b>SPESIFIK</b>
                                </p>
                            </div>
                        </div>                        
                        <div class="absolute w-full flex md:justify-center justify-start md:-mt-14 md:top-[13rem] md:w-full w-[21rem] z-[11] hidden" id="filter-options" >
                            <div class="bg-white shadow-lg md:w-[80%] w-[100%] pt-3 pb-1 px-2 rounded-lg">
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class="flex-1 z-[16]">
                                        <section class="hidden" id="select-num" disabled>
                                            <select class="custom-select sources" placeholder="Pilih Nomor" name="nomor-peraturan">
                                                <option value="">Pilih Nomor</option>
                                                @foreach ($groupNomor as $id => $name)
                                                    <option class="" value="{{$name}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                        <section class="" id="type-num">
                                            <input type="text" name="nomor-peraturan" placeholder="Ketik Nomor Peraturan" class="custom-input w-full focus:ring-white">
                                        </section>
                                        <input id="change-num" type="checkbox" value="" class="absolute z-[9999] md:right-40 right-32  top-6 w-6 h-6 text-blue-600 bg-white border-gray-600 shadow-md rounded-xl focus:ring-blue-500 ">
                                    </div>
                                </div>
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class=" flex-1 z-[15]">
                                        <section>
                                            <select class="custom-select sources" placeholder="{{ isset($subjekInput) ? $subjekInput : "Pilih Subjek"}}" name="subjek-peraturan">
                                                <option value="">{{isset($subjekInput) ? "None" : "Pilih Subjek"}}</option>
                                                @foreach ($groupSubjek as $id => $name)
                                                    @if ($name == $subjekInput)
                                                        <option class="selection" selected value="{{$name}}">{{$name}}</option>
                                                    @else
                                                        <option class="" value="{{$name}}">{{$name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                    <div class="flex-1 z-[14]">
                                        <section>
                                            @foreach ($groupJenis as $id => $name)
                                                @if ($id == $jenisInput)
                                                    @php
                                                        $selectedJenis = $name;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <select class="custom-select sources" placeholder="{{ isset($jenisInput) ? $selectedJenis : "Pilih Jenis"}}" name="jenis-peraturan">
                                                <option value="">{{isset($jenisInput) ? "None" : "Pilih Jenis"}}</option>
                                                @foreach ($groupJenis as $id => $name)
                                                    @if ($id == $jenisInput)
                                                        <option class="selection" selected value="{{$id}}">{{$name}}</option>
                                                    @else
                                                        <option class="" value="{{$id}}">{{$name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                </div>
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class="flex-1 z-[13]">
                                        <section>
                                            @foreach ($groupTahun as $id => $name)
                                                @if ($id == $tahunInput)
                                                    @php
                                                        $selectedTahun = $name;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <select class="custom-select sources" placeholder="{{ isset($tahunInput) ? $selectedTahun : "Pilih Tahun"}}" name="tahun-peraturan">
                                                <option value="">{{isset($tahunInput) ? "None" : "Pilih Jenis"}}</option>
                                                @foreach ($groupTahun as $id => $name)
                                                    @if ($id == $tahunInput)
                                                        <option class="selection" selected value="{{$id}}">{{$name}}</option>
                                                    @else
                                                        <option class="" value="{{$id}}">{{$name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                    <div class="flex-1 z-[12]">
                                        <section>
                                            @foreach ($groupStatus as $id => $name)
                                                @if ($id == $statusInput)
                                                    @php
                                                        $selectedStatus = $name;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <select class="custom-select sources" placeholder="{{ isset($statusInput) ? $selectedStatus : "Pilih Status"}}" name="status-peraturan">
                                                <option value="">{{isset($statusInput) ? "None" : "Pilih Jenis"}}</option>
                                                @foreach ($groupStatus as $id => $name)
                                                    @if ($id == $statusInput)
                                                        <option class="selection" selected value="{{$id}}">{{$name}}</option>
                                                    @else
                                                        <option class="" value="{{$id}}">{{$name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="pb-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative md:mt-0 mt-12">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== ISI ========================== -->
                    <div class="card row-span-3 col-span-12 ">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <div class="pt-5">
                                    @foreach ($peraturanData as $p)
                                        <div class="perundangan text-sm">
                                            <div class="row">
                                                <div class="lg:mx-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><rect fill="none" height="24" width="24"></rect><path d="M19,5v9l-5,0l0,5H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h10l6-6V5C21,3.9,20.1,3,19,3z M12,14H7v-2h5V14z M17,10H7V8h10V10z"></path></svg>
                                                </div>
                                                <div class="col-lg-11 col-md-11 col-sm-12">
                                                    <div class="perundangan-content">
                                                        <a href="{{route('detail_peraturan.data', ['id' => $p->id, 'model' => $p->model])}}">
                                                            <h6 class="text-start lg:text-sm md:text-sm sm:text-xs">
                                                                {{ strtoupper($p->jenis_peraturan) }} 
                                                                <span class="text-yellow-600"> {{ strpos((string)$p->nomor_peraturan, (string)$p->tahun_peraturan) !== false ? strtoupper("NOMOR {$p->nomor_peraturan}") : strtoupper("NOMOR {$p->nomor_peraturan} TAHUN {$p->tahun_peraturan}") }}</span>
                                                            </h6>
                                                            <h1 class="hover:text-purple-900 transition duration-150 ease-in-out">{{$p->judul_peraturan}}</h1>
                                                        </a>
                                                        <div class="flex justify-between">
                                                            <div class="font-semibold text-gray-500">{{ \Carbon\Carbon::parse($p->tgl_penetapan)->format('d F Y') }}</div>
                                                            <div class="flex view-info">
                                                                <a href="#" class="views">
                                                                    <svg style="margin-top:-3px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 6.5c3.79 0 7.17 2.13 8.82 5.5-1.65 3.37-5.02 5.5-8.82 5.5S4.83 15.37 3.18 12C4.83 8.63 8.21 6.5 12 6.5m0-2C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 5c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5-2.5-1.12-2.5-2.5 1.12-2.5 2.5-2.5m0-2c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5 4.5-2.02 4.5-4.5-2.02-4.5-4.5-4.5z"></path></svg>
                                                                    {{$p->view}} | 
                                                                </a>
                                                                <a href="#" class="downloads">
                                                                    <svg style="margin-top:-3px; margin-right:5px;" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><g><rect fill="none" height="24" width="24"></rect></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M17,11l-1.41-1.41L13,12.17V4h-2v8.17L8.41,9.59L7,11l5,5 L17,11z"></path></g></svg>
                                                                    {{$p->download}}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="border my-6"></div>
                                                    </div>
                                                </div>
                                            </div><!--row-->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{ $peraturanData->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ANIMATED SELECT OPTIONS --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(".custom-select").each(function() {
        var classes = $(this).attr("class"),
            id = $(this).attr("id"),
            name = $(this).attr("name");
        var template = '<div class="' + classes + '">';
        template +=
            '<span class="custom-select-trigger">' +
            $(this).attr("placeholder") +
            "</span>";
        template += '<div class="custom-options">';
        $(this)
            .find("option")
            .each(function() {
            template +=
                '<span class="custom-option ' +
                $(this).attr("class") +
                '" data-value="' +
                $(this).attr("value") +
                '">' +
                $(this).html() +
                "</span>";
            });
        template += "</div></div>";

        $(this).wrap('<div class="custom-select-wrapper"></div>');
        $(this).hide();
        $(this).after(template);
        });
        $(".custom-option:first-of-type").hover(
        function() {
            $(this)
            .parents(".custom-options")
            .addClass("option-hover");
        },
        function() {
            $(this)
            .parents(".custom-options")
            .removeClass("option-hover");
        }
        );
        $(".custom-select-trigger").on("click", function() {
        $("html").one("click", function() {
            $(".custom-select").removeClass("opened");
        });
        $(this)
            .parents(".custom-select")
            .toggleClass("opened");
        event.stopPropagation();
        });
        $(".custom-option").on("click", function() {
        $(this)
            .parents(".custom-select-wrapper")
            .find("select")
            .val($(this).data("value"));
        $(this)
            .parents(".custom-options")
            .find(".custom-option")
            .removeClass("selection");
        $(this).addClass("selection");
        $(this)
            .parents(".custom-select")
            .removeClass("opened");
        $(this)
            .parents(".custom-select")
            .find(".custom-select-trigger")
            .text($(this).text());
        });
    
    </script>
@include('pages.partials.__footer')