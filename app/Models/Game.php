<?php
require_once ("../../../app/config/db.php");
require ("../../../app/Models/Player.php");

class Game{

    private $conn;
    private $db_table = "games";
    public $game_id;
    public $game_name;
    public $game_player;
    public $game_player_move;
    public $game_bot_move;
    public $game_score;
    public $game_result;

    public function __construct(/* $game_player */){
        // $this->game_player = $game_player;
    }

    public function setGamePlayer ($game_player){
        $this->game_player = $game_player;
    }

    public function setBotMove(){
        
        if (isset($this->game_player_move)) {
            $random_choice = rand(1, 3);
            switch ($random_choice) {
                case 1: $this->game_bot_move = 'Rock'; break;
                case 2: $this->game_bot_move = 'Paper'; break;
                case 3: $this->game_bot_move = 'Scissors'; break;
            }
                return $this->game_bot_move;
        } echo 'error';
    }
  
    public function checkGameResult(){
       
        if (isset($this->game_bot_move)) {
            switch ($this->game_bot_move) {
                case $this->game_player_move->wins(): $this->game_result = 'You Won!'; break;
                case $this->game_player_move->draws(): $this->game_result = 'draws'; break;
                case $this->game_player_move->looses(): $this->game_result = 'Game Over'; break;
            }
                return $this->game_result;
        }
        echo 'error';

    }

    public function checkScore(){

        if (isset($this->game_result)) {
            switch ($this->game_result){
                case 'You Won!' : $this->game_score = 10; break;
                case 'draws' : $this->game_score = 5; break;
                case 'Game Over' : $this->game_score = 0; break;
            }   
                return $this->game_score;
        }
        echo 'error';
    }

    public function store(){
        $player_move = $this->game_player_move->move_type;
        $player_name = $this->game_player->player_name;
        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "INSERT into " . $this->db_table . " (game_player, game_score, game_result, game_player_move, game_bot_move) VALUES ('$player_name', '$this->game_score', '$this->game_result', '$player_move', '$this->game_bot_move')";
        echo mysqli_query($conn, $query)? "Record inserted" : "Failed to insert record";
        mysqli_close($conn);
    }
    
    public function loadGame($id){

        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . " WHERE game_id=" . $id . "";
        echo mysqli_query($conn, $query)? "Record shown" : "Failed to show record";
        
        $result = mysqli_query($conn, $query);
        $game = mysqli_fetch_assoc($result);

        // mysqli_free_result($result);
        // mysqli_close($conn);
        return $game;
    }
}


$game = new Game();