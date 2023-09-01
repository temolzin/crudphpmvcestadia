<?php
    class PeliculaDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO pelicula values (:id_pelicula, :nombre_pelicula, :genero, :fecha_lanzamiento, :descripcion)');
            $query->execute([':id_pelicula' => null, ':nombre_pelicula' => $data['nombrePelicula'], ':genero' => $data['genero'], ':fecha_lanzamiento' => $data['fechaLanzamiento'], ':descripcion' => $data['descripcion']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE pelicula SET  nombre_pelicula = :nombre_pelicula, genero = :genero, fecha_lanzamiento = :fecha_lanzamiento, descripcion = :descripcion WHERE id_pelicula = :id_pelicula');
            $query->execute([':id_pelicula' => $data['idPelicula'], ':nombre_pelicula' => $data['nombrePelicula'], ':genero' => $data['genero'], ':fecha_lanzamiento' => $data['fechaLanzamiento'], ':descripcion' => $data['descripcion']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM pelicula where id_pelicula = :id_pelicula');
            $query->execute([':id_pelicula' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'peliculaDTO.php';
            $query = "SELECT * FROM pelicula";
            $objPeliculas = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $pelicula = new PeliculaDTO();
                $pelicula->id_pelicula = $value['id_pelicula'];
                $pelicula->nombre_pelicula = $value['nombre_pelicula'];
                $pelicula->genero = $value['genero'];
                $pelicula->fecha_lanzamiento = $value['fecha_lanzamiento'];
                $pelicula->descripcion = $value['descripcion'];
                $objPeliculas['data'][] = $pelicula;
            }
            echo json_encode($objPeliculas, JSON_UNESCAPED_UNICODE);
        }
    }
?>
