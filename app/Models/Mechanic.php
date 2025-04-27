<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
