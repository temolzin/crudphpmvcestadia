<?php
    class VideogameDTO implements JsonSerializable {
        private $id_videogame;
        private $title_videogame;
        private $gender_videogame;
        private $price_videogame;
        private $release_date_videogame;

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
