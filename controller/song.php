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
            $nombreSong = $_POST['nombreSong'];
            $artistaSong = $_POST['artistaSong'];
            $duracionSong = $_POST['duracionSong'];
            $disqueraSong = $_POST['disqueraSong'];
            $añolanzamientoSong = $_POST['añolanzamientoSong'];
            $data = array('nombreSong' => $nombreSong, 'artistaSong' => $artistaSong, 'duracionSong' => $duracionSong, 'disqueraSong' => $disqueraSong, 'añolanzamientoSong' => $añolanzamientoSong);

            require 'model/SongDAO.php';
            $this->loadModel('SongDAO');
            $SongDAO = new SongDAO();
            $SongDAO->insert($data);
        }

        function update() {
            $nombreSong = $_POST['nombreSongActualizar'];
            $artistaSong = $_POST['artistaSongActualizar'];
            $duracionSong = $_POST['duracionSongActualizar'];
            $disqueraSong = $_POST['disqueraSongActualizar'];
            $añolanzamientoSong = $_POST['añolanzamientoSongActualizar'];
            $idSong = $_POST['idSongActualizar'];
                    $data = array(
                    'idSong' => $idSong,
                    'nombreSong' => $nombreSong,
                    'artistaSong' => $artistaSong,
                    'duracionSong' => $duracionSong,
                    'disqueraSong' => $disqueraSong,
                    'añolanzamientoSong'  => $añolanzamientoSong                            
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
