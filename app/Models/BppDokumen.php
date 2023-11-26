<?php

namespace App\Models;
use App\Models\BeritaTerkait;
use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BppDokumen extends Model
{
    protected $table = "bpp_dokumen";

    protected $guarded = [];

    public function latestDocument(){
        return $this->orderBy('created_at', 'desc')->get();
    }
}
