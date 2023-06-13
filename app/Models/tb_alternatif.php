<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_alternatif extends Model
{
    use HasFactory;
    protected $table = 'tb_alternatifs';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'h_index_scopus', 'h_index_gs', 'dok_scopus', 'jurnal_terakreditasi', 'dok_pengabdian', 'serifikat_kompetensi', 'pembicara_externel', 'keanggotaan_profesi_dosen', 'jabatan_fungsional', 'lama_mengajar', 'umur', 'surat_peringatan'];

    public function perhitungan()
    {
        return $this->belongsTo(tb_perhitungan::class, 'id_perhitungan');
    }
}