<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";

    $request = $request_controller->index();
    
?>

<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <?php require "../components/header.php"; ?>
        <main>
            <section>
                <a href="create.php?>">Crear Request</a>
                <?php foreach($requests as $request): ?>
                    <div class="user-card">
                        <h3><?php echo $request["request_title"] ?></h3>
                        <p>Tema : <?php echo $request["request_topic"] ?></p>
                        <p>Creado por : <?php echo $request["request_author"] ?> el <?php echo $request["created_at"] ?></p>
                        <p><?php echo substr ($request["request_description"], 0, 25)?>...</p>
                        <a href="show.php?id= <?php echo $request["request_id"] ?>">Leer más</a>
                    </div>
                <?php endforeach; ?>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>