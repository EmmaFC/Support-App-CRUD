<?php


 
/*     class Database {

        private $host = "localhost";
        private $database_name = "support-crud-app";
        private $username = "root";
        private $password = "";

        public $conn;

        public function getConnection(){

            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;

        }
    }  
  */

 


?>

<!-- 
    <html>
        <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            Email: <input type="text" name="femail">
            Password: <input type="password" name="fpassword">
            <input type="submit"> -->
        </form>

        <?php
          /*   
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $name = $_POST['fname'];
                    $email = $_POST['femail'];
                    $password = $_POST['fpassword'];
                    
                if (empty($name)) {
                    echo "Name is empty";
                } 
                
                else {
                    echo $name;
                }


                $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed"); // //

                $query = "INSERT into users (name, email, password) VALUES ('$name','$email','$password')"; //
                if(mysqli_query($conn, $query)){
                    echo "Record inserted";
                }
                else {
                    echo "Failed to insert record";
                }


            }
 */
        ?>

   <!--      </body>
    </html> -->