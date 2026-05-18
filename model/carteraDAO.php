<?php
    class CarteraDAO extends Model implements CRUD {

        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO cartera values (:id_cartera, :material, :color, :modelo, :marca)');
            $query->execute([':id_cartera' => null, ':material' => $data['materialCartera'], ':color' => $data['colorCartera'], ':modelo' => $data['modeloCartera'], ':marca' => $data['marcaCartera']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE cartera SET  material = :material, color = :color, modelo = :modelo, marca = :marca WHERE id_cartera = :idcartera');
            $query->execute([':idcartera' => $data['idCartera'], ':material' => $data['materialCartera'], ':color' => $data['colorCartera'], ':modelo' => $data['modeloCartera'], ':marca' => $data['marcaCartera']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM cartera where id_cartera = :id_cartera');
            $query->execute([':id_cartera' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'carteraDTO.php';
            $query = "SELECT * FROM cartera";
            $objCartera = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $cartera = new CarteraDTO();
                $cartera->id_cartera = $value['id_cartera'];
                $cartera->material = $value['material'];
                $cartera->color = $value['color'];
                $cartera->modelo = $value['modelo'];
                $cartera->marca = $value['marca'];
                $objCartera['data'][] = $cartera;
            }
            echo json_encode($objCartera, JSON_UNESCAPED_UNICODE);
        }
    }
?>
