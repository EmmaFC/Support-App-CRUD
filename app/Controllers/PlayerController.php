<?php
require ("../../../app/Models/Player.php");

// namespace App\Controllers\UserController;

// use App\Models\User;
// use App\config\Database;

class PlayerController {
    
    public $player;
 

    public function __construct($new_player){
        $this->player = $new_player;
    }

    public function index () {

        $players = $this->player->getAllplayers();
        return $players;
        
    }

    public function show ($id) {

        $player = $this->player->loadplayer($id);
        return $player;
    }
   

    public function verify ($email, $password) {

        $verified_player = $this->player->verifyplayer($email)();
        if($email == $verified_player->player_email && $password == $verified_player->player_password){
            return $verified_player;
        }
        else {
            return 'Este usuario no está registrado';
        }
        
    }

/*     public function create ($game_player, $game_player_move) {

        $player_1 = new Player ($game_player);
        $player_1->move($game_player_move);
        $player_1->store();
        return $player_1;

    } */

    public function store ($name, $email, $password) {

        $this->player->store($name, $email, $password);      
        
    }
    
    public function edit ($id) {
        
        $player =  $this->player->store($id);      
        return $player;
    }

    public function update ($id, $name, $email, $password) {
    
        $player = $this->player->update($id, $name, $email, $password);      
        return $player;
    }

    public function delete ($id) {

        $this->player->destroy($id);      
         
    }

}

$player_controller = new PlayerController($player);