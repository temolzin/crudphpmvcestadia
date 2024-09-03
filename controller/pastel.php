<?php
    class Pastel extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('pastel/index');
        }

        function insert() {
            $tipo = $_POST['tipo'];
            $precio= $_POST['precio'];
            $sabor = $_POST['sabor'];
            $capas = $_POST['capas'];
            $data = array('tipo' => $tipo, 'precio' => $precio, 'sabor' => $sabor, 'capas' => $capas);

            require 'model/pastelDAO.php';
            $this->loadModel('PastelDAO');
            $pastelDAO = new PastelDAO();
            $pastelDAO->insert($data);
        }

        function update() {
            $tipo = $_POST['tipoPastelActualizar'];
            $precio = $_POST['precioPastelActualizar'];
            $sabor = $_POST['saborPastelActualizar'];
            $capas = $_POST['capasPastelActualizar'];
            $idPastel = $_POST['idPastelActualizar'];
            $data = array('tipo' => $tipo, 'precio' => $precio, 'sabor' => $sabor, 'capas' => $capas, 'idPastel'=>$idPastel);

            require 'model/pastelDAO.php';
            $this->loadModel('pastelDAO');
            $pastelDAO = new PastelDAO();
            $pastelDAO->update($data);
        }

        function delete(){
            $idPastel = $_POST['idEliminarPastel'];

            require 'model/pastelDAO.php';
            $this->loadModel('pastelDAO');
            $pastelDAO = new PastelDAO();
            $pastelDAO->delete($idPastel);
        }

        function read() {
            require 'model/pastelDAO.php';
            $this->loadModel('pastelDAO');
            $pastelDAO = new PastelDAO();
            $pastelDAO = $pastelDAO->read();
            echo $pastelDAO;
        }
    }
