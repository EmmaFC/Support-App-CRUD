<?php

require ("../../../app/Models/Role.php");

class RoleController {
    
    public $role;
 
    public function __construct($role){
        $this->role = $role;
    }

    public function index () {

        $roles = $this->role->getAllroles();
        return $roles;
        
    }

    public function show ($id) {

        $role = $this->role->loadrole($id);
        return $role;
    }
   
    public function create () {

    }

    public function store ($name) {

        $this->role->store($name);      
        
    }
    
    public function edit ($id) {
        
        $role =  $this->role->store($id);      
        return $role;
    }

    public function update ($id, $name) {
    
        $role = $this->role->update($id, $name);      
        return $role;
    }

    public function delete ($id) {

        $this->role->destroy($id);      
         
    }

}

$role_controller = new RoleController($role);