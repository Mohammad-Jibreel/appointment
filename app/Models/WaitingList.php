<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitingList extends Model
{
    /** @use HasFactory<\Database\Factories\WaitingListFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id', 'service_id', 'preferred_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
