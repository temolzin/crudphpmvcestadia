<?php
    class Player extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('player/index');
        }

        function insert() {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $age = $_POST['age'];
            $position = $_POST['position'];
            $jerseyNumber = $_POST['jerseyNumber'];
            $data = array(
                'firstName' => $firstName,
                'lastName' => $lastName,
                'age' => $age,
                'position' => $position,
                'jerseyNumber' => $jerseyNumber
            );

            require 'model/playerDAO.php';
            $this->loadModel('PlayerDAO');
            $playerDAO = new PlayerDAO();
            $playerDAO->insert($data);
        }

        function update() {
            $idPlayer = $_POST['idPlayerActualizar'];
            $firstName = $_POST['nombrePlayerActualizar'];
            $lastName = $_POST['apellidosPlayerActualizar'];
            $age = $_POST['edadPlayerActualizar'];
            $position = $_POST['posicionPlayerActualizar'];
            $jerseyNumber = $_POST['numeroCamisetaPlayerActualizar'];
            $data = array(
                'idPlayer' => $idPlayer,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'age' => $age,
                'position' => $position,
                'jerseyNumber' => $jerseyNumber
            );
            require 'model/playerDAO.php';
            $this->loadModel('playerDAO');
            $playerDAO = new playerDAO();
            $playerDAO->update($data);
        }

        function delete(){
            $matricula = $_POST['idEliminarPlayer'];

            require 'model/playerDAO.php';
            $this->loadModel('playerDAO');
            $playerDAO = new PlayerDAO();
            $playerDAO->delete($matricula);
        }

        function read() {
            require 'model/playerDAO.php';
            $this->loadModel('playerDAO');
            $playerDAO = new PlayerDAO();
            $playerDAO = $playerDAO->read();
            echo $playerDAO;
        }
    }
