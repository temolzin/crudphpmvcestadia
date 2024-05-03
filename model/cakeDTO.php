<?php
    class CakeDTO implements JsonSerializable {
        private $id_cake;
        private $name_cake;
        private $flavor_cake;
        private $amount_cake;
        private $price_cake;
        private $date_Cake;


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
