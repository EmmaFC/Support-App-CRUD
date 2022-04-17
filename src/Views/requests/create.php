<?php
 
    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db_connection->getConnection();
        $title = $_POST['request_title'];
        $author = $_POST['request_author'];
        $topic = $_POST['request_topic'];
        $description = $_POST['request_description'];

        $new_request = $request_controller->store($title, $author, $topic, $description);
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
                <a href="http://localhost/crud-app-php">
                        <h3>Request Center</h3>
                    </a>
                </div>
                <nav id="nav_menu">
                    <a class="btn" href="../../src/Views/user/show.php?id= <?php /* echo $user["id"] */ ?>">Mi Perfil</a>
                    <a class="btn" href="http://localhost/crud-app-php">Logout</a>
                </nav>
            </div>    
        </header>        
        <main>
            <section>
                <div class="card">
                    <div class="card-title">
                        <h1 class="mb-sm">Crear solicitud</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                            <input type="text" label="request_title" name="request_title" placeholder="Título de solicitud" value="" required/>
                            <input type="text" label="request_topic" name="request_topic" placeholder="Tema" value="" required/>
                            <input type="text" label="request_author" name="request_author" placeholder="Autor" value="" required/>
                            <input type="textarea" label="request_description" name="request_description" placeholder="Descripción" value="" required/>           
                            <div class="button-section">
                                <a class="btn" href="index.php">Cancelar</a>
                                <a class="btn" href="http://localhost/crud-app-php/src/views/requests/create.php">Reset</a>
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