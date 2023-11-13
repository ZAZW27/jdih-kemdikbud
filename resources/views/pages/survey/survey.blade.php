
@include('pages.partials.__header')
    <div class="containers h-64 bkg-bg banner-small">
        <div class="page-routes">
            <a href="/">
                Beranda / Profil / 
                <div class="text-blue-500">Faq</div>
            </a>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity ">
                    <h1>Survey</h1>
                    <p>Beri pendapat anda tentang website ini</p>
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== SURVEY ========================== -->
                    <div class="card row-span-3 col-span-12 reverse-pad">
                        <div class="content rounded-border-content">
                            <div class="layout text-start pt-5 px-3  ">
                                <section class="flex md:flex-row flex-col">
                                    <div class="">
                                        <h1 class="text-blue-900 text-2xl font-bold ">SURVEY KEPUASAN PENGUNJUNG</h1>
                                    </div>
                                    <div class="flex justify-start md:ml-4 md:mt-0 mt-4">
                                        <a href="{{route('show_survey.data')}}" class="drop-shadow bg-blue-500 hover:bg-blue-600 transition-all duration-300 ease-in-out px-6 py-1 text-white text-lg font-medium rounded-md">Lihat Survey</a>
                                    </div>
                                </section>
                                <form method="post" action="{{route('submit_survey.data')}}" class="mt-6">
                                    @csrf
                                    <div class="question mb-6">
                                        <p class="font-semibold mb-3">Apakah tampilan website jdih.balikpapan.go.id mudah dipahami (user friendly)?</p>
                                        <input type="text" name="topic[1]" value="Apakah tampilan website jdih.balikpapan.go.id mudah dipahami (user friendly)?" id="topic1" hidden>
                                        <div class="mb-2">
                                            <input class="form-radio" required autofocus type="radio" name="rate[1]" id="kepuasan_ui04" value="Sangat Setuju">
                                            <label class="ml-2" for="kepuasan_ui04">Sangat Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[1]" id="kepuasan_ui03" value="Setuju">
                                            <label class="ml-2" for="kepuasan_ui03">Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[1]" id="kepuasan_ui02" value="Kurang Setuju">
                                            <label class="ml-2" for="kepuasan_ui02">Kurang Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[1]" id="kepuasan_ui01" value="Tidak Setuju">
                                            <label class="ml-2" for="kepuasan_ui01">Tidak Setuju</label>
                                        </div>
                                    </div>
                                    <div class="question mb-6">
                                        <p class="font-semibold mb-3">Apakah Akses pencarian pada jdih.balikpapan.go.id mudah digunakan ?</p>
                                        <input type="text" name="topic[2]" value="Apakah Akses pencarian pada jdih.balikpapan.go.id mudah digunakan ?" id="topic2" hidden>
                                        <div class="mb-2">
                                            <input class="form-radio" required autofocus type="radio" name="rate[2]" id="search_ux04" value="Sangat Setuju">
                                            <label class="ml-2" for="search_ux04">Sangat Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[2]" id="search_ux03" value="Setuju">
                                            <label class="ml-2" for="search_ux03">Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[2]" id="search_ux02" value="Kurang Setuju">
                                            <label class="ml-2" for="search_ux02">Kurang Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[2]" id="search_ux01" value="Tidak Setuju">
                                            <label class="ml-2" for="search_ux01">Tidak Setuju</label>
                                        </div>
                                    </div>
                                    <div class="question mb-6">
                                        <p class="font-semibold mb-3">Dokumen atau informasi hukum yang ada di jdih.balikpapan.go.id lengkap ?</p>
                                        <input type="text" name="topic[3]" value="Dokumen atau informasi hukum yang ada di jdih.balikpapan.go.id lengkap ?" id="topic3" hidden>
                                        <div class="mb-2">
                                            <input class="form-radio" required autofocus type="radio" name="rate[3]" id="kelengkapan_doc04" value="Sangat Setuju">
                                            <label class="ml-2" for="kelengkapan_doc04">Sangat Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[3]" id="kelengkapan_doc03" value="Setuju">
                                            <label class="ml-2" for="kelengkapan_doc03">Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[3]" id="kelengkapan_doc02" value="Kurang Setuju">
                                            <label class="ml-2" for="kelengkapan_doc02">Kurang Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[3]" id="kelengkapan_doc01" value="Tidak Setuju">
                                            <label class="ml-2" for="kelengkapan_doc01">Tidak Setuju</label>
                                        </div>
                                    </div>
                                    <div class="question">
                                        <p class="font-semibold mb-3">Dokumen atau informasi hukum yang ada di jdih.balikpapan.go.id otentik/valid ?</p>
                                        <input type="text" name="topic[4]" value="Dokumen atau informasi hukum yang ada di jdih.balikpapan.go.id otentik/valid ?" id="topic4" hidden>
                                        <div class="mb-2">
                                            <input class="form-radio" required autofocus type="radio" name="rate[4]" id="validate_doc04" value="Sangat Setuju">
                                            <label class="ml-2" for="validate_doc04">Sangat Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[4]" id="validate_doc03" value="Setuju">
                                            <label class="ml-2" for="validate_doc03">Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[4]" id="validate_doc02" value="Kurang Setuju">
                                            <label class="ml-2" for="validate_doc02">Kurang Setuju</label>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-radio" required type="radio" name="rate[4]" id="validate_doc01" value="Tidak Setuju">
                                            <label class="ml-2" for="validate_doc01">Tidak Setuju</label>
                                        </div>
                                    </div>
                                    <div class="mt-12 flex justify-start mr-3">
                                        <button class="drop-shadow-md bg-green-500 hover:bg-green-600 hover:drop-shadow-sm transition-all duration-300 ease-in-out px-6 py-1 text-white text-lg font-medium rounded-md">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')