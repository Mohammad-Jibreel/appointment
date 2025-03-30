<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    /** @use HasFactory<\Database\Factories\WorkingHourFactory> */
    use HasFactory;

    protected $fillable = [
        'service_provider_id', 'day_of_week', 'start_time', 'end_time'
    ];

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

}
