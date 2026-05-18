<?php

class CarteraDTO implements JsonSerializable {
    private $id_cartera;
    private $material;
    private $color;
    private $modelo;
    private $marca;
  
    public function __get($property){
        if(property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value){
        if(property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
?>
