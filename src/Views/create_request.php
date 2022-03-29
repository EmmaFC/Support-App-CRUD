<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/sass/app.css">
    <title>Base MVC with PHP</title>
</head>
<body>
    <main>
        <section>

            <form action="" method="POST">
                    
                <input type="text" label="request_title" name="request_title" placeholder="title" value="" required/>
                <input type="text" label="request_topic" name="request_topic" placeholder="topic" value="" required/>
                <input type="text" label="request_user_name" name="request_user_name" placeholder="name" value="" required/>
                <input type="textarea" label="request_description" name="request_description" placeholder="description title" value="" required/>
                <button type="submit" label="submit_request" name="submit_request">Submit</button>

                <button type="submit" label="cancel_request" name="cancel_request">Cancel</button>
                <button type="submit" label="reset_request" name="reset_request">Reset</button>

            </form>

        </section>
    </main>
</body>
</html>