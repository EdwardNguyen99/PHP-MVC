<?php 
    require_once("../model/database.php");
    class Controller {
        public $db;
        public function __construct(){
            $this ->db=new Databases();
            return $this->db->getGames();
        }

        public function invoke(){
            if (!isset($_GET['game'])){
               $games = $this->model->getGameList();
               include 'index.php';
            }
            else{
               $games = $this->model->getGame($_GET['game']);
               include '../view/section.php';
            }
        }
    }
?>