<?php

namespace App\Models;
use App\Models\BeritaTerkait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "tbl_berita";

    protected $fillable = [
        
    ];

    public function LatestBerita(){
        return $this->orderBy('created_at', 'desc')->get();
    }

    public function BeritaTerkait(){
        return $this->belongsTo(BeritaTerkait::class, 'berita_id');
    }
}
