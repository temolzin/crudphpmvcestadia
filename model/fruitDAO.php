<?php
    class FruitDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO fruit values (:id_fruit, :name_fruit, :description_fruit, :weight_fruit, :color_fruit)');          
            $query->execute([':id_fruit' => null, ':name_fruit' => $data['nameFruit'],':description_fruit' => $data['descriptionFruit'],':weight_fruit' => $data['weightFruit'],':color_fruit' => $data['colorFruit']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE fruit SET name_fruit = :name_fruit, description_fruit = :description_fruit, weight_fruit = :weight_fruit, color_fruit = :color_fruit WHERE id_fruit = :id_fruit');
            $query->execute([':id_fruit' => $data['idFruit'],':name_fruit' => $data['nameFruit'],':description_fruit' => $data['descriptionFruit'],':weight_fruit' => $data['weightFruit'],':color_fruit' => $data['colorFruit']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM fruit where id_fruit = :id_fruit');
            $query->execute([':id_fruit' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'fruitDTO.php';
            $query = "SELECT * FROM fruit";
            $objFruits = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $fruit = new FruitDTO();
                $fruit->id_fruit = $value['id_fruit'];
                $fruit->name_fruit = $value['name_fruit'];
                $fruit->description_fruit = $value['description_fruit'];
                $fruit->weight_fruit = $value['weight_fruit'];
                $fruit->color_fruit = $value['color_fruit'];
                $objFruits['data'][] = $fruit;
            }
            echo json_encode($objFruits, JSON_UNESCAPED_UNICODE);
        }
    }
?>
