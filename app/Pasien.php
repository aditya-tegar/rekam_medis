<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';

    protected $fillable = [
        'kode_rekam_medis','nama_pasien', 'tempat', 'tanggal_lahir', 'alamat', 'no_telepon', 'status_perkawinan', 'agama', 'kewarganegaraan', 'diagnosa', 'obat'
    ];
}
