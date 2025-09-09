<?php
    class ClothesDTO implements JsonSerializable {
        private $id_clothes;
        private $products_clothes;
        private $categories_clothes;
        private $size_clothes;
        private $price_clothes;

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

        public function jsonSerialize() {
            $vars = get_object_vars($this);
            return $vars;
        }
    }
?>

