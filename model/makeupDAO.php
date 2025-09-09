<?php
    class MakeupDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare(
                'INSERT INTO makeup VALUES (:id, :name, :brand, :type, :price, :stock)'
            );
            $query->execute([
                ':id'    => null,
                ':name'  => $data['name'],
                ':brand' => $data['brand'],
                ':type'  => $data['type'],
                ':price' => $data['price'],
                ':stock' => $data['stock']
            ]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare(
                'UPDATE makeup 
                 SET name = :name_update, 
                     brand = :brand_update, 
                     type = :type_update, 
                     price = :price_update, 
                     stock = :stock_update 
                 WHERE id = :id_update'
            );
            $query->execute([
                ':id_update'    => $data['id_update'],
                ':name_update'  => $data['name_update'],
                ':brand_update' => $data['brand_update'],
                ':type_update'  => $data['type_update'],
                ':price_update' => $data['price_update'],
                ':stock_update' => $data['stock_update']
            ]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare(
                'DELETE FROM makeup WHERE id = :id_delete'
            );
            $query->execute([':id_delete' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'makeupDTO.php';
            $query = "SELECT * FROM makeup";
            $objMakeups = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $makeup = new MakeupDTO();
                $makeup->id    = $value['id'];
                $makeup->name  = $value['name'];
                $makeup->brand = $value['brand'];
                $makeup->type  = $value['type'];
                $makeup->price = $value['price'];
                $makeup->stock = $value['stock'];
                $objMakeups['data'][] = $makeup;
            }
            echo json_encode($objMakeups, JSON_UNESCAPED_UNICODE);
        }
    }
?>


