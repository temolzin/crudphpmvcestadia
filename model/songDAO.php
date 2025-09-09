<?php
class SongDAO extends Model implements CRUD
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
                'UPDATE album SET title = :title, artist = :artist, album = :album, year = :year WHERE id = :id'
            );
            $query->execute([
                ':id' => $data['idSong'],
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
        require_once 'songDTO.php';
        $query = "SELECT * FROM album";
        $objSongs = array();
        $result = $this->db->consultar($query);
        if (!is_array($result)) {
            $result = [];
        }
        foreach ($result as $key => $value) {
            $song = new SongDTO();
            $song->id = $value['id'];
            $song->title = $value['title'];
            $song->artist = $value['artist'];
            $song->album = $value['album'];
            $song->year = $value['year'];
            $objSongs['data'][] = $song;
        }
        echo json_encode($objSongs, JSON_UNESCAPED_UNICODE);
    }
}
?>
