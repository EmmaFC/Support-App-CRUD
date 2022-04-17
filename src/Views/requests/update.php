<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    if (isset($_POST["submit"])) {
    
        $id = mysqli_real_escape_string($conn, $_POST["request_id"]);
        $name = mysqli_real_escape_string($conn, $_POST["request_name"]);


            $request = $request_controller->update($id, $name);
            $root = $db_connection->redirect();
            header("Location: " . $root ."/src/views/requests/show.php?id=". $id);
            
        }
        
        $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';
        $request = $request_controller->show($id);
    

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
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <input type="text" label="request_title" name="request_title" placeholder="Título de solicitud"  value="<?php echo $request["request_title"] ?>" required/>
                    <input type="text" label="request_topic" name="request_topic" placeholder="Tema" value="<?php echo $request["request_topic"] ?>" required/>
                    <input type="text" label="request_author" name="request_author" placeholder="Autor" value="<?php echo $request["request_author"] ?>" required/>
                    <input type="textarea" label="request_description" name="request_description" placeholder="Descripción" value="<?php echo $request["request_description"] ?>" required/>
                    <input type="hidden" name="update_id" value="<?php echo $request["request_description"] ?>" required/>

                    <a class="btn" href="index.php">Cancelar</a>
                    <a class="btn" href="http://localhost/crud-app-php/src/views/requests/update.php">Reset</a>
                    <button type="submit" label="submit_request" name="submit_request">Submit</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>
