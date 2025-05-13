<?php
    class celular extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('celular/index');
        }

        function insert() {
            $materialcelular = $_POST['materialcelular'];
            $precio = $_POST['precio'];
            $altura = $_POST['altura'];
            $anchura = $_POST['anchura'];
            $data = array('materialcelular' => $materialcelular, 'precio' => $precio, 'altura' => $altura, 'anchura' => $anchura);

            require 'model/celularDAO.php';
            $this->loadModel('celularDAO');
            $celularDAO = new celularDAO();
            $celularDAO->insert($data);
        }

        function update() {
            $material = $_POST['materialcelularActualizar'];
            $preciocelular = $_POST['preciocelularActualizar'];
            $altura = $_POST['alturacelularActualizar'];
            $anchuracelular = $_POST['anchuracelularActualizar'];
            $idcelular = $_POST['idcelularActualizar'];
            $data = array('materialcelular' => $material, 'precio' => $preciocelular, 'altura' => $altura, 'anchura' => $anchuracelular, 'idcelular'=>$idcelular);

            require 'model/celularDAO.php';
            $this->loadModel('celularDAO');
            $celularDAO = new celularDAO();
            $celularDAO->update($data);
        }

        function delete(){
            $idcelular = $_POST['idEliminarcelular'];

            require 'model/celularDAO.php';
            $this->loadModel('celularDAO');
            $celularDAO = new celularDAO();
            $celularDAO->delete($idcelular);
        }

        function read() {
            require 'model/celularDAO.php';
            $this->loadModel('celularDAO');
            $celularDAO = new celularDAO();
            $celularDAO = $celularDAO->read();
            echo $celularDAO;
        }
    }
