<?php
    
    if(!isset($_SESSION)){
        session_start();
    }

    include_once("connection.php");
    connection();

    

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="user">
        <form action="" method="post">
            <h3>Create user</h3>
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="submit" name="password" value="create" required>
            <link rel="stylesheet" href="style.css">
        </form>
        </div>
    </body>
    </html>