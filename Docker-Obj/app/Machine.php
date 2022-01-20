<?php
namespace Machines;
class Machine{
    protected $model;// Atributas arba ypatybe
    protected $brand;
    protected $price;
    protected $weight;
    protected $description;

    public function __construct($model, $brand)       //magic metodas
    {
        $this ->model = $model;
        $this ->brand = $brand;
    }

    public  function getUserData(){ //Metodas geteris
        return[
            $this -> model,
            $this -> brand,
            $this -> price,
            $this -> weight,
            $this -> description,
        ];
    }
    public function __toString()        //magic method
    {
        // TODO: Implement __toString() method.
        return $this -> model;
    }
}

