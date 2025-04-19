<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'ELC001', 'barang_nama' => 'Smartphone', 'harga_beli' => 5000000, 'harga_jual' => 10000000],
            ['barang_id' => 2, 'kategori_id' => 1,'barang_kode' => 'ELC002', 'barang_nama' => 'Laptop', 'harga_beli' => 15000000, 'harga_jual' => 30000000],
            ['barang_id' => 3, 'kategori_id' => 2,'barang_kode' => 'FSH001', 'barang_nama' => 'T-shirt', 'harga_beli' => 100000, 'harga_jual' => 200000],
            ['barang_id' => 4, 'kategori_id' => 2,'barang_kode' => 'FSH002', 'barang_nama' => 'Jeans', 'harga_beli' => 200000, 'harga_jual' => 400000],
            ['barang_id' => 5, 'kategori_id' => 3,'barang_kode' => 'BOK001', 'barang_nama' => 'Novel', 'harga_beli' => 50000, 'harga_jual' => 100000],
            ['barang_id' => 6, 'kategori_id' => 3,'barang_kode' => 'BOK002', 'barang_nama' => 'Comic Book', 'harga_beli' => 40000, 'harga_jual' => 80000],
            ['barang_id' => 7, 'kategori_id' => 4,'barang_kode' => 'HTH001', 'barang_nama' => 'Shampoo', 'harga_beli' => 25000, 'harga_jual' => 300],
            ['barang_id' => 8, 'kategori_id' => 4,'barang_kode' => 'HTH002', 'barang_nama' => 'Toothpaste', 'harga_beli' => 10000, 'harga_jual' => 20000],
            ['barang_id' => 9, 'kategori_id' => 5,'barang_kode' => 'FDM001', 'barang_nama' => 'Coffee', 'harga_beli' => 20000, 'harga_jual' => 40000],
            ['barang_id' => 10,'kategori_id' => 5,'barang_kode' => 'FDM002', 'barang_nama' => 'Tea', 'harga_beli' => 15000, 'harga_jual' => 30000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
