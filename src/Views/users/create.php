<?php
 
    require "../../../app/config/db.php";
    require "../../../app/Controllers/UserController.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db_connection->getConnection();
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        // echo empty($name) ? $name : 'name is empty';
        // echo empty($email) ? $name : 'email is empty';
        // echo empty($password) ? $name : 'password is empty';

        $new_user = $user_controller->store($name, $email, $password);
        // Header("Location: " . $root . "/app/Controllers/UserController.php?");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
       
        
        <main>
            <section>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <input type="text" label="user_name" name="user_name" placeholder="title" value="" required/>
                    <input type="text" label="user_email" name="user_email" placeholder="user_email" value="" required/>
                    <input type="password" label="user_password" name="user_password" placeholder="name" value="" required/>
                    <button type="submit" label="submit_request" name="submit_request">Submit</button>
                    <button type="submit" label="cancel_request" name="cancel_request">Cancel</button>
                    <button type="submit" label="reset_request" name="reset_request">Reset</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>