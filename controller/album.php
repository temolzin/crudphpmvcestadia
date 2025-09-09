<?php
class Album extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index() {
        $this->view->render('album/index');
    }

    function insert() {
        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $albumName = $_POST['album'];
        $year = $_POST['year'];
        $data = array(
            'title' => $title,
            'artist' => $artist,
            'album' => $albumName,
            'year' => $year
        );

        require 'model/albumDAO.php';
        $this->loadModel('AlbumDAO');
        $albumDAO = new AlbumDAO();
        $result = $albumDAO->insert($data);
        echo $result ? 'ok' : 'error';
    }

    function update() {
        $idAlbum = $_POST['idAlbumUpdate'];
        $title = $_POST['titleUpdate'];
        $artist = $_POST['artistUpdate'];
        $albumName = $_POST['albumUpdate'];
        $year = $_POST['yearUpdate'];
        $data = array(
            'idAlbum' => $idAlbum,
            'title' => $title,
            'artist' => $artist,
            'album' => $albumName,
            'year' => $year
        );
        require 'model/albumDAO.php';
        $this->loadModel('AlbumDAO');
        $albumDAO = new AlbumDAO();
        $result = $albumDAO->update($data);
        echo $result ? 'ok' : 'error';
    }

    function delete(){
        $idAlbum = $_POST['idAlbumDelete'];
        if (empty($idAlbum)) {
            echo 'error';
            exit;
        }
        require 'model/albumDAO.php';
        $this->loadModel('AlbumDAO');
        $albumDAO = new AlbumDAO();
        $result = $albumDAO->delete($idAlbum);
        echo $result ? 'ok' : 'error';
    }

    function read() {
        require 'model/albumDAO.php';
        $this->loadModel('AlbumDAO');
        $albumDAO = new AlbumDAO();
        $albumDAO->read();
    }
}
