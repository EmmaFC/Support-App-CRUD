<?php
 
    require "../../../app/config/db.php";
    require "../../../app/Controllers/GameController.php";
    // require "../../../app/Controllers/PlayerController.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $db_connection->getConnection();

        $game_player = $_POST['game_player'];
        $game_player_move = $_POST['game_player_move'];

        $new_player = $game_controller->savePlayer($game_player, $game_player_move);
        if (isset($new_player)) {
            $new_game = $game_controller->create($new_player);
        }
       else{ alert("Could not"); }
        // Header("Location: " }. $root . "/app/Controllers/UserController.php?");

        // $root = $db_connection->redirect();
        // header("Location: " . $root ."/src/views/games/show.php?id=". $id);
        
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../styles/css/app.css">
        <title>Base MVC with PHP</title>
    </head>    
    <body>
    <header id="header">
            <div id="header-container">
                <div id="logo_container">
                    <a href="http://localhost/game-app-php">
                        <h3>Game</h3>
                    </a>
                </div>
                <nav id="nav_menu">
                    <a class="btn" href="http://localhost/game-app-php">Volver</a>
                </nav>
            </div>    
        </header>            
            <main>
                <section>
                    <div class="card">
                        <div class="card-title">
                            <h1 class="mb-sm">Choose Your Next Moove</h1>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                                <input type="text" label="game_player" name="game_player" placeholder="Player Name" value="" required/>      

                                <select name="game_player_move" id="game_player_move">
                                    <option name="game_player_move" placeholder="Paper" value="Paper" required>Paper</option>
                                    <option name="game_player_move" placeholder="Rock" value="Rock" required>Rock</option>
                                    <option name="game_player_move" placeholder="Scissors" value="Scissors" required>Scissors</option>
                                </select>
                                <div class="button-section">
                                    <a class="btn" href="index.php">Cancel</a>
                                    <button type="submit" label="submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </main>
        </body>
        <?php require "components/footer.php"; ?>
</html>
