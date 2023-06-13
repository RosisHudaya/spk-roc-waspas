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
        Schema::create('tb_maxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perhitungan');
            $table->double('h_index_scopus');
            $table->double('h_index_gs');
            $table->double('dok_scopus');
            $table->double('jurnal_terakreditasi');
            $table->double('dok_pengabdian');
            $table->double('serifikat_kompetensi');
            $table->double('pembicara_externel');
            $table->double('keanggotaan_profesi_dosen');
            $table->double('jabatan_fungsional');
            $table->double('lama_mengajar');
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
        Schema::dropIfExists('tb_maxes');
    }
};