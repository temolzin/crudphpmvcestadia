<?php
    class PlayerDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO player values (:id_player, :nombre_player, :apellidos_player, :edad_player, :posicion_player, :numero_camiseta)');
            $query->execute([':id_player' => null, ':nombre_player' => $data['firstName'],':apellidos_player' => $data['lastName'], ':edad_player' => $data['age'], ':posicion_player' => $data['position'], ':numero_camiseta' => $data['jerseyNumber']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE player SET  nombre_player = :nombre_player, apellidos_player = :apellidos_player, edad_player = :edad_player, posicion_player = :posicion_player, numero_camiseta = :numero_camiseta WHERE id_player = :id_player');
            $query->execute([':id_player' => $data['idPlayer'],':nombre_player' => $data['firstName'],':apellidos_player' => $data['lastName'], ':edad_player' => $data['age'], ':posicion_player' => $data['position'], ':numero_camiseta' => $data['jerseyNumber']]);
            echo 'ok';
        }

        public function delete($id)
        {
            $query = $this->db->conectar()->prepare('DELETE FROM player where id_player = :id_player');
            $query->execute([':id_player' => $id]);
            echo 'ok';
        }

        public function read()
        {
            require_once 'playerDTO.php';
            $query = "SELECT * FROM player";
            $objPlayers = array();
            foreach ($this->db->consultar($query) as $key => $value) {
                $player = new PlayerDTO();
                $player->id_player = $value['id_player'];
                $player->nombre_player = $value['nombre_player'];
                $player->apellidos_player = $value['apellidos_player'];
                $player->edad_player = $value['edad_player'];
                $player->posicion_player = $value['posicion_player'];
                $player->numero_camiseta = $value['numero_camiseta'];
                $objPlayers['data'][] = $player;
            }
            echo json_encode($objPlayers, JSON_UNESCAPED_UNICODE);
        }
    }
?>
