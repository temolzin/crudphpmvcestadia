<?php
    class Lenguaje extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('lenguaje/index');
        }

        function insert() {
            $nombreLenguaje = $_POST['nombreLenguaje'];
            $paradigmaLenguaje = $_POST['paradigmaLenguaje'];
            $creadorLenguaje = $_POST['creadorLenguaje'];
            $fechaCreacionLenguaje = $_POST['fechaCreacionLenguaje'];
            $data = array('nombreLenguaje' => $nombreLenguaje, 'paradigmaLenguaje' => $paradigmaLenguaje, 'creadorLenguaje' => $creadorLenguaje, 'fechaCreacionLenguaje' => $fechaCreacionLenguaje);

            require 'model/lenguajeDAO.php';
            $this->loadModel('lenguajeDAO');
            $lenguajeDAO = new lenguajeDAO();
            $lenguajeDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombreLenguajeActualizar'];
            $paradigma = $_POST['paradigmaLenguajeActualizar'];
            $creador = $_POST['creadorLenguajeActualizar'];
            $fechaCreacion = $_POST['fechaCreacionActualizar'];

            $matricula = $_POST['idLenguajeActualizar'];
            $data = array('nombreLenguaje' => $nombre, 'paradigmaLenguaje' => $paradigma, 'creadorLenguaje' => $creador, 'fechaCreacionLenguaje' => $fechaCreacion, 'idLenguaje'=>$matricula);

            require 'model/lenguajeDAO.php';
            $this->loadModel('lenguajeDAO');
            $lenguajeDAO = new lenguajeDAO();
            $lenguajeDAO->update($data);
        }

        function delete(){
            $matricula = $_POST['idEliminarLenguaje'];

            require 'model/lenguajeDAO.php';
            $this->loadModel('lenguajeDAO');
            $lenguajeDAO = new lenguajeDAO();
            $lenguajeDAO->delete($matricula);
        }

        function read() {
            require 'model/lenguajeDAO.php';
            $this->loadModel('lenguajeDAO');
            $lenguajeDAO = new lenguajeDAO();
            $lenguajeDAO = $lenguajeDAO->read();
            echo $lenguajeDAO;
        }
    }
