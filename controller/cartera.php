<?php

    class Cartera extends Controller 
    {

    function __construct() 
    {
        parent::__construct();
    }

    function index() 
    {
        $this->view->render('cartera/index');
    }
 
    function insert() {
        $material = $_POST['material'];
        $color = $_POST['color'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $data = array('material_cartera' => $material, 'color_cartera' => $color, 'modelo_cartera' => $modelo, 'marca_cartera' => $marca);

        require 'model/carteraDAO.php';
        $this->loadModel('carteraDAO');
        $carteraDAO = new CarteraDAO();
        $carteraDAO->insert($data);
    }

    function update() {
        
        $material = $_POST['materialCarteraActualizar'];
        $color = $_POST['colorCarteraActualizar'];
        $modelo = $_POST['modeloCarteraActualizar'];
        $marca = $_POST['marcaCarteraActualizar'];
        $idCartera = $_POST['idCarteraActualizar'];
        $data = array('material_cartera' => $material, 'color_cartera' => $color, 'modelo_cartera' => $modelo, 'marca_cartera' => $marca, 'idCartera' => $idCartera);

        require 'model/carteraDAO.php';
        $this->loadModel('carteraDAO');
        $carteraDAO = new CarteraDAO();
        $carteraDAO->update($data);
    }

    function delete() {
        $idCartera = $_POST['idEliminarCartera'];

        require 'model/carteraDAO.php';
        $this->loadModel('carteraDAO');
        $carteraDAO = new CarteraDAO();
        $carteraDAO->delete($idCartera);
    }
 
    function read() {
        require 'model/carteraDAO.php';
        $this->loadModel('carteraDAO');
        $carteraDAO = new CarteraDAO();
        $carteraDAO = $carteraDAO->read();
        echo $carteraDAO;
    }
}
?>
