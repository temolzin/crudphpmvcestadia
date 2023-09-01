<?php
    class LenguajeProgramacion extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('LenguajeProgramacion/index');
        }

        function insert() {
            $nombreLenguajeProgramacion = $_POST['nombreLenguajeProgramacion'];
            $paradigmaLenguajeProgramacion = $_POST['paradigmaLenguajeProgramacion'];
            $creadorLenguajeProgramacion = $_POST['creadorLenguajeProgramacion'];
            $fechaCreacionLenguajeProgramacion = $_POST['fechaCreacionLenguajeProgramacion'];
            $data = array('nombreLenguajeProgramacion' => $nombreLenguajeProgramacion, 'paradigmaLenguajeProgramacion' => $paradigmaLenguajeProgramacion, 'creadorLenguajeProgramacion' => $creadorLenguajeProgramacion, 'fechaCreacionLenguajeProgramacion' => $fechaCreacionLenguajeProgramacion);

            require 'model/LenguajeProgramacionDAO.php';
            $this->loadModel('LenguajeProgramacionDAO');
            $LenguajeProgramacionDAO = new LenguajeProgramacionDAO();
            $LenguajeProgramacionDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombreLenguajeProgramacionActualizar'];
            $paradigma = $_POST['paradigmaLenguajeProgramacionActualizar'];
            $creador = $_POST['creadorLenguajeProgramacionActualizar'];
            $fechaCreacion = $_POST['fechaCreacionLenguajeProgramacionActualizar'];

            $matricula = $_POST['idLenguajeProgramacionActualizar'];
            $data = array('nombreLenguajeProgramacion' => $nombre, 'paradigmaLenguajeProgramacion' => $paradigma, 'creadorLenguajeProgramacion' => $creador, 'fechaCreacionLenguajeProgramacion' => $fechaCreacion, 'idLenguajeProgramacion'=>$matricula);

            require 'model/LenguajeProgramacionDAO.php';
            $this->loadModel('LenguajeProgramacionDAO');
            $LenguajeProgramacionDAO = new LenguajeProgramacionDAO();
            $LenguajeProgramacionDAO->update($data);
        }

        function delete(){
            $matricula = $_POST['idEliminarLenguajeProgramacion'];

            require 'model/LenguajeProgramacionDAO.php';
            $this->loadModel('LenguajeProgramacionDAO');
            $LenguajeProgramacionDAO = new LenguajeProgramacionDAO();
            $LenguajeProgramacionDAO->delete($matricula);
        }

        function read() {
            require 'model/LenguajeProgramacionDAO.php';
            $this->loadModel('LenguajeProgramacionDAO');
            $LenguajeProgramacionDAO = new LenguajeProgramacionDAO();
            $LenguajeProgramacionDAO = $LenguajeProgramacionDAO->read();
            echo $LenguajeProgramacionDAO;
        }
    }
