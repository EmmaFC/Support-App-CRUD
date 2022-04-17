<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RoleController.php";
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    if (isset($_POST["submit"])) {
    
        $id = mysqli_real_escape_string($conn, $_POST["role_id"]);
        $name = mysqli_real_escape_string($conn, $_POST["role_name"]);

            $role = $role_controller->update($id, $name);
            $root = $db_connection->redirect();
            header("Location: " . $root ."/src/views/roles/show.php?id=". $id);
        }
        
        $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';
        $role = $role_controller->show($id);
    
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
                <nav id="nav_menu">
                    <a class="btn" href="../../src/Views/user/show.php?id= <?php /* echo $user["id"] */ ?>">Mi Perfil</a>
                    <a class="btn" href="http://localhost/crud-app-php">Logout</a>
                </nav>
            </div>    
        </header>        <main>
            <section>
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                    <input type="text" label="role_name" name="role_name" placeholder="Nombre de rol" value="<?php echo $role["role_name"] ?>" required/>
                    <input type="hidden" name="role_id" value="<?php echo $role["role_id"] ?>" required/>

                    <a class="btn" href="index.php">Cancelar</a>
                    <a class="btn" href="http://localhost/crud-app-php/src/views/roles/update.php">Reset</a>
                    <button type="submit" label="submit_role" name="submit_role">Submit</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>
