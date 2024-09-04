<?php
    class MotosDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO motos values (:id_motos, :marcas, :modelos, :css, :precios)');
            $query->execute([':id_motos' => null, ':marcas' => $data['marca'], ':modelos' => $data['modelo'], ':css' => $data['cc'], ':precios' => $data['precio']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE motos SET  marcas = :marcas, modelos = :modelos, css = :css, precios = :precios WHERE id_motos = :id_motos');
            $query->execute([':id_motos' => $data['idMotos'], ':marcas' => $data['marca'], ':modelos' => $data['modelo'], ':css' => $data['cc'], ':precios' => $data['precio']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM motos where id_motos = :id_motos');
            $query->execute([':id_motos' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'motosDTO.php';
            $query = "SELECT * FROM motos";
            $objMoto = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $motos = new MotosDTO();
                $motos->id_motos = $value['id_motos'];
                $motos->marcas = $value['marcas'];
                $motos->modelos = $value['modelos'];
                $motos->ccs = $value['css'];
                $motos->precios = $value['precios'];
                $objMoto['data'][] = $motos;
            }
            echo json_encode($objMoto, JSON_UNESCAPED_UNICODE);
        }
    }
?>
