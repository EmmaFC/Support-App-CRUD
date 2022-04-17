<?php

/* require ("../../../app/Models/Move.php");
 */
class Rock extends Move {

    /* protected $conn;
    protected $db_table = "moves";
    protected $move_type; */

    public function __construct() {

        $this->move_type = 'Rock';
    }

   /*  public function setMove_type()
    {
        $this->move_type = 'Rock';
    } */

    public function wins()
    {      
       //Wins against :
       return 'Scissors';
    }

    public function looses()
    {
        //Looses against :
        return  'Paper';
    }

    public function draws()
    {
        //Draws against :
        return 'Rock';
    }

    
}

$rock = new Rock();