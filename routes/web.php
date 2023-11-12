<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpuController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GlosariumController;
use App\Http\Controllers\MonografiController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\TulisanHukumController;
use App\Http\Controllers\CatatanBeritaController;
use App\Http\Controllers\PutusanPengadilanController;
use App\Http\Controllers\MatriksPerbandinganController;
use App\Http\Controllers\TerjemahanPeraturanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainPageController::class, 'index'])->name('MainPage');

// Route::get('/', function () {
//     return view('index');
// });

// ===========================================================
// =====================SECTION: PROFIL=======================
// ===========================================================
Route::get('/tentang', function () { // tentang page
    return view('pages/profil/tentang');
});
Route::get('/visi-misi', function () {// visi misi page
    return view('pages/profil/visi-misi');
});
Route::get('/struktur-organisasi', function () {// struktur organisas page
    return view('pages/profil/struktur-organisasi');
});
Route::get('/prasyarat', function () {// prasyarat page
    return view('pages/profil/prasyarat');
});
Route::get('/faq', function () {// faq page
    return view('pages/profil/faq');
});

// PROFIL LAINNYA 
Route::get('bpp-sejarah-balikpapan', function () {// Sejara Balikpapan
    return view('pages/profil/lainnya/sejarah-balikpapan');
});
Route::get('bpp-profil-jdih', function () {// Profil JDIH
    return view('pages/profil/lainnya/profil-jdih');
});
Route::get('bpp-visi-misi', function () {// Visi misi balikpapan
    return view('pages/profil/lainnya/visi-misi');
});
Route::get('bpp-tugas-pokok-fungsi', function () {// Tugas pokok dan fungsi
    return view('pages/profil/lainnya/tugas-pokok-fungsi');
});
Route::get('bpp-sop', function () {// sop
    return view('pages/profil/lainnya/sop');
});
Route::get('bpp-sambutan-kabag-hukum', function () {// sambutan kabag hukum
    return view('pages/profil/lainnya/sambutan-kabag-hukum');
});
Route::get('bpp-struktur-organisasi', function () {// struktur organisasi
    return view('pages/profil/lainnya/struktur-organisasi');
});

Route::get('/bpp-penagalaman-jdih', [ProfileController::class, 'index'])->name('bpp-pengelola-jdih');

Route::get('bpp-pengelola-jdih', function () {// pengelola JDIH
    return view('pages/profil/lainnya/pengelola-jdih');
});
Route::get('bpp-sk-tim-teknis', function () {// SK Tim Teknis
    return view('pages/profil/lainnya/sk-tim-teknis');
});

// ===========================================================
// ====================SECTION: PRODUK HUKUM==================
// ===========================================================

Route::get('/show_peraturan', [PeraturanController::class, 'showPeraturan'])->name('show_peraturan.data');
Route::post('/get_peraturan', [MainPageController::class, 'filterPeraturan'])->name('get_peraturan.data');
Route::get('detail_peraturan/{id}', [PeraturanController::class, 'index'])->name('detail_peraturan.data');

Route::get('/statistika-peraturan', function () {// statistika peraturan page
    return view('pages/produk-hukum/statistika');
});

// ===========================================================
// ====================SECTION: PUBLIKASI=====================
// ===========================================================
Route::get('/investasi', function () {// investasi page
    return view('pages/publikasi/investasi');
});
Route::get('/layanan', function () {// layanan page
    return view('pages/publikasi/layanan');
});

// ===========================================================
// ====================SECTION: INFORMASI=====================
// ===========================================================
// Route::get('/berita', function () {// berita page
//     return view('pages/informasi/informasi');
// });
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.data');
Route::get('/detail_berita/{id}', [BeritaController::class, 'GetBeritaDetail'])->name('detail_berita.data');
// Route::get('/detail_berita', function () {// detail berita page
//     return view('pages/informasi/detail_berita');
// });



// ===========================================================
// ====================SECTION: KONTAK=======================
// ===========================================================
Route::get('/kontak', function () {// kontak page
    return view('pages/kontak/kontak');
});

// ===========================================================
// ====================SECTION: PENGUMUMAN====================
// ===========================================================
Route::get('/detail_pengumuman/{id}', [PengumumanController::class, 'index'])->name('detail_pengumuman.data');
