<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

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

// ===========================================================
// ====================SECTION: PRODUK HUKUM==================
// ===========================================================
Route::get('/peraturan', function () {// peraturan page
    return view('pages/produk-hukum/peraturan');
});
Route::get('/detail-peraturan', function () {// detail peraturan page
    return view('pages/produk-hukum/detail_peraturan');
});
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
Route::get('/berita', function () {// berita page
    return view('pages/informasi/informasi');
});
Route::get('/detail_berita', function () {// detail berita page
    return view('pages/informasi/detail_berita');
});

// ===========================================================
// ====================SECTION: KONTAK=======================
// ===========================================================
Route::get('/kontak', function () {// kontak page
    return view('pages/kontak/kontak');
});

// ===========================================================
// ====================SECTION: PENGUMUMAN====================
// ===========================================================
Route::get('/detail-pengumuman', function () {// detail pengumuman page
    return view('pages/pengumuman/datail_pengumuman');
});
