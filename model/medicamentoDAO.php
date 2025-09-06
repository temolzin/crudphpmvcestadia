<?php
    class MedicamentoDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }
        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO medicamento VALUES (:id, :name, :price, :laboratory, :expiration, :weigth)');
            $query->execute([
                ':id' => null,
                ':name' => $data['name'],
                ':price' => $data['price'],
                ':laboratory' => $data['laboratory'],
                ':expiration' => $data['expiration'],
                ':weigth' => $data['weigth']
            ]);
            echo 'ok';
        }
        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE medicamento SET name = :name, price = :price, laboratory = :laboratory, expiration = :expiration, weigth = :weigth WHERE id = :id');
            $query->execute([
                ':id' => $data['id'],
                ':name' => $data['name'],
                ':price' => $data['price'],
                ':laboratory' => $data['laboratory'],
                ':expiration' => $data['expiration'],
                ':weigth' => $data['weigth']
            ]);
            echo 'ok';
        }
        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM medicamento WHERE id = :id');
            $query->execute([':id' => $id]);
            echo 'ok';
        }
        public function read()
        {
            require_once 'medicamentoDTO.php';
            $query = "SELECT * FROM medicamento";
            $objMedicamentos = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $medicamento = new MedicamentoDTO();
                $medicamento->id = $value['id'];
                $medicamento->name = $value['name'];
                $medicamento->price = $value['price'];
                $medicamento->laboratory = $value['laboratory'];
                $medicamento->expiration = $value['expiration'];
                $medicamento->weigth = $value['weigth'];
                $objMedicamentos['data'][] = $medicamento;
            }
            echo json_encode($objMedicamentos, JSON_UNESCAPED_UNICODE);
        }
    }
?>