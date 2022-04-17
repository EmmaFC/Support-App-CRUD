<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RoleController.php";
    
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    
    if (isset($_POST["delete"])) 
    {
        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $id = mysqli_real_escape_string($conn, $_POST["role_id"]);
        
        $role = $role_controller->delete($id);
        $root = $db_connection->redirect();
        header("Location: " . $root ."/src/views/roles/index.php?id=". $id);

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
                    <a class="btn" href="http://localhost/crud-app-php">Logout</a>
                </nav>
            </div>    
        </header>        
        <main>
            <section>
                <div class="container">
                    <div class="button-section-v">
                        <h1><?php echo $role["role_name"] ?></h1>   
                    </div>
                </div>
                <div class="container-buttons">
                    <a class="btn" href="update.php?id=<?php echo $role["role_id"] ?>">Editar Rol</a>
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
                        <input type="hidden" name="delete" value="<?php echo $role["role_id"]?>">
                        <input class="btn" type="submit" name="delete" value="Eliminar">
                    </form>
                    <a class="btn" href="index.php">Volver</a>
                </div>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>




