<?php
    class puerta extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('puerta/index');
        }

        function insert() {
            $materialpuerta = $_POST['materialpuerta'];
            $precio = $_POST['precio'];
            $altura = $_POST['altura'];
            $anchura = $_POST['anchura'];
            $data = array('materialpuerta' => $materialpuerta, 'precio' => $precio, 'altura' => $altura, 'anchura' => $anchura);

            require 'model/puertaDAO.php';
            $this->loadModel('puertaDAO');
            $puertaDAO = new puertaDAO();
            $puertaDAO->insert($data);
        }

        function update() {
            $material = $_POST['materialpuertaActualizar'];
            $preciopuerta = $_POST['preciopuertaActualizar'];
            $altura = $_POST['alturapuertaActualizar'];
            $anchurapuerta = $_POST['anchurapuertaActualizar'];
            $idpuerta = $_POST['idpuertaActualizar'];
            $data = array('materialpuerta' => $material, 'precio' => $preciopuerta, 'altura' => $altura, 'anchura' => $anchurapuerta, 'idpuerta'=>$idpuerta);

            require 'model/puertaDAO.php';
            $this->loadModel('puertaDAO');
            $puertaDAO = new puertaDAO();
            $puertaDAO->update($data);
        }

        function delete(){
            $idpuerta = $_POST['idEliminarpuerta'];

            require 'model/puertaDAO.php';
            $this->loadModel('puertaDAO');
            $puertaDAO = new puertaDAO();
            $puertaDAO->delete($idpuerta);
        }

        function read() {
            require 'model/puertaDAO.php';
            $this->loadModel('puertaDAO');
            $puertaDAO = new puertaDAO();
            $puertaDAO = $puertaDAO->read();
            echo $puertaDAO;
        }
    }
