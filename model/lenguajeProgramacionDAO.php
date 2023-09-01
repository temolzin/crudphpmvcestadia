<?php
    class lenguajeProgramacionDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO lenguajeProgramacion values (:id_lenguajeProgramacion, :nombre_lenguajeProgramacion, :paradigma_lenguajeProgramacion, :creador_lenguajeProgramacion, :fecha_creacion_lenguajeProgramacion)');
            $query->execute([':id_lenguajeProgramacion' => null, ':nombre_lenguajeProgramacion' => $data['nombreLenguajeProgramacion'],':paradigma_lenguajeProgramacion' => $data['paradigmaLenguajeProgramacion'],':creador_lenguajeProgramacion' => $data['creadorLenguajeProgramacion'],':fecha_creacion_lenguajeProgramacion' => $data['fechaCreacionLenguajeProgramacion']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE lenguajeProgramacion SET  nombre_lenguajeProgramacion = :nombre_lenguajeProgramacion, paradigma_lenguajeProgramacion = :paradigma_lenguajeProgramacion, creador_lenguajeProgramacion = :creador_lenguajeProgramacion, fecha_creacion_lenguajeProgramacion = :fecha_creacion_lenguajeProgramacion WHERE id_lenguajeProgramacion = :id_lenguajeProgramacion');
            $query->execute([':id_lenguajeProgramacion' => $data['idLenguajeProgramacion'], ':nombre_lenguajeProgramacion' => $data['nombreLenguajeProgramacion'],':paradigma_lenguajeProgramacion' => $data['paradigmaLenguajeProgramacion'],':creador_lenguajeProgramacion' => $data['creadorLenguajeProgramacion'],':fecha_creacion_lenguajeProgramacion' => $data['fechaCreacionLenguajeProgramacion']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM lenguajeProgramacion where id_lenguajeProgramacion = :id_lenguajeProgramacion');
            $query->execute([':id_lenguajeProgramacion' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'lenguajeProgramacionDTO.php';
            $query = "SELECT * FROM lenguajeProgramacion";
            $objlenguajeProgramacions = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $lenguajeProgramacion = new lenguajeProgramacionDTO();
                $lenguajeProgramacion->id_lenguajeProgramacion = $value['id_lenguajeProgramacion'];
                $lenguajeProgramacion->nombre_lenguajeProgramacion = $value['nombre_lenguajeProgramacion'];
                $lenguajeProgramacion->paradigma_lenguajeProgramacion = $value['paradigma_lenguajeProgramacion'];
                $lenguajeProgramacion->creador_lenguajeProgramacion = $value['creador_lenguajeProgramacion'];
                $lenguajeProgramacion->fecha_creacion_lenguajeProgramacion = $value['fecha_creacion_lenguajeProgramacion'];

                $objlenguajeProgramacions['data'][] = $lenguajeProgramacion;
            }
            echo json_encode($objlenguajeProgramacions, JSON_UNESCAPED_UNICODE);
        }
    }
?>
