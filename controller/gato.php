<?php
    class gato extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('gato/index');
        }

        function insert() {
            $nombregato = $_POST['nombregato'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $color = $_POST['color'];
            $data = array('nombregato' => $nombregato, 'peso' => $peso, 'altura' => $altura, 'color' => $color);

            require 'model/gatoDAO.php';
            $this->loadModel('gatoDAO');
            $gatoDAO = new gatoDAO();
            $gatoDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombregatoActualizar'];
            $pesogato = $_POST['pesogatoActualizar'];
            $altura = $_POST['alturagatoActualizar'];
            $colorgato = $_POST['colorgatoActualizar'];
            $idgato = $_POST['idgatoActualizar'];
            $data = array('nombregato' => $nombre, 'peso' => $pesogato, 'altura' => $altura, 'color' => $colorgato, 'idgato'=>$idgato);

            require 'model/gatoDAO.php';
            $this->loadModel('gatoDAO');
            $gatoDAO = new gatoDAO();
            $gatoDAO->update($data);
        }

        function delete(){
            $idgato = $_POST['idEliminargato'];

            require 'model/gatoDAO.php';
            $this->loadModel('gatoDAO');
            $gatoDAO = new gatoDAO();
            $gatoDAO->delete($idgato);
        }

        function read() {
            require 'model/gatoDAO.php';
            $this->loadModel('gatoDAO');
            $gatoDAO = new gatoDAO();
            $gatoDAO = $gatoDAO->read();
            echo $gatoDAO;
        }
    }
