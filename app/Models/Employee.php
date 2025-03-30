<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    protected $fillable = [
        'service_provider_id', 'name', 'email', 'phone'
    ];

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

}
