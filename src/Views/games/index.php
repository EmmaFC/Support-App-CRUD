<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";

    $requests = $request_controller->index();
    
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
                <div class="container-buttons">
                    <a href="http://localhost/game-app-php/src/views/dashboard.php"><h3>Volver al dashboard</h3></a>
                    <a href="http://localhost/game-app-php/src/views/dashboard.php"><h3>Volver a home</h3></a>
                    <a class="btn" href="create.php?>">Crear Solicitud</a>
                </div>
            </section>
            <section>
               
                <?php if (!empty($requests)){ foreach($requests as $request) { ?>
                    <div class="user-card">
                        <div class="user-card-title">
                            <h3><?php echo $request["request_title"] ?></h3>
                            <p>Tema : <?php echo $request["request_topic"] ?></p>
                            <p><?php echo substr($request["request_description"], 0, 25)?>...</p>
                        </div>
                        <div class="request-card-buttons">
                            <p>Creado por : <?php echo $request["request_author"] ?> &nbsp &nbsp / &nbsp &nbsp <?php echo $request["created_at"] ?></p>
                            <a href="show.php?id= <?php echo $request["request_id"] ?>"> Leer más</a>
                        </div>
                    </div>
                <?php }} else { echo 'Actualmente no existe ninguna solicitud';} ?>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>