<?php

namespace App\Models\Role;

class Role{

    private $conn;
    private $db_table = "roles";
    public $role_id;
    public $role_name;

    public function __construct($db, $role_name){
        $this->conn = $db;
        $this->role_name = $role_name;
    }

}