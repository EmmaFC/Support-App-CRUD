<!DOCTYPE html>
<html lang="en">

    <?php require "components/head.php"; ?>
    <body>
        <?php require "../components/header.php"; ?>
            <main>
                <section>
                    <h1>Home</h1>
                </section>
                <section>
                    <a class="btn" href="update.php?id=<?php echo $user["id"] ?>">Mis solicitudes</a>
                    <a class="btn" href="http://localhost/support-app-crud/src/Views/user/update.php">Editar perfil</a>
                </section>
            </main>
        </body>
        <?php require "../components/footer.php"; ?>
</html>
