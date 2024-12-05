<?php
    class Fruit extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('fruit/index');
        }

        function insert() {
            $nameFruit = $_POST['nameFruit'];
            $descriptionFruit = $_POST['descriptionFruit'];
            $weightFruit = $_POST['weightFruit'];
            $colorFruit = $_POST['colorFruit'];
            $data = array('nameFruit' => $nameFruit, 'descriptionFruit' => $descriptionFruit, 'weightFruit' => $weightFruit, 'colorFruit' => $colorFruit);

            require 'model/fruitDAO.php';
            $this->loadModel('FruitDAO');
            $fruitDAO = new FruitDAO();
            $fruitDAO->insert($data);
        }

        function update() {
            $nameFruit = $_POST['nameFruitActualizar'];
            $descriptionFruit = $_POST['descriptionFruitActualizar'];
            $weightFruit = $_POST['weightFruitActualizar'];
            $colorFruit = $_POST['colorFruitActualizar'];
            $idFruit = $_POST['idFruitActualizar'];
            $data = array('nameFruit' => $nameFruit, 'descriptionFruit' => $descriptionFruit, 'weightFruit' => $weightFruit, 'colorFruit' => $colorFruit, 'idFruit'=>$idFruit);

            require 'model/fruitDAO.php';
            $this->loadModel('FruitDAO');
            $fruitDAO = new FruitDAO();
            $fruitDAO->update($data);
        }

        function delete(){
            $idFruit = $_POST['idEliminarFruit'];

            require 'model/fruitDAO.php';
            $this->loadModel('FruitDAO');
            $fruitDAO = new FruitDAO();
            $fruitDAO->delete($idFruit);
        }

        function read() {
            require 'model/fruitDAO.php';
            $this->loadModel('FruitDAO');
            $fruitDAO = new FruitDAO();
            $fruitDAO = $fruitDAO->read();
            echo $fruitDAO;
        }
    }
