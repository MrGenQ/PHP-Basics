<?php
namespace Machines;

class Bike extends Machine{
    public $maxSpeed;
    public function addMaxSpeed($maxSpeed){
        $this -> maxSpeed = $maxSpeed;
    }

    public function __construct($model, $brand, $price, $weight, $description)       //magic metodas
    {
        $this ->model = $model;
        $this ->brand = $brand;
        $this ->price = $price;
        $this -> weight = $weight;
        $this -> description = $description;
    }
    public  function getUserData(){ //Metodas geteris
        return[
            $this -> model,
            $this -> brand,
            $this -> price,
            $this -> weight,
            $this -> description,
            $this -> maxSpeed,
        ];
    }
}