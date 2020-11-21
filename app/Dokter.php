<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';

    protected $fillable = [
        'nip', 'nama_dokter', 'alamat', 'no_telepon', 'email', 'gelar'
    ];

    public function pasien()
    {
        return $this->hasMany('App\Pasien');
    }
}
