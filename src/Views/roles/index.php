<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RoleController.php";

    $roles = $role_controller->index();

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
                <div class="container-buttons">
                    <a href="http://localhost/crud-app-php/src/views/dashboard.php"><h3>Volver al dashboard</h3></a>
                    <a class="btn" href="create.php?>">Crear Rol</a>
                </div>
            </section>
            <section>
                <?php if (!empty($roles)){ foreach($roles as $role) { ?>
                    <div class="user-card">
                        <div class="user-card-title">
                            <div class="user-card">
                                <h3>Rol : <?php echo $role["role_name"] ?></h3>
                                <a href="show.php?id= <?php echo $role["role_id"] ?>"> Ver rol</a>
                            </div>
                        </div>
                    </div>
                <?php  }} else { echo 'Actualmente no existe ningún rol';}?>
            </section>
            
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>