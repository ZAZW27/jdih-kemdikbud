<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Peraturan extends Model
{
    protected $table = 'tbl_peraturan';

    public static function LatestPeraturan()
    {
        return DB::table('tbl_peraturan')
        ->select(
            'tbl_peraturan.id',
            'nomor_peraturan.id AS id_nomor',
            'tahun_peraturan.id AS id_tahun',
            'jenis_peraturan.id AS id_jenis',
            'subjek_peraturan.id AS id_subjek',
            'status_peraturan.id AS id_status',
            'tbl_peraturan.judul_peraturan',
            'nomor_peraturan.nomor AS nomor_peraturan',
            'tahun_peraturan.tahun AS tahun_peraturan',
            'jenis_peraturan.jenis AS jenis_peraturan',
            'subjek_peraturan.subjek AS subjek',
            'status_peraturan.status AS status_peraturan',
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
            'tbl_peraturan.download'
        )
        ->join('nomor_peraturan', 'tbl_peraturan.nomor_id', '=', 'nomor_peraturan.id')
        ->join('tahun_peraturan', 'tbl_peraturan.tahun_id', '=', 'tahun_peraturan.id')
        ->join('jenis_peraturan', 'tbl_peraturan.jenis_id', '=', 'jenis_peraturan.id')
        ->join('subjek_peraturan', 'tbl_peraturan.subjek_id', '=', 'subjek_peraturan.id')
        ->join('status_peraturan', 'tbl_peraturan.status_id', '=', 'status_peraturan.id')
        ->orderBy('tanggal_penetapan', 'desc') 
        ->get();
    }
    // public function LatestPeraturan(){
    //     return $this->orderBy('tanggal_penetapan', 'desc')->get();
    // }
    public static function getPeraturanCounts()
    {
        return DB::table('tbl_peraturan')->select('jenis_id', DB::raw('COUNT(jenis_id) as countPeraturan'))->groupBy('jenis_id')->get();
    }

    public function getNomor(){
        return $this->belongsTo(NomorPeraturan::class, 'nomor_peraturan');
    }
    public function getTahun(){
        return $this->belongsTo(TahunPeraturan::class, 'tahun_peraturan');
    }
    public function getJenis(){
        return $this->belongsTo(JenisPeraturan::class, 'jenis_peraturan');
    }
    public function getSubjek(){
        return $this->belongsTo(SubjekPeraturan::class, 'subjek_peraturan');
    }
    public function getStatus(){
        return $this->belongsTo(StatusPeraturan::class, 'status_peraturan');
    }
}

