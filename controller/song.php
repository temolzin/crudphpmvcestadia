<?php
    class Song extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        function index() {
            $this->view->render('song/index');
        }

        function insert() {
            $nameSong = $_POST['name_song'];
            $artistSong = $_POST['artist_song'];
            $durationSong = $_POST['duration_song'];
            $recordSong = $_POST['record_song'];
            $year_launch_Song = $_POST['year_launch_song'];
            $data = array('nameSong' => $nameSong, 'artistSong' => $artistSong, 'durationSong' => $durationSong, 'recordSong' => $recordSong, 'year_launch_Song' => $year_launch_Song);

            require 'model/SongDAO.php';
            $this->loadModel('SongDAO');
            $SongDAO = new SongDAO();
            $SongDAO->insert($data);
        }

        function update() {
            $nameSong = $_POST['nameSongUpdate'];
            $artistSong = $_POST['artistSongUpdate'];
            $durationSong = $_POST['durationSongUpdate'];
            $recordSong = $_POST['recordSongUpdate'];
            $yearlaunchSong = $_POST['yearlaunchSongUpdate'];
            $idSong = $_POST['idSongUpdate'];
                    $data = array(
                    'idSong' => $idSong,
                    'nameSong' => $nameSong,
                    'artistSong' => $artistSong,
                    'durationSong' => $durationSong,
                    'recordSong' => $recordSong,
                    'yearlaunchSong'  => $yearlaunchSong                            
                );

            require 'model/SongDAO.php';
            $this->loadModel('SongDAO');
            $SongDAO = new SongDAO();
            $SongDAO->update($data);
        }

        function delete(){
            $matricula = $_POST['idEliminarSong'];

            require 'model/SongDAO.php';
            $this->loadModel('SongDAO');
            $SongDAO = new SongDAO();
            $SongDAO->delete($matricula);
        }

        function read() {
            require 'model/SongDAO.php';
            $this->loadModel('SongDAO');
            $SongDAO = new SongDAO();
            $SongDAO = $SongDAO->read();
            echo $SongDAO;
        }
    }
