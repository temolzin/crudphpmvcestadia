<?php
    class MakeupDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare(
                'INSERT INTO Makeup VALUES (:id, :name, :brand, :type, :price, :stock)'
            );
            $query->execute([
                ':id' => null,
                ':name' => $data['name'],
                ':brand' => $data['brand'],
                ':type' => $data['type'],
                ':price' => $data['price'],
                ':stock' => $data['stock']
            ]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare(
                'UPDATE Makeup 
                 SET name = :nameUpdate, brand = :brandUpdate, type = :typeUpdate, 
                    price = :priceUpdate, stock = :stockUpdate 
                 WHERE id = :idUpdate'
            );
            $query->execute([
                ':idUpdate' => $data['idUpdate'],
                ':nameUpdate' => $data['nameUpdate'],
                ':brandUpdate' => $data['brandUpdate'],
                ':typeUpdate' => $data['typeUpdate'],
                ':priceUpdate' => $data['priceUpdate'],
                ':stockUpdate' => $data['stockUpdate']
            ]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare(
                'DELETE FROM Makeup WHERE id = :idDelete'
            );
            $query->execute([':idDelete' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'makeupDTO.php';
            $query = "SELECT * FROM Makeup";
            $objMakeups = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $makeup = new MakeupDTO();
                $makeup->id = $value['id'];
                $makeup->name = $value['name'];
                $makeup->brand = $value['brand'];
                $makeup->type = $value['type'];
                $makeup->price = $value['price'];
                $makeup->stock = $value['stock'];
                $objMakeups['data'][] = $makeup;
            }
            echo json_encode($objMakeups, JSON_UNESCAPED_UNICODE);
        }
    }
?>

