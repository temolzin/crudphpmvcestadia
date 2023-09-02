<?php
    class Deporte extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('deporte/index');
        }

        function insert() {
            $nombreDeporte = $_POST['nombreDeporte'];
            $descripcionDeporte = $_POST['descripcionDeporte'];
            $numParticipantesDeporte = $_POST['numParticipantesDeporte'];
            $data = array('nombreDeporte' => $nombreDeporte, 'descripcionDeporte' => $descripcionDeporte, 'numParticipantesDeporte' => $numParticipantesDeporte);

            require 'model/deporteDAO.php';
            $this->loadModel('DeporteDAO');
            $deporteDAO = new DeporteDAO();
            $deporteDAO->insert($data);
        }

        function update() {
            $nombreDeporte = $_POST['nombreDeporteActualizar'];
            $descripcionDeporte = $_POST['descripcionDeporteActualizar'];
            $numParticipantesDeporte = $_POST['numParticipantesDeporteActualizar'];
            $identificadorDeporte = $_POST['idDeporteActualizar'];
            $data = array('nombreDeporte' => $nombreDeporte, 'descripcionDeporte' => $descripcionDeporte, 'numParticipantesDeporte' => $numParticipantesDeporte, 'idDeporte'=>$identificadorDeporte);

            require 'model/deporteDAO.php';
            $this->loadModel('deporteDAO');
            $deporteDAO = new deporteDAO();
            $deporteDAO->update($data);
        }

        function delete(){
            $identificador = $_POST['idEliminarDeporte'];

            require 'model/deporteDAO.php';
            $this->loadModel('deporteDAO');
            $deporteDAO = new DeporteDAO();
            $deporteDAO->delete($identificador);
        }

        function read() {
            require 'model/deporteDAO.php';
            $this->loadModel('deporteDAO');
            $deporteDAO = new DeporteDAO();
            $deporteDAO = $deporteDAO->read();
            echo $deporteDAO;
        }
    }
