<?php

namespace Database\Seeders;

use App\Models\MejaPidana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MejaPidanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MejaPidana::create([
            'nomor_perkara' => '1234',
            'nama_penggugat' => 'John Doe',
            'nama_tergugat' => 'Jane Doe',
            'kuasa_hukum_penggugat' => 'Pengacara A',
            'kuasa_hukum_tergugat' => 'Pengacara B',
            'ruang_sidang' => 'Ruang 1',
            'hakim' => 'Hakim 1',
            'panitera' => 'Panitera 1',
            'tanggal_sidang' => '2025-03-20',
            'sidang_mulai' => '09:00',
            'sidang_akhir' => '09:30',
            'status' => 'menunggu'
        ]);
    }
}
