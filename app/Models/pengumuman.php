<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table = 'tbl_pengumuman';
    
    public function LatestPengumuman(){
        return $this->orderBy('created_at', 'desc')->get();
    }
}
