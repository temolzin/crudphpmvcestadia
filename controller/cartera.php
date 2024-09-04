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
        $data = array('material_car' => $material, 'color_car' => $color, 'modelo_car' => $modelo, 'marca_car' => $marca);

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
        $data = array('material_car' => $material, 'color_car' => $color, 'modelo_car' => $modelo, 'marca_car' => $marca, 'idCartera' => $idCartera);

        require 'model/carteraDAO.php';
        $this->loadModel('carteraDAO');
        $carteraDAO = new CarteraDAO();
        $carteraDAO->update($data);
    }

    // Método para manejar la eliminación de una cartera.
    function delete() {
        $idCartera = $_POST['idEliminarCartera'];

        require 'model/carteraDAO.php';
        $this->loadModel('carteraDAO');
        $carteraDAO = new CarteraDAO();
        $carteraDAO->delete($idCartera);
    }

    // Método para manejar la lectura de todas las carteras y devolverlas en JSON.
    function read() {
        require 'model/carteraDAO.php';
        $this->loadModel('carteraDAO');
        $carteraDAO = new CarteraDAO();
        $carteraDAO = $carteraDAO->read();
        echo $carteraDAO;
    }
}
?>
