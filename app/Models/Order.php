<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, HasUlids;


    protected $fillable = [
        'wisata_id',
        'user_id',
        'namaPemesan',
        'jumlahTiket',
        'totalBayar',
        'statusBayar',
        'buktiBayar',
    ];


    public function tikets()
    {

        return $this->hasMany(Tiket::class);
    }

    public function wisata()
    {

        return $this->belongsTo(Wisata::class);
    }
}
