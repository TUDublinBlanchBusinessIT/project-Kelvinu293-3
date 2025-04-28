<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mechanic extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'email'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}


