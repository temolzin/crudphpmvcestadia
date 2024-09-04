<?php
    class PerroDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO perro values (:id_perro, :nombre_perro, :raza_perro, :edad_perro, :sexo_perro)');
            $query->execute([':id_perro' => null, ':nombre_perro' => $data['nombrePerro'], ':raza_perro' => $data['razaPerro'], ':edad_perro' => $data['edadPerro'], ':sexo_perro' => $data['sexoPerro']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE perro SET nombre_perro = :nombre_perro, raza_perro = :raza_perro, edad_perro = :edad_perro, sexo_perro = :sexo_perro WHERE id_perro = :id_perro');
            $query->execute([':id_perro' => $data['idPerro'], ':nombre_perro' => $data['nombrePerro'], ':raza_perro' => $data['razaPerro'], ':edad_perro' => $data['edadPerro'], ':sexo_perro' => $data['sexoPerro']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM perro where id_perro = :id_perro');
            $query->execute([':id_perro' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'perroDTO.php';
            $query = "SELECT * FROM perro";
            $objPerros = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $perro = new PerroDTO();
                $perro->id_perro = $value['id_perro'];
                $perro->nombre_perro = $value['nombre_perro'];
                $perro->raza_perro = $value['raza_perro'];
                $perro->edad_perro = $value['edad_perro'];
                $perro->sexo_perro = $value['sexo_perro'];
                $objPerros['data'][] = $perro;
            }
            echo json_encode($objPerros, JSON_UNESCAPED_UNICODE);
        }
    }
?>
