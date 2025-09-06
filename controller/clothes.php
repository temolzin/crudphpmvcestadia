<?php
    class Clothes extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index(){
            $this->view->render('clothes/index');
        }

        function insert() {
            $product = $_POST['product'];
            $category = $_POST['category'];
            $size = $_POST['sizeclothes'];
            $price = $_POST['price'];

            $data = array('product' => $product, 'category' => $category, 'size' => $size, 'price' => $price);

            require 'model/clothesDAO.php';
            $this->loadModel('ClothesDAO');
            $clothesDAO = new ClothesDAO();
            $clothesDAO->insert($data);
        }

        function update() {
            $id = $_POST['clothesIdUpdate'];
            $product = $_POST['productUpdate'];
            $category = $_POST['categoryUpdate'];
            $size = $_POST['sizeUpdate'];
            $price = $_POST['priceUpdate'];

            $data = array('id' => $id, 'product' => $product, 'category' => $category, 'size' => $size, 'price' => $price);

            require 'model/clothesDAO.php';
            $this->loadModel('ClothesDAO');
            $clothesDAO = new ClothesDAO();
            $clothesDAO->update($data);
        }

        function delete(){
            $id = $_POST['clothesIdDelete'];
            require 'model/clothesDAO.php';
            $this->loadModel('ClothesDAO');
            $clothesDAO = new ClothesDAO();
            $clothesDAO->delete($id);
        }

        function read() {
            require 'model/clothesDAO.php';
            $this->loadModel('ClothesDAO');
            $clothesDAO = new ClothesDAO();
            $clothesDAO = $clothesDAO->read();
            echo $clothesDAO;
        }
    }
?>
