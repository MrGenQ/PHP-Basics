<?php
namespace Machines;

class Car extends Machine{
    public $maxSpeed;
    public $power;
    public $capacity;
    public function addPower($power){
        $this -> power = $power;
    }
    public function addMaxSpeed($maxSpeed){
        $this -> maxSpeed = $maxSpeed;
    }
    public function addCapacity($capacity){
        $this -> capacity = $capacity;
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
            $this -> power,
            $this -> capacity,
        ];
    }
}