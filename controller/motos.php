<?php
    class Motos extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('motos/index');
        }

        function insert() {
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $css = $_POST['cc'];
            $precio = $_POST['precio'];
            $data = array('marca' => $marca, 'modelo' => $modelo, 'cc' => $css, 'precio' => $precio);

            require 'model/motosDAO.php';
            $this->loadModel('MotosDAO');
            $motosDAO = new MotosDAO();
            $motosDAO->insert($data);
        }

        function update() {
            $marca = $_POST['marcaMotosActualizar'];
            $modelo = $_POST['modeloMotosActualizar'];
            $cc = $_POST['ccMotosActualizar'];
            $precio = $_POST['precioMotosActualizar'];
            $idMoto = $_POST['idMotosActualizar'];
            $data = array('marca' => $marca, 'modelo' => $modelo, 'cc' => $cc, 'precio' => $precio, 'idMotos'=>$idMoto);

            require 'model/motosDAO.php';
            $this->loadModel('motosDAO');
            $motosDAO = new MotosDAO();
            $motosDAO->update($data);
        }

        function delete(){
            $idMotos = $_POST['idEliminarMotos'];

            require 'model/motosDAO.php';
            $this->loadModel('motosDAO');
            $motosDAO = new MotosDAO();
            $motosDAO->delete($idMotos);
        }

        function read() {
            require 'model/motosDAO.php';
            $this->loadModel('motosDAO');
            $motosDAO = new MotosDAO();
            $motosDAO = $motosDAO->read();
            echo $motosDAO;
        }
    }
