<?php

    class Pelicula extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('pelicula/index');
        }

        function insert() {
            $nombrePelicula = $_POST['nombrePelicula'];
            $genero = $_POST['genero'];
            $fechaLanzamiento = $_POST['fechaLanzamiento'];
            $descripcion = $_POST['descripcion'];
            $data = array('nombrePelicula' => $nombrePelicula, 'genero' => $genero, 'fechaLanzamiento' => $fechaLanzamiento, 'descripcion' => $descripcion);

            require 'model/peliculaDAO.php';
            $this->loadModel('PeliculaDAO');
            $peliculaDAO = new PeliculaDAO();
            $peliculaDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombrePeliculaActualizar'];
            $generoPelicula = $_POST['generoPeliculaActualizar'];
            $fecha = $_POST['fechaPeliculaActualizar'];
            $descripcionPelicula = $_POST['descripcionPelciulaActualizar'];
            $idPelicula = $_POST['idPeliculaActualizar'];
            $data = array('nombrePelicula' => $nombre, 'genero' => $generoPelicula, 'fechaLanzamiento' => $fecha, 'descripcion' => $descripcionPelicula, 'idPelicula'=>$idPelicula);

            require 'model/peliculaDAO.php';
            $this->loadModel('peliculaDAO');
            $peliculaDAO = new PeliculaDAO();
            $peliculaDAO->update($data);
        }

        function delete(){
            $idPelicula = $_POST['idEliminarPelicula'];

            require 'model/peliculaDAO.php';
            $this->loadModel('peliculaDAO');
            $peliculaDAO = new PeliculaDAO();
            $peliculaDAO->delete($idPelicula);
        }

        function read() {
            require 'model/peliculaDAO.php';
            $this->loadModel('peliculaDAO');
            $peliculaDAO = new PeliculaDAO();
            $peliculaDAO = $peliculaDAO->read();
            echo $peliculaDAO;
        }
    }
