<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_min extends Model
{
    use HasFactory;
    protected $table = 'tb_mins';
    protected $primaryKey = 'id';
    protected $fillable = ['umur', 'surat_peringatan'];

    public function perhitungan()
    {
        return $this->belongsTo(tb_perhitungan::class, 'id_perhitungan');
    }
}