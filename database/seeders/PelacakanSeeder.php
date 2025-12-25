<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelacakan;

class PelacakanSeeder extends Seeder
{
    public function run(): void
    {
        Pelacakan::create([
            'nomor_transaksi' => 'BTS2025001',
            'tujuan_pengiriman' => 'Surabaya',
            'armada' => 'Truk Fuso B 1234 CD',
            'status_pengiriman' => 'Dalam Perjalanan'
        ]);
        
        Pelacakan::create([
            'nomor_transaksi' => 'BTS2025002',
            'tujuan_pengiriman' => 'Bandung',
            'armada' => 'Truk Engkel B 5678 EF',
            'status_pengiriman' => 'Terkirim'
        ]);

        Pelacakan::create([
            'nomor_transaksi' => 'BTS2025003',
            'tujuan_pengiriman' => 'Semarang',
            'armada' => 'Container 20ft',
            'status_pengiriman' => 'Muat Barang'
        ]);
    }
}
