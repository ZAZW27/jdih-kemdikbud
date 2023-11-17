
@include('pages.partials.__header')
@include('charts.inventarisasi-chart')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Inventarisasi</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Inventarisasi</h1>
                    <p>inventarisasi peraturan perundang-undangan</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-rows-2 grid-forms md:grid-row gap-4 pb-4">
                    <div class="card row-span-2 col-span-12 z-[1000]" style="padding-bottom: -50px;">
                        <div class="flex justify-center w-full pt-3">
                            <h2 class="text-xl font-bold">INVENTARISASI</h2>
                        </div>
                        <div class="content" id="graphic-container">
                            <div class="graphic-container">
                                <div class="select-year">
                                    <select name="" id="">
                                        <option value="">2023</option>
                                        <option value="">2022</option>
                                        <option value="">2021</option>
                                        <option value="">2020</option>
                                        <option value="">2019</option>
                                        <option value="">2018</option>
                                        <option value="">2017</option>
                                        <option value="">2016</option>
                                    </select>
                                </div>
                                <div class="layout text-start pt-5 md:-ml-[8rem] -ml-[3rem]">
                                    <div id="inventarisasi-chart" class="md:w-[115%] w-[120%] -mt-8"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-1 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: INVENTARISASI ========================== -->
                    <div class="card col-span-1 ">
                        <div class="content rounded-border-content">
                            <h3 class="mb-4 mx-auto text-center text-xl text-semibold"><b>REKAPITULASI</b></h3>     
                            <table class=" w-full table-auto ">
                                <thead class="text-start">
                                    <tr>
                                        <td rowspan="2" class="border-gray-300 border-t border-b border-r py-3 font-bold text-center">Jenis Peraturan</td>
                                        <td colspan="4" class="border-gray-300 border-t border-b py-3 font-bold text-center">Tahun Penetapan</td>
                                    </tr>
                                    <tr>
                                        @for ($year = date('Y') - 3; $year <= date('Y'); $year++)
                                            <td class="text-center border-gray-300 border-b border-r font-semibold">{{$year}}</td>
                                        @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1 @endphp
                                    @php $combinedRecords = []; @endphp

                                    @foreach ($per as $p)
                                        @php $recordId = $no > 15 ? 15 : $no; @endphp 

                                        @if (!isset($combinedRecords[$recordId]))
                                            {{-- Create an entry for the record ID if it doesn't exist --}}
                                            @php
                                                $combinedRecords[$recordId] = [
                                                    'jenis' => $p->jenis,
                                                    'tahun' => [],
                                                ];
                                            @endphp
                                        @endif
                                        {{-- Add data to the combined record --}}
                                        @for ($year = date('Y') - 3; $year <= date('Y'); $year++)
                                            @if (property_exists($p, 'tahun_' . $year))
                                                @if (!isset($combinedRecords[$recordId]['tahun'][$year]))
                                                    @php
                                                        $combinedRecords[$recordId]['tahun'][$year] = 0;
                                                    @endphp
                                                @endif
                                                {{-- Sum the values for the same year --}}
                                                @php
                                                    $combinedRecords[$recordId]['tahun'][$year] += $p->{'tahun_' . $year};
                                                @endphp
                                            @endif
                                        @endfor

                                        @php $no = $no > 15 ? 16 : $no + 1; @endphp
                                    @endforeach
                                
                                    @foreach ($combinedRecords as $recordId => $record)
                                        <tr class="border-gray-300 border-b hover:bg-gray-50 hover:border-b-2 hover:border-gray-400">
                                            <td class="text-start py-4 pl-4"><b>{{$recordId}} {{$record['jenis']}}</b></td>
                                            
                                            @for ($year = date('Y') - 3; $year <= date('Y'); $year++)
                                                @if (isset($record['tahun'][$year]))
                                                    <td class="text-center py-4">{{$record['tahun'][$year]}}</td>
                                                @else
                                                    <td class="text-center py-4">N/A</td>
                                                @endif
                                            @endfor
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!--row-->
                </div>
            </div>
        </div>
        
    </div>
    @include('pages.partials.__footer')