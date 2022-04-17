<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RoleController.php";
    
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    
    if (isset($_POST["delete"])) 
    {
        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $id = mysqli_real_escape_string($conn, $_POST["role_id"]);
        
        /*       
        $name = mysqli_real_escape_string($conn, $_POST["role_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["role_email"]);
        $password = mysqli_real_escape_string($conn, $_POST["role_password"]); */
        
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
        <?php require "../components/header.php"; ?>
        <main>
            <section>
                <div class="container">
                    <h1><?php echo $role["role_name"] ?></h1>
                </div>
                <a href="update.php?id=<?php echo $role["role_id"] ?>">Editar Rol</a>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
                    <input type="hidden" name="delete" value="<?php echo $role["role_id"]?>">
                    <input type="submit" name="delete" value="Eliminar">
                </form>
                <a href="index.php">Volver</a>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>




