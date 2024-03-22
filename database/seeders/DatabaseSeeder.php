<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'namaLengkap' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => fake('id_ID')->phoneNumber(),
            'alamat' => fake('id_ID')->address(),
            'password' => bcrypt('admin'),
            'is_admin' => true
        ]);
        \App\Models\User::create([
            'namaLengkap' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'phone' => fake('id_ID')->phoneNumber(),
            'alamat' => fake('id_ID')->address(),
            'password' => bcrypt('pelanggan'),
            'is_admin' => false
        ]);
        \App\Models\User::create([
            'namaLengkap' => 'equin',
            'email' => 'equinngongo@gmail.com',
            'phone' => fake('id_ID')->phoneNumber(),
            'alamat' => fake('id_ID')->address(),
            'password' => bcrypt('equinn22'),
            'is_admin' => false
        ]);

        $this->call([
            WisataSeeder::class,
        ]);
    }
}
