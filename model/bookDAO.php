<?php
    class BookDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO book values (:id, :name)');
            $query->execute([':id' => null, ':name' => $data['name']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE book SET  name = :name WHERE id = :id');
            $query->execute([':id' => $data['id'],':name' => $data['name']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM book where id = :id');
            $query->execute([':id' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'bookDTO.php';
            $query = "SELECT * FROM book";
            $objBooks = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $book = new BookDTO();
                $book->id = $value['id'];
                $book->name = $value['name'];
                $objBooks['data'][] = $book;
            }
            echo json_encode($objBooks, JSON_UNESCAPED_UNICODE);
        }
    }
?>
