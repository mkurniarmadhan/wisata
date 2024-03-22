<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;
    protected $fillable = [
        // 'user_id',
        // 'wisata_id',
        'order_id',
        'status'
    ];

    public function order()
    {

        return $this->belongsTo(Order::class);
    }
}
