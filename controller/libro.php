<?php
    class Libro extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('libro/index');
        }

        function insert() {
            $nombreLibro = $_POST['nombreLibro'];
            $precioLibro = $_POST['precioLibro'];
            $autorLibro = $_POST['autorLibro'];
            $data = array('nombreLibro' => $nombreLibro, 'precioLibro' => $precioLibro, 'autorLibro' => $autorLibro);

            require 'model/libroDAO.php';
            $this->loadModel('LibroDAO');
            $libroDAO = new LibroDAO();
            $libroDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombreLibroActualizar'];
            $precio = $_POST['precioLibroActualizar'];
            $autor = $_POST['precioLibroActualizar'];
            $id = $_POST['idLibroActualizar'];
            $data = array('nombreLibro' => $nombre, 'precioLibro' => $precio,'autorLibro' => $autor, 'idLibro'=>$id);

            require 'model/libroDAO.php';
            $this->loadModel('libroDAO');
            $libroDAO = new libroDAO();
            $libroDAO->update($data);
        }

        function delete(){
            $id = $_POST['idEliminarLibro'];

            require 'model/libroDAO.php';
            $this->loadModel('libroDAO');
            $libroDAO = new LibroDAO();
            $libroDAO->delete($id);
        }

        function read() {
            require 'model/libroDAO.php';
            $this->loadModel('libroDAO');
            $libroDAO = new LibroDAO();
            $libroDAO = $libroDAO->read();
            echo $libroDAO;
        }
    }
