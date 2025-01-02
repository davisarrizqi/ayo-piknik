<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class RefundMessage extends Model
{
    protected $table = 'refund_messages';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    
    public function reservations(){
        return $this->belongsTo(Reservation::class, 'reservation_invoice', 'id');
    }

    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_username', 'username');
    }
}
