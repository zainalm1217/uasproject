<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        $reseps = [
            [
                'kunjungan_id' => 3,
                'pasien_id' => 3,
                'dokter_id' => 1,
                'nomor_resep' => 'RSP-20250110-0001',
                'tanggal_resep' => '2025-01-10 10:20:00',
                'status' => 'baru',
                'catatan' => 'Hindari makanan pedas dan asam',
            ],
            [
                'kunjungan_id' => 4,
                'pasien_id' => 4,
                'dokter_id' => 3,
                'nomor_resep' => 'RSP-20250110-0002',
                'tanggal_resep' => '2025-01-10 11:10:00',
                'status' => 'diproses',
                'catatan' => null,
            ],
            [
                'kunjungan_id' => 5,
                'pasien_id' => 5,
                'dokter_id' => 1,
                'nomor_resep' => 'RSP-20250111-0001',
                'tanggal_resep' => '2025-01-11 08:50:00',
                'status' => 'baru',
                'catatan' => 'Minum sebelum makan',
            ],
            [
                'kunjungan_id' => 7,
                'pasien_id' => 2,
                'dokter_id' => 1,
                'nomor_resep' => 'RSP-20250112-0001',
                'tanggal_resep' => '2025-01-12 09:30:00',
                'status' => 'diambil',
                'catatan' => null,
            ],
            [
                'kunjungan_id' => 9,
                'pasien_id' => 4,
                'dokter_id' => 2,
                'nomor_resep' => 'RSP-20250113-0001',
                'tanggal_resep' => '2025-01-13 09:00:00',
                'status' => 'baru',
                'catatan' => 'Pantau gejala flu',
            ],
        ];

        DB::table('reseps')->insert($reseps);
    }
}
