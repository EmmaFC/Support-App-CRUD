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


    public function getAllRequests(){
        
        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . "";
        
        $result = mysqli_query($conn, $query);
        $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        mysqli_free_result($result);
        mysqli_close($conn);
        return $requests;

    }

    public function loadRequest($id){

        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . " WHERE request_id=" . $id . "";
        echo mysqli_query($conn, $query)? "Record showm" : "Failed to show record";
        
        $result = mysqli_query($conn, $query);
        $request = mysqli_fetch_assoc($result);

        return $request;

    }

    public function store($title, $topic, $description, $author){
        
        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "INSERT into requests (request_title, request_topic, request_description, request_author) VALUES ('$title', '$topic', '$description', '$author')";

        echo mysqli_query($conn, $query)? "Record inserted" : "Failed to insert record";
        mysqli_close($conn);

    }


    public function update($id, $title, $topic, $description, $author){

       $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
       $query = "UPDATE requests SET request_title='$title', request_topic='$topic', request_description='$description', request_author='$author' WHERE request_id=" . $id . "";

       echo mysqli_query($conn, $query)? "Record updated" : "Failed to update record";
       mysqli_close($conn);
       
    }

    function destroy($delete_id){

        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "DELETE FROM requests WHERE request_id=" . $delete_id . "";
        
        echo mysqli_query($conn, $query)? "Record destroyed" : "Failed to destroy record";
        mysqli_close($conn);

    }
    
}

$request = new Request();