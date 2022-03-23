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
        ]);

        Agent::create([
            'name' => 'agent',
            'email' => 'agent@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
        ]);

        Affiliator::create([
            'name' => 'affiliator',
            'email' => 'affiliator@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
        ]);

        Vendor::create([
            'name' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
