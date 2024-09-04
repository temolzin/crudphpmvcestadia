<?php
    class MotosDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO motos values (:id_moto, :marca, :modelo, :cc, :precio)');
            $query->execute([':id_moto' => null, ':marca' => $data['marca'], ':modelo' => $data['modelo'], ':cc' => $data['cc'], ':precio' => $data['precio']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE motos SET  marca = :marca, modelo = :modelo, cc = :cc, precio = :precio WHERE id_moto = :id_moto');
            $query->execute([':id_moto' => $data['idMotos'], ':marca' => $data['marca'], ':modelo' => $data['modelo'], ':css' => $data['cc'], ':precio' => $data['precio']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM motos where id_moto = :id_moto');
            $query->execute([':id_moto' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'motosDTO.php';
            $query = "SELECT * FROM motos";
            $objMoto = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $motos = new MotosDTO();
                $motos->id_moto = $value['id_moto'];
                $motos->marca = $value['marca'];
                $motos->modelo = $value['modelo'];
                $motos->cc = $value['cc'];
                $motos->precio = $value['precio'];
                $objMoto['data'][] = $motos;
            }
            echo json_encode($objMoto, JSON_UNESCAPED_UNICODE);
        }
    }
?>
