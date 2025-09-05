<?php
    class Makeup extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index(){
            $this->view->render('makeup/index');
        }

        function insert() {
            $name   = $_POST['name'];
            $brand  = $_POST['brand'];
            $type   = $_POST['type'];
            $price  = $_POST['price'];
            $stock  = $_POST['stock'];

            $data = array(
                'name'  => $name,
                'brand' => $brand,
                'type'  => $type,
                'price' => $price,
                'stock' => $stock
            );

            require 'model/makeupDAO.php';
            $this->loadModel('makeupDAO');
            $makeupDAO = new MakeupDAO();
            $makeupDAO->insert($data);
        }

        function update() {
            $id     = $_POST['idUpdate'];
            $name   = $_POST['nameUpdate'];
            $brand  = $_POST['brandUpdate'];
            $type   = $_POST['typeUpdate'];
            $price  = $_POST['priceUpdate'];
            $stock  = $_POST['stockUpdate'];

            $data = array(
                'idUpdate'    => $id,
                'nameUpdate'  => $name,
                'brandUpdate' => $brand,
                'typeUpdate'  => $type,
                'priceUpdate' => $price,
                'stockUpdate' => $stock
            );

            require 'model/makeupDAO.php';
            $this->loadModel('makeupDAO');
            $makeupDAO = new MakeupDAO();
            $makeupDAO->update($data);
        }

        function delete(){
            $id = $_POST['idDelete'];

            require 'model/makeupDAO.php';
            $this->loadModel('makeupDAO');
            $makeupDAO = new MakeupDAO();
            $makeupDAO->delete($id);
        }

        function read() {
            require 'model/makeupDAO.php';
            $this->loadModel('makeupDAO');
            $makeupDAO = new MakeupDAO();
            $makeupDAO = $makeupDAO->read();
            echo $makeupDAO;
        }
    }
?>
