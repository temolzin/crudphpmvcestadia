<?php
    class Weather extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index(){
            $this->view->render('weather/index');
        }

        function insert() {
            $nombreWeather = $_POST['nombreWeather'];
            $data = array('nombreWeather' => $nombreWeather);

            require 'model/weatherDAO.php';
            $this->loadModel('weatherDAO');
            $weatherDAO = new weatherDAO();
            $weatherDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombreWeatherActualizar'];
            $id = $_POST['idWeatherActualizar'];
            $data = array(
                'nombreWeatherActualizar' => $nombre,
                'idWeatherActualizar' => $id
            );

            require 'model/weatherDAO.php';
            $this->loadModel('weatherDAO');
            $weatherDAO = new weatherDAO();
            $weatherDAO->update($data);
        }

        function delete(){
            $id = $_POST['idEliminarWeather'];

            require 'model/weatherDAO.php';
            $this->loadModel('weatherDAO');
            $weatherDAO = new weatherDAO();
            $weatherDAO->delete($id);
        }

        function read() {
            require 'model/weatherDAO.php';
            $this->loadModel('weatherDAO');
            $weatherDAO = new weatherDAO();
            $weatherDAO = $weatherDAO->read();
            echo $weatherDAO;
        }
    }
