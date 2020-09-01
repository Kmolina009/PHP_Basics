<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="postvsget.php" method="post">
        Name: <input type="text" name="name" id="Name"><br>
        Password: <input type="password" name="password" id="password">
        <input type="submit" value="Submit">
    </form>
    <br>
    <br>
<!-- Get values from input, and have them placed in the URL ex input=value 
stored data made publicly availible, mostly will use POST for security reasons
-->
        <?php
        echo $_GET["name"];
        echo $_POST["password"];
        ?>
</body>
</html>