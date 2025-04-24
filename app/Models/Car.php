<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars'; // Explicitly specify the table name

    protected $fillable = [
        'make',
        'model',
        'year',
        'type',
        'transmission',
        'colour',
    ];



}
?>