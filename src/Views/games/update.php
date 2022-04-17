<?php
 
    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $db_connection->getConnection();
        $game_id = $_POST['game_id'];
        $game_player = $_POST['game_player'];
        $game_score = $_POST['game_score'];
        $game_result = $_POST['game_result'];

        $new_request = $request_controller->store($game_id, $game_player, $game_score, $game_result, $game_score);
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
                <div class="card">
                    <div class="card-title">
                        <h1 class="mb-sm">Game Results</h1>
                    </div>  
                </div>
            </section>
            <section>
                <div class="card">
                    <div class="card-title">
                        <h1>Your move : <?php echo $player_1_move["game_player_move"] ?></h1>
                        <h1>Bot's move : <?php echo $player_2_move["game_bot_move"] ?></h1>
                    </div>  
                </div>
            </section>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <input type="hidden" name="game_name" value="<?php echo "Game_" . $game["game_id"] ?>" required/>
                    <input type="hidden" name="game_score" value="<?php echo $game["game_score"] ?>" required/>
                    <input type="hidden" name="game_result" value="<?php echo $game["game_result"] ?>" required/>
                    <div class="button-section">
                        <a class="btn" href="index.php">Cancelar</a>
                        
                        <a class="btn" href="http://localhost/game-app-php/src/views/requests/create.php">Reset</a>
                        <input class="btn" type="submit" name="submit" value="OK">
                    </div>
                </form>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>