<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Agent;
use App\Models\Affiliator;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'user',
            'username' => 'username',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'prov_id' => '1',
            'city_id' => '2',
            'dis_id' => '3',
            'subdis_id' => '4',
            'voucher_id' => '1',
            'nomer' => '081235578685',
            'kode_pos' => '61384',
            'alamat' => 'semarang utara',
            'foto_ktp' => 'default.jpg',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        Agent::create([
            'name' => 'agent',
            'email' => 'agent@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'prov_id' => '1',
            'city_id' => '2',
            'dis_id' => '3',
            'subdis_id' => '4',
            'voucher_id' => '1',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        Affiliator::create([
            'name' => 'affiliator',
            'email' => 'affiliator@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'prov_id' => '1',
            'city_id' => '2',
            'dis_id' => '3',
            'subdis_id' => '4',
            'voucher_id' => '1',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);

        Vendor::create([
            'name' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'prov_id' => '1',
            'city_id' => '2',
            'dis_id' => '3',
            'subdis_id' => '4',
            'voucher_id' => '1',
            // 'created_by' => '1',
            // 'updated_by' => '1'
        ]);
    }
}
