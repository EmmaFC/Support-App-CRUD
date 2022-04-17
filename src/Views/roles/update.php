<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RoleController.php";
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    if (isset($_POST["submit"])) {
    
        $id = mysqli_real_escape_string($conn, $_POST["role_id"]);
        $name = mysqli_real_escape_string($conn, $_POST["role_name"]);

            $role = $role_controller->update($id, $name);
            $root = $db_connection->redirect();
            header("Location: " . $root ."/src/views/roles/show.php?id=". $id);
        }
        
        $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';
        $role = $role_controller->show($id);
    
?>


<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
        <?php require "../components/header.php"; ?>
        <main>
            <section>
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                    <input type="text" label="role_name" name="role_name" placeholder="role_name" value="<?php echo $role["role_name"] ?>" required/>
                    <input type="hidden" name="role_id" value="<?php echo $role["role_id"] ?>" required/>
                    <button type="submit" label="submit_role" name="submit_role">Submit</button>
                    <button type="submit" label="cancel_role" name="cancel_role">Cancel</button>
                    <button type="submit" label="reset_role" name="reset_role">Reset</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>
