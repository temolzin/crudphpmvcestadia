<?php
    class PlayerDAO extends Model implements CRUD {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data)
        {
            $query = $this->db->conectar()->prepare('INSERT INTO player values (:id_player, :first_name_player, :last_name_player, :age_player, :position_player, :jersey_number_player)');
            $query->execute([':id_player' => null, ':first_name_player' => $data['firstName'], ':last_name_player' => $data['lastName'], ':age_player' => $data['age'], ':position_player' => $data['position'], ':jersey_number_player' => $data['jerseyNumber']]);
            echo 'ok';
        }

        public function update($data)
        {
            $query = $this->db->conectar()->prepare('UPDATE player SET  first_name_player = :first_name_player, last_name_player = :last_name_player, age_player = :age_player, position_player = :position_player, jersey_number_player = :jersey_number_player WHERE id_player = :id_player');
            $query->execute([':id_player' => $data['idPlayer'], ':first_name_player' => $data['firstName'], ':last_name_player' => $data['lastName'], ':age_player' => $data['age'], ':position_player' => $data['position'], ':jersey_number_player' => $data['jerseyNumber']]);
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
                $player->idPlayer = $value['id_player'];
                $player->firstNamePlayer = $value['first_name_player'];
                $player->lastNamePlayer = $value['last_name_player'];
                $player->agePlayer = $value['age_player'];
                $player->positionPlayer = $value['position_player'];
                $player->jerseyNumberPlayer = $value['jersey_number_player'];
                $objPlayers['data'][] = $player;
            }
            echo json_encode($objPlayers, JSON_UNESCAPED_UNICODE);
        }
    }
?>
