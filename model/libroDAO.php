<?php
    class libroDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO libro values (:libro_id, :libro_titulo, :libro_autor, :libro_genero, :libro_editorial)');
            $query->execute([':libro_id' => null, ':libro_titulo' => $data['titulolibro'], ':libro_autor' => $data['autor'], ':libro_genero' => $data['genero'], ':libro_editorial' => $data['editorial']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE libro SET  libro_titulo = :libro_titulo, libro_autor = :libro_autor, libro_genero = :libro_genero, libro_editorial = :libro_editorial WHERE libro_id = :libro_id');
            $query->execute([':libro_id' => $data['idlibro'], ':libro_titulo' => $data['titulolibro'], ':libro_autor' => $data['autor'], ':libro_genero' => $data['genero'], ':libro_editorial' => $data['editorial']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM libro where libro_id = :libro_id');
            $query->execute([':libro_id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'libroDTO.php';
            $query = "SELECT * FROM libro";
            $objlibros = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $libro = new libroDTO();
                $libro->libro_id = $value['libro_id'];
                $libro->libro_titulo = $value['libro_titulo'];
                $libro->libro_autor = $value['libro_autor'];
                $libro->libro_genero = $value['libro_genero'];
                $libro->libro_editorial = $value['libro_editorial'];
                $objlibros['data'][] = $libro;
            }
            echo json_encode($objlibros, JSON_UNESCAPED_UNICODE);
        }
    }
?>