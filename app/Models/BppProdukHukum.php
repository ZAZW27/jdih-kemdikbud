<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BppProdukHukum extends Model
{
    protected $table = 'bpp_produk_hukum';

    protected $guarded = [];

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

