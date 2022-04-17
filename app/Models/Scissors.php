<?php

// require ("../../../app/Models/Move.php");

class Scissors extends Move {

    /* protected $conn;
    protected $db_table = "moves";
    protected $move_type; */

    public function __construct() {

        $this->move_type = 'Scissors';
    }

    /* public function setMove_type()
    {
        $this->move_type = 'Scissors';
    } */

    public function wins()
    {          
        //Wins against :
        return 'Paper';   
    }

    public function looses()
    {
        //Looses against :
        return  'Rock';
    }

    public function draws()
    {
        //Draws against :
        return 'Scissors';
    }


}


$scissors = new Scissors();