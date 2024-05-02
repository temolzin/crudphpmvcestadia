<?php
    class Book extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('book/index');
        }

        function insert() {
            $nombreBook = $_POST['name'];
            $data = array('name' => $nombreBook);

            require 'model/bookDAO.php';
            $this->loadModel('BookDAO');
            $bookDAO = new BookDAO();
            $bookDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nameUpdate'];
            $matricula = $_POST['idUpdate'];
            $data = array('name' => $nombre, 'id'=>$matricula);

            require 'model/bookDAO.php';
            $this->loadModel('bookDAO');
            $bookDAO = new bookDAO();
            $bookDAO->update($data);
        }

        function delete(){
            $matricula = $_POST['idDelete'];

            require 'model/bookDAO.php';
            $this->loadModel('bookDAO');
            $bookDAO = new BookDAO();
            $bookDAO->delete($matricula);
        }

        function read() {
            require 'model/bookDAO.php';
            $this->loadModel('bookDAO');
            $bookDAO = new BookDAO();
            $bookDAO = $bookDAO->read();
            echo $bookDAO;
        }
    }
