<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Pembayaran;
use App\Models\Tracking;

class TesPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'jenis_barang' => 'padat',
        ]);

        Barang::create([
            'jenis_barang' => 'cair',
        ]);

        Tracking::create([
            'nomer_resi' => '123',
            'status' => 'sukses',
        ]);

        Tracking::create([
            'nomer_resi' => '456',
            'status' => 'gagal',
        ]);
        //xendit
        Pembayaran::create([
            'endpoint' => 'mojokerto',
            'jenis_pembayaran' => 'BCA',
            'harga' => '100.000',
            'eksternal_id' => '145',
            'nama' => 'kang xendit',
            'invoice' => '1451241',
        ]);

        Pembayaran::create([
            'endpoint' => 'semarang',
            'jenis_pembayaran' => 'BNI',
            'harga' => '400.000',
            'eksternal_id' => '145',
            'nama' => 'kang xenditsemiring',
            'invoice' => '1451241',
        ]);

        Pembayaran::create([
            'endpoint' => 'mojokerto',
            'jenis_pembayaran' => 'BRI',
            'harga' => '100.000',
            'eksternal_id' => '145',
            'nama' => 'kang xendit',
            'invoice' => '1451241',
        ]);

        Pembayaran::create([
            'endpoint' => 'semarang',
            'jenis_pembayaran' => 'BSI',
            'harga' => '400.000',
            'eksternal_id' => '145',
            'nama' => 'kang xenditsemiring',
            'invoice' => '1451241',
        ]);

        Pembayaran::create([
            'endpoint' => 'mojokerto',
            'jenis_pembayaran' => 'CIMB',
            'harga' => '100.000',
            'eksternal_id' => '145',
            'nama' => 'kang xendit',
            'invoice' => '1451241',
        ]);

        Pembayaran::create([
            'endpoint' => 'semarang',
            'jenis_pembayaran' => 'MANDIRI',
            'harga' => '400.000',
            'eksternal_id' => '145',
            'nama' => 'kang xenditsemiring',
            'invoice' => '1451241',
        ]);
    }
}
