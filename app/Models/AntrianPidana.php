<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AntrianPidana extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_telepon',
        'keperluan',
        'nomor_antrian',
        'jenis_kelamin',
        'meja'
    ];
}
