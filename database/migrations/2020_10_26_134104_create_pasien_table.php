<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rekam_medis', 30);
            $table->string('nama_pasien', 30);
            $table->string('tempat', 50);
            $table->date('tanggal_lahir'); 
            $table->string('alamat', 50);
            $table->string('no_telepon', 30);
            $table->string('status_perkawinan', 30);
            $table->string('agama', 15);
            $table->string('kewarganegaraan', 30);
            $table->string('diagnosa', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
