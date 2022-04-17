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
           
                $root = $db_connection->redirect();
                header("Location: " .$root."/src/views/games/show.php?id=". 2);
        }


       else{ echo "Could not save the new game"; }
       
        // Header("Location: " }. $root . "/app/Controllers/UserController.php?");

        
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
                        <h1 class="dark-text">New Game</h1>
                    </a>
                </div>
            </div>    
        </header>            
            <main>
                <section>
                    <div class="img-container">
                        <div class="card">
                            <div class="button-section-v">
                                <div class="card-title">
                                    <h1 class="mb-sm">Let's Play!</h1>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                                        <input class="input" type="text" label="game_player" name="game_player" placeholder="Player Name" value="" required/>      
                                        <label class="input" for="game_player_move" name="game_player_move">Choose Your Next Moove</label>
                                        <select  class="input" name="game_player_move" id="game_player_move" placeholder="Choose Your Next Moove">
                                            <option class="input" name="game_player_move" placeholder="Paper" value="Paper" required>Paper</option>
                                            <option class="input" name="game_player_move" placeholder="Rock" value="Rock" required>Rock</option>
                                            <option class="input" name="game_player_move" placeholder="Scissors" value="Scissors" required>Scissors</option>
                                        </select>
                                        <div class="button-section">
                                            <button type="submit" label="submit" name="submit"><a href="index.php">Cancel</a></button>
                                            <button type="submit" label="submit" name="submit"><a>Submit</a></button>          
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </body>
        <?php require "components/footer.php"; ?>
</html>
