<?php
// App\Models\Booking.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

// class Booking extends Model
// {
//     public function tickets(): HasMany
//     {
//         return $this->hasMany(Ticket::class);
//     }
// }

// App\Models\Ticket.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    //...

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}