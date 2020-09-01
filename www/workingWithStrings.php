<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $phrase = "Liar Liar Pants on Fire!";
    echo "I'mma String...That's printed with an Echo <br>";
    echo $phrase . "<br>";
    echo strtolower($phrase ." "."Now lower case with \"strtolower functions\"<br>");
    echo (strlen($phrase));
    echo " " . "Is the quantity found in the string above";
    echo("<h6><a href=\"site.php\">Back to Home</a></h6>");
    ?>
</body>
</html>