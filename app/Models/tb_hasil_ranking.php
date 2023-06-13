<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_hasil_ranking extends Model
{
    use HasFactory;
    protected $table = 'tb_hasil_rankings';
    protected $primaryKey = 'id';
    protected $fillable = ['wsm', 'wpm', 'waspas'];

    public function perhitungan()
    {
        return $this->belongsTo(tb_perhitungan::class, 'id_perhitungan');
    }
}