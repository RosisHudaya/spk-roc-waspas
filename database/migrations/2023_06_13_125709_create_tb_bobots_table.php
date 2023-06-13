<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bobots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perhitungan');
            $table->double('b_h_index_scopus');
            $table->double('b_h_index_gs');
            $table->double('b_dok_scopus');
            $table->double('b_jurnal_terakreditasi');
            $table->double('b_dok_pengabdian');
            $table->double('b_sertifikat_kompetensi');
            $table->double('b_pembicara_external');
            $table->double('b_keanggotaan_profesi_dosen');
            $table->double('b_jabatan_fungsional');
            $table->double('b_lama_mengajar');
            $table->double('b_umur');
            $table->double('b_surat_peringatan');
            $table->timestamps();

            $table->foreign('id_perhitungan')->references('id')->on('tb_perhitungans')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bobots');
    }
};