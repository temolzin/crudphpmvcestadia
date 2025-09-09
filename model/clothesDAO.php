<?php
    class ClothesDAO extends Model implements CRUD {
        public function __construct() {
            parent::__construct();
        }

        public function insert($data) {
            $query = $this->db->conectar()->prepare(
                'INSERT INTO clothes VALUES (:id, :product, :category, :size, :price)'
            );
            $query->execute([
                ':id' => null,
                ':product' => $data['product'],
                ':category' => $data['category'],
                ':size' => $data['size'],
                ':price' => $data['price']
            ]);
            echo 'ok';
        }

        public function update($data) {
            $query = $this->db->conectar()->prepare(
                'UPDATE clothes SET 
                    products_clothes = :product, 
                    categories_clothes = :category, 
                    size_clothes = :size, 
                    price_clothes = :price 
                WHERE id_clothes = :id'
            );
            $query->execute([
                ':id' => $data['id'],
                ':product' => $data['product'],
                ':category' => $data['category'],
                ':size' => $data['size'],
                ':price' => $data['price']
            ]);
            echo 'ok';
        }

        public function delete($id) {
            $query = $this->db->conectar()->prepare('DELETE FROM clothes WHERE id_clothes = :id');
            $query->execute([':id' => $id]);
            echo 'ok';
        }

        public function read() {
            require_once 'clothesDTO.php';
            $query = "SELECT * FROM clothes";
            $objClothes = array();
            foreach ($this->db->consultar($query) as $value) {
                $clothes = new ClothesDTO();
                $clothes->id_clothes = $value['id_clothes'];
                $clothes->products_clothes = $value['products_clothes'];
                $clothes->categories_clothes = $value['categories_clothes'];
                $clothes->size_clothes = $value['size_clothes'];
                $clothes->price_clothes = $value['price_clothes'];
                $objClothes['data'][] = $clothes;
            }
            echo json_encode($objClothes, JSON_UNESCAPED_UNICODE);
        }
    }
?>
