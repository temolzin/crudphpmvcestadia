<?php
    class VideogameDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO videogame values (:id_videogame, :title_videogame, :gender_videogame, :price_videogame, :release_date_videogame)');
            $query->execute([
                ':id_videogame' => null,
                ':title_videogame' => $data['title_videogame'],
                ':gender_videogame' => $data['gender_videogame'],
                ':price_videogame' => $data['price_videogame'],
                ':release_date_videogame' => $data['release_date_videogame']
            ]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE videogame SET title_videogame = :title_videogameActualizar, gender_videogame = :gender_videogameActualizar, price_videogame = :price_videogameActualizar, release_date_videogame = :release_date_videogameActualizar WHERE id_videogame = :idVideogameActualizar');
            $query->execute([
                ':idVideogameActualizar' => $data['idVideogameActualizar'],
                ':title_videogameActualizar' => $data['title_videogameActualizar'],
                ':gender_videogameActualizar' => $data['gender_videogameActualizar'],
                ':price_videogameActualizar' => $data['price_videogameActualizar'],
                ':release_date_videogameActualizar' => $data['release_date_videogameActualizar']
            ]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM videogame where id_videogame = :idVideogameEliminar');
            $query->execute([':idVideogameEliminar' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'videogameDTO.php';
            $query = "SELECT * FROM videogame";
            $objVideogames = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $videogame = new videogameDTO();
                $videogame->id_videogame = $value['id_videogame'];
                $videogame->title_videogame = $value['title_videogame'];
                $videogame->gender_videogame = $value['gender_videogame'];
                $videogame->price_videogame = $value['price_videogame'];
                $videogame->release_date_videogame = $value['release_date_videogame'];
                $objVideogames['data'][] = $videogame;
            }
            echo json_encode($objVideogames, JSON_UNESCAPED_UNICODE);
        }
    }
?>
