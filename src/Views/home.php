<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/css/app.css">
        <title>Base MVC with PHP</title>
    </head>    
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
                <h1>Home</h1>
            </section>
            <section>
                <div class="button-section-v ">
                    <a class="btn" href="http://localhost/crud-app-php/src/views/requests/index.php">Ver todas las solicitudes</a>
                    <a class="btn" href="update.php?id=<?php echo $user["id"] ?>">Mis solicitudes</a>
                </div>
            </section>
        </main>
    </body>
    <?php require "components/footer.php"; ?>
</html>
