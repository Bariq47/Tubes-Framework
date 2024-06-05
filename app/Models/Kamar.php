<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'kos_id',
        'room_number',
        'room_description',
        'price_per_month',
        'availability',
    ];

    public function kos()
    {
        return $this->belongsTo(Kos::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
