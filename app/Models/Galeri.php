<?php

namespace App\Models;
use App\Models\BeritaTerkait;
use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Galeri extends Model
{
    protected $table = "tbl_galeri";

    public function latestGaleri(){
        return $this->orderBy('created_at', 'desc')->get();
    }
}
