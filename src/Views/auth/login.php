<?php

require "../../../app/config/db.php";
require "../../../app/Controllers/UserController.php";

$conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");

    $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';


    if (isset($_POST["submit"])) {
        $db_connection->getConnection();
        $email = mysqli_real_escape_string($conn, $_POST["user_email"]);
        $password = mysqli_real_escape_string($conn, $_POST["user_password"]);

        $new_user = $user_controller->verify($email, $password);
        $root = $db_connection->redirect();
        $user = isset($verified_user) ? header("Location: " . $root ."/src/views/home.php") : header("Location: " . $root ."/src/views/auth/register.php");
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
                                <a class="btn" href="http://localhost/crud-app-php">Cancel</a>
                                <a class="btn" href="http://localhost/crud-app-php/src/views/auth/login.php">Reset</a>
                                <button type="submit" label="submit" name="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>