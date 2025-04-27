<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'car_id', 'mechanic_id', 'service_date', 'notes'
    ];

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function mechanic() {
        return $this->belongsTo(Mechanic::class);
    }
}
