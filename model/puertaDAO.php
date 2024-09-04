<?php
    class puertaDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO puerta values (:puerta_id, :puerta_material, :puerta_precio, :puerta_altura, :puerta_anchura)');
            $query->execute([':puerta_id' => null, ':puerta_material' => $data['materialpuerta'], ':puerta_precio' => $data['precio'], ':puerta_altura' => $data['altura'], ':puerta_anchura' => $data['anchura']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE puerta SET  puerta_material = :puerta_material, puerta_precio = :puerta_precio, puerta_altura = :puerta_altura, puerta_anchura = :puerta_anchura WHERE puerta_id = :puerta_id');
            $query->execute([':puerta_id' => $data['idpuerta'], ':puerta_material' => $data['materialpuerta'], ':puerta_precio' => $data['precio'], ':puerta_altura' => $data['altura'], ':puerta_anchura' => $data['anchura']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM puerta where puerta_id = :puerta_id');
            $query->execute([':puerta_id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'puertaDTO.php';
            $query = "SELECT * FROM puerta";
            $objpuertas = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $puerta = new puertaDTO();
                $puerta->puerta_id = $value['puerta_id'];
                $puerta->puerta_material = $value['puerta_material'];
                $puerta->puerta_precio = $value['puerta_precio'];
                $puerta->puerta_altura = $value['puerta_altura'];
                $puerta->puerta_anchura = $value['puerta_anchura'];
                $objpuertas['data'][] = $puerta;
            }
            echo json_encode($objpuertas, JSON_UNESCAPED_UNICODE);
        }
    }
?>
