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
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        Barang::create([
            'jenis_barang' => 'cair',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        Tracking::create([
            'nomer_resi' => '123',
            'status' => 'sukses',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        Tracking::create([
            'nomer_resi' => '456',
            'status' => 'gagal',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);
        //xendit
        Pembayaran::create([
            'endpoint' => 'mojokerto',
            'jenis_pembayaran' => 'tunai',
            'harga' => '100.000',
            'eksternal_id' => '145',
            'nama' => 'kang xendit',
            'invoice' => '1451241',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        Pembayaran::create([
            'endpoint' => 'semarang',
            'jenis_pembayaran' => 'non tunai',
            'harga' => '400.000',
            'eksternal_id' => '145',
            'nama' => 'kang xenditsemiring',
            'invoice' => '1451241',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        // Pricelist::create([
        //     'origin' => '10',
        //     'destinasi' => '12',
        //     'berat' => '15',
        //     'harga' => '100000',
        // ]);

        // Pricelist::create([
        //     'origin' => '1',
        //     'destinasi' => '2',
        //     'berat' => '50',
        //     'harga' => '500000',
        // ]);

        // Pesanan::create([
        //     'name_id' => '1',
        //     'username_id' => '1',
        //     'origin' => '1',
        //     'destinasi' => '1',
        //     'jenis_barang_id' => '1',
        //     'berat_id' => '1',
        //     'harga_id' => '1',
        //     'note' => 'hati - hati ya',
        //     'packing' => 'kertas',
        //     'gambar' => 'default.jpg',
        //     'voucher_id' => '1',
        //     'jenis_pembayaran_id' => '1',
        //     'invoice_id' => '1',
        //     'nomer_resi_id' => '1',
        // ]);
    }
}
