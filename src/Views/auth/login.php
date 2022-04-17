<?php

require "../../../app/config/db.php";
require "../../../app/Controllers/UserController.php";

$conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");

    $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';


    if (isset($_POST["submit"])) {
        $user_email = mysqli_real_escape_string($conn, $_POST["user_email"]);
        $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);
       
        $query = "SELECT * FROM users WHERE user_email=".$user_email;

        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
       
        
        if (mysqli_query($conn, $query)) 
        {
            if($user->email == $user_email && $user->password == $user_password){
    
                // get user_id and redirect to home
                $id = mysqli_real_escape_string($conn,$_GET["id"]);
                header("Location: " . $path ."/home.php?id=". $id);
                mysqli_query($conn, $query);
                
            }    
            
            else {
                echo "LOGIN ERROR: ".mysqli_error();
            }
        } 
        else 
        {
            echo "ERROR: ".mysqli_error();
        }
    }

?>


<!DOCTYPE html>
<html lang="en">    
    <?php require "../components/head.php"; ?>
    <body>
    <header id="header">
            <div id="header-container">
                <div id="logo_container">
                    <a href="http://localhost/crud-app-php">
                        <h3>Request Center</h3>
                    </a>
                </div>
            </div>  
        </header>            
        <main>
            <section>
                <div class="card">
                    <div class="card-title">
                        <h1 class="mb-sm">Login de usuario</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                            <input type="text" label="user_email" name="user_email" placeholder="email" value="" required/>
                            <input type="password" label="user_password" name="user_password" placeholder="contraseña" value="" required/>
                            <div class="button-section">
                                <a class="btn" href="http://localhost/crud-app-php/">Cancel</a>
                                <a class="btn" href="http://localhost/crud-app-php/src/views/auth/login.php">Reset</a>
                                <button type="submit" label="submit" name="submit">Loguin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>