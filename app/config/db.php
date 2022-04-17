<?php

namespace App\config\Database;

class Database {

    private $db_host = "localhost";
    private $db_name = "support-crud-app";
    private $db_username = "root";
    private $db_password = "";
    private $db_root_url = "http://localhost/crud-app-php";
    public $conn;

    public function getConnection(){

        /* $this->conn = null;
        try
        {   $this->conn = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_username, $this->db_password);
            $this->conn->exec("set names utf8");
        }   
        catch (PDOException $exception)
        {  
             echo "Database could not be connected: " . $exception->getMessage();
        } */
        $conn = mysqli_connect($this->db_host, $this->db_username, $this->db_password, $this->db_name) or die("Connection failed");

        return $this->conn;

    }

    public function redirect(){
        return $this->db_root_url;
    }
}     

$db_connection = new Database();
