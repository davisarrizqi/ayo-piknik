<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
    protected $table = 'reservation_details';
    protected $primaryKey = 'reservation_id';

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'id', 'reservation_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'visitor_username');
    }

    public function place(){
        return $this->belongsTo(Place::class, 'id', 'place_id');
    }
}
