<?php
require_once ("../../../app/config/db.php");
require ("../../../app/Models/Move.php");

class Player{

    public $conn;
    private $db_table = "players";
    public $player_id;
    public $player_name;
    public $player_move;

    public function __construct($game_player){
        $this->player_name = $game_player;

    }


    public function move($move_name){  
       $new_player_move = new $move_name ($move_name);
       $this->player_move = $new_player_move->move_type;
       return $this->player_move;
    }


    public function getAllplayers(){
        
        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . "";
        
        $result = mysqli_query($conn, $query);
        $players = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        mysqli_free_result($result);
        mysqli_close($conn);
        return $players;
    }

    public function verifyplayer($name){
        
        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . " WHERE player_name=" . $name . "";
        echo mysqli_query($conn, $query)? "Record verified" : "Failed to verify record";

        $result = mysqli_query($conn, $query);
        $verified_player = mysqli_fetch_assoc($result);
        
        // mysqli_free_result($result);
        // mysqli_close($conn);
        return $verified_player;
    }

    public function loadplayer($id){

        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . " WHERE player_id=" . $id . "";
        echo mysqli_query($conn, $query)? "Record shown" : "Failed to show record";
        
        $result = mysqli_query($conn, $query);
        $player = mysqli_fetch_assoc($result);

        // mysqli_free_result($result);
        // mysqli_close($conn);
        return $player;
    }

    public function store(){
        
        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "INSERT into " . $this->db_table . " (player_name, player_move) VALUES ('$this->player_name','$this->player_move')";

        echo mysqli_query($conn, $query)? "Record inserted" : "Failed to insert record";
        mysqli_close($conn);
    }


    public function update($id, $name, $email, $password){

       $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
       $query = "UPDATE " . $this->db_table . " SET player_name='$name', player_email='$email', player_password='$password' WHERE player_id=" . $id . "";

       echo mysqli_query($conn, $query)? "Record updated" : "Failed to update record";
       mysqli_close($conn);
       
    }

    function destroy($delete_id){

        $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
        $query = "DELETE FROM " . $this->db_table . " WHERE player_id=" . $delete_id . "";
        
        echo mysqli_query($conn, $query)? "Record destroyed" : "Failed to destroy record";
        mysqli_close($conn);

    }

}
/* 
$new_player = new Player($game_player); */