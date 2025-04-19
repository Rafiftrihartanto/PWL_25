<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->foreignId('barang_id')->constrained('m_barang')->onDelete('cascade');
            $table->integer('stok_jumlah');
            $table->date('stok_tanggal');
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
