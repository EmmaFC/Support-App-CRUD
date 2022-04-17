<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/UserController.php";

    $users = $user_controller->index();
    
?>

<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <?php /* require "../components/header.php"; */ ?>
        <main>
            <section>
                <a href="create.php">Crear Usuario</a>
                <?php foreach($users as $user): ?>
                  
                    <div class="user-card">
                        <h3>Nombre : <?php echo $user["user_name"] ?></h3>
                        <p>Email : <?php echo $user["user_email"] ?></p>
                        <a href="show.php?id=<?php echo $user["user_id"]?>">Ver usuario</a>
                    </div>
                    
                <?php endforeach; ?>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>