<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    protected $table = 'poliklinik';
    protected $fillable = ['kd_poli','nm_poli'];
}
