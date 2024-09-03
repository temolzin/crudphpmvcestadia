<?php
    class Mesa extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('mesa/index');
        }

        function insert() {
            $material = $_POST['materialMesa'];
            $altura = $_POST['alturaMesa'];
            $acabado = $_POST['acabadoMesa'];
            $precio = $_POST['precioMesa'];
            $data = array('material' => $material, 'altura' => $altura, 'acabado' => $acabado, 'precio' => $precio);

            require 'model/mesaDAO.php';
            $this->loadModel('mesaDAO');
            $mesaDAO = new MesaDAO();
            $mesaDAO->insert($data);
        }

        function update() {
            $idMesa = $_POST['idMesaActualizar'];
            $material = $_POST['materialMesaActualizar'];
            $altura = $_POST['alturaMesaActualizar'];
            $acabado = $_POST['acabadoMesaActualizar'];
            $precio = $_POST['precioMesaActualizar'];
            $data = array('idMesa' => $idMesa, 'material' => $material, 'altura' => $altura, 'acabado' => $acabado, 'precio' => $precio);

            require 'model/mesaDAO.php';
            $this->loadModel('mesaDAO');
            $mesaDAO = new MesaDAO();
            $mesaDAO->update($data);
        }

        function delete(){
            $idMesa = $_POST['idEliminarMesa'];

            require 'model/mesaDAO.php';
            $this->loadModel('mesaDAO');
            $mesaDAO = new MesaDAO();
            $mesaDAO->delete($idMesa);
        }

        function read() {
            require 'model/mesaDAO.php';
            $this->loadModel('mesaDAO');
            $mesaDAO = new MesaDAO();
            $mesaDAO = $mesaDAO->read();
            echo $mesaDAO;
        }
    }
