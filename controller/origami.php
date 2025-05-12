<?php
    class origami extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('origami/index');
        }

        function insert() {
            $materialorigami = $_POST['materialorigami'];
            $precio = $_POST['precio'];
            $tamanio = $_POST['tamanio'];
            $pieza = $_POST['total_piezas'];
            $data = array('materialorigami' => $materialorigami, 'precio' => $precio, 'tamanio' => $tamanio, 'origami_total_piezas' => $pieza);

            require 'model/origamiDAO.php';
            $this->loadModel('origamiDAO');
            $origamiDAO = new origamiDAO();
            $origamiDAO->insert($data);
        }

        function update() {
            $material = $_POST['materialorigamiActualizar'];
            $precioorigami = $_POST['precioorigamiActualizar'];
            $tamanio = $_POST['tamanioorigamiActualizar'];
            $pieza = $_POST['totalpiezaorigamiActualizar'];
            $idorigami = $_POST['idorigamiActualizar'];
            $data = array('materialorigami' => $material, 'precio' => $precioorigami, 'tamanio' => $tamanio, 'total_piezas' => $pieza, 'idorigami'=>$idorigami);

            require 'model/origamiDAO.php';
            $this->loadModel('origamiDAO');
            $origamiDAO = new origamiDAO();
            $origamiDAO->update($data);
        }

        function delete(){
            $idorigami = $_POST['idEliminarorigami'];

            require 'model/origamiDAO.php';
            $this->loadModel('origamiDAO');
            $origamiDAO = new origamiDAO();
            $origamiDAO->delete($idorigami);
        }

        function read() {
            require 'model/origamiDAO.php';
            $this->loadModel('origamiDAO');
            $origamiDAO = new origamiDAO();
            $origamiDAO = $origamiDAO->read();
            echo $origamiDAO;
        }
    }