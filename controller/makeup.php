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
            $name  = $_POST['name'];
            $brand = $_POST['brand'];
            $type  = $_POST['type'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];

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
            $id    = $_POST['id_update'];
            $name  = $_POST['name_update'];
            $brand = $_POST['brand_update'];
            $type  = $_POST['type_update'];
            $price = $_POST['price_update'];
            $stock = $_POST['stock_update'];

            $data = array(
                'id_update'    => $id,
                'name_update'  => $name,
                'brand_update' => $brand,
                'type_update'  => $type,
                'price_update' => $price,
                'stock_update' => $stock
            );

            require 'model/makeupDAO.php';
            $this->loadModel('makeupDAO');
            $makeupDAO = new MakeupDAO();
            $makeupDAO->update($data);
        }

        function delete(){
            $id = $_POST['id_delete'];
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
