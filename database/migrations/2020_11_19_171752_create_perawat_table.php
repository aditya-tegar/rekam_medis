<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawat', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('nama_perawat');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('gelar');
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
        Schema::dropIfExists('perawat');
    }
}
