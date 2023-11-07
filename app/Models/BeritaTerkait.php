<?php

namespace App\Models;
use App\Models\BeritaTerkait;
use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaTerkait extends Model
{
    protected $table = "tbl_berita_terkait";

    public function getRelatedBerita()
    {
        return $this->hasMany(BeritaTerkait::class, 'group_id', 'group_id');
        // return $this->hasMany(BeritaTerkait::class, 'berita_id');
    }
}
