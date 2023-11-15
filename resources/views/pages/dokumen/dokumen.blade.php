
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
                    <form class="domain-form" action="{{route('filter_dokumen')}}" method="post">
                        @csrf
                        <div class="md:flex md:items-center md:space-x-4 tutup animate-slide-left">
                            <input name="search-peraturan" type="text" id="judul" class="w-full px-4 py-6 border-0 rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Cari Dokumen">
                            <div class="absolute right-6 flex md:mt-0" id="filter-button">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-l focus:outline-none focus:ring focus:border-blue-300 hover:bg-red-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                                </button>
                                <button type="reset" style="reset" onclick="showModalFilter()" class="bg-yellow-500 text-slate-800 px-4 py-4 rounded-r focus:outline-none focus:ring focus:border-yellow-300">
                                    <b>SPESIFIK</b>
                                </button>
                            </div>
                        </div>                        
                        <div class="absolute w-full flex md:justify-center justify-start md:-mt-14 md:top-[13rem] z-[11] hidden" id="filter-options" >
                            <div class="bg-white shadow-lg w-[80%] pt-3 pb-1 px-2 rounded-lg">
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class="flex-1 z-[16]">
                                        <section class="" id="type-num">
                                            <input type="text" name="opd-input" placeholder="Cari OPD" class="custom-input w-full focus:ring-white">
                                        </section>
                                    </div>
                                    <div class="flex-1 z-[15]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Status" name="status-input">
                                                <option value="">Pilih Jenis</option>
                                                @foreach ($getStatus as $name)
                                                    <option value="{{$name}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                </div>
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class=" flex-1 z-[15]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Peraturan" name="peraturan-input">
                                                <option value="">Pilih Subjek</option>
                                                @foreach ($getPer as $name)
                                                        <option value="{{$name}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                    <div class="flex-1 z-[14]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Tahun" name="tahun-input">
                                                <option value="">Pilih Jenis</option>
                                                @foreach ($getYear as $name)
                                                    <option value="{{$name}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                </div>
                                {{-- <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class="flex-1 z-[13]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Tahun" name="tahun-peraturan">
                                                <option value="">Pilih Tahun</option>
                                                @foreach ($groupTahun as $name)
                                                    <option value="{{$id}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                    <div class="flex-1 z-[12]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Status" name="status-peraturan">
                                                <option value="">Pilih Status</option>
                                                @foreach ($groupStatus as $name)
                                                    <option value="{{$id}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="pb-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative md:mt-0 mt-12">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp pl-4" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== ISI ========================== -->
                    <div class="row-span-3 col-span-12 ">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 px-3 isi-profil ">
                                <div class="pt-5">
                                    <div class="perundangan text-sm">
                                        <div class="">
                                            <table class="table w-full">
                                                <thead class="table__thead ">
                                                    <tr>
                                                        <th class="table__th">No</th>
                                                        <th class="table__th">OPD</th>
                                                        <th class="table__th">Peraturan</th>
                                                        <th class="table__th">Judul</th>
                                                        <th class="table__th">Status</th>
                                                        <th class="table__th">Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table__tbody">
                                                    @php
                                                        $no = 1
                                                    @endphp
                                                    @foreach ($dok as $q)
                                                        <tr class="table-row table-row--chris">
                                                            <td class="table-row__td">
                                                                <p class="table-row__name">{{$no}}</p>
                                                            </td>
                                                            <td data-column="OPD"  class="table-row__td">
                                                                <div class="table-row__info">
                                                                    <p class="table-row__name">{{$q->OPD}}</p>
                                                                </div>
                                                            </td>
                                                            <td data-column="PERATURAN"  class="table-row__td">
                                                                <div class="table-row__info">
                                                                    <p class="table-row__name">{{$q->peraturan}}</p>
                                                                </div>
                                                            </td>
                                                            <td data-column="JUDUL"  class="table-row__td">
                                                                <div class="table-row__info">
                                                                    <p class="table-row__name">{{$q->judul_dok}}</p>
                                                                </div>
                                                            </td>
                                                            <td data-column="STATUS"  class="table-row__td">
                                                                <div class="table-row__info">
                                                                    <p class="table-row__name">{{$q->status_dok}}</p>
                                                                </div>
                                                            </td>
                                                            <td data-column="KETERANGAN"  class="table-row__td ">
                                                                <div class="table-row__info">
                                                                    <p class="table-row__name">{{$q->keterangan_dok}}</p>
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
                            {{ $dok->links() }}
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