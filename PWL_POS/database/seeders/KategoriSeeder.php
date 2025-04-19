<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => '1','kategori_kode' => 'ELC', 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => '2','kategori_kode' => 'FSH', 'kategori_nama' => 'Fashion'],
            ['kategori_id' => '3','kategori_kode' => 'BOK', 'kategori_nama' => 'Buku'],
            ['kategori_id' => '4','kategori_kode' => 'HTH', 'kategori_nama' => 'Health & Beauty'],
            ['kategori_id' => '5','kategori_kode' => 'FDM', 'kategori_nama' => 'Food & Drink'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
