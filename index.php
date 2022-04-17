<?php
    require_once('connect.php');
    if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <form  method="POST">
              
                <label for="username" control-label>Name</label>
                <input type="text" label="username" name="username" placeholder="name" value="" required/>
             
                <label for="user_email" control-label>Email</label>
                <input type="text" label="user_email" name="user_email" placeholder="email" value="" required/>
              
                <label for="user_password" control-label>Password</label>
                <input type="password" label="user_password" name="user_password" placeholder="password" value="" required/>

                <button type="submit" label="submit_request" name="submit_request">Submit</button>
                <button type="submit" label="cancel_request" name="cancel_request">Cancel</button>
                <button type="submit" label="reset_request" name="reset_request">Reset</button>
         
            </form>
        </section>
    </main>
</body>
</html>