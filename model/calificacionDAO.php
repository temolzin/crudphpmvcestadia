<?php
    class CalificacionDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO calificacion values (:id_calificacion, :nombre_alumno, :apppat_alumno, :appmat_alumno, :calificacion)');
            $query->execute([':id_calificacion' => null, ':nombre_alumno' => $data['nombreAlumno'],':apppat_alumno' => $data['apellidoPaterno'],':appmat_alumno' => $data['apellidoMaterno'], ':calificacion' => $data['calificacion']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE calificacion SET  nombre_alumno = :nombreAlumnoActualizar, apppat_alumno = :apppatAlumnoActualizar, appmat_alumno = :appmatAlumnoActualizar, calificacion = :calificacionActualizar WHERE id_calificacion = :id_calificacion');
            $query->execute([':id_calificacion' => null,':nombreAlumnoActualizar' => $data['nombreAlumnoActualizar'],':apppatAlumnoActualizar' => $data['apellidoPaternoActualizar'],':appmatAlumnoActualizar' => $data['apellidoMaternoActualizar'],':calificacionActualizar' => $data['calificacionActualizar']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM calificacion where id_calificacion = :idCalificacionEliminar');
            $query->execute([':idCalificacionEliminar' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'calificacionDTO.php';
            $query = "SELECT * FROM calificacion";
            $objCalificacion = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $calificacion = new CalificacionDTO();
                $calificacion->id_calificacion = $value['id_calificacion'];
                $calificacion->nombre_alumno = $value['nombre_alumno'];
                $calificacion->apppat_alumno = $value['apppat_alumno'];
                $calificacion->appmat_alumno = $value['appmat_alumno'];
                $calificacion->calificacion = $value['calificacion'];
                $objCalificacion['data'][] = $calificacion;
            }
            echo json_encode($objCalificacion, JSON_UNESCAPED_UNICODE);
        }
    }
?>
