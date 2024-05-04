<?php
    class FruitDTO implements JsonSerializable {
        private $id_fruit;
        private $name_fruit;
        private $description_fruit;
        private $weight_fruit;
        private $color_fruit;

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
