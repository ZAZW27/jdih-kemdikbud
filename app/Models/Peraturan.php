<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Peraturan extends Model
{
    protected $table = 'tbl_peraturan';

    public function LatestPeraturan(){
        return $this->orderBy('tanggal_penetapan', 'desc')->get();
    }
    public static function getPeraturanCounts()
    {
        return DB::table('tbl_peraturan')->select('jenis_peraturan', DB::raw('COUNT(jenis_peraturan) as countPeraturan'))->groupBy('jenis_peraturan')->get();
    }
}

