<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Peraturan extends Model
{
    protected $table = 'tbl_peraturan';

    public static function LatestPeraturan($paginate = null)
    {
        $tbl_peraturan = DB::table('tbl_peraturan')
            ->join('nomor_peraturan', 'tbl_peraturan.nomor_id', '=', 'nomor_peraturan.id')
            ->join('tahun_branch', 'tbl_peraturan.tahun_id', '=', 'tahun_branch.id')
            ->join('jenis_peraturan', 'tbl_peraturan.jenis_id', '=', 'jenis_peraturan.id')
            ->join('subjek_peraturan', 'tbl_peraturan.subjek_id', '=', 'subjek_peraturan.id')
            ->join('status_branch', 'tbl_peraturan.status_id', '=', 'status_branch.id')
            ->select(
                'tbl_peraturan.id',
                'nomor_peraturan.id AS id_nomor',
                'tahun_branch.id AS id_tahun',
                'jenis_peraturan.id AS id_jenis',
                'subjek_peraturan.id AS id_subjek',
                'status_branch.id AS id_status',
                'tbl_peraturan.judul_peraturan',
                'nomor_peraturan.nomor AS nomor_peraturan',
                'tahun_branch.tahun AS tahun_peraturan',
                'jenis_peraturan.jenis AS jenis_peraturan',
                'subjek_peraturan.subjek AS subjek',
                'status_branch.status AS status_peraturan',
                'tbl_peraturan.tgl_penetapan AS tanggal_penetapan',
                'tbl_peraturan.tajuk_entri_pertama',
                'tbl_peraturan.tipe_dokumen',
                'tbl_peraturan.tmpt_penetapan AS tempat_penetapan',
                'tbl_peraturan.tgl_penetapan',
                'tbl_peraturan.tgl_pengundangan AS tanggal_pengundangan',
                'tbl_peraturan.sumber',
                'tbl_peraturan.detail_status',
                'tbl_peraturan.bahasa',
                'tbl_peraturan.lokasi',
                'tbl_peraturan.bidang_hukum',
                'tbl_peraturan.view',
                'tbl_peraturan.download',
                DB::raw('NULL AS catatan'),
                DB::raw('NULL AS nama_pengarang'),
                DB::raw('NULL AS jenis_pengarang'),
                DB::raw('NULL AS tipe_pengarang'),
                DB::raw('NULL AS tipe_subjek'),
                DB::raw('NULL AS jenis_subjek'),
                DB::raw('NULL AS file'),
                DB::raw('1 AS model'),
            );

        $bpp_produk_hukum = DB::table('bpp_produk_hukum')
            ->join('jenis_peraturan', 'bpp_produk_hukum.id_jenis_peraturan', '=', 'jenis_peraturan.id')
            ->join('tahun_branch', 'bpp_produk_hukum.id_tahun_peraturan', '=', 'tahun_branch.id')
            ->join('status_branch', 'bpp_produk_hukum.id_status_peraturan', '=', 'status_branch.id')
            ->select(
                'bpp_produk_hukum.id',
                DB::raw('NULL AS id_nomor'),
                'tahun_branch.id AS id_tahun',
                'jenis_peraturan.id AS id_jenis',
                DB::raw('NULL AS id_subjek'),
                'status_branch.id AS id_status',
                'bpp_produk_hukum.judul AS judul_peraturan',
                'bpp_produk_hukum.nomor_peraturan',
                'tahun_branch.tahun AS tahun_peraturan',
                'jenis_peraturan.jenis AS jenis_peraturan',
                'bpp_produk_hukum.subjek',
                'status_branch.status AS status_peraturan',
                'bpp_produk_hukum.tanggal_penetapan',
                DB::raw('NULL AS tajuk_entri_pertama'),
                'bpp_produk_hukum.tipe_dokumen',
                'bpp_produk_hukum.tempat_penetapan',
                'bpp_produk_hukum.tanggal_penetapan AS tgl_penetapan',
                'bpp_produk_hukum.tanggal_pengundangan',
                'bpp_produk_hukum.sumber',
                DB::raw('NULL AS detail_status'),
                'bpp_produk_hukum.bahasa',
                DB::raw('NULL AS lokasi'),
                DB::raw('NULL AS bidang_hukum'),
                'bpp_produk_hukum.dilihat AS view',
                'bpp_produk_hukum.diunduh AS download',
                'bpp_produk_hukum.catatan',
                'bpp_produk_hukum.nama_pengarang',
                'bpp_produk_hukum.jenis_pengarang',
                'bpp_produk_hukum.tipe_pengarang',
                'bpp_produk_hukum.tipe_subjek',
                'bpp_produk_hukum.jenis_subjek',
                'bpp_produk_hukum.file', 
                DB::raw('2 AS model'),
            );

        if ($paginate) {
            return $tbl_peraturan->union($bpp_produk_hukum)->paginate($paginate);
        }

        return $tbl_peraturan->union($bpp_produk_hukum)->get();
    }

    // public function LatestPeraturan(){
    //     return $this->orderBy('tanggal_penetapan', 'desc')->get();
    // }
    public static function getPeraturanCounts()
    {
        DB::table('tbl_peraturan')->select('jenis_peraturan.jenis AS jenis_peraturan', DB::raw('COUNT(jenis_id) as countPeraturan'))->join('jenis_peraturan', 'jenis_peraturan.id', '=', 'tbl_peraturan.jenis_id')->groupBy('jenis_peraturan.jenis')->get();

    }

    public function getNomor(){
        return $this->belongsTo(NomorPeraturan::class, 'nomor_id');
    }
    public function getTahun(){
        return $this->belongsTo(TahunPeraturan::class, 'tahun_id');
    }
    public function getJenis(){
        return $this->belongsTo(JenisPeraturan::class, 'jenis_id');
    }
    public function getSubjek(){
        return $this->belongsTo(SubjekPeraturan::class, 'subjek_id');
    }
    public function getStatus(){
        return $this->belongsTo(StatusPeraturan::class, 'status_id');
    }
}

