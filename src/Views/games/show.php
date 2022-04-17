<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/GameController.php";
    
    $conn = mysqli_connect("localhost", "root", "", "game-app-php") or die("Connection failed");
    
    $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';
    $game = $game_controller->show($id);

?>


<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
    <header id="header">
            <div id="header-container">
                <div id="logo_container">
                <a href="http://localhost/game-app-php">
                        <h3>Game</h3>
                    </a>
                </div>
            </div>    
        </header>        
        <main>
            <section>
                <div class="img-container">
                    <div class="button-section-top less-width">
                        <a class="btn" href="http://localhost/game-app-php">Back</a>
                        <a class="btn" href="http://localhost/game-app-php">New Game</a>
                    </div>
                    <div id="game-container">
                        <div class="result-section-v">
                            <h1  class="container-result">Game : <?php echo $game["game_id"] ?></h1>
                            <div  class="container-result">
                                <p>Your Move : <?php echo $game["game_player_move"] ?></p>
                                <p>Bot's Move : <?php echo $game["game_bot_move"]?></p>
                            </div>
                            <div  class="container-result">
                                <h1><?php echo $game["game_result"]?></h1>
                                <p>Your Score : <?php echo $game["game_score"]?></p>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>




