<<<<<<< HEAD
<?php
    class SongDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO song values (:song_id, :name_song, :artist_song, :duration_song, :record_song, :year_launch_song)');
        $query->execute([':song_id' => null, ':name_song' => $data['nameSong'], ':artist_song' => $data['artistSong'], ':duration_song' => $data['durationSong'], ':record_song' => $data['recordSong'], ':year_launch_song' => $data['year_launch_Song']]);
            echo 'ok';
        }

        public function update($data)
        {
         $query = $this->db->conectar()->prepare('UPDATE song SET name_song = :name_song, artist_song = :artist_song, duration_song = :duration_song, record_song = :record_song, year_launch_song = :year_launch_song WHERE id_song = :id_song');
         $query->execute([
            ':id_song' => $data['idSong'],
            ':name_song' => $data['nameSong'],
            ':artist_song' => $data['artistSong'],
            ':duration_song' => $data['durationSong'],
            ':record_song' => $data['recordSong'],
            ':year_launch_song' => $data['yearlaunchSong']
        ]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM song where id_song = :id_song');
            $query->execute([':id_song' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'songDTO.php';
            $query = "SELECT * FROM song";
            $objSongs = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $song = new SongDTO();
                $song->id_song = $value['id_song'];
                $song->name_song = $value['name_song'];
                $song->artist_song = $value['artist_song'];
                $song->duration_song = $value['duration_song'];
                $song->record_song = $value['record_song'];
                $song->year_launch_song = $value['year_launch_song'];
                $objSongs['data'][] = $song;
            }
            echo json_encode($objSongs, JSON_UNESCAPED_UNICODE);
        }
    }
?>

