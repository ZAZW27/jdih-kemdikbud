<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunPeraturan extends Model
{
    use HasFactory;

    protected $table = 'tahun_peraturan';

    public function getPeraturan(){
        return $this->hasMany(Peraturan::class);
    }
}
