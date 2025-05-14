<?php
    class celularDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO celular values (:celular_id, :celular_material, :celular_precio, :celular_altura, :celular_anchura)');
            $query->execute([':celular_id' => null, ':celular_material' => $data['materialcelular'], ':celular_precio' => $data['precio'], ':celular_altura' => $data['altura'], ':celular_anchura' => $data['anchura']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE celular SET  celular_material = :celular_material, celular_precio = :celular_precio, celular_altura = :celular_altura, celular_anchura = :celular_anchura WHERE celular_id = :celular_id');
            $query->execute([':celular_id' => $data['idcelular'], ':celular_material' => $data['materialcelular'], ':celular_precio' => $data['precio'], ':celular_altura' => $data['altura'], ':celular_anchura' => $data['anchura']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM celular where celular_id = :celular_id');
            $query->execute([':celular_id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'celularDTO.php';
            $query = "SELECT * FROM celular";
            $objcelulars = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $celular = new celularDTO();
                $celular->celular_id = $value['celular_id'];
                $celular->celular_material = $value['celular_material'];
                $celular->celular_precio = $value['celular_precio'];
                $celular->celular_altura = $value['celular_altura'];
                $celular->celular_anchura = $value['celular_anchura'];
                $objcelulars['data'][] = $celular;
            }
            echo json_encode($objcelulars, JSON_UNESCAPED_UNICODE);
        }
    }
?>
