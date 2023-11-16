<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyKepuasan;
use Illuminate\Support\Facades\DB;

class PublikasiController extends Controller
{
    public function index(){
        $years = DB::table('tbl_peraturan')
    ->select(DB::raw('EXTRACT(YEAR FROM tgl_penetapan) as year'))
    ->union(
        DB::table('bpp_produk_hukum')
            ->select(DB::raw('EXTRACT(YEAR FROM tanggal_penetapan) as year'))
    )
    ->distinct()
    ->pluck('year');

$result = DB::table('jenis_peraturan')
    ->leftJoin('tbl_peraturan', 'jenis_peraturan.id', '=', 'tbl_peraturan.jenis_id')
    ->leftJoin('bpp_produk_hukum', 'jenis_peraturan.id', '=', 'bpp_produk_hukum.id_jenis_peraturan')
    ->select(
        'jenis_peraturan.id as jenis_id',
        'jenis_peraturan.jenis',
        DB::raw(implode(', ', array_map(function ($year) {
            return "SUM(CASE WHEN EXTRACT(YEAR FROM tgl_penetapan) = $year THEN 1 ELSE 0 END) AS tahun_$year";
        }, $years->toArray())))
    )
    ->groupBy('jenis_peraturan.id', 'jenis_peraturan.jenis')
    ->orderBy('jenis_peraturan.id')
    ->get();

        return view('pages.publikasi.inventarisasi', [
            'title' => 'JDIH | inventarisasi', 
            'per' => $result
        ]);
    }
}
