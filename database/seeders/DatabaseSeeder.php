<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Mechanic;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            'make' => 'Hyundai',
            'model' => 'i20',
            'year' => 2012,
            'type' => 'hatchback',
            'transmission' => 'Manual',
            'colour' => 'Light blue'
        ]);

        Car::create([
            'make' => 'Audi',
            'model' => 'v8',
            'year' => 1991,
            'type' => 'Sedan',
            'transmission' => 'Manual',
            'colour' => 'Black'
        ]);

        Car::create([
            'make' => 'Ford',
            'model' => 'Focus',
            'year' => 2017,
            'type' => 'Hatchback',
            'transmission' => 'Automatic',
            'colour' => 'Red'
        ]);

        Car::create([
            'make' => 'Tesla',
            'model' => 'Model 3',
            'year' => 2022,
            'type' => 'Electric',
            'transmission' => 'Automatic',
            'colour' => 'Blue'
        ]);

        Car::create([
            'make' => 'BMW',
            'model' => 'X5',
            'year' => 2019,
            'type' => 'SUV',
            'transmission' => 'Automatic',
            'colour' => 'Silver'
        ]);

        Mechanic::create([
            'name' => 'John Doe',
            'email' => 'john87@yahoo.ie',
        ]);

        Mechanic::create([
            'name' => 'Jane Smith',
            'email' => 'janes80@gmail.com',
        ]);

        Mechanic::create([
            'name' => 'Mike Johnson',
            'email' => 'mikemanchaic@hotmail.com',
        ]);

        Mechanic::create([
            'name' => 'Emily MCbride',
            'email' => 'emilythebest@gmail.com',
        ]);

        Mechanic::create([
            'name' => 'Chris Lee',
            'email' => 'Leechris2@gmail.com',
        ]);
    }
}
