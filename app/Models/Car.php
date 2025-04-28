<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'make', 'model', 'year', 'type', 'transmission', 'colour'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

