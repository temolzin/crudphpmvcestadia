<?php
    class Medicine extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            $this->view->render('medicine/index');
        }

        function insert() {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $laboratory = $_POST['laboratory'];
            $expiration = $_POST['expiration'];
            $weigth = $_POST['weigth'];
            $data = array(
                'name' => $name,
                'price' => $price,
                'laboratory' => $laboratory,
                'expiration' => $expiration,
                'weigth' => $weigth
            );

            require 'model/medicamentoDAO.php';
            $this->loadModel('medicamentoDAO');
            $medicamentoDAO = new MedicamentoDAO();
            $medicamentoDAO->insert($data);
        }

        function update() {
            $id = $_POST['idActualizar'];
            $name = $_POST['nameActualizar'];
            $price = $_POST['priceActualizar'];
            $laboratory = $_POST['laboratoryActualizar'];
            $expiration = $_POST['expirationActualizar'];
            $weigth = $_POST['weigthActualizar'];
            $data = array(
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'laboratory' => $laboratory,
                'expiration' => $expiration,
                'weigth' => $weigth
            );

            require 'model/medicamentoDAO.php';
            $this->loadModel('medicamentoDAO');
            $medicamentoDAO = new MedicamentoDAO();
            $medicamentoDAO->update($data);
        }

        function delete(){
            $id = $_POST['idEliminar'];

            require 'model/medicamentoDAO.php';
            $this->loadModel('medicamentoDAO');
            $medicamentoDAO = new MedicamentoDAO();
            $medicamentoDAO->delete($id);
        }

        function read() {
            require 'model/medicamentoDAO.php';
            $this->loadModel('medicamentoDAO');
            $medicamentoDAO = new MedicamentoDAO();
            $medicamentoDAO = $medicamentoDAO->read();
            /*echo $medicamentoDAO;*/
        }
    }
?>