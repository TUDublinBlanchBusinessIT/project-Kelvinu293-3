<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 

class Car extends Model 
{ 
    public $table = "car"; // exact table name
    public $timestamps = false;

    public function setMake($make) 
    { 
        $this->attributes['make'] = $make;
    } 

    public function setModel($model) 
    { 
        $this->attributes['model'] = $model; 
    } 

    public function setYear($year) 
    { 
        $this->attributes['year'] = $year; 
    } 

    public function setType($type) 
    { 
        $this->attributes['type'] = $type; 
    } 

    public function setTransmission($transmission) 
    { 
        $this->attributes['transmission'] = $transmission; 
    } 
    
    public function setColour($colour) 
    { 
        $this->attributes['colour'] = $colour; 
    } 


}
?>