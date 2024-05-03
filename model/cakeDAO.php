<?php
    class CakeDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO cake values (:id_cake, :name_cake, :flavor_cake, :amount_cake, :price_cake, :date_Cake)');
            $query->execute([':id_cake' => null, ':name_cake' => $data['nameCake'],':flavor_cake' => $data['flavorCake'],':amount_cake' => $data['amountCake'],':price_cake' => $data['priceCake'],':date_Cake' => $data['dateCake']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE cake SET  name_cake = :name_cake, flavor_cake = :flavor_cake, amount_cake = :amount_cake , price_cake = :price_cake, date_Cake = :date_Cake WHERE id_cake = :id_cake');
            $query->execute([':id_cake' => $data['idCake'],':name_cake' => $data['namecake'],':flavor_cake' => $data['flavorcake'],':amount_cake' => $data['amountcake'], ':price_cake' => $data['pricecake'], ':date_Cake' => $data['datecake']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM cake where id_cake = :id_cake');
            $query->execute([':id_cake' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'cakeDTO.php';
            $query = "SELECT * FROM cake";
            $objCake = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $cake = new CakeDTO();
                $cake->id_cake = $value['id_cake'];
                $cake->name_cake = $value['name_cake'];
                $cake->flavor_cake = $value['flavor_cake'];
                $cake->amount_cake = $value['amount_cake'];
                $cake->price_cake = $value['price_cake'];
                $cake->date_Cake = $value['date_Cake'];
                $objCake['data'][] = $cake;
            }
            echo json_encode($objCake, JSON_UNESCAPED_UNICODE);
        }
    }
?>
