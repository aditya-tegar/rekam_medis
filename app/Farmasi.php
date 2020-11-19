<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmasi extends Model
{
    protected $table = 'farmasi';

    protected $fillable = [
        'no_reg', 'nama_obat', 'jenis_obat'
    ];
}
