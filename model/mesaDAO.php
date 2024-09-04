<?php
    class MesaDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO mesa values (:id_mesa, :material, :altura, :acabado, :precio)');
            $query->execute([':id_mesa' => null, ':material' => $data['material'], ':altura' => $data['altura'], ':acabado' => $data['acabado'], ':precio' => $data['precio']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE mesa SET  material = :material, altura = :altura, acabado = :acabado, precio = :precio WHERE id_mesa = :id_mesa');
            $query->execute([':id_mesa' => $data['idMesa'], ':material' => $data['material'], ':altura' => $data['altura'], ':acabado' => $data['acabado'], ':precio' => $data['precio']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM mesa where id_mesa = :id_mesa');
            $query->execute([':id_mesa' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'mesaDTO.php';
            $query = "SELECT * FROM mesa";
            $objMesas = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $mesa = new MesaDTO();
                $mesa->id_mesa = $value['id_mesa'];
                $mesa->material = $value['material'];
                $mesa->altura = $value['altura'];
                $mesa->acabado = $value['acabado'];
                $mesa->precio = $value['precio'];
                $objMesas['data'][] = $mesa;
            }
            echo json_encode($objMesas, JSON_UNESCAPED_UNICODE);
        }
    }
?>
