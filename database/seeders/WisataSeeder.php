<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wisata::create([
            'namaWisata' => "Danau Weekuri",
            'lokasiWisata' => "Sumba Barat Daya",
            'deskripsiWisata' => "Danau Air Asin",
            'tarifMasuk' => 10000,
            'foto' => 'danau-weekuri.jpg'
        ]);
    }
}
