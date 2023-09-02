<?php
    class DeporteDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO deporte values (:id_deporte, :nombre_deporte, :descripcion_deporte, :num_participantes_deporte)');
            $query->execute([':id_deporte' => null, ':nombre_deporte' => $data['nombreDeporte'],':descripcion_deporte' => $data['descripcionDeporte'],':num_participantes_deporte' => $data['numParticipantesDeporte']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE deporte SET  nombre_deporte = :nombre_deporte, descripcion_deporte = :descripcion_deporte, num_participantes_deporte = :num_participantes_deporte WHERE id_deporte = :id_deporte');
            $query->execute([':id_deporte' => $data['idDeporte'],':nombre_deporte' => $data['nombreDeporte'],':descripcion_deporte' => $data['descripcionDeporte'],':num_participantes_deporte' => $data['numParticipantesDeporte']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM deporte where id_deporte = :id_deporte');
            $query->execute([':id_deporte' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'deporteDTO.php';
            $query = "SELECT * FROM deporte";
            $objDeportes = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $deporte = new DeporteDTO();
                $deporte->id_deporte = $value['id_deporte'];
                $deporte->nombre_deporte = $value['nombre_deporte'];
                $deporte->descripcion_deporte = $value['descripcion_deporte'];
                $deporte->num_participantes_deporte = $value['num_participantes_deporte'];
                $objDeportes['data'][] = $deporte;
            }
            echo json_encode($objDeportes, JSON_UNESCAPED_UNICODE);
        }
    }
?>
