<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentLog extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentLogFactory> */
    use HasFactory;
    protected $fillable = [
        'appointment_id', 'action', 'performed_by'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

}
