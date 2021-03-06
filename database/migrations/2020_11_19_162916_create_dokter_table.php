<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('nama_dokter');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('gelar');
            $table->timestamps();
        });

        Schema::table('pasien', function (Blueprint $table) {
            $table->unsignedBigInteger('dokter_id')->nullable();
            $table->foreign('dokter_id')->references('id')->on('pasien')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}
