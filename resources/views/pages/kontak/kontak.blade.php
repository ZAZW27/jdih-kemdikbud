
@include('pages.partials.__header')
    <div class="containers h-[19rem] bkg-bg">
        <div class="page-routes">
            <a href="/">
                Beranda / <div class="text-blue-500"> Hubungi kami</div>
            </a>
        </div>
        <div class="py-12 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative h-full">
            <div class=" col-span-12 md:col-span-12 sm:col-span-12 my-16 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="page-identity my-auto">
                    <h1>HUBUNGI KAMI</h1>
                    <p>kontak kami, saran dan pertanyaan</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="containers bg-center pb-10" >
        <div class="py-4 mx-auto max-w-screen-xl text-center z-10 relative lg:-mb-[20rem]">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-9 grid-rows-2 grid-forms md:grid-row gap-4">
                    <!-- ==================== LIST PROFILS ========================== -->
                    <div class="card row-span-1 col-span-4 animate-slide-up " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="content rounded-border-content">
                            <div class="info-kontak">
                                <h1 class="mb-5 font-semibold">BIRO HUKUM</h1>
                                <div class="info-alamat mb-5">
                                    <h class="font-semibold"1>Alamat</h>
                                    <p>Komplek Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi</p>
                                    <p>Gedung C Lantai 11</p>
                                    <p>Jalan Jenderal Sudirman, Senayan</p>
                                    <p>Jakarta 10270</p>
                                </div>
                                <div class="info-email mb-5">
                                    <h1 class="font-semibold">Email</h1>
                                    <p>jdih@kemdikbud.go.id</p>
                                </div>
                                <div class="info-laman mb-5">
                                    <h1 class="font-semibold">Laman</h1>
                                    <p>https://birohukum.kemdikbud.go.id</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- ==================== ISI ========================== -->
                    <div class="card row-span-2 col-span-5 relative lg:-top-[10rem] h-[40rem]">
                        <div class="content rounded-border-content">
                            <div class="layout text-justify pt-5 form-kontak ">
                                <form id="hubungi" action="aksi" method="post" class="p-4">
                                    <input type="hidden" name="sp_aksi" value="1">
                                    <div class="mb-4">
                                        <label for="nama_lengkap" class="block">Nama Lengkap</label>
                                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" class="w-full py-2 px-3 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block">Email</label>
                                        <input type="text" id="email" name="email" placeholder="Masukan Email" class="w-full py-2 px-3 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                                    </div>
                                    <div class="mb-4">
                                        <label for="subjek" class="block">Subjek</label>
                                        <input type="text" id="subjek" name="subjek" placeholder="Masukan Subjek" class="w-full py-2 px-3 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                                    </div>
                                    <div class="mb-4">
                                        <label for="pesan" class="block">Saran dan Pertanyaan</label>
                                        <textarea id="pesan" name="pesan" placeholder="Masukan saran dan pertanyaan" class="w-full py-2 px-3 border rounded-md focus:outline-none focus:ring focus:border-blue-300" style="height: 200px;"></textarea>
                                    </div>
                                    <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md" onclick="document.getElementById('hubungi').submit();">Kirim Pesan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.partials.__footer')