<?php
    class WeatherDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO weather values (:id_weather, :nombre_weather)');
            $query->execute([
                ':id_weather' => null,
                ':nombre_weather' => $data['nombreWeather'],
            ]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE weather SET name_weather = :nombreWeatherActualizar WHERE id_weather = :idWeatherActualizar');
            $query->execute([
                ':idWeatherActualizar' => $data['idWeatherActualizar'],
                ':nombreWeatherActualizar' => $data['nombreWeatherActualizar'],
            ]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM weather where id_weather = :idWeatherEliminar');
            $query->execute([':idWeatherEliminar' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'weatherDTO.php';
            $query = "SELECT * FROM weather";
            $objWeathers = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $weather = new weatherDTO();
                $weather->id_weather = $value['id_weather'];
                $weather->name_weather = $value['name_weather'];
                $objWeathers['data'][] = $weather;
            }
            echo json_encode($objWeathers, JSON_UNESCAPED_UNICODE);
        }
    }
?>
