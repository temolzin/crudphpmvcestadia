<?php
    class origamiDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO origami values (:origami_id, :origami_material, :origami_precio, :origami_tamanio, :origami_total_piezas)');
            $query->execute([':origami_id' => null, ':origami_material' => $data['materialorigami'], ':origami_precio' => $data['precio'], ':origami_tamanio' => $data['tamanio'], ':origami_total_piezas' => $data['origami_total_piezas']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE origami SET  origami_material = :origami_material, origami_precio = :origami_precio, origami_tamanio = :origami_tamanio, origami_total_piezas = :origami_total_piezas WHERE origami_id = :origami_id');
            $query->execute([':origami_id' => $data['idorigami'], ':origami_material' => $data['materialorigami'], ':origami_precio' => $data['precio'], ':origami_tamanio' => $data['tamanio'], ':origami_total_piezas' => $data['total_piezas']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM origami where origami_id = :origami_id');
            $query->execute([':origami_id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'origamiDTO.php';
            $query = "SELECT * FROM origami";
            $objorigamis = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $origami = new origamiDTO();
                $origami->origami_id = $value['origami_id'];
                $origami->origami_material = $value['origami_material'];
                $origami->origami_precio = $value['origami_precio'];
                $origami->origami_tamanio = $value['origami_tamanio'];
                $origami->origami_total_piezas = $value['origami_total_piezas'];
                $objorigamis['data'][] = $origami;
            }
            echo json_encode($objorigamis, JSON_UNESCAPED_UNICODE);
        }
    }
?>
