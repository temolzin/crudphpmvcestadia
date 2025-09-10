<?php
class AlbumDAO extends Model implements CRUD
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        try {
            $query = $this->db->conectar()->prepare(
                'INSERT INTO album (title, artist, album, year) VALUES (:title, :artist, :album, :year)'
            );
            $query->execute([
                ':title' => $data['title'],
                ':artist' => $data['artist'],
                ':album' => $data['album'],
                ':year' => $data['year']
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function update($data)
    {
        try {
            $query = $this->db->conectar()->prepare(
                'UPDATE album 
                 SET title = :title, artist = :artist, album = :album, year = :year 
                 WHERE id = :id'
            );
            $query->execute([
                ':id' => $data['idAlbum'],
                ':title' => $data['title'],
                ':artist' => $data['artist'],
                ':album' => $data['album'],
                ':year' => $data['year']
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $query = $this->db->conectar()->prepare('DELETE FROM album WHERE id = :id');
            $query->execute([':id' => $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function read()
    {
        $query = "SELECT * FROM album";
        $result = $this->db->consultar($query);

        if (!is_array($result)) {
            return [];
        }

        $albums = [];
        foreach ($result as $value) {
            $albums[] = [
                "id"     => $value['id'],
                "title"  => $value['title'],
                "artist" => $value['artist'],
                "album"  => $value['album'],
                "year"   => $value['year']
            ];
        }

        return $albums;
    }
}
