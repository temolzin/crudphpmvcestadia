<?php
    class Dulce extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index(){
            $this->view->render('dulce/index');
        }

        function insert() {
            $nombreDulce = $_POST['nombreDulce'];
            $cantidadDulce = $_POST['cantidadDulce'];
            $precioDulce = $_POST['precioDulce'];
            $saborDulce = $_POST['saborDulce'];
            $data = array('nombreDulce' => $nombreDulce, 'cantidadDulce' => $cantidadDulce, 'precioDulce' => $precioDulce, 'saborDulce' => $saborDulce);

            require 'model/dulceDAO.php';
            $this->loadModel('dulceDAO');
            $dulceDAO = new dulceDAO();
            $dulceDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombreDulceActualizar'];
            $cantidad = $_POST['cantidadDulceActualizar'];
            $precio = $_POST['precioDulceActualizar'];
            $sabor = $_POST['saborDulceActualizar'];
            $id = $_POST['idDulceActualizar'];
            $data = array(
                'nombreDulceActualizar' => $nombre,
                'cantidadDulceActualizar' => $cantidad,
                'precioDulceActualizar' => $precio,
                'saborDulceActualizar' => $sabor,
                'idDulceActualizar' => $id
            );

            require 'model/dulceDAO.php';
            $this->loadModel('dulceDAO');
            $dulceDAO = new dulceDAO();
            $dulceDAO->update($data);
        }

        function delete(){
            $id = $_POST['idEliminarDulce'];

            require 'model/dulceDAO.php';
            $this->loadModel('dulceDAO');
            $dulceDAO = new dulceDAO();
            $dulceDAO->delete($id);
        }

        function read() {
            require 'model/dulceDAO.php';
            $this->loadModel('dulceDAO');
            $dulceDAO = new dulceDAO();
            $dulceDAO = $dulceDAO->read();
            echo $dulceDAO;
        }
    }
