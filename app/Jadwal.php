<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'nama_dokter', 'hari_praktek', 'jam_praktek'
    ];
}
