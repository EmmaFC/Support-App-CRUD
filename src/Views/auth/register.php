<?php

require "../../../app/config/db.php";
require "../../../app/Controllers/UserController.php";

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $user_email = $_POST["user_email"];
        $user_password = $_POST["user_password"];
        // $username = mysqli_real_escape_string($conn, $_POST["username"]);
        // $user_email = mysqli_real_escape_string($conn, $_POST["user_email"]);
        // $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);
       
        $query = "INSERT INTO users (username, user_email, user_password) VALUES ('$user_name','$user_email','$user_password')";
    
        if (mysqli_query($conn, $query)) 
        {
            header("Location: " . $path ."/home.php");
            mysqli_query($conn, $query);
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
                        <h1 class="mb-sm">Registro de usuario</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                            <input type="text" label="user_name" name="user_name" placeholder="nombre" value="" required/>
                            <input type="text" label="user_email" name="user_email" placeholder="email" value="" required/>
                            <input type="password" label="user_password" name="user_password" placeholder="contraseña" value="" required/>    
                            <div class="button-section">
                                <a class="btn" href="http://localhost/crud-app-php/">Cancel</a>
                                <a class="btn" href="http://localhost/crud-app-php/src/views/auth/register.php">Reset</a>
                                <button type="submit" label="submit_request" name="submit_request">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>