<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="urlParameter.php" method="get">
        Name: <input type="text" name="name" id="Name"><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <br>
<!-- Get values from input, and have them placed in the URL ex input=value 
stored data made publicly availible
-->
        <?php
        echo $_GET["name"];
        ?>
</body>
</html>