<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = 'tbl_peraturan';

    public function LatestPeraturan(){
        return $this->orderBy('tanggal_penetapan', 'desc')->get();
    }
}
