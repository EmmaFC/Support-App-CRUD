<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";
    
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    
    if (isset($_POST["delete"])) 
    {
        $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
        $id = mysqli_real_escape_string($conn, $_POST["request_id"]);
        
        /*       
        $name = mysqli_real_escape_string($conn, $_POST["request_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["request_email"]);
        $password = mysqli_real_escape_string($conn, $_POST["request_password"]); */
        
        $request = $request_controller->delete($id);
        $root = $db_connection->redirect();
        header("Location: " . $root ."/src/views/requests/index.php?id=". $id);

    }
    
    $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';
    $request = $request_controller->show($id);

?>


<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <?php require "../components/header.php"; ?>
        <main>
            <section>
                <div class="container">
                    <h1><?php echo $request["request_title"] ?></h1>
                    <p>Tema : <?php echo $request["request_topic"] ?></p>
                    <p><?php echo $request["request_description"]?>...</p>
                    <p>Creado por : <?php echo $request["request_author"] ?> el <?php echo $request["created_at"] ?></p>
                </div>
                <a href="update.php?id=<?php echo $request["request_id"] ?>">Editar Request</a>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
                    <input type="hidden" name="delete" value="<?php echo $request["request_id"] ?>">
                    <input type="submit" name="delete" value="Eliminar">
                </form>
                <a href="index.php">Volver</a>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>




