<?php
    class Calificacion extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        function index(){
            $this->view->render('calificacion/index');
        }

        function insert() {
            $nombreAlumno = $_POST['nombreAlumno'];
            $apellidoPaterno = $_POST['apellidoPaterno'];
            $apellidoMaterno = $_POST['apellidoMaterno'];
            $calificacion = $_POST['calificacion'];
            $data = array('nombreAlumno' => $nombreAlumno, 'apellidoPaterno' => $apellidoPaterno, 'apellidoMaterno'=>$apellidoMaterno, 'calificacion'=>$calificacion);

            require 'model/calificacionDAO.php';
            $this->loadModel('CalificacionDAO');
            $calificacionDAO = new CalificacionDAO();
            $calificacionDAO->insert($data);
        }

        function update() {
            $nombre = $_POST['nombreAlumnoActualizar'];
            $apellidoPaterno = $_POST['apellidoPaternoActualizar'];
            $apellidoMaterno = $_POST['apellidoMaternoActualizar'];
            $calificacion = $_POST['calificacionActualizar'];
            $data = array('nombreAlumnoActualizar' => $nombre, 'apellidoPaternoActualizar' => $apellidoPaterno, 'apellidoMaternoActualizar' => $apellidoMaterno, 'calificacionActualizar'=>$calificacion);

            require 'model/calificacionDAO.php';
            $this->loadModel('calificacionDAO');
            $calificacionDAO = new CalificacionDAO();
            $calificacionDAO->update($data);
        }

        function delete(){
            $calificacion = $_POST['idCalificacionEliminar'];
            require 'model/calificacionDAO.php';
            $this->loadModel('CalificacionDAO');
            $calificacionDAO = new CalificacionDAO();
            $calificacionDAO->delete($calificacion);
        }


        function read() {
            require 'model/calificacionDAO.php';
            $this->loadModel('CalificacionDAO');
            $calificacionDAO = new CalificacionDAO();
            $calificacionDAO = $calificacionDAO->read();
            echo $calificacionDAO;
        }
    }
