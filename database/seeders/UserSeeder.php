<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Christian',
            'last_name' => 'S Barbosa',
            'email' => 'djchristiandf@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 1,
        ]);
    }
}
