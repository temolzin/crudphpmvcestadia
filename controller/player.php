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
            $idPlayer = $_POST['idPlayerUpdate'];
            $firstName = $_POST['firstNamePlayerUpdate'];
            $lastName = $_POST['lastNamePlayerUpdate'];
            $age = $_POST['agePlayerUpdate'];
            $position = $_POST['positionPlayerUpdate'];
            $jerseyNumber = $_POST['jerseyNumberPlayerUpdate'];
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
            $matricula = $_POST['idDeletePlayer'];

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
