<?php
    class libro extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('libro/index');
        }

        function insert() {
            $titulolibro = $_POST['titulolibro'];
            $autor = $_POST['autor'];
            $genero = $_POST['genero'];
            $editorial = $_POST['editorial'];
            $data = array('titulolibro' => $titulolibro, 'autor' => $autor, 'genero' => $genero, 'editorial' => $editorial);

            require 'model/libroDAO.php';
            $this->loadModel('libroDAO');
            $libroDAO = new libroDAO();
            $libroDAO->insert($data);
        }

        function update() {
            $titulo = $_POST['titulolibroActualizar'];
            $autorlibro = $_POST['autorlibroActualizar'];
            $genero = $_POST['generolibroActualizar'];
            $editoriallibro = $_POST['editoriallibroActualizar'];
            $idlibro = $_POST['idlibroActualizar'];
            $data = array('titulolibro' => $titulo, 'autor' => $autorlibro, 'genero' => $genero, 'editorial' => $editoriallibro, 'idlibro'=>$idlibro);

            require 'model/libroDAO.php';
            $this->loadModel('libroDAO');
            $libroDAO = new libroDAO();
            $libroDAO->update($data);
        }

        function delete(){
            $idlibro = $_POST['idEliminarlibro'];

            require 'model/libroDAO.php';
            $this->loadModel('libroDAO');
            $libroDAO = new libroDAO();
            $libroDAO->delete($idlibro);
        }

        function read() {
            require 'model/libroDAO.php';
            $this->loadModel('libroDAO');
            $libroDAO = new libroDAO();
            $libroDAO = $libroDAO->read();
            echo $libroDAO;
        }
    }