<?php

abstract class Move{
    
    public $conn;
    public $db_table = "moves";
    public $move_type;
    
    public function __construct(){
        
    }
    
    public function setMove_type(){}
    
    public function wins(){}
    
    public function looses(){}
    
    public function draws(){}
    
    
}


require ("../../../app/Models/Paper.php");
require ("../../../app/Models/Rock.php");
require ("../../../app/Models/Scissors.php");
