<?php

/* require ("../../../app/Models/Move.php"); */

class Paper extends Move {

   /*  protected $conn;
    protected $db_table = "moves";
    protected $move_type; */

    public function __construct() {

        $this->move_type = 'Paper';
    }

  /*   public function setMove_type()
    {
        $this->move_type = 'Paper';
    } */

    public function wins()
    {      
       //Wins against :
       return 'Rock';
        
    }

    public function looses()
    {
        //Looses against :
        return 'Scissors';
    }

    public function draws()
    {
        //Draws against :
        return 'Paper';
        
    }

}


$paper = new Paper();