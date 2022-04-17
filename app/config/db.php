<?php

class Database {

    private $db_host = "localhost";
    private $db_name = "support-crud-app";
    private $db_username = "root";
    private $db_password = "";
    private $db_root_url = "http://localhost/crud-app-php";
    public $conn;

    public function getConnection(){

        $conn = mysqli_connect($this->db_host, $this->db_username, $this->db_password, $this->db_name) or die("Connection failed");
        return $this->conn;
    }

    public function redirect(){
        return $this->db_root_url;
    }
}     

$db_connection = new Database();
