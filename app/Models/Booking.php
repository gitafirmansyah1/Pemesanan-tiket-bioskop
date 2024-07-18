<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'movie_title',
        'showtime',
        'seat_type',
        'quantity',
        'total_price',
    ];
}