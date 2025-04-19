<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,               
                'pembeli' => 'Adam',
                'penjualan_kode' => 'ELC1',
                'penjualan_tanggal' => '2025-12-22',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,               
                'pembeli' => 'Adam',
                'penjualan_kode' => 'ELC2',
                'penjualan_tanggal' => '2025-12-23',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,               
                'pembeli' => 'Hanif',
                'penjualan_kode' => 'FSH1',
                'penjualan_tanggal' => '2025-12-24',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,               
                'pembeli' => 'Hanif',
                'penjualan_kode' => 'FSH2',
                'penjualan_tanggal' => '2025-12-25',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,               
                'pembeli' => 'Reza',
                'penjualan_kode' => 'BOK1',
                'penjualan_tanggal' => '2025-12-26',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,               
                'pembeli' => 'Reza',
                'penjualan_kode' => 'BOK2',
                'penjualan_tanggal' => '2025-12-26',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,               
                'pembeli' => 'Naswa',
                'penjualan_kode' => 'HTH1',
                'penjualan_tanggal' => '2025-12-27',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,               
                'pembeli' => 'Naswa',
                'penjualan_kode' => 'HTH2',
                'penjualan_tanggal' => '2025-12-27',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,               
                'pembeli' => 'HendRa',
                'penjualan_kode' => 'FDM1',
                'penjualan_tanggal' => '2025-12-28',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,               
                'pembeli' => 'HendRa',
                'penjualan_kode' => 'FDM2',
                'penjualan_tanggal' => '2025-12-28',
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
