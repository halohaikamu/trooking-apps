<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Agent;
use App\Models\Affiliator;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;

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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'admin',
        ]);
        Agent::create([
            'email' => 'agent@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'agent',
        ]);
        Affiliator::create([
            'email' => 'affiliator@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'affiliator',
        ]);
        User::create([
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'user',
        ]);
        Vendor::create([
            'email' => 'vendor@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'vendor',
        ]);
    }
}
