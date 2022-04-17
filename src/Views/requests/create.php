<?php
 
    require "../../../app/config/db.php";
    require "../../../app/Controllers/RequestController.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db_connection->getConnection();
        $title = $_POST['request_title'];
        $author = $_POST['request_author'];
        $topic = $_POST['request_topic'];
        $description = $_POST['request_description'];

        $new_request = $request_controller->store($title, $author, $topic, $description);
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
                    <input type="text" label="request_title" name="request_title" placeholder="title" value="" required/>
                    <input type="text" label="request_topic" name="request_topic" placeholder="topic" value="" required/>
                    <input type="text" label="request_author" name="request_author" placeholder="name" value="" required/>
                    <input type="textarea" label="request_description" name="request_description" placeholder="description" value="" required/>
                    <button type="submit" label="submit_request" name="submit_request">Submit</button>
                    <button type="submit" label="cancel_request" name="cancel_request">Cancel</button>
                    <button type="submit" label="reset_request" name="reset_request">Reset</button>
                </form>
            </section>
        </main>
        <?php require "../components/footer.php"; ?>
    </body>
</html>