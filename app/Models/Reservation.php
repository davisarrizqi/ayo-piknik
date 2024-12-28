<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function reservationDetails()
    {
        return $this->hasMany(ReservationDetail::class, 'reservation_id', 'id');
    }

    public function generateInvoiceNumber()
    {
        do {
            $invoice_number = mt_rand(10000000, 99999999);
        } while (Reservation::where('invoice_number', $invoice_number)->exists());
        return $invoice_number;
    }
}
