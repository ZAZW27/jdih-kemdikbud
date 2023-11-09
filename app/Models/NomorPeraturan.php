<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorPeraturan extends Model
{
    use HasFactory;

    protected $table = 'nomor_peraturan';

    public function getPeraturan(){
        return $this->hasMany(Peraturan::class);
    }
}
