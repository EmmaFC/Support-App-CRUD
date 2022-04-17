<?php
 
    require "../../../app/config/db.php";
    require "../../../app/Controllers/RoleController.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db_connection->getConnection();
        $name = $_POST['role_name'];

        // echo empty($name) ? $name : 'name is empty';
        // echo empty($email) ? $name : 'email is empty';
        // echo empty($password) ? $name : 'password is empty';

        $new_role = $role_controller->store($name);
        // Header("Location: " . $root . "/app/Controllers/UserController.php?");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <?php require "../components/header.php"; ?>
        <main>
            <section>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <input type="text" label="role_name" name="role_name" placeholder="role_name" value="" required/>
                    <button type="submit" label="submit_request" name="submit_request">Submit</button>
                    <button type="submit" label="cancel_request" name="cancel_request">Cancel</button>
                    <button type="submit" label="reset_request" name="reset_request">Reset</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>