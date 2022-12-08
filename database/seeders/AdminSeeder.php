<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Arief',
            'no_telp' => '081234567',
            'alamat' => 'subang',
            'username' => 'arief123',
            'email' => 'arief123@gmail.com',
            'password' => bcrypt('arief123'),
            'role' => 'admin'
        ]);
    }
}
