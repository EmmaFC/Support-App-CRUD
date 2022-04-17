<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RoleController.php";

    $roles = $role_controller->index();

?>

<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <?php require "../components/header.php"; ?>
        <main>
            <section>
                <a href="create.php?>">Crear Rol</a>
                <?php foreach($roles as $role): ?>
                    <div class="user-card">
                        <h3><?php echo $role["role_name"] ?></h3>
                    </div>
                <?php endforeach; ?>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>