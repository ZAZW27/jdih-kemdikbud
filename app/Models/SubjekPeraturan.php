<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjekPeraturan extends Model
{
    use HasFactory;

    protected $table = 'subjek_peraturan';

    public function getPeraturan(){
        return $this->hasMany(Peraturan::class);
    }
}
