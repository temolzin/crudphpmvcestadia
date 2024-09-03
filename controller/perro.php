<?php
    class Perro extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('perro/index');
        }

        function insert() {
            $nombrePerro = $_POST['nombrePerro'];
            $razaPerro = $_POST['razaPerro'];
            $edadPerro = $_POST['edadPerro'];
            $sexoPerro = $_POST['sexoPerro'];
            $data = array('nombrePerro' => $nombrePerro, 'razaPerro' => $razaPerro, 'edadPerro' => $edadPerro, 'sexoPerro' => $sexoPerro);

            require 'model/perroDAO.php';
            $this->loadModel('PerroDAO');
            $perroDAO = new PerroDAO();
            $perroDAO->insert($data);
        }

        function update() {
            $nombrePerro = $_POST['nombrePerroActualizar'];
            $razaPerro = $_POST['razaPerroActualizar'];
            $edadPerro = $_POST['edadPerroActualizar'];
            $sexoPerro = $_POST['sexoPerroActualizar'];
            $idPerro = $_POST['idPerroActualizar'];
            $data = array('nombrePerro' => $nombrePerro, 'razaPerro' => $razaPerro, 'edadPerro' => $edadPerro, 'sexoPerro' => $sexoPerro, 'idPerro'=>$idPerro);

            require 'model/perroDAO.php';
            $this->loadModel('perroDAO');
            $perroDAO = new PerroDAO();
            $perroDAO->update($data);
        }

        function delete(){
            $idPerro = $_POST['idEliminarPerro'];

            require 'model/perroDAO.php';
            $this->loadModel('perroDAO');
            $perroDAO = new PerroDAO();
            $perroDAO->delete($idPerro);
        }

        function read() {
            require 'model/perroDAO.php';
            $this->loadModel('perroDAO');
            $perroDAO = new PerroDAO();
            $perroDAO = $perroDAO->read();
            echo $perroDAO;
        }
    }
