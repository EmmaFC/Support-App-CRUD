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

    public function __construct($game_player){
        $this->game_player = $game_player;
        $this->game_player_move = $game_player->player_move;
    }

    public function setBotMove(){
        
        if (isset($this->game_player_move)) {
            $random_choice = rand(1, 3);
            switch ($random_choice) {
                case 1: $this->game_bot_move = 'Rock'; break;
                case 2: $this->game_bot_move = 'Ppaper'; break;
                case 3: $this->game_bot_move = 'Scissors'; break;
            }
                return $this->game_bot_move;
        } echo 'error';
    }
  
    public function checkGameResult(){
       
        if (isset($this->game_bot_move)) {
            switch ($this->game_bot_move) {
                case $this->game_player->move->move_type->wins: $this->game_result = 'You Won!'; break;
                case $this->game_player->move->move_type->draws: $this->game_result = 'draws'; break;
                case $this->game_player->move->move_type->looses: $this->game_result = 'Game Over'; break;
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
        
        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "INSERT into " . $this->db_table . " (game_player, game_score, game_result, game_player_move, game_bot_move) VALUES ('$this->game_player', '$this->game_score', ''$this->game_result',$this->game_player_move', '$this->game_bot_move')";
        echo mysqli_query($conn, $query)? "Record inserted" : "Failed to insert record";
        mysqli_close($conn);
    }
    
}


/* $new_game = new Game($game_player); */