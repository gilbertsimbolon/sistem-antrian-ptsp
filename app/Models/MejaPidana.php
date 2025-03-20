<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MejaPidana extends Model
{
    use HasFactory;

    protected $table = 'meja_pidanas';

    protected $fillable = [
        'nomor_perkara',
        'nama_penggugat',
        'nama_tergugat',
        'kuasa_hukum_penggugat',
        'kuasa_hukum_tergugat',
        'ruang_sidang',
        'hakim',
        'panitera',
        'tanggal_sidang',
        'sidang_mulai',
        'sidang_akhir',
        'status',
    ];
}
