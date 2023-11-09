<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPeraturan extends Model
{
    use HasFactory;

    protected $table = 'Status_peraturan';

    public function getPeraturan(){
        return $this->hasMany(Peraturan::class);
    }
}
