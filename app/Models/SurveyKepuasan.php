<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyKepuasan extends Model
{
    protected $table='survey_pengunjung';

    protected $fillable = ['topic', 'rate'];
}
