<?php
require ("../../../app/Models/Game.php");
// require ("../../../app/Models/Player.php");
// require "../../../app/Controllers/PlayerController.php";

class GameController {
    
    public $game;
 
    public function __construct(){
        // $this->game = $new_game;
    }
    
    public function index () {

        $games = $this->game->getAllgames();
        return $games;
        
    }

    public function savePlayer($game_player, $game_player_move) {

        $new_player = new Player ($game_player);
        $new_player->move($game_player_move);
        $new_player->store();
        return $new_player;

    }


    public function show ($id) {

        $game = $this->game->loadgame($id);
        return $game;
    }
   
    public function create ($new_player) {

        $new_game = new Game($new_player, $new_player->player_move);
        if (isset($this->game_player_move)) {
            $new_game->setBotMove();
            $new_game->checkGameResult();
            $new_game->checkScore();
            $new_game->store();
            return $new_game;
        }
        
    }

    public function store ($title, $topic, $description, $author) {

        $this->game->store($title, $topic, $description, $author);      
        
    }
    
    public function edit ($id) {
        
        $game =  $this->game->store($id);      
        return $game;
    }

    public function update ($id, $title, $topic, $description, $author) {
    
        $game = $this->game->update($id, $title, $topic, $description, $author);      
        return $game;
    }

    public function delete ($id) {

        $this->game->destroy($id);      
         
    }

}

$game_controller = new GameController();