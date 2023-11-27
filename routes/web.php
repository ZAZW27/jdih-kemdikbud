<?php

use Illuminate\Support\Facades\Route;

// CONTROLLERS
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JdihProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminPeraturanController;
use App\Http\Controllers\AdminDokumenController;

// OTHER THINGS 
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


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

Route::get('/bpp-pengalaman-jdih', [JdihProfileController::class, 'index'])->name('bpp-pengelola-jdih');

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
Route::get('detail_peraturan-{id}-{model}', [PeraturanController::class, 'index'])->name('detail_peraturan.data');

Route::get('/statistika-peraturan', function () {// statistika peraturan page
    return view('pages/produk-hukum/statistika');
});

// ===========================================================
// =====================SECTION: DOKUMEN======================
// ===========================================================
Route::get('/data_dokumen', [DokumenController::class, 'showDokumen'])->name('dokumen.data');
Route::post('/penelusuran_dokumen', [DokumenController::class, 'filterDokumen'])->name('filter_dokumen');

// ===========================================================
// ====================SECTION: PUBLIKASI=====================
// ===========================================================
Route::get('/investasi', function () {// investasi page
    return view('pages/publikasi/inventarisasi');
});
Route::get('/layanan', function () {// layanan page
    return view('pages/publikasi/layanan');
});

Route::get('/inventarisasi', [PublikasiController::class, 'index'])->name('getPublikasi.data');

// ===========================================================
// ====================SECTION: INFORMASI=====================
// ===========================================================
// Route::get('/berita', function () {// berita page
//     return view('pages/informasi/informasi');
// });
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.data');
Route::get('/detail_berita/{id}', [BeritaController::class, 'GetBeritaDetail'])->name('detail_berita.data');
// GETTING GALERI
Route::get('/galeri', [BeritaController::class, 'showGaleri'])->name('getGaleri.data');
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

// ===========================================================
// ======================SECTION: SURVEY======================
// ===========================================================
Route::get('/survey', function () {return view('pages/survey/survey');})->name('survey');
Route::post('/submit-form', [SurveyController::class, 'submitSurvey'])->name('submit_survey.data');

Route::get('/hasil-survey', [SurveyController::class, 'showSurvey'])->name('show_survey.data');

// =================================================================================================
// [[[[[[[[[[[[[[[[[[[[[[SECTION: ADMINS]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]
// =================================================================================================
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('getAdmin.data');

// ===================== PAGE: BERITA ==========================================
Route::get('/berita-admin', [AdminBeritaController::class, 'index'])->middleware(['auth', 'verified'])->name('getBerita.data');
Route::get('berita-edit/{id}', [AdminBeritaController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-berita/');
Route::get('/berita-baru', function () {return view('pages/admin/berita/insert');})->middleware(['auth', 'verified'])->name('berita-baru');

Route::put('/process-update-berita', [AdminBeritaController::class, 'update'])->middleware(['auth', 'verified'])->name('proses-update-berita');// update
Route::post('/process-insert-berita', [AdminBeritaController::class, 'insert'])->middleware(['auth', 'verified'])->name('proses-insert-berita');// insert
Route::get('/process-delete-berita/{id}', [AdminBeritaController::class, 'delete'])->middleware(['auth', 'verified'])->name('proses-delete-berita');// delete

// ===================== PAGE: GALLERY ==========================================
Route::get('/galeri-admin', [AdminGaleriController::class, 'index'])->middleware(['auth', 'verified'])->name('getGaleri.data');
Route::get('galeri-edit/{id}', [AdminGaleriController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-galeri/');
Route::get('/galeri-baru', function () {return view('pages/admin/galeri/insert');})->middleware(['auth', 'verified'])->name('galeri-baru');

Route::post('/process-insert-galeri', [AdminGaleriController::class, 'insert'])->middleware(['auth', 'verified'])->name('proses-insert-galeri');// insert
Route::put('/process-update-galeri', [AdminGaleriController::class, 'update'])->middleware(['auth', 'verified'])->name('proses-update-galeri');// update
Route::get('/process-delete-galeri/{id}', [AdminGaleriController::class, 'delete'])->middleware(['auth', 'verified'])->name('proses-delete-galeri');// delete

// ===================== PAGE: PERATURAN ==========================================
Route::get('/peraturan-admin', [AdminPeraturanController::class, 'index'])->middleware(['auth', 'verified'])->name('getPeraturan.data');
Route::get('peraturan-edit/{id}', [AdminPeraturanController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-peraturan/');
// Route::get('/peraturan-baru', function () {return view('pages/admin/peraturan/insert');})->middleware(['auth', 'verified'])->name('peraturan-baru');
Route::get('/peraturan-baru}', [AdminPeraturanController::class, 'inputForm'])->middleware(['auth', 'verified'])->name('peraturan-baru');


Route::post('/process-insert-peraturan', [AdminPeraturanController::class, 'insert'])->middleware(['auth', 'verified'])->name('proses-insert-peraturan');// insert
Route::put('/edit-peraturan', [AdminPeraturanController::class, 'update'])->middleware(['auth', 'verified'])->name('proses-update-peraturan');// update
Route::get('/process-delete-peraturan/{id}', [AdminPeraturanController::class, 'delete'])->middleware(['auth', 'verified'])->name('proses-delete-peraturan');// delete

// ===================== PAGE: DOKUMEN ==========================================
Route::get('/dokumen-admin', [AdminDokumenController::class, 'index'])->middleware(['auth', 'verified'])->name('getDokumen.data');
Route::get('dokumen-edit/{id}', [AdminDokumenController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-dokumen/');
Route::get('/dokumen-baru', function () {return view('pages/admin/dokumen/insert');})->middleware(['auth', 'verified'])->name('dokumen-baru');

Route::post('/process-insert-dokumen', [AdminDokumenController::class, 'insert'])->middleware(['auth', 'verified'])->name('proses-insert-dokumen');// insert
Route::put('/process-update-dokumen', [AdminDokumenController::class, 'update'])->middleware(['auth', 'verified'])->name('proses-update-dokumen');// update
Route::get('/process-delete-dokumen/{id}', [AdminDokumenController::class, 'delete'])->middleware(['auth', 'verified'])->name('proses-delete-dokumen');// delete