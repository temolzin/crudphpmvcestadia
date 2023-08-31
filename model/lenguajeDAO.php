<?php
    class LenguajeDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO lenguaje values (:id_lenguaje, :nombre_lenguaje, :paradigma_lenguaje, :creador_lenguaje, :fecha_creacion_lenguaje)');
            $query->execute([':id_lenguaje' => null, ':nombre_lenguaje' => $data['nombreLenguaje'],':paradigma_lenguaje' => $data['paradigmaLenguaje'],':creador_lenguaje' => $data['creadorLenguaje'],':fecha_creacion_lenguaje' => $data['fechaCreacionLenguaje']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE lenguaje SET  nombre_lenguaje = :nombre_lenguaje, paradigma_lenguaje = :paradigma_lenguaje, creador_lenguaje = :creador_lenguaje, fecha_creacion_lenguaje = :fecha_creacion_lenguaje WHERE id_lenguaje = :id_lenguaje');
            $query->execute([':id_lenguaje' => $data['idLenguaje'], ':nombre_lenguaje' => $data['nombreLenguaje'],':paradigma_lenguaje' => $data['paradigmaLenguaje'],':creador_lenguaje' => $data['creadorLenguaje'],':fecha_creacion_lenguaje' => $data['fechaCreacionLenguaje']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM lenguaje where id_lenguaje = :id_lenguaje');
            $query->execute([':id_lenguaje' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'lenguajeDTO.php';
            $query = "SELECT * FROM lenguaje";
            $objlenguajes = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $lenguaje = new lenguajeDTO();
                $lenguaje->id_lenguaje = $value['id_lenguaje'];
                $lenguaje->nombre_lenguaje = $value['nombre_lenguaje'];
                $lenguaje->paradigma_lenguaje = $value['paradigma_lenguaje'];
                $lenguaje->creador_lenguaje = $value['creador_lenguaje'];
                $lenguaje->fecha_creacion_lenguaje = $value['fecha_creacion_lenguaje'];

                $objlenguajes['data'][] = $lenguaje;
            }
            echo json_encode($objlenguajes, JSON_UNESCAPED_UNICODE);
        }
    }
?>
