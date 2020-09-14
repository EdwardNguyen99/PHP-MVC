<?php 
    require_once('class/goc.php');
    include_once('games.php');
    class Database{
        public function getGameList(){
            global $db;
            $stmt = $db -> prepare("SELECT * FROM game");
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getGame($title) {
            $allGames = $this->getGameList();
		    return $allGames[$title];
        }

        function Game($sotin) {
            $sql="SELECT id,Title,author,description,image FROM game ORDER BY RAND() LIMIT 0,$sotin";
            $kq = $this->db->query($sql);	
            if(!$kq) die( $this-> db->error);
            return $kq;	
    
        }
    }
?>