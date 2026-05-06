<?php
    class DulceDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO dulce values (:id_dulce, :nombre_dulce, :cantidad_dulce, :precio_dulce, :sabor_dulce)');
            $query->execute([
                ':id_dulce' => null,
                ':nombre_dulce' => $data['nombreDulce'],
                ':cantidad_dulce' => $data['cantidadDulce'],
                ':precio_dulce' => $data['precioDulce'],
                ':sabor_dulce' => $data['saborDulce']
            ]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE dulce SET nombre_dulce = :nombreDulceActualizar, cantidad_dulce = :cantidadDulceActualizar, precio_dulce = :precioDulceActualizar, sabor_dulce = :saborDulceActualizar WHERE id_dulce = :idDulceActualizar');
            $query->execute([
                ':idDulceActualizar' => $data['idDulceActualizar'],
                ':nombreDulceActualizar' => $data['nombreDulceActualizar'],
                ':cantidadDulceActualizar' => $data['cantidadDulceActualizar'],
                ':precioDulceActualizar' => $data['precioDulceActualizar'],
                ':saborDulceActualizar' => $data['saborDulceActualizar']
            ]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM dulce where id_dulce = :idDulceEliminar');
            $query->execute([':idDulceEliminar' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'dulceDTO.php';
            $query = "SELECT * FROM dulce";
            $objDulces = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $dulce = new dulceDTO();
                $dulce->id_dulce = $value['id_dulce'];
                $dulce->nombre_dulce = $value['nombre_dulce'];
                $dulce->cantidad_dulce = $value['cantidad_dulce'];
                $dulce->precio_dulce = $value['precio_dulce'];
                $dulce->sabor_dulce = $value['sabor_dulce'];
                $objDulces['data'][] = $dulce;
            }
            echo json_encode($objDulces, JSON_UNESCAPED_UNICODE);
        }
    }
?>
