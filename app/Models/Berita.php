<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "tbl_berita";

    public function LatestBerita(){
        return $this->orderBy('created_at', 'desc')->get();
    }
}
