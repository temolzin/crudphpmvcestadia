<?php

class Auto extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('auto/index');
    }

    function insert()
    {
        $marcaAuto = $_POST['marcaAuto'];
        $modeloAuto = $_POST['modeloAuto'];
        $colorAuto = $_POST['colorAuto'];
        $anioAuto = $_POST['anioAuto'];
        $precioAuto = $_POST['precioAuto'];
        $data = array('marcaAuto' => $marcaAuto, 'modeloAuto' => $modeloAuto, 'colorAuto' => $colorAuto, 'anioAuto' => $anioAuto, 'precioAuto' => $precioAuto);

        require 'model/autoDAO.php';
        $this->loadModel('AutoDAO');
        $autoDAO = new AutoDAO();
        $autoDAO->insert($data);
    }

    function update()
    {
        $marca = $_POST['marcaAutoActualizar'];
        $modelo = $_POST['modeloAutoActualizar'];
        $color = $_POST['colorAutoActualizar'];
        $anio = $_POST['anioAutoActualizar'];
        $precio = $_POST['precioAutoActualizar'];
        $auto_id = $_POST['idAutoActualizar'];
        $data = array('marcaAuto' => $marca, 'modeloAuto' => $modelo, 'colorAuto' => $color, 'anioAuto' => $anio, 'precioAuto' => $precio, 'idAuto'=>$auto_id);

        require 'model/autoDAO.php';
        $this->loadModel('autoDAO');
        $autoDAO = new AutoDAO();
        $autoDAO->update($data);
    }

    function delete()
    {
        $id = $_POST['idEliminarAuto'];

        require 'model/autoDAO.php';
        $autoDAO = new AutoDAO();
        $autoDAO->delete($id);
    }

    function read()
    {
        require 'model/autoDAO.php';
        $this->loadModel('autoDAO');
        $autoDAO = new AutoDAO();
        $autoDAO = $autoDAO->read();
        echo $autoDAO;
    }
}
