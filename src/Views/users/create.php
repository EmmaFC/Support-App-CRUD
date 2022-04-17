<?php
 
    require "../../../app/config/db.php";
    require "../../../app/Controllers/UserController.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db_connection->getConnection();
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        // echo empty($name) ? $name : 'name is empty';
        // echo empty($email) ? $name : 'email is empty';
        // echo empty($password) ? $name : 'password is empty';

        $new_user = $user_controller->store($name, $email, $password);
        // Header("Location: " . $root . "/app/Controllers/UserController.php?");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
       
    <header id="header">
            <div id="header-container">
                <div id="logo_container">
                <a href="http://localhost/game-app-php">
                        <h3>Request Center</h3>
                    </a>
                </div>
                <nav id="nav_menu">
                    <a class="btn" href="../../src/Views/user/show.php?id= <?php /* echo $user["id"] */ ?>">Mi Perfil</a>
                    <a class="btn" href="http://localhost/game-app-php">Logout</a>
                </nav>
            </div>    
        </header>
        <main>
            <section>
                <div class="card">
                    <div class="card-title">
                        <h1 class="mb-sm">Crear usuario</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                            <input type="text" label="user_name" name="user_name" placeholder="Nombre" value="" required/>
                            <input type="text" label="user_email" name="user_email" placeholder="Email" value="" required/>
                            <input type="password" label="user_password" name="user_password" placeholder="Contraseña" value="" required/>
                            <div class="button-section">
                                <a class="btn" href="index.php">Cancelar</a>
                                <a class="btn" href="http://localhost/game-app-php/src/views/users/create.php">Reset</a>
                                <button type="submit" label="submit_request" name="submit_request">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>