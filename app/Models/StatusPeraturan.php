<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPeraturan extends Model
{
    use HasFactory;

    protected $table = 'Status_branch';

    public function getPeraturan(){
        return $this->hasMany(Peraturan::class);
    }
}
