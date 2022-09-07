<?php
    class LibroDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO libro values (:id_libro, :nombre_libro, :precio_libro, :autor_libro)');
            $query->execute([':id_libro' => null, ':nombre_libro' => $data['nombreLibro'],':precio_libro' => $data['precioLibro'],':autor_libro' => $data['autorLibro']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE libro SET  nombre_libro = :nombre_libro, apellidos_libro = :apellidos_libro WHERE id_libro = :id_libro');
            $query->execute([':id_libro' => $data['idLibro'],':nombre_libro' => $data['nombreLibro'],':precio_libro' => $data['precioLibro'],':autor_libro' => $data['autorLibro']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM libro where id_libro = :id_libro');
            $query->execute([':id_libro' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'libroDTO.php';
            $query = "SELECT * FROM libro";
            $objLibros = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $libro = new LibroDTO();
                $libro->id_libro = $value['id_libro'];
                $libro->nombre_libro = $value['nombre_libro'];
                $libro->precio_libro = $value['precio_libro'];
                $libro->autor_libro = $value['autor_libro'];
                $objLibros['data'][] = $libro;
            }
            echo json_encode($objLibros, JSON_UNESCAPED_UNICODE);
        }
    }
?>
