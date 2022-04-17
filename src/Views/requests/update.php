<?php

    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";
    $conn = mysqli_connect("localhost", "root", "", "support-crud-app") or die("Connection failed");
    
    if (isset($_POST["submit"])) {
    
        $id = mysqli_real_escape_string($conn, $_POST["request_id"]);
        $name = mysqli_real_escape_string($conn, $_POST["request_name"]);


            $request = $request_controller->update($id, $name);
            $root = $db_connection->redirect();
            header("Location: " . $root ."/src/views/requests/show.php?id=". $id);
            
        }
        
        $id = isset($_GET['id']) ? $_GET['id'] : 'error getting id';
        $request = $request_controller->show($id);
    

?>

<!DOCTYPE html>
<html lang="en">
    <?php require "../components/head.php"; ?>
    <body>
    <?php require "../components/header.php"; ?>
        <main>
            <section>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <input type="text" label="request_title" name="request_title" placeholder="title" value="<?php echo $request["request_title"] ?>" required/>
                    <input type="text" label="request_topic" name="request_topic" placeholder="topic" value="<?php echo $request["request_topic"] ?>" required/>
                    <input type="text" label="request_author" name="request_author" placeholder="name" value="<?php echo $request["request_author"] ?>" required/>
                    <input type="textarea" label="request_description" name="request_description" placeholder="description" value="<?php echo $request["request_description"] ?>" required/>
                    <input type="hidden" name="update_id" value="<?php echo $request["request_description"] ?>" required/>
                    <button type="submit" label="submit_request" name="submit_request">Submit</button>
                    <button type="submit" label="cancel_request" name="cancel_request">Cancel</button>
                    <button type="submit" label="reset_request" name="reset_request">Reset</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>
