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
                'UPDATE album SET title = :title, artist = :artist, album = :album, year = :year WHERE id = :id'
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
        require_once 'albumDTO.php'; // Cambiado de songDTO a albumDTO
        $query = "SELECT * FROM album";
        $objAlbums = array();
        $result = $this->db->consultar($query);
        if (!is_array($result)) {
            $result = [];
        }
        foreach ($result as $key => $value) {
            $album = new AlbumDTO(); // Cambiado de SongDTO a AlbumDTO
            $album->id = $value['id'];
            $album->title = $value['title'];
            $album->artist = $value['artist'];
            $album->album = $value['album'];
            $album->year = $value['year'];
            $objAlbums['data'][] = $album;
        }
        echo json_encode($objAlbums, JSON_UNESCAPED_UNICODE);
    }
}
?>
