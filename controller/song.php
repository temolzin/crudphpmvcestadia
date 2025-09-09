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
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $year = $_POST['year'];
    $data = array(
        'title' => $title,
        'artist' => $artist,
        'album' => $album,
        'year' => $year
    );

    require 'model/songDAO.php';
    $this->loadModel('SongDAO');
    $songDAO = new SongDAO();
    $result = $songDAO->insert($data);
    echo $result ? 'ok' : 'error';
}

function update() {
    $idSong = $_POST['idSongUpdate'];
    $title = $_POST['titleUpdate'];
    $artist = $_POST['artistUpdate'];
    $album = $_POST['albumUpdate'];
    $year = $_POST['yearUpdate'];
    $data = array(
        'idSong' => $idSong,
        'title' => $title,
        'artist' => $artist,
        'album' => $album,
        'year' => $year
    );
    require 'model/songDAO.php';
    $this->loadModel('SongDAO');
    $songDAO = new SongDAO();
    $result = $songDAO->update($data);
    echo $result ? 'ok' : 'error';
}

function delete(){
    $idSong = $_POST['idSongDelete'];
    if (empty($idSong)) {
        echo 'error';
        exit;
    }
    require 'model/songDAO.php';
    $this->loadModel('SongDAO');
    $songDAO = new SongDAO();
    $result = $songDAO->delete($idSong);
    echo $result ? 'ok' : 'error';
}

        function read() {
            require 'model/songDAO.php';
            $this->loadModel('songDAO');
            $songDAO = new SongDAO();
            $songDAO->read();
        
        }
    }
