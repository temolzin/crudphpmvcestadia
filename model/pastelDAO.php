<?php
    class PastelDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO pastel values (:pastel_id, :tipo, :precio, :sabor, :capas)');
            $query->execute([':pastel_id' => null, ':tipo' => $data['tipo'], ':precio' => $data['precio'], ':sabor' => $data['sabor'], ':capas' => $data['capas']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE pastel SET  tipo = :tipo, precio = :precio, sabor = :sabor, capas = :capas WHERE pastel_id = :pastel_id');
            $query->execute([':pastel_id' => $data['idPastel'], ':tipo' => $data['tipo'], ':precio' => $data['precio'], ':sabor' => $data['sabor'], ':capas' => $data['capas']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM pastel where pastel_id = :pastel_id');
            $query->execute([':pastel_id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'pastelDTO.php';
            $query = "SELECT * FROM pastel";
            $objPasteles = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $pastel = new PastelDTO();
                $pastel->pastel_id = $value['pastel_id'];
                $pastel->tipo = $value['tipo'];
                $pastel->precio = $value['precio'];
                $pastel->sabor = $value['sabor'];
                $pastel->capas= $value['capas'];
                $objPasteles['data'][] = $pastel;
            }
            echo json_encode($objPasteles, JSON_UNESCAPED_UNICODE);
        }
    }
?>
