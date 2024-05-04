<?php
    class PlantDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO plant values (:plant_id, :plant_name, :plant_price, :plant_availability, :plant_size)');
            $query->execute([':plant_id' => null, ':plant_name' => $data['plantName'],':plant_price' => $data['price'],':plant_availability' => $data['availability'], ':plant_size' => $data['size']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE plant SET  plant_name = :plant_name, plant_price = :plant_price, plant_availability = :plant_availability, plant_size = :plant_size WHERE plant_id = :plant_id');
            $query->execute([':plant_id' => $data['plantId'],':plant_name' => $data['plantName'],':plant_price' => $data['price'],':plant_availability' => $data['availability'],':plant_size' => $data['size']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM plant where plant_id = :plant_id');
            $query->execute([':plant_id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'plantDTO.php';
            $query = "SELECT * FROM plant";
            $objPlant = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $plant = new PlantDTO();
                $plant->plant_id = $value['plant_id'];
                $plant->plant_name = $value['plant_name'];
                $plant->plant_price = $value['plant_price'];
                $plant->plant_availability = $value['plant_availability'];
                $plant->plant_size = $value['plant_size'];
                $objPlant['data'][] = $plant;
            }
            echo json_encode($objPlant, JSON_UNESCAPED_UNICODE);
        }
    }
?>
