<?php

namespace App\Models\Request;

class Request{

    private $conn;
    private $db_table = "requests";
    public $request_id;
    public $request_title;
    public $request_author;
    public $request_topic;
    public $request_description;

    public function __construct($db, $request_title, $request_author, $request_topic, $request_description){
        $this->conn = $db;
        $this->request_title = $request_title;
        $this->request_author = $request_author;
        $this->request_topic = $request_topic;
        $this->request_description = $request_description;
    }
    
}