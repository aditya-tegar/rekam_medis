<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    protected $table = 'perawat';

    protected $fillable = [
        'nip', 'nama_perawat', 'alamat', 'no_telepon', 'email', 'gelar'
    ];
}
