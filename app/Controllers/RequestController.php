<?php

require ("../../../app/Models/Request.php");

class RequestController {
    
    public $request;
 
    public function __construct($request){
        $this->request = $request;
    }

    public function index () {

        $requests = $this->request->getAllrequests();
        return $requests;
        
    }

    public function show ($id) {

        $request = $this->request->loadrequest($id);
        return $request;
    }
   
    public function create () {

    }

    public function store ($title, $topic, $description, $author) {

        $this->request->store($title, $topic, $description, $author);      
        
    }
    
    public function edit ($id) {
        
        $request =  $this->request->store($id);      
        return $request;
    }

    public function update ($id, $title, $topic, $description, $author) {
    
        $request = $this->request->update($id, $title, $topic, $description, $author);      
        return $request;
    }

    public function delete ($id) {

        $this->request->destroy($id);      
         
    }

}

$request_controller = new RequestController($request);