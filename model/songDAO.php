<?php
    class SongDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO song values (:song_id, :nombre_song, :artista_song, :duracion_song, :disquera_song, :anio_lanzamiento_song)');
        $query->execute([':song_id' => null, ':nombre_song' => $data['nombreSong'], ':artista_song' => $data['artistaSong'], ':duracion_song' => $data['duracionSong'], ':disquera_song' => $data['disqueraSong'], ':anio_lanzamiento_song' => $data['añolanzamientoSong']]);
            echo 'ok';
        }

        public function update($data)
        {
         $query = $this->db->conectar()->prepare('UPDATE song SET nombre_song = :nombre_song, artista_song = :artista_song, duracion_song = :duracion_song, disquera_song = :disquera_song, anio_lanzamiento_song = :anio_lanzamiento_song WHERE id_song = :id_song');
         $query->execute([
            ':id_song' => $data['idSong'],
            ':nombre_song' => $data['nombreSong'],
            ':artista_song' => $data['artistaSong'],
            ':duracion_song' => $data['duracionSong'],
            ':disquera_song' => $data['disqueraSong'],
            ':anio_lanzamiento_song' => $data['añolanzamientoSong']
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
                $song->nombre_song = $value['nombre_song'];
                $song->artista_song = $value['artista_song'];
                $song->duracion_song = $value['duracion_song'];
                $song->disquera_song = $value['disquera_song'];
                $song->anio_lanzamiento_song = $value['anio_lanzamiento_song'];
                $objSongs['data'][] = $song;
            }
            echo json_encode($objSongs, JSON_UNESCAPED_UNICODE);
        }
    }
?>
