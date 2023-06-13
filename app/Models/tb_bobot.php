<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_bobot extends Model
{
    use HasFactory;
    protected $table = 'tb_bobots';
    protected $primaryKey = 'id';
    protected $fillable = ['b_h_index_scopus', 'b_h_index_gs', 'b_dok_scopus', 'b_jurnal_terakreditasi', 'b_dok_pengabdian', 'b_sertifikat_kompetensi', 'b_pembicara_external', 'b_keanggotaan_profesi_dosen', 'b_jabatan_fungsional', 'b_lama_mengajar', 'b_umur', 'b_surat_peringatan'];

    public function perhitungan()
    {
        return $this->belongsTo(tb_perhitungan::class, 'id_perhitungan');
    }
}