@include('pages.partials.__header')
{{-- <script src="{{asset('assets/js/google-charts/col-chart.js')}}"></script> --}}
@include('charts.col-chart')
@include('charts.donut-chart')
<script async>
    AOS.init();

    AOS.init({
        once: true
    })   
</script>

<script async src="{{asset('assets/js/main/modals.js')}}"></script>
    <div class="containers h-64 mt-24 ">
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center pt-16  relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="row-span-3 col-span-12 ">
                    <form class="domain-form" action="{{route('get_peraturan.data')}}" method="post">
                        @csrf
                        <div class="md:flex md:items-center md:space-x-4 tutup animate-slide-left">
                            <input name="search-peraturan" type="text" id="judul" class="w-full px-4 py-6 border-0 mb-0 rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Cari peraturan perundang-undangan bidang pendidikan, kebudayaan, riset, dan teknologi">
                            <div class="absolute right-6 flex md:mt-0" id="filter-button">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-l focus:outline-none focus:ring focus:border-blue-300 hover:bg-red-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                                </button>
                                <button type="reset" style="reset" onclick="showModalFilter()" class="bg-yellow-500 text-slate-800 px-4 py-4 rounded-r focus:outline-none focus:ring focus:border-yellow-300">
                                    <b>SPESIFIK</b>
                                </button>
                            </div>
                        </div>
                        <div class="absolute w-full flex md:justify-center justify-start md:-mt-14 mt-3 md:top-[13rem] z-[11] hidden" id="filter-options" >
                            <div class="bg-white shadow-lg w-[80%] pt-3 pb-1 px-2 rounded-lg">
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class="flex-1 z-[16]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Subjek" name="subjek-peraturan">
                                                <option value="">Pilih Subjek</option>
                                                @foreach ($groupSubjek as $id => $name)
                                                    <option value="{{$id}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                </div>
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class=" flex-1 z-[15]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Nomor" name="nomor-peraturan">
                                                <option value="">Pilih Nomor</option>
                                                @foreach ($groupNomor as $id => $name)
                                                    <option value="{{$id}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                    <div class="flex-1 z-[14]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Jenis" name="jenis-peraturan">
                                                <option value="">Pilih Jenis</option>
                                                @foreach ($groupJenis as $id => $name)
                                                    <option value="{{$id}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                </div>
                                <div class="peraturan-filter flex flex-col sm:flex-row">
                                    <div class="flex-1 z-[13]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Tahun" name="tahun-peraturan">
                                                <option value="">Pilih Tahun</option>
                                                @foreach ($groupTahun as $id => $name)
                                                    <option value="{{$id}}">{{$name}}</option>
                                                @endforeach
                                            </select>
                                        </section>
                                    </div>
                                    <div class="flex-1 z-[12]">
                                        <section>
                                            <select class="custom-select sources" placeholder="Pilih Status" name="status-peraturan">
                                                <option value="">Pilih Status</option>
                                                @foreach ($groupStatus as $id => $name)
                                                    <option value="{{$id}}">{{$name}}</option>
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
    </div>
    <div id="slideshow">
        <div class="slide-wrapper" >
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
    </div>
    <div class="containers bg-center">
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-3 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: SUBJEK PERATURAN ========================== -->
                    <div class="card row-span-3 col-span-2" data-aos="fade-up" data-aos-duration="600">
                        <div class="top-banner w-full h-14 ">
                            <h2>SUBJEK PERATURAN</h2>
                            <div class="dots">
                                <a href="pages/produk-hukum/peraturan.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="flex flex-wrap justify-between">            
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="1">
                                        <div class="area-box">
                                            <button title="Administrasi" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 13h8v2H3zm0 4h8v2H3zm0-8h8v2H3zm0-4h8v2H3zm16 2v10h-4V7h4m2-2h-8v14h8V5z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">ADMINISTRASI</p>
                                        </div>
                                    </form>
                                </div>
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="2">
                                        <div class="area-box">
                                            <button title="Bahasa" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12.87 15.07l-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">BAHASA</p>
                                        </div>
                                    </form>
                                </div>
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="3">
                                        <div class="area-box">
                                            <button title="Bantuan/Pendanaan Pendidikan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"></path><circle cx="16" cy="12" r="1.5"></circle></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">BANTUAN</p>
                                        </div>
                                    </form>
                                </div>
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="4">
                                        <div class="area-box">
                                            <button title="Buku" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7zm12-4h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">BUKU</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="5">
                                        <div class="area-box">
                                            <button title="Kebudayaan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M14 6l-1-2H5v17h2v-7h5l1 2h7V6h-6zm4 8h-4l-1-2H7V6h5l1 2h5v6z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">KEBUDAYAAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="6">
                                        <div class="area-box">
                                            <button title="Organisasi" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="24" width="24"></rect><path d="M22,11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3H22z M7,9H4V5h3V9z M17,15h3v4h-3V15z M17,5h3v4h-3V5z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">ORGANISASI</p>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="7">
                                        <div class="area-box">
                                            <button title="Pengawasan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12zm-2-9H8v2h11V8zm0 4H8v2h11v-2zM7 8H5v2h2V8zm0 4H5v2h2v-2z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PENGAWASAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="8">
                                        <div class="area-box">
                                            <button title="Pengelolaan Satuan Pendidikan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M18.36 9l.6 3H5.04l.6-3h12.72M20 4H4v2h16V4zm0 3H4l-1 5v2h1v6h10v-6h4v6h2v-6h1v-2l-1-5zM6 18v-4h6v4H6z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">SATUAN PENDIDIKAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="9">
                                        <div class="area-box">
                                            <button title="Pendidik dan Tenaga Kependidikan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm.05 10H4.77c.99-.5 2.7-1 4.23-1 .11 0 .23.01.34.01.34-.73.93-1.33 1.64-1.81-.73-.13-1.42-.2-1.98-.2-2.34 0-7 1.17-7 3.5V19h7v-1.5c0-.17.02-.34.05-.5zm7.45-2.5c-1.84 0-5.5 1.01-5.5 3V19h11v-1.5c0-1.99-3.66-3-5.5-3zm1.21-1.82c.76-.43 1.29-1.24 1.29-2.18C19 9.12 17.88 8 16.5 8S14 9.12 14 10.5c0 .94.53 1.75 1.29 2.18.36.2.77.32 1.21.32s.85-.12 1.21-.32z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PENDIDIK &amp; TENDIK</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="10">
                                        <div class="area-box">
                                            <button title="Pendidikan Tinggi" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="60" width="60"></rect><path d="M12,7V3H2v18h20V7H12z M10,19H4v-2h6V19z M10,15H4v-2h6V15z M10,11H4V9h6V11z M10,7H4V5h6V7z M20,19h-8V9h8V19z M18,11h-4v2 h4V11z M18,15h-4v2h4V15z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PENDIDIKAN TINGGI</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons">
                                    <form id="detail_peraturan" action="cari_peraturan" method="post">
                                        <input type="hidden" name="id_peraturan_subjek" value="11">
                                        <div class="area-box">
                                            <button title="Perizinan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"></path></svg></button><br><br>
                                            <p style="float:center;font-weight:bold;font-size:13px">PERIZINAN</p>
                                        </div>
                                    </form>
                                </div>
    
                                <div class=" subject-icons" onclick="showModalSubjekPeraturan()">
                                    <div class="area-box">
                                        <button style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:13px">LAINNYA</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- ==================== CONTENT: LAYANAN ========================== -->
                    <div class="card row-span-1 lg:row-span-3 col-span-2" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease">
                        <div class="top-banner w-full h-14 ">
                            <h2>LAYANAN</h2>
                            <div class="dots">
                                <a href="pages/publikasi/layanan.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="layout">
                                <div class="row pt-4">
                                    <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                        <a href="https://birohukum.kemdikbud.go.id/" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">PORTAL</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 fam-grid">
                                        <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="_blank">
                                          <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIPERPU</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-12 fam-grid">
                                        <a href="https://sibankum.kemdikbud.go.id/" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIBANKUM</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 fam-grid">
                                        <a href="https://sikma.kemdikbud.go.id/" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIKMA</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                        <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="blank">
                                            <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SJDIH</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 fam-grid">
                                        
                                        <button onclick="showModalLayanan()" data-toggle="modal" data-target=".bd-example1-modal-md">
                                            <div class="c-layanan1">LAINNYA <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"></path></svg></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-3 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: PERATURAN TERBARU ========================== -->
                    <div class="card row-span-3 col-span-2 z-[1000]" data-aos="fade-up-left" data-aos-duration="600" data-aos-easing="ease">
                        <div class="top-banner w-full h-14 ">
                            <h2>PERATURAN TERBARU</h2>
                            <div class="dots">
                                <a href="pages/produk-hukum/peraturan.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="pt-5">
                                @php $countPeraturan = 0 @endphp
                                @foreach ($peraturan as $per)
                                    @if ($countPeraturan < 5)
                                        <a href="{{route('detail_peraturan.data', ['id' => $per->id])}}">
                                            <div class="peraturan">
                                                <div class="lg:flex lg:flex-row flex-col">
                                                    <div class="col-lg-1 col-md-1 col-sm-12">
                                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="40px" viewBox="0 0 24 24" width="40px" fill="#000000"><rect fill="none" height="24" width="24"></rect><path d="M19,5v9l-5,0l0,5H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h10l6-6V5C21,3.9,20.1,3,19,3z M12,14H7v-2h5V14z M17,10H7V8h10V10z"></path></svg>
                                                    </div>
                                                    <div class="col-lg-11 col-md-11 col-sm-12">
                                                        <div class="terbaru">
                                                            <h6>
                                                                <span style="color: #696969;">{{ strtoupper($per->jenis_peraturan)}}</span> 
                                                                {{-- CONDITION JIKA TAHUN SUDAH BERADA DI DALAM NOMOR PERATURAN --}}
                                                                {{ strpos((string)$per->nomor_peraturan, (string)$per->tahun_peraturan) !== false ? strtoupper("NOMOR {$per->nomor_peraturan}") : strtoupper("NOMOR {$per->nomor_peraturan} TAHUN {$per->tahun_peraturan}") }}
                                                            </h6>
                                                            <h1 class="hover:text-blue-900 lg:text-start sm:text-justify">{{$per->judul_peraturan}}</h1>
                                                            <span class="tgl-terbit-peraturan">{{ \Carbon\Carbon::parse($per->tanggal_penetapan)->format('d F Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div><!--row-->
                                                <div class="bdr2"></div>
                                            </div>
                                        </a>
                                        @php $countPeraturan++ @endphp
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- ==================== CONTENT: TAUTAN   ========================== -->
                    <div class="card row-span-3 col-span-2" data-aos="fade-right" data-aos-duration="400" data-aos-delay="400" data-aos-easing="ease">
                        <div class="top-banner w-full h-14 ">
                            <h2>TAUTAN</h2>
                            <div class="dots">
                                <a>
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://www.kemdikbud.go.id/" target="blank">Kemendikbudristek</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12.36 6l.4 2H18v6h-3.36l-.4-2H7V6h5.36M14 4H5v17h2v-7h5.6l.4 2h7V6h-5.6L14 4z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://merdekabelajar.kemdikbud.go.id/" target="blank">Merdeka Belajar</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://beasiswaunggulan.kemdikbud.go.id/" target="blank">Beasiswa Unggulan</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><g><rect fill="none" height="24" width="24" x="0"></rect></g><g><path d="M22.47,5.2C22,4.96,21.51,4.76,21,4.59v12.03C19.86,16.21,18.69,16,17.5,16c-1.9,0-3.78,0.54-5.5,1.58V5.48 C10.38,4.55,8.51,4,6.5,4C4.71,4,3.02,4.44,1.53,5.2C1.2,5.36,1,5.71,1,6.08v12.08c0,0.58,0.47,0.99,1,0.99 c0.16,0,0.32-0.04,0.48-0.12C3.69,18.4,5.05,18,6.5,18c2.07,0,3.98,0.82,5.5,2c1.52-1.18,3.43-2,5.5-2c1.45,0,2.81,0.4,4.02,1.04 c0.16,0.08,0.32,0.12,0.48,0.12c0.52,0,1-0.41,1-0.99V6.08C23,5.71,22.8,5.36,22.47,5.2z M10,16.62C8.86,16.21,7.69,16,6.5,16 c-1.19,0-2.36,0.21-3.5,0.62V6.71C4.11,6.24,5.28,6,6.5,6C7.7,6,8.89,6.25,10,6.72V16.62z M19,0.5l-5,5V15l5-4.5V0.5z"></path></g></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://belajar.id/" target="blank">Belajar</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9 10v8l7-4zm12-4h-7.58l3.29-3.29L16 2l-4 4h-.03l-4-4-.69.71L10.56 6H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 14H3V8h18v12z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://kampusmerdeka.kemdikbud.go.id/" target="blank">Kampus Merdeka</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 19V4h-4V3H5v16H3v2h12V6h2v15h4v-2h-2zm-6 0H7V5h6v14zm-3-8h2v2h-2z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://perpustakaan.kemdikbud.go.id/" target="blank">Perpustakaan</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><rect fill="none" height="24" width="24"></rect><g><path d="M16,11V3H8v6H2v12h20V11H16z M10,5h4v14h-4V5z M4,11h4v8H4V11z M20,19h-4v-6h4V19z"></path></g></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://guru.kemdikbud.go.id/" target="blank">Merdeka Mengajar</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                            <div class="d-tautan">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><rect fill="none" height="24" width="24"></rect><path d="M14.5,12.59l0.9,3.88L12,14.42l-3.4,2.05l0.9-3.87l-3-2.59l3.96-0.34L12,6.02l1.54,3.64L17.5,10L14.5,12.59z M12,3.19 l7,3.11V11c0,4.52-2.98,8.69-7,9.93C7.98,19.69,5,15.52,5,11V6.3L12,3.19 M12,1L3,5v6c0,5.55,3.84,10.74,9,12c5.16-1.26,9-6.45,9-12 V5L12,1L12,1z"></path></svg>
                                    </div>
                                    <div class="text-tautan">
                                        <div class="c-tautan">
                                            <h1><a href="https://wkmb.kemdikbud.go.id/" target="blank">Wiyata Kinarya</a></h1>                                        
                                        </div><!--tautansub-->
                                    </div>
                                </div><!--row-->
                                <div class="bdr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: PENGUMUMAN ========================== -->
                    <div class="card row-span-2 col-span-4" data-aos="fade-left" data-aos-duration="600" data-aos-delay="400">
                        <div class="top-banner w-full h-14 ">
                            <h2>PENGUMUMAN</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="pt-5">
                                @php $countPengumuman = 0 @endphp
                                @foreach ($pengumuman as $p)
                                    @if ($countPengumuman < 4 )
                                        <div class="pengumuman">
                                            <h1 class="text-base tujuan-link">
                                                <a href="{{ route('detail_pengumuman.data', ['id' => $p->id])}}">{{$p->judul}}</a>
                                            </h1>
                                            <div class="my-3 tujuan">
                                                <p class="text-yellow-500 font-semibold start">{{$p->tema}}</p>
                                            </div>
                                            <div class="border"></div>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="pengumuman">
                                    <h1 class="text-base tujuan-link">
                                        <a href="/statistika-peraturan">Statistik Peraturan Perundang-undangan</a>
                                    </h1>
                                    <div class="my-3 tujuan">
                                        <p class="text-yellow-500 font-semibold start">Peraturan</p>
                                    </div>
                                    <div class="border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==================== CONTENT: BERITA TERBARU ========================== -->
                    <div class="card row-span-3 col-span-8" data-aos="fade-down" data-aos-duration="600">
                        <div class="top-banner w-full h-14">
                            <h2>BERITA TERBARU</h2>
                            <div class="dots">
                                <a href="pages/informasi/informasi.php">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="py-4">
                                <div class="berita">
                                    {{-- menghitung berapa banyak count, jika lebih dari 3 akan berhenti --}}
                                    @php $count = 0 @endphp 
                                    @foreach ($berita as $b)
                                        @if ($count < 3)
                                        <div class="berita-containers">
                                            
                                            <div class="berita-img">
                                                <img class="berita-image" src="{{ asset('assets/img/berita/'.$b->gambar_berita)}}" alt="">
                                            </div>
                                            <div class="berita-content">
                                                <div class="berita-text px-4 py-1">
                                                    <a href="{{route('detail_berita.data', ['id' => $b->id])}}">
                                                        <h2>{{$b->judul}}</h2>
                                                    </a>
                                                    <div class="berita-info mt-4">
                                                        <div class="">
                                                            <span style="color:gray;font-weight:bold;">{{$b->tema}}</span>
                                                        </div>
                                                        <div class="">
                                                            <p style="color:#C58529;font-weight:bold;">14 September 2023</p>
                                                        </div>
                                                    </div>
                                                    <div class="border-dark "></div>
                                                </div>
                                            </div>
                                        </div>
                                            @php $count++ @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-3 grid-forms md:grid-row gap-4">
                    <!-- ==================== CONTENT: VIDIO YOUTUBE ========================== -->
                    <div class="card row-span-3 col-span-2 md:col-span-3 bg-transparent shadow-none lg:h-[450px] md:h-[450px] sm:h-[450px] xs:h-[600px] z-[1000]" data-aos="fade-right" data-aos-duration="400">
                        <!-- width="100%" height="450px" -->
                        <iframe class="kemdikbud-vid-yt" width="100%" height="100%" src="https://www.youtube.com/embed/M9S3yezU6Bo?si=MOIL3T0NuSyoVVYb" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- ==================== CONTENT: MEDIA SOSIAL ========================== -->
                    <div class="card row-span-3 col-span-2 " style="padding-bottom: -50px;" data-aos="fade-right" data-aos-duration="400" data-aos-duration="100" data-aos-delay="200" data-aos-easing="ease-in-out">
                        <div class="top-banner w-full h-14 ">
                            <h2>MEDIA</h2>
                            <div class="dots">
                                <a >
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="py-4">
                                <div class="padd-all">
                                    <svg style="float:left; margin-right:10px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#05a9f4" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                    <a class="media-link" href="https://twitter.com/birohukumdikbud" target="blank">
                                        <b>Twitter</b> 
                                        <p>@birohukumdikbud</p>
                                    </a>
                                    <!-- <a href='https://twitter.com/birohukumdikbud/status/1588353648509128704' target="blank"><h1>#Permendikbudristek 25/2022 - Penilaian Buku Pendidikan http://bit.ly/3WuDvop #JDIHKemendikbudristek</h1></a> -->
                                    <br>
                                    <div class="border"></div>
                                    <br>
                                    <a href="https://www.instagram.com/birohukumdikbud/" target="blank"><img src="{{ asset('assets/img/media/Instagram.png') }}" alt="Instagram" style="width:24px; float:left; margin-right:10px; margin-top:20px;"></a>
                                    <a class="media-link" href="https://www.instagram.com/birohukumdikbud/" target="blank">
                                        <b>Instagram</b> 
                                        <p>@birohukumdikbud</p>
                                    </a>
                                    <br>
                                    <!-- <a href='https://www.instagram.com/p/CkaTEhwrqQJ/' target="blank"><h1>Tahapan pembentukan Permendikbudristek diatur melalui Permendikbud No 142 tahun 2014 tentang Pedoman Pembentukan Peraturan Menteri Pendidikan dan Kebudayaan.</h1></a> -->
                                    <div class="border"></div>
                                    <!-- <a href='https://www.youtube.com/@birohukumdikbud/' target="blank"><img src="{{ asset('assets/images/ig.png"') }} alt="Youtube" style="width:24px; float:left; margin-right:10px; margin-top:20px;"></a>
                                    <a href='https://www.youtube.com/@birohukumdikbud/' target="blank"><b>Youtube</b> <p style="margin-top:17px;">@birohukumdikbud</p></a>
                                    <a href='https://www.instagram.com/p/CkaTEhwrqQJ/' target="blank"><h1>Tahapan pembentukan Permendikbudristek diatur melalui Permendikbud No 142 tahun 2014 tentang Pedoman Pembentukan Peraturan Menteri Pendidikan dan Kebudayaan.</h1></a>
                                    <br/>
                                    <br/>
                                    <div class="bdr2"></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-rows-2 grid-forms md:grid-row gap-4 pb-4">
                    <div class="card row-span-2 col-span-8 z-[1000]" style="padding-bottom: -50px;" data-aos="fade-right" data-aos-duration="500">
                        <div class="top-banner w-full h-14 ">
                            <h2>STATISTIKA PERATURAN</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
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
                                <div id="peraturan-chart" class="peraturan-charts">
                                    <div class="chart-container-col">
                                        <div id="peraturan-chart" style="width: 900px; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card row-span-1 col-span-4 z-[500]" data-aos="fade-right" data-aos-duration="400" data-aos-delay="200" data-aos-easing="ease-in-out">
                        <div class="top-banner w-full h-14 ">
                            <h2>PENGUNJUNG</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content" style="overflow: hidden;">
                            <div class="graphic-container mt-3">
                                <div class="pengunjung-charts">
                                    <div class="chart-container">
                                        <div id="pengunjung-chart" style="width: 100%; height: 380px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card row-span-1 col-span-4 mt-3" data-aos="fade-down" data-aos-duration="400" data-aos-delay="200" data-aos-easing="ease-in-out">
                        <div class="top-banner w-full h-14 ">
                            <h2>SURVEY KEPUASAN</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="py-4">
                                <div class="feedbacks">
                                    <p>Penilaian anda sangat bermanfaat untuk perbaikan dalam rangka peningkatan kualitas layanan untuk lebih baik lagi.</p>
                                    <a href="https://bit.ly/ikmjdih" target="_blank" class="hover:bg-blue-800">BERI PENILAIAN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========================================================================================================================== 
        =============================== CONTENT: MODAL MODAL MODAL MODAL MODAL MODAL==============================================
        ============================================ START START =================================================================-->
    <div id="modal-base" class="p-0 m-0 fixed right-[0] top-0 bg-black bg-opacity-50 w-[100%] h-screen z-[100000] justify-center items-center flex-col opacity-0 hidden transition-opacity duration-500">
        <!-- MODAL UNTUK SUBJECT PERAATURAN -->
        <div id="modalSubjekPeraturan" class="hidden rounded-3xl overflow-hidden justify-center items-center flex-col lg:w-[27rem] md:w-[60%] sm:w-[90%] xs:w-[90%] mt-[6rem]">
            <div class="top-banner h-14 w-full">
                <h2>SUBJEK PERATURAN</h2>
                <div class="dots">
                    <button onclick="hideModalSubjekPeraturan()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-8 w-full h-[30rem] overflow-y-scroll">
                <!-- ==================== MODAL: SUBJEK PERATURAN ========================== -->
                <div class="" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    
                    <div class="content">
                        <div class="flex flex-wrap justify-center">            
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="1">
                                    <div class="area-box">
                                        <button title="Administrasi" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 13h8v2H3zm0 4h8v2H3zm0-8h8v2H3zm0-4h8v2H3zm16 2v10h-4V7h4m2-2h-8v14h8V5z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">ADMINISTRASI</p>
                                    </div>
                                </form>
                            </div>
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="2">
                                    <div class="area-box">
                                        <button title="Bahasa" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12.87 15.07l-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">BAHASA</p>
                                    </div>
                                </form>
                            </div>
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="3">
                                    <div class="area-box">
                                        <button title="Bantuan/Pendanaan Pendidikan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"></path><circle cx="16" cy="12" r="1.5"></circle></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">BANTUAN</p>
                                    </div>
                                </form>
                            </div>
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="4">
                                    <div class="area-box">
                                        <button title="Buku" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7zm12-4h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">BUKU</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="5">
                                    <div class="area-box">
                                        <button title="Kebudayaan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M14 6l-1-2H5v17h2v-7h5l1 2h7V6h-6zm4 8h-4l-1-2H7V6h5l1 2h5v6z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">KEBUDAYAAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="6">
                                    <div class="area-box">
                                        <button title="Organisasi" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="24" width="24"></rect><path d="M22,11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3H22z M7,9H4V5h3V9z M17,15h3v4h-3V15z M17,5h3v4h-3V5z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">ORGANISASI</p>
                                    </div>
                                </form>
                            </div>
                            
                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="7">
                                    <div class="area-box">
                                        <button title="Pengawasan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12zm-2-9H8v2h11V8zm0 4H8v2h11v-2zM7 8H5v2h2V8zm0 4H5v2h2v-2z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PENGAWASAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="8">
                                    <div class="area-box">
                                        <button title="Pengelolaan Satuan Pendidikan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M18.36 9l.6 3H5.04l.6-3h12.72M20 4H4v2h16V4zm0 3H4l-1 5v2h1v6h10v-6h4v6h2v-6h1v-2l-1-5zM6 18v-4h6v4H6z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">SATUAN PENDIDIKAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="9">
                                    <div class="area-box">
                                        <button title="Pendidik dan Tenaga Kependidikan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm.05 10H4.77c.99-.5 2.7-1 4.23-1 .11 0 .23.01.34.01.34-.73.93-1.33 1.64-1.81-.73-.13-1.42-.2-1.98-.2-2.34 0-7 1.17-7 3.5V19h7v-1.5c0-.17.02-.34.05-.5zm7.45-2.5c-1.84 0-5.5 1.01-5.5 3V19h11v-1.5c0-1.99-3.66-3-5.5-3zm1.21-1.82c.76-.43 1.29-1.24 1.29-2.18C19 9.12 17.88 8 16.5 8S14 9.12 14 10.5c0 .94.53 1.75 1.29 2.18.36.2.77.32 1.21.32s.85-.12 1.21-.32z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PENDIDIK &amp; TENDIK</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="10">
                                    <div class="area-box">
                                        <button title="Pendidikan Tinggi" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><rect fill="none" height="60" width="60"></rect><path d="M12,7V3H2v18h20V7H12z M10,19H4v-2h6V19z M10,15H4v-2h6V15z M10,11H4V9h6V11z M10,7H4V5h6V7z M20,19h-8V9h8V19z M18,11h-4v2 h4V11z M18,15h-4v2h4V15z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PENDIDIKAN TINGGI</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <form id="detail_peraturan" action="cari_peraturan" method="post">
                                    <input type="hidden" name="id_peraturan_subjek" value="11">
                                    <div class="area-box">
                                        <button title="Perizinan" style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm7 10c0 4.52-2.98 8.69-7 9.93-4.02-1.24-7-5.41-7-9.93V6.3l7-3.11 7 3.11V11zm-11.59.59L6 13l4 4 8-8-1.41-1.42L10 14.17z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">PERIZINAN</p>
                                    </div>
                                </form>
                            </div>

                            <div class=" subject-icons">
                                <a href="peraturan" data-toggle="modal" data-target=".bd-example-modal-md">
                                    <div class="area-box">
                                        <button style="background-color: transparent; border: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0z" fill="none"></path><path d="M17 15h2v2h-2zM17 11h2v2h-2zM17 7h2v2h-2zM13.74 7l1.26.84V7z"></path><path d="M10 3v1.51l2 1.33V5h9v14h-4v2h6V3z"></path><path d="M8.17 5.7L15 10.25V21H1V10.48L8.17 5.7zM10 19h3v-7.84L8.17 8.09 3 11.38V19h3v-6h4v6z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">LAINNYA</p>
                                    </div>
                                </a>
                            </div>
                                <div class=" subject-icons">
                                <a href="peraturan" data-toggle="modal" data-target=".bd-example-modal-md">
                                    <div class="area-box">
                                        <button style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39s-4.66 1.97-4.66 4.39c0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94s3.08 1.32 3.08 2.94c0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">LAINNYA</p>
                                    </div>
                                </a>
                            </div>

                            <div class=" subject-icons">
                                <a href="peraturan" data-toggle="modal" data-target=".bd-example-modal-md">
                                    <div class="area-box">
                                        <button style="background-color: transparent; border: none;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="36px" viewBox="0 0 20 20" width="36px" fill="#000000"><rect fill="none" height="20" width="20"></rect><path d="M4.5,14h6v1.5h-6V14z M13.5,8c0,2.09-1.07,3.93-2.69,5H4.19C2.57,11.93,1.5,10.09,1.5,8c0-3.31,2.69-6,6-6S13.5,4.69,13.5,8 z M12,8c0-2.48-2.02-4.5-4.5-4.5S3,5.52,3,8c0,1.37,0.62,2.65,1.67,3.5h5.65C11.38,10.65,12,9.37,12,8z M7.5,18 C8.33,18,9,17.33,9,16.5H6C6,17.33,6.67,18,7.5,18z M18.5,8l0.47-1.03L20,6.5l-1.03-0.47L18.5,5l-0.47,1.03L17,6.5l1.03,0.47L18.5,8 z M15.5,5l0.78-1.72L18,2.5l-1.72-0.78L15.5,0l-0.78,1.72L13,2.5l1.72,0.78L15.5,5z"></path></svg></button><br><br>
                                        <p style="float:center;font-weight:bold;font-size:10px">LAINNYA</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL UNTUK LAYANAN -->
        <div id="modalLayanan" class="hidden rounded-3xl overflow-hidden justify-center items-center flex-col lg:w-[27rem] md:w-[60%] sm:w-[90%] xs:w-[90%] mt-[6rem]" >

            <div class="top-banner h-14 w-full">
                <h2>LAYANAN</h2>
                <div class="dots">
                    <button onclick="hideModalLayanan()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </butto>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-8 w-full h-[30rem] ">
                <div class="content">
                    <div class="layout">
                        <div class="row pt-4 -mr-8 overflow-x-hidden">
                            <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                <a href="https://birohukum.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">PORTAL</div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 fam-grid">
                                <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="_blank">
                                  <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIPERPU</div>
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 fam-grid">
                                <a href="https://sibankum.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIBANKUM</div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 fam-grid">
                                <a href="https://sikma.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIKMA</div>
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SJDIH</div>
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 fam-grid">
                                <a href="http://simapel.birohukum.kemdikbud.go.id/" target="blank">
                                    <div class="c-layanan bg-yellow-500 p-2 rounded-xg text-center">SIMAPEL</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========================================================================================================================== 
        =============================== CONTENT: MODAL MODAL MODAL MODAL MODAL MODAL==============================================
        ============================================ END END =================================================================-->

        <footer class="w3l-footer-29-main">
            <div class="footer-29 pt-5">
              <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-3 gap-4">
                  <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                    <div class="footer-logo mb-4">
                      <img src="{{ asset('assets/img/logo/logo_jdih_footer.png') }}" style="width: 180px;">
                    </div>
                  </div>
                  <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                    <ul id="komponen">
                      <li><a href="peraturan">Peraturan</a></li>
                      <li><a href="#">Putusan Pengadilan</a></li>
                      <li><a href="#">Naskah Kerja Sama</a></li>
                      <li><a href="inventarisasi">Inventarisasi</a></li>
                      <li><a href="statistik">Statistik</a></li>
                    </ul>
                  </div>
                  <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                    <ul id="komponen">
                      <li><a href="tentang">Tentang</a></li>
                      <li><a href="visi_misi">Visi dan Misi</a></li>
                      <li><a href="struktur">Struktur Organisasi</a></li>
                      <li><a href="pengumuman">Pengumuman</a></li>
                      <li><a href="layanan">Layanan</a></li>
                      <li><a href="berita">Berita</a></li>
                    </ul>
                  </div>
                  <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1 footer-media" >
                    <h5 class="font-bold text-yellow-400 text-lg" style="margin: -10px 0px 0 -10px;">Media Sosial</h5>
                    <div class="flex gap-2 media-link-footer">
                      <a href="" target="_blank">
                        <img src="{{ asset('assets/img/media/envelope.png') }}" alt="Email" style="width: 24px;">
                      </a>
                      <a href="" target="_blank">
                        <img src="{{ asset('assets/img/media/facebook.png') }}" alt="Facebook" style="width: 24px;">
                      </a>
                      <a href="https://twitter.com/birohukumdikbud" target="_blank">
                        <img src="{{ asset('assets/img/media/twitter.png') }}" alt="Twitter" style="width: 24px;">
                      </a>
                      <a href="https://www.instagram.com/birohukumdikbud/" target="_blank">
                        <img src="{{ asset('assets/img/media/instagram-outline') }}.png" alt="Instagram" style="width: 24px;">
                      </a>
                      <a href="https://www.youtube.com/channel/UC_teqno_MCTrSKHwfdstXYw" target="_blank">
                        <img src="{{ asset('assets/img/media/youtube.png') }}" alt="Youtube" style="width: 24px;">
                      </a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- copyright -->
            <section class="w3l-copyright text-center ">
                <div class="container">
                    <hr class="copyright-border">
                    <p class="copy-footer-29 mt-4" style="font-size: 15px;">
                        2023 © <a href="https://birohukum.kemdikbud.go.id" target="_blank">Biro Hukum.</a>
                    <a href="https://kemdikbud.go.id" target="_blank"> Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</a>
                    </p>
                </div>
                <button onclick="topFunction()" id="movetop" title="Go to top" class="move-to-top-btn shadow-md z-50">
                    ^
                </button>
            </section>
            <!-- //copyright -->
        </footer>   
        {{-- top functions --}}
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
    
            window.onscroll = function () {
                scrollFunction()
            };
            
            function scrollFunction() {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("movetop").style.display = "block";
                } else {
                document.getElementById("movetop").style.display = "none";
                }
            }
    
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
    
            
    
        </script>    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(window).on("scroll", function () {
                var scroll = $(window).scrollTop();
    
                if (scroll >= 5) {
                    $("#site-header")
                        .stop()
                        .animate({ height: "90px"}, 200); // Adjust the target height and margin as needed
                } else {
                    $("#site-header")
                        .stop()
                        .animate({ height: "100px", marginTop: "0px" }, 200); // Replace "original-height" and "original-margin" with the actual original values
                }
            });
        </script>
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
        <!-- AOS CODES -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
    