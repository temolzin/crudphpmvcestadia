<?php
    class Videogame extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index(){
            $this->view->render('videogame/index');
        }

        function insert() {
            $title_videogame = $_POST['title_videogame'];
            $gender_videogame = $_POST['gender_videogame'];
            $price_videogame = $_POST['price_videogame'];
            $release_date_videogame = $_POST['release_date_videogame'];
            $data = array('title_videogame' => $title_videogame, 'gender_videogame' => $gender_videogame, 'price_videogame' => $price_videogame, 'release_date_videogame' => $release_date_videogame);

            require 'model/videogameDAO.php';
            $this->loadModel('videogameDAO');
            $videogameDAO = new videogameDAO();
            $videogameDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['title_videogameActualizar'];
            $cantidad = $_POST['gender_videogameActualizar'];
            $precio = $_POST['price_videogameActualizar'];
            $date = $_POST['release_date_videogameActualizar'];
            $id = $_POST['idVideogameActualizar'];
            $data = array(
                'title_videogameActualizar' => $nombre,
                'gender_videogameActualizar' => $cantidad,
                'price_videogameActualizar' => $precio,
                'release_date_videogameActualizar' => $date,
                'idVideogameActualizar' => $id
            );

            require 'model/videogameDAO.php';
            $this->loadModel('videogameDAO');
            $videogameDAO = new videogameDAO();
            $videogameDAO->update($data);
        }

        function delete(){
            $id = $_POST['idEliminarVideogame'];

            require 'model/videogameDAO.php';
            $this->loadModel('videogameDAO');
            $videogameDAO = new videogameDAO();
            $videogameDAO->delete($id);
        }

        function read() {
            require 'model/videogameDAO.php';
            $this->loadModel('videogameDAO');
            $videogameDAO = new videogameDAO();
            $videogameDAO = $videogameDAO->read();
            echo $videogameDAO;
        }
    }
