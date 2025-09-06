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

        /**
         * Specify data which should be serialized to JSON
         * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
         * @return mixed data which can be serialized by <b>json_encode</b>,
         * which is a value of any type other than a resource.
         * @since 5.4.0
         */
        public function jsonSerialize() {
            $vars = get_object_vars($this);
            return $vars;
        }
    }
?>

