
@include('pages.partials.__header')
<script async>
    AOS.init();

    AOS.init({
        once: true
    })   
</script>
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
                    <h1>LAYANAN</h1>
                    <p>ragam layanan biro hukum</p>
                </div>
            </div>
        </div>
    </div>
    <div class="containers bg-center pb-10" >
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <div class="card col-span-4 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="0" data-aos-duration="500">
                        <div class="top-banner w-full h-14 ">
                            <h2>PORTAL</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content flex flex-col justify-start layanan-card">
                            <p class="text-start">Laman organisasi Biro Hukum yang berisikan informasi dan publikasi terkait pelaksanaan tugas dan fungsi Biro di bidang hukum serta informasi terkait lainya di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                            <a href="https://birohukum.kemdikbud.go.id/" class="rounded bg-blue-600 text-white px-2 py-2 w-[8rem] mt-5">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card col-span-4 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="50" data-aos-duration="500" >
                        <div class="top-banner w-full h-14 ">
                            <h2>JDIH</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content flex flex-col justify-start layanan-card">
                            <p class="text-start">Jaringan Dokumentasi dan Informasi Hukum yang berisikan peraturan perundang-undangan dan produk hukum lainnya di bidang Pendidikan, Kebudayaan, Riset, dan Teknologi secara tertib, terpadu, dan berkesinambungan serta sarana pemberian pelayanan informasi hukum secara mudah, cepat, dan akurat.</p>
                            <a href="/" class="rounded bg-blue-600 text-white px-2 py-2 w-[8rem] mt-5">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card col-span-4 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100" data-aos-duration="500" >
                        <div class="top-banner w-full h-14 ">
                            <h2>SIPERPU</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content flex flex-col justify-start layanan-card">
                            <p class="text-start">Sistem Informasi Pemantauan dan Pengendalian Penyusunan Peraturan Perundang-undangan yang berisikan data perkembangan penanganan usul rancangan peraturan perundang-undangan di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                            <a href="https://jdih.kemdikbud.go.id/sjdih/siperpu/login" class="rounded bg-blue-600 text-white px-2 py-2 w-[8rem] mt-5">Selengkapnya</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center z-10 relative">
            <div class="col-span-12 md:col-span-12 sm:col-span-12 mt-2 animate__animated animate__fadeInUp" id="detail_peraturan">
                <div class="grid grid-cols-12 grid-forms md:grid-row gap-4">
                    <div class="card col-span-4 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="250" data-aos-duration="500" >
                        <div class="top-banner w-full h-14 ">
                            <h2>SIBANKUM</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content flex flex-col justify-start layanan-card">
                            <p class="text-start">Sistem Informasi Pemantauan dan Pengendalian Penanganan Advokasi dan Bantuan Hukum yang berisikan data perkembangan penanganan kasus dan masalah hukum di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                            <a href="https://sibankum.kemdikbud.go.id/" class="rounded bg-blue-600 text-white px-2 py-2 w-[8rem] mt-5">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card col-span-4 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="200" data-aos-duration="500" >
                        <div class="top-banner w-full h-14 ">
                            <h2>SIKMA</h2>
                            <div class="dots">
                                <a href="https://sikma.kemdikbud.go.id/">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content flex flex-col justify-start layanan-card">
                            <p class="text-start">Sistem Informasi Pemantauan dan Pengendalian Penyusunan Kerja Sama yang berisikan data perkembangan penyusunan Nota Kesepahaman dan Perjanjian Kerja Sama di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                            <a href="https://sikma.kemdikbud.go.id/" class="rounded bg-blue-600 text-white px-2 py-2 w-[8rem] mt-5">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card col-span-4 animate-slide-up" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="150" data-aos-duration="500" >
                        <div class="top-banner w-full h-14 ">
                            <h2>SIMAPEL</h2>
                            <div class="dots">
                                <a href="#">
                                    <svg style="float:right;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="content flex flex-col justify-start layanan-card">
                            <p class="text-start">Sistem Informasi Pemantauan dan Pengendalian Persuratan dan Pelaporan Kegiatan yang berisikan data persuratan internal dan pelaporan kegiatan di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                            <a href="https://birohukum.kemdikbud.go.id/simapel" class="rounded bg-blue-600 text-white px-2 py-2 w-[8rem] mt-5">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @include('pages.partials.__footer')