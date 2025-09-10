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
            $name = $_POST['title_videogame_update'];
            $gender = $_POST['gender_videogame_update'];
            $price = $_POST['price_videogame_update'];
            $date = $_POST['release_date_videogame_update'];
            $id = $_POST['id_videogame_update'];
            $data = array(
                'title_videogame_update' => $name,
                'gender_videogame_update' => $gender,
                'price_videogame_update' => $price,
                'release_date_videogame_update' => $date,
                'id_videogame_update' => $id
            );

            require 'model/videogameDAO.php';
            $this->loadModel('videogameDAO');
            $videogameDAO = new videogameDAO();
            $videogameDAO->update($data);
        }

        function delete(){
            $id = $_POST['id_videogame_delete'];

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
