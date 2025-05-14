<?php
    class DulceDTO implements JsonSerializable {
        private $id_dulce;
        private $nombre_dulce;
        private $cantidad_dulce;
        private $precio_dulce;
        private $sabor_dulce;

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
