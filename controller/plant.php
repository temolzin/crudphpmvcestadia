<?php
    class Plant extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index(){
            $this->view->render('plant/index');
        }

        function insert() {
            $plantName = $_POST['plantName'];
            $price = $_POST['price'];
            $availability = $_POST['availability'];
            $size = $_POST['size'];
            $data = array('plantName' => $plantName, 'price' => $price, 'availability'=>$availability, 'size'=>$size);

            require 'model/plantDAO.php';
            $this->loadModel('PlantDAO');
            $plantDAO = new PlantDAO();
            $plantDAO->insert($data);
        }

        function update() {
            $plantName = $_POST['plantNameUpdate'];
            $price = $_POST['priceUpdate'];
            $availability = $_POST['availabilityUpdate'];
            $plantId = $_POST['plantIdUpdate'];
            $size = $_POST['sizeUpdate'];
            $data = array('plantName' => $plantName, 'price' => $price, 'availability' => $availability,'plantId'=>$plantId, 'size'=>$size);

            require 'model/plantDAO.php';
            $this->loadModel('PlantDAO');
            $plantDAO = new PlantDAO();
            $plantDAO->update($data);
        }

        function delete(){
            $plantId = $_POST['plantIdDelete'];

            require 'model/plantDAO.php';
            $this->loadModel('PlantDAO');
            $plantDAO = new PlantDAO();
            $plantDAO->delete($plantId);
        }

        function read() {
            require 'model/plantDAO.php';
            $this->loadModel('PlantDAO');
            $plantDAO = new PlantDAO();
            $plantDAO = $plantDAO->read();
            echo $plantDAO;
        }
    }
