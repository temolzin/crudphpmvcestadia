<?php
    class AutoDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }
        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO autos VALUES (:id_auto, :marca_auto, :modelo_auto, :color_auto, :anio_auto, :precio_auto)');
            $query->execute([
                ':id_auto' => null,
                ':marca_auto' => $data['marcaAuto'],
                ':modelo_auto' => $data['modeloAuto'],
                ':color_auto' => $data['colorAuto'],
                ':anio_auto' => $data['anioAuto'],
                ':precio_auto' => $data['precioAuto']
            ]);
            echo 'ok';
        }
        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE autos SET  marca_auto = :marca_auto, modelo_auto = :modelo_auto, color_auto = :color_auto, anio_auto = :anio_auto, precio_auto = :precio_auto WHERE id_auto = :id_auto');
            $query->execute([':id_auto' => $data['idAuto'],':marca_auto' => $data['marcaAuto'],':modelo_auto' => $data['modeloAuto'],':color_auto' => $data['colorAuto'],':anio_auto' => $data['anioAuto'],':precio_auto' => $data['precioAuto'],]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM autos where id_auto = :id_auto');
            $query->execute([':id_auto' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'autoDTO.php';
            $query = "SELECT * FROM autos";
            $objAutos = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $auto = new AutoDTO();
                $auto->id_auto = $value['id_auto'];
                $auto->marca_auto = $value['marca_auto'];
                $auto->modelo_auto = $value['modelo_auto'];
                $auto->color_auto = $value['color_auto'];
                $auto->anio_auto = $value['anio_auto'];
                $auto->precio_auto = $value['precio_auto'];
                $objAutos['data'][] = $auto;
            }
            echo json_encode($objAutos, JSON_UNESCAPED_UNICODE);
        }
    }
?>
