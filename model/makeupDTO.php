<?php
    class MakeupDTO implements JsonSerializable {
        private $id;
        private $name;
        private $brand;
        private $type;
        private $price;
        private $stock;

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
            $vars = get_object_vars($this);
            return $vars;
        }
    }
?>

