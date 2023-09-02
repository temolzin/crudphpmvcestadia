<?php
    class DeporteDTO implements JsonSerializable {
        private $id_deporte;
        private $nombre_deporte;
        private $descripcion_deporte;
        private $num_participantes_deporte;

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
