<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- A demonstation in variables and template literals -->
    <?php
    $characterName = "John";  
    $characterAge = 70;
    echo "There once was a man named $characterName <br>";
    echo "He was $characterAge years old <br>";
    $characterName = "Mike";//Var reassign via call stack...
    echo "He really likeed the name $characterName <br>";
    echo "But didn't like being $characterAge <br>";
    echo("<h6><a href=\"site.php\">Back to Home</a></h6>");
    ?>
</body>
</html>