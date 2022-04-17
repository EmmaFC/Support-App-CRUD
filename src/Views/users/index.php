<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/UserController.php";

    $users = $user_controller->index();

?>

<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <header id="header">
            <div id="header-container">
                <div id="logo_container">
                    <a href="http://localhost/crud-app-php">
                        <h1>Request Center</h1>
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
                <div class="container-buttons">
                    <a href="http://localhost/crud-app-php/src/views/dashboard.php"><h3>Volver al dashboard</h3></a>
                    <a class="btn" href="create.php">Crear Usuario</a>
                </div>
            </section>
            <section>
                
                
                <?php if (!empty($users)){ foreach($users as $user) { ?>
                    
                    <div class="user-card">
                        <div class="user-card-title">
                            <h3 class="mb-sm">Nombre : <?php echo $user["user_name"] ?></h3>
                            <p class="mb-sm">Email : <?php echo $user["user_email"] ?></p>
                        </div>
                        <div class="user-card-buttons">
                            <a href="show.php?id=<?php echo $user["user_id"]?>">Ver usuario</a>
                        </div>
                    </div>
                    <?php  }} else { echo 'Actualmente no existe ningún usario';}  ?>
                    
                </section>
                

        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>