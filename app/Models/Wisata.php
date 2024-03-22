<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaWisata',
        'lokasiWisata',
        'deskripsiWisata',
        'tarifMasuk',
        'foto'
    ];


    protected function foto(): Attribute
    {
        return Attribute::make(
            get: function ($foto) {
                if (!$foto) {
                    return 'https://tse3.mm.bing.net/th?id=OIP.cUVowFPwQyND2Hv7MK4gmQHaE7&pid=Api&P=0&h=180';
                }
                return asset('images/wisata/') . '/' . $foto;
            },
        );
    }
}
