<?php

require ("../../../app/Models/User.php");

// namespace App\Controllers\UserController;

// use App\Models\User;
// use App\config\Database;

class UserController {
    
    public $user;
 

    public function __construct($user){
        $this->user = $user;
    }

    public function index () {

        $users = $this->user->getAllUsers();
        return $users;
        
    }

    public function show ($id) {

        $user = $this->user->loadUser($id);
        return $user;
    }

    public function verify ($email, $password) {

        $verified_user = $this->user->verifyUser($email)();
        if($email == $verified_user->user_email && $password == $verified_user->user_password){
            return $verified_user;
        }
        else {
            return 'Este usuario no está registrado';
        }
        
    }

    public function create () {

    }

    public function store ($name, $email, $password) {

        $this->user->store($name, $email, $password);      
        
    }
    
    public function edit ($id) {
        
        $user =  $this->user->store($id);      
        return $user;
    }

    public function update ($id, $name, $email, $password) {
    
        $user = $this->user->update($id, $name, $email, $password);      
        return $user;
    }

    public function delete ($id) {

        $this->user->destroy($id);      
         
    }

}

$user_controller = new UserController($user);