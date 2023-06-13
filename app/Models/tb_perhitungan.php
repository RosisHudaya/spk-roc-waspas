<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_perhitungan extends Model
{
    use HasFactory;
    protected $table = 'tb_perhitungans';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'waktu'];
}