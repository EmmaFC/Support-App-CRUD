<?php

namespace App\Models\Role;

class Role{

    private $conn;
    private $db_table = "roles";
    public $role_id;
    public $role_name;

   /*  public function __construct($db, $role_name){
        $this->conn = $db;
        $this->role_name = $role_name;
    }
 */


    public function getAllRoles(){
        
        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . "";
        
        $result = mysqli_query($conn, $query);
        $roles = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        mysqli_free_result($result);
        mysqli_close($conn);
        return $roles;
    }

    public function loadRole($id){

        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "SELECT * FROM " . $this->db_table . " WHERE role_id=" . $id . "";
        echo mysqli_query($conn, $query)? "Record showm" : "Failed to show record";
        
        $result = mysqli_query($conn, $query);
        $role = mysqli_fetch_assoc($result);

        // mysqli_free_result($result);
        // mysqli_close($conn);
        return $role;

    }

    public function store($name){
        
        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "INSERT into roles (role_name) VALUES ('$name')";

        echo mysqli_query($conn, $query)? "Record inserted" : "Failed to insert record";
        mysqli_close($conn);

    }


    public function update($id, $name){

       $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
       $query = "UPDATE roles SET role_name='$name' WHERE role_id=" . $id . "";

       echo mysqli_query($conn, $query)? "Record updated" : "Failed to update record";
       mysqli_close($conn);
       
    }

    function destroy($delete_id){

        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $query = "DELETE FROM roles WHERE role_id=" . $delete_id . "";
        
        echo mysqli_query($conn, $query)? "Record destroyed" : "Failed to destroy record";
        mysqli_close($conn);

    }

}


$role = new Role(/* $db_connection */);