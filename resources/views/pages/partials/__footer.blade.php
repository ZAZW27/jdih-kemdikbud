<footer class="w3l-footer-29-main">
        <div class="footer-29 pt-5">
          <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-3 gap-4">
              <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                <div class="footer-logo mb-4">
                  <img src="{{asset('assets/img/logo/logo_jdih_footer.png')}}" style="width: 180px;">
                </div>
              </div>
              <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                <ul id="komponen">
                  <li><a href="{{ asset('pages/produk-hukum/peraturan.php') }}">Peraturan</a></li>
                  <li><a href="#">Putusan Pengadilan</a></li>
                  <li><a href="#">Naskah Kerja Sama</a></li>
                  <li><a href="{{ asset('pages/publikasi/inventarisasi.php') }}">Inventarisasi</a></li>
                  <li><a href="{{ asset('pages/pengumuman/statistika.php') }}">Statistik</a></li>
                </ul>
              </div>
              <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1">
                <ul id="komponen">
                  <li><a href="{{ asset('pages/profil/tentang.php') }}">Tentang</a></li>
                  <li><a href="{{ asset('pages/profil/visi-misi.php') }}">Visi dan Misi</a></li>
                  <li><a href="{{ asset('pages/profil/struktur-organisasi.php') }}">Struktur Organisasi</a></li>
                  <li><a href="pengumuman">Pengumuman</a></li>
                  <li><a href="{{ asset('pages/publikasi/layanan.php') }}">Layanan</a></li>
                  <li><a href="{{ asset('pages/informasi/informasi.php') }}">Berita</a></li>
                </ul>
              </div>
              <div class="sub-footer lg:col-span-1 md:col-span-1 sm:col-span-1 footer-media" >
                <h5 class="font-bold text-yellow-400 text-lg" style="margin: -10px 0px 0 -10px;">Media Sosial</h5>
                <div class="flex gap-2 media-link-footer">
                  <a href="" target="_blank">
                    <img src="{{asset('assets/img/media/envelope.png')}}" alt="Email" style="width: 24px;">
                  </a>
                  <a href="" target="_blank">
                    <img src="{{asset('assets/img/media/facebook.png')}}" alt="Facebook" style="width: 24px;">
                  </a>
                  <a href="https://twitter.com/birohukumdikbud" target="_blank">
                    <img src="{{asset('assets/img/media/twitter.png')}}" alt="Twitter" style="width: 24px;">
                  </a>
                  <a href="https://www.instagram.com/birohukumdikbud/" target="_blank">
                    <img src="{{asset('assets/img/media/instagram-outline.png')}}" alt="Instagram" style="width: 24px;">
                  </a>
                  <a href="https://www.youtube.com/channel/UC_teqno_MCTrSKHwfdstXYw" target="_blank">
                    <img src="{{asset('assets/img/media/youtube.png')}}" alt="Youtube" style="width: 24px;">
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
    <script src="{{asset('assets/js/main.js')}}"></script>
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
</body>
</html>
