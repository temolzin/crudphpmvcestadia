<?php
    class Cake extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('cake/index');
        }

        function insert() {
            $nameCake = $_POST['nameCake'];
            $flavorCake = $_POST['flavorCake'];
            $amountCake = $_POST['amountCake'];
            $priceCake = $_POST['priceCake'];
            $dateCake = $_POST['dateCake'];
            $data = array('nameCake' => $nameCake, 'flavorCake' => $flavorCake, 'amountCake' => $amountCake, 'priceCake' => $priceCake ,'dateCake' => $dateCake);

            require 'model/cakeDAO.php';
            $this->loadModel('CakeDAO');
            $cakeDAO = new CakeDAO();
            $cakeDAO->insert($data);
        }

        function update() {
            $namecake = $_POST['namecakeUpdate'];
            $flavorcake = $_POST['flavorcakeUpdate'];
            $amountcake = $_POST['amountcakeUpdate'];
            $datecake = $_POST['datecakeUpdate'];
            $pricecake = $_POST['pricecakeUpdate'];
            $identifierCake = $_POST['idUpdateCake'];
            $data = array('namecake' => $namecake, 'flavorcake' => $flavorcake, 'amountcake' => $amountcake, 'datecake' => $datecake, 'pricecake' => $pricecake, 'idCake' => $identifierCake);

            require 'model/cakeDAO.php';
            $this->loadModel('cakeDAO');
            $cakeDAO = new cakeDAO();
            $cakeDAO->update($data);
        }

        function delete(){
            $identificador = $_POST['idDeleteCake'];

            require 'model/cakeDAO.php';
            $this->loadModel('cakeDAO');
            $cakeDAO = new CakeDAO();
            $cakeDAO->delete($identificador);
        }

        function read() {
            require 'model/cakeDAO.php';
            $this->loadModel('cakeDAO');
            $cakeDAO = new CakeDAO();
            $cakeDAO = $cakeDAO -> read();
            echo $cakeDAO;
        }
    }
