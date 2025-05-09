<?php
    class gatoDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO gato values (:gato_id, :gato_nombre, :gato_peso, :gato_altura, :gato_color)');
            $query->execute([':gato_id' => null, ':gato_nombre' => $data['nombregato'], ':gato_peso' => $data['peso'], ':gato_altura' => $data['altura'], ':gato_color' => $data['color']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE gato SET  gato_nombre = :gato_nombre, gato_peso = :gato_peso, gato_altura = :gato_altura, gato_color = :gato_color WHERE gato_id = :gato_id');
            $query->execute([':gato_id' => $data['idgato'], ':gato_nombre' => $data['nombregato'], ':gato_peso' => $data['peso'], ':gato_altura' => $data['altura'], ':gato_color' => $data['color']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM gato where gato_id = :gato_id');
            $query->execute([':gato_id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'gatoDTO.php';
            $query = "SELECT * FROM gato";
            $objgatos = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $gato = new gatoDTO();
                $gato->gato_id = $value['gato_id'];
                $gato->gato_nombre = $value['gato_nombre'];
                $gato->gato_peso = $value['gato_peso'];
                $gato->gato_altura = $value['gato_altura'];
                $gato->gato_color = $value['gato_color'];
                $objgatos['data'][] = $gato;
            }
            echo json_encode($objgatos, JSON_UNESCAPED_UNICODE);
        }
    }
?>
