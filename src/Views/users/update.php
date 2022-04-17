<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/UserController.php";
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    if (isset($_POST["submit"])) {
    
        $id = mysqli_real_escape_string($conn, $_POST["user_id"]);
        $name = mysqli_real_escape_string($conn, $_POST["user_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["user_email"]);
        $password = mysqli_real_escape_string($conn, $_POST["user_password"]);

            $user = $user_controller->update($id, $name, $email, $password);
            $root = $db_connection->redirect();
            header("Location: " . $root ."/src/views/users/show.php?id=". $id);
            
        }
        
        $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';
        $user = $user_controller->show($id);
    

?>

<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <?php /* require "../components/header.php";  */?>
        <main>
            <section>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <input type="text" label="user_name" name="user_name" placeholder="user_name" value="<?php echo $user["user_name"] ?>" required/>
                    <input type="text" label="user_email" name="user_email" placeholder="user_email" value="<?php echo $user["user_email"] ?>" required/>
                    <input type="password" label="user_password" name="user_password" placeholder="user_password" value="<?php echo $user["user_password"] ?>" required/>
                    <input type="hidden" name="user_id" value="<?php echo $user["user_id"] ?>" required/>
                    <button type="submit" label="submit" name="submit">Submit</button>
                    <button type="submit" label="cancel_user" name="cancel_user">Cancel</button>
                    <button type="submit" label="reset_user" name="reset_user">Reset</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>
